<?php
require_once("vendor/autoload.php");

$config = new \PHRETS\Configuration;

$config->setLoginUrl('https://matrixrets.pillarnine.com/rets/login.ashx');

$config->setUsername('RKHEMKAPR');

$config->setPassword('_pY2.dxKxu');

error_reporting(E_ALL & ~E_NOTICE);

ini_set("display_errors", 1);

$conn = mysqli_connect("localhost", "realtorcawork_rep", "pKWe5xhuu95T", "realtorcawork_rep");

$rets = new \PHRETS\Session($config);

$connect = $rets->Login();

$result = mysqli_query($conn, "select listing_numeric_key from properties order by id asc limit 10000, 6000");

while($row = mysqli_fetch_assoc($result)){
	
	$listing_numeric_key  = $row['listing_numeric_key'];

	$path = '/home/realtorcawork/public_html/public/properties/images/'. $listing_numeric_key;
	
	if (file_exists($path.'/')){
		removeDir($path);
	}
	
	if (!file_exists($path.'/')){
		mkdir($path, 0755);
	}
	
	$thumbnails_path = '/home/realtorcawork/public_html/public/properties/images/'. $listing_numeric_key. '/thumbnail';
	
	if (!file_exists($thumbnails_path.'/')){
		mkdir($thumbnails_path, 0755);
	}
	
	$objects = $rets->GetObject('Property', 'Photo', $listing_numeric_key, '*', 0);

	foreach($objects as $object){
		
		if($object->getContentId() == 'null'){
			continue;
		}
		
		$image_name = $object->getObjectId() . '-' . $object->getContentId() . '.jpeg';
		
		file_put_contents($thumbnails_path .'/' . $image_name, $object->getContent());
	}
	
	$objects = $rets->GetObject('Property', 'LargePhoto', $listing_numeric_key, '*', 0);

	foreach($objects as $object){
		
		if($object->getContentId() == 'null'){
			continue;
		}
	
		$image_name = $object->getObjectId() . '-' . $object->getContentId() . '.jpeg';
		
		file_put_contents($path .'/' . $image_name, $object->getContent());
		
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

