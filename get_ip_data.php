<?php

$url = $_POST['url'];
$group_name = $_POST['group_name'];
$keydir = "./recv_client/keystore/".$group_name ;
if(!is_dir($keydir)){
	echo "群密钥不存在".$keydir;
	exit(0);
}
//$url="192.168.5.11/003.mkv";
list($ip,$filename) = explode('/',$url);

$arr = explode('.',$filename);
$exp = end($arr);
//echo ($exp);
//exit(0);
$cmd = "echo ./nc ./ndn_client_config.json ".$ip." 9758 ".$filename." ". $group_name." > ./recv_client/cmd.txt" ;
exec($cmd,$result,$status) ;
if( $exp == "txt"  ){
	$result_path = "./recv_client/out/".$filename ;
	sleep(1);
	while(!file_exists($result_path)){
		sleep(1);
		$i = $i + 1 ;
		if($i > 6) break ;
	}
	//echo $result_path ;
	$myfile = fopen($result_path,"r") or die("unable to open file ".$result_path) ;
	$result = fread($myfile , filesize($result_path));
	fclose($myfile) ;
	echo $result ;
	exit(0);
}else{
	echo "0 " ;
}


?>
