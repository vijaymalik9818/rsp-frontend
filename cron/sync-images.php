<?php
require_once("vendor/autoload.php");

$config = new \PHRETS\Configuration;

$config->setLoginUrl('https://matrixrets.pillarnine.com/rets/login.ashx');

$config->setUsername('RKHEMKAPR');

$config->setPassword('_pY2.dxKxu');

error_reporting(E_ALL & ~E_NOTICE);

ini_set("display_errors", 1);

$conn = mysqli_connect("localhost", "realtorcawork_rep", "pKWe5xhuu95T", "realtorcawork_rep");

$sync_times = file_get_contents("/home/realtorcawork/public_html/cron/last-sync-time.json");

$rets = new \PHRETS\Session($config);

$connect = $rets->Login();

$sync_times = json_decode($sync_times, true);

$last_sync_time = $sync_times['PhotosChangeTimestamp'];

$offset = 0;

$limit = 500;

$timings =  array();

for(;;){
	
	$results = $rets->Search(
		 'Property','Property',
		 '(PhotosChangeTimestamp='.$last_sync_time.'+)',
		[
			'QueryType' => 'DMQL2',
			'Select' => 'ListingKeyNumeric,PhotosChangeTimestamp',
			'Limit' => $limit,
			'Offset' => $offset * $limit,
			'Format' => 'COMPACT-DECODED',
		]
	);
	
	if(!count($results)) break;

	foreach($results as $result){
		
		$array = $result->toArray();
		
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
		
		
		$timings[] = $array['PhotosChangeTimestamp'];
		
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
	
	$offset++;
}


if(!empty($timings)){

	rsort($timings);
	
	if(count($timings) > 0){
		
		$sync_times['PhotosChangeTimestamp'] = $timings[0];
		
		file_put_contents("/home/realtorcawork/public_html/cron/last-sync-time.json", json_encode($sync_times));
	
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

