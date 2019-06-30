<?php

$cer_name = $_POST['cer_name'];
$ret = strpos( $cer_name ,"/");
$cer_path = $cer_name ;
if($ret == ""){
	$cer_path = "../keystore/".$cer_name.".cert" ;
}
if(!file_exists($cer_path)){
	echo "1,找不到证书";
	exit(0);
}
$json_str = file_get_contents($cer_path);
$cert = json_decode($json_str,true);
$username = $cert["username"];
$group_name = $cert["group"];
$phone = $cert["phone"];

echo "0,".$username.",".$group_name.",".$phone ;

?>
