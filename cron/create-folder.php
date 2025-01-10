<?php
error_reporting(E_ALL);

ini_set("display_errors", 1);

$conn = mysqli_connect("localhost", "realtorcawork_rep", "pKWe5xhuu95T", "realtorcawork_rep");


$result = mysqli_query($conn, "select * from properties");

while($row = mysqli_fetch_assoc($result)){

    if (!file_exists('/home/realtorcawork/public_html/public/properties/images/'. $row['listing_numeric_key'].'/')){
    
         mkdir('/home/realtorcawork/public_html/public/properties/images/'. $row['listing_numeric_key'], 0755);
    
    }

}