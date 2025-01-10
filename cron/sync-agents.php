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

$limit = 300;

$offset = 0;

for(;;){
    
    $results = $rets->Search(
        'Member',
        'Member',
        '(MemberKeyNumeric=0+)',
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
        
        if($array['OfficeMlsId'] != 'C186400') continue;
        
		//if($array['MemberKeyNumeric'] != '83926422') continue;
		
        $path = '/home/realtorcawork/public_html/public/images/team/';
        
        $image_name = $array['MemberKeyNumeric'] . '.jpeg';
        
        if(file_exists($path . '/' . $image_name)){
            unlink($path . '/' . $image_name);
        }
        
        $objects = $rets->GetObject('Member', 'AgentPhoto', $array['MemberKeyNumeric'], '0', 0);
        
        foreach($objects as $object){
			
            if($object->getContentId() == 'null'){
                continue;
            }
            
			file_put_contents($path .'/' . $image_name, $object->getContent());
        }
		
		
		
		if(!file_exists($path . '/' . $image_name)){
           $image_name = '';
		} else {
			
			$filesize = filesize($path . '/' . $image_name);
			
			$filesize = round($filesize / 1024, 2); 
			
			if(!($filesize > 1)){
				 unlink($path . '/' . $image_name);
				 $image_name = '';
			}
		}
		
		
		
		$array['created_at'] = date("Y-m-d H:i:s");
		
		$array['updated_at'] = date("Y-m-d H:i:s");
		
		$query = "insert into our_professionals (memberkeynumeric, name, image, position, phone, email, language, type, socialmediawebsiteurlorid, website, post_code, state,
	created_at, updated_at)";
		$query .= "VALUES('".
			(mysqli_real_escape_string($conn, $array['MemberKeyNumeric'])? mysqli_real_escape_string($conn, $array['MemberKeyNumeric']):NULL) . "','" .
			(mysqli_real_escape_string($conn, $array['MemberFullName'])? mysqli_real_escape_string($conn, $array['MemberFullName']):NULL) . "','" .
			(mysqli_real_escape_string($conn, $image_name)? mysqli_real_escape_string($conn, $image_name):NULL) . "','" .
			(mysqli_real_escape_string($conn, $array['MemberType'])? mysqli_real_escape_string($conn, $array['MemberType']):NULL) . "','" .
			(mysqli_real_escape_string($conn, $array['MemberDirectPhone'])? mysqli_real_escape_string($conn, $array['MemberDirectPhone']):NULL) . "','" .
			(mysqli_real_escape_string($conn, $array['MemberEmail'])? mysqli_real_escape_string($conn, $array['MemberEmail']):NULL) . "','" .
			(mysqli_real_escape_string($conn, $array['MemberLanguages'])? mysqli_real_escape_string($conn, $array['MemberLanguages']):NULL) . "','" .
			(mysqli_real_escape_string($conn, $array['MemberType'])? mysqli_real_escape_string($conn, $array['MemberType']):NULL) . "','" .
			
			(mysqli_real_escape_string($conn, $array['SocialMediaWebsiteUrlOrId'])? mysqli_real_escape_string($conn, $array['SocialMediaWebsiteUrlOrId']):NULL) . "','" .
			(mysqli_real_escape_string($conn, $array['PrimaryWebsite'])? mysqli_real_escape_string($conn, $array['PrimaryWebsite']):NULL) . "','" .
			(mysqli_real_escape_string($conn, $array['MemberPostalCode'])? mysqli_real_escape_string($conn, $array['MemberPostalCode']):NULL) . "','" .
			(mysqli_real_escape_string($conn, $array['MemberStateOrProvince'])? mysqli_real_escape_string($conn, $array['MemberStateOrProvince']):NULL) . "','" .
			
			
			date("Y-m-d H:i:s") . "','" .
			date("Y-m-d H:i:s") . "')";
			
			$query .= 'ON DUPLICATE KEY UPDATE ';
			
			$query .= " `name` = VALUES(`name`), `image` = VALUES(`image`),
			 `socialmediawebsiteurlorid` = VALUES(`socialmediawebsiteurlorid`),
			 `website` = VALUES(`website`),
			 `post_code` = VALUES(`post_code`),
			 `state` = VALUES(`state`)";
			
			mysqli_query($conn, $query);
	}
    
	$offset++;
}
    
    