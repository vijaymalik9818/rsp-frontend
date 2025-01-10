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

$conn = mysqli_connect("localhost", "realtorcawork_rep", "pKWe5xhuu95T", "realtorcawork_rep");

$property_result = mysqli_query($conn, "select listing_numeric_key from properties");

$listing_ids = array();

while($row = mysqli_fetch_assoc($property_result)){
	
	$listing_ids[] = $row['listing_numeric_key'];

}	

	$listing_key_chunks = array_chunk($listing_ids,50);
	
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
		
		//echo count($room_results);
		
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
			description = VALUES(`description`), `updated_at` = VALUES(`updated_at`)") or die(mysqli_error($conn));
		}
	
	}
	

