<?php
error_reporting(E_ALL);

ini_set("display_errors", 1);

require_once("vendor/autoload.php");

$config = new \PHRETS\Configuration;

$config->setLoginUrl('https://matrixrets.pillarnine.com/rets/login.ashx');

$config->setUsername('RKHEMKAPR');

$config->setPassword('_pY2.dxKxu');

$rets = new \PHRETS\Session($config);

$connect = $rets->Login();

function camelCaseToUnderscore($input) {
    $pattern = '/([a-z])([A-Z])/';
    $replacement = '$1_$2';
    $output = preg_replace($pattern, $replacement, $input);
	$output = strtolower($output);
	return $output;
}

$special_columns_mapping =  array(
	"ListingKeyNumeric" => "listing_numeric_key", 
	"AssociationFee2Frequency" => "association_fee2_frequency", 
	"SqFtOther" => "sqft_other", 
	"SqFtRetail" => "sqft_retail", 
	"SqFtWarehouse" => "sqft_warehouse", 
	"URLAdditionalImages" => "url_additional_images", 
	"VirtualTourURLBranded" => "virtual_tour_url_branded", 
	"VirtualTourURLUnbranded" => "virtual_tour_url_unbranded",
	"URLAlternateFeatureSheet" => "url_alternate_feature_sheet", 
	"Association2YN" => "association2_yn", 
	"DOMDate" => "dom_date",
	"DOMIncrementing" => "dom_incrementing",
	"IDXOptInYN" => "idx_opt_in_yn",
	"occupancycosts" => "occupancy_costs",
	"URLBrochure" => "url_brochure",
	"URLSoundByte" => "url_sound_byte",
	"URL3DImage" => "url_3d_image"
);


$conn = mysqli_connect("localhost", "realtorcawork_rep", "pKWe5xhuu95T", "realtorcawork_rep");

$sync_times = file_get_contents("/home/realtorcawork/public_html/cron/last-sync-time.json");

$sync_times = json_decode($sync_times, true);

$last_sync_time = $sync_times['ModificationTimestamp'];

$offset = 0;

$limit = 400;

$timings =  array();

