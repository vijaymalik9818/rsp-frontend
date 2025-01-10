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

$offset = 0;

$limit = 400;

$data =  array();

for(;;){
	
	$results = $rets->Search(
		 'Property','Property','(ListingKeyNumeric=0+)',
		[
			'QueryType' => 'DMQL2',
			'Select' => 'ListingKeyNumeric',
			'Limit' => $limit,
			'Offset' => $offset * $limit,
			'Format' => 'COMPACT-DECODED',
		]
	);
	
	if(!count($results)) break;
	
	foreach($results as $result){
		
		$array = $result->toArray();
		
		$data[$array['ListingKeyNumeric']] = $array['ListingKeyNumeric'];
		
	}
	
	$offset++;
}

if(count($data) > 1000){

	$result = mysqli_query($conn, "select * from properties where listing_numeric_key not in ('" . implode("','", $data) . "')");

	while($row = mysqli_fetch_assoc($result)){
		
		$listing_numeric_key  = $row['listing_numeric_key'];
		
		$path = '/home/realtorcawork/public_html/public/properties/images/'. $listing_numeric_key;
		
		removeDir($path);
		
		mysqli_query($conn, "delete from properties where listing_numeric_key = '$listing_numeric_key'"); 
		mysqli_query($conn, "delete from property_room_details where property_numeric_key = '$listing_numeric_key'");
		
	}

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

	