<?php

$source_name = $_POST['input1'];
$cmd = "./client -q ".$source_name." ndn" ;
exec($cmd,$result,$status) ;

//$cmd2 ="ps -A | grep -w nfd" ; 
//exec($cmd2,$result2,$status) ;
$ip_ndn_flag =  "XX";
if($result[2] == 400){
	echo $ip_ndn_flag ;
	$source_url = $result[3];
	if($source_url[0] == '/') {
		echo "nd".$source_url ;
	}else if($source_url[0] >= '0' && $source_url[0] <= '9') {
		echo "ip".$source_url;
	}else{
		echo "ot".$source_url;
	}
}else if($result[2] == 401){
	echo "401 : 找不到该标识" ;
}


?>