for(;;){
	
	$results = $rets->Search(
		 'Property','Property',
		 '(ModificationTimestamp='.$last_sync_time.'+)',
		[
			'QueryType' => 'DMQL2',
			'Limit' => $limit,
			'Offset' => $offset * $limit,
			'Format' => 'COMPACT-DECODED',
		]
	);
	
	if(!count($results)) break;
	
	$listing_keys = array();
	
	foreach($results as $result){
			
		$array = $result->toArray();
		
		$listing_keys[] = $array['ListingKeyNumeric'];
		
		$property_exists = false;
		
		$property_result = mysqli_query($conn, "select * from properties where 
		listing_numeric_key = '" . $array['ListingKeyNumeric'] . "'");
		
		if(mysqli_num_rows($property_result)){
			$property_exists = true;
		}

	
		$array['created_at'] = date("Y-m-d H:i:s");
		
		$array['updated_at'] = date("Y-m-d H:i:s");
		
		$timings[] = $array['ModificationTimestamp'];
		
		$query = "insert into properties (";
		
		foreach($array as $column_name => $column_value){
			
			if(isset($special_columns_mapping[$column_name])){
				$column_name = $special_columns_mapping[$column_name];
			} else {
				$column_name = camelCaseToUnderscore($column_name);
			}
		
			
			$query .= "`" . strtolower($column_name) . "`, ";
		}
		
		$query = rtrim($query, ", ");
		
		$query .= ') VALUES(';
		
		foreach($array as $column_name => $column_value){
			if(isset($special_columns_mapping[$column_name])){
				$column_name = $special_columns_mapping[$column_name];
			} else {
				$column_name = camelCaseToUnderscore($column_name);
			}
			
			if($column_value){
			   $query .= "'" . mysqli_real_escape_string($conn, $column_value) . "', ";
			} else {
			   $query .= "NULL, ";
			}
		
		}
		
		$query = rtrim($query, ", ");
		
		$query .= ')';
		
		$query .= 'ON DUPLICATE KEY UPDATE ';
		
		foreach($array as $column_name => $column_value){
			
			if($column_name == 'created_at') continue;
			
			if(isset($special_columns_mapping[$column_name])){
				$column_name = $special_columns_mapping[$column_name];
			} else {
				$column_name = camelCaseToUnderscore($column_name);
			}
			
			
			$query .= " `" . strtolower($column_name). '` = VALUES(`'. strtolower($column_name) . '`), ';
		}
		
		$query = rtrim($query, ", ");
		
		mysqli_query($conn, $query) or die(mysqli_error($conn));
		
		//Sync Image Immidiately for New Property
		if(!$property_exists){
			
			$path = '/home/realtorcawork/public_html/public/properties/images/'. $array['ListingKeyNumeric'];
			
			if (file_exists($path.'/')){
				removeDir($path);
			}
			
			if (!file_exists($path.'/')){
				mkdir($path, 0755);
			}
			
			$thumbnails_path = '/home/realtorcawork/public_html/public/properties/images/'. $array['ListingKeyNumeric']. '/thumbnail';
	
			if (!file_exists($thumbnails_path.'/')){
				mkdir($thumbnails_path, 0755);
			}
			
			
			$objects = $rets->GetObject('Property', 'Photo', $array['ListingKeyNumeric'], '*', 0);

			foreach($objects as $object){
				
				if($object->getContentId() == 'null'){
					continue;
				}
				
				$image_name = $object->getObjectId() . '-' . $object->getContentId() . '.jpeg';
				
				file_put_contents($thumbnails_path .'/' . $image_name, $object->getContent());
			}
			
			$objects = $rets->GetObject('Property', 'LargePhoto', $array['ListingKeyNumeric'], '*', 0);

			foreach($objects as $object){
				
				if($object->getContentId() == 'null'){
					continue;
				}
				
				$image_name = $object->getObjectId() . '-' . $object->getContentId() . '.jpeg';
				
				file_put_contents($path .'/' . $image_name, $object->getContent());
			
			}
		}
	}
	
	
	$listing_key_chunks = array_chunk($listing_keys,50);
	
	foreach($listing_key_chunks as $listing_keys){
	
		$listing_keys = implode(",", $listing_keys);
		
		$room_results = $rets->Search(
			 'PropertyRooms','PropertyRooms',
			 '(ListingKeyNumeric='.$listing_keys.')',
			[
				'QueryType' => 'DMQL2',
				'Format' => 'COMPACT-DECODED',
			]
		);
		
		$room_details = array();
		
		foreach($room_results as $room_result){
			
			$array = $room_result->toArray();
			
			$room_details[$array['ListingKeyNumeric']][] = $array;
		
		}
		
		foreach($room_details as $listing_key => $room_detail){
			
			$room_detail = json_encode($room_detail);
			
			$created_at = date("Y-m-d H:i:s");
			
			$updated_at = date("Y-m-d H:i:s");
			
			mysqli_query($conn, "insert into property_room_details(property_numeric_key, description, created_at, updated_at) values('$listing_key', 
			'$room_detail', '$created_at', '$updated_at') ON DUPLICATE KEY UPDATE `property_numeric_key` = VALUES(`property_numeric_key`), 
			description = VALUES(`description`), `updated_at` = VALUES(`updated_at`)");
		}
	
	}
	
	
	// Sync Rooms
	
	$offset++;
	
}




if(!empty($timings)){

	rsort($timings);
	
	if(count($timings) > 0){
		
		$sync_times['ModificationTimestamp'] = $timings[0];
		
		file_put_contents("/home/realtorcawork/public_html/cron/last-sync-time.json", json_encode($sync_times));
	
	}
}

//mysqli_query($conn, "delete  FROM `featured_properties`");

$result = mysqli_query($conn, "SELECT * FROM `properties` WHERE list_office_mls_id = 'C186400'");

while($row = mysqli_fetch_assoc($result)){
	mysqli_query($conn, "update properties set is_featured = 1 where id = '" . $row['id']. "'");
}


//mysqli_query($conn, "delete  FROM `diamond_properties`");

$result = mysqli_query($conn, "SELECT * FROM `properties` WHERE (
	(list_price > 1000000 and property_type = 'Residential' and property_sub_type = 'Detached') or 
	(list_price > 70000 and property_type = 'Residential' and property_sub_type = 'Apartment') 
) and  list_office_mls_id = 'C186400'");

while($row = mysqli_fetch_assoc($result)){
	mysqli_query($conn, "update properties set is_diamond = 1 where id = '" . $row['id']. "'");
}

function removeDir(string $dir){
    $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($it,
                 RecursiveIteratorIterator::CHILD_FIRST);
    foreach($files as $file) {
        if ($file->isDir()){
            rmdir($file->getPathname());
        } else {
            unlink($file->getPathname());
        }
    }
    rmdir($dir);
}
