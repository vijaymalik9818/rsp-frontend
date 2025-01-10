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

error_reporting(E_ALL);

ini_set("display_errors", 1);

$conn = mysqli_connect("localhost", "realtorcawork_rep", "pKWe5xhuu95T", "realtorcawork_rep");


$columns_mapping = array();
$columns_mapping['ModificationTimestamp'] = 'modification_time_stamp';
$columns_mapping['OfficeKeyNumeric'] = 'office_key_numeric';
$columns_mapping['OfficeAddress1'] = 'office_address1';
$columns_mapping['OfficeAOR'] = 'office_aor';
$columns_mapping['OfficeCity'] = 'office_city';
$columns_mapping['OfficeEmail'] = 'office_email';
$columns_mapping['OfficeFax'] = 'office_fax';
$columns_mapping['OfficeMlsId'] = 'office_mlsid';
$columns_mapping['OfficeName'] = 'office_name';
$columns_mapping['OfficePhone'] = 'office_phone';
$columns_mapping['OfficePostalCode'] = 'office_postal_code';
$columns_mapping['OfficeStateOrProvince'] = 'office_state_or_province';
$columns_mapping['OfficeStatus'] = 'office_status';
$columns_mapping['OfficeCountyOrParish'] = 'office_county_or_parish';
$columns_mapping['OfficeType'] = 'office_type';
$columns_mapping['SocialMediaWebsiteUrlOrId'] = 'social_media_website_url_or_id';
$columns_mapping['OfficeLongName'] = 'office_long_name';
$columns_mapping['OfficeMailAddress'] = 'office_mail_address';
$columns_mapping['OfficeMailCity'] = 'office_mail_city';
$columns_mapping['OfficeMailPostalCode'] = 'office_mail_postal_code';
$columns_mapping['OfficePhotosChangeTimestamp'] = 'office_photos_change_timestamp';
$columns_mapping['OfficePhotosCount'] = 'office_photo_count';
$columns_mapping['TollFree'] = 'toll_free';
$columns_mapping['WebFacebook'] = 'web_facebook';
$columns_mapping['WebTwitter'] = 'web_twitter';
$columns_mapping['created_at'] = 'created_at';
$columns_mapping['updated_at'] = 'updated_at';
$limit = 300;

$offset = 0;

for(;;){
	
	$results = $rets->Search(
		'Office',
		'Office',
		'(OfficeKeyNumeric=0+)',
		[
			'QueryType' => 'DMQL2',
			'Limit' => $limit,
			'Offset' => $offset * $limit,
			'Format' => 'COMPACT-DECODED',
		]
    );
	
	
	if(!count($results)) break;
	
	foreach($results as $result){
    
		$array = $result->toArray();
		
		$array['created_at'] = date("Y-m-d H:i:s");
		
		$array['updated_at'] = date("Y-m-d H:i:s");
	
		$query = "insert into realtor_offices (";
		
		foreach($array as $column_name => $column_value){
			$query .= "`" . $columns_mapping[$column_name] . "`, ";
		}
		
		$query = rtrim($query, ", ");
		
		$query .= ') VALUES(';
		
		foreach($array as $column_name => $column_value){
		   $query .= "'" . (mysqli_real_escape_string($conn, $column_value)? mysqli_real_escape_string($conn, $column_value):NULL) . "', ";
		}
		$query = rtrim($query, ", ");
		$query .= ')';
		
		$query .= 'ON DUPLICATE KEY UPDATE ';
		
		foreach($array as $column_name => $column_value){
			
			if($column_name == 'created_at') continue;
			
			$query .= " " . $columns_mapping[$column_name]. ' = VALUES('. $columns_mapping[$column_name] . '), ';
		}
		
		$query = rtrim($query, ", ");
		
		mysqli_query($conn, $query);
    
	}
	
	$offset++;
    
}

