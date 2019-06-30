<?php
	
header('Access-Control-Allow-Origin:*');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
header('Access-Control-Allow-Methods: GET, POST, PUT,DELETE,OPTIONS,PATCH');

$source_name = $_POST['input1'];
$source_loc = $_POST['input2'];
$source_local = $_POST['input3'];
$key_path = $_POST['input4'];
$other_msg = $_POST['input5'];

$source_name  = preg_replace('# #','',$source_name );
$source_loc  = preg_replace('# #','',$source_loc );
$source_local = preg_replace('# #','',$source_local);
$key_path  = preg_replace('# #','',$key_path );
$other_msg = preg_replace('# #','',$other_msg);

if($source_name == "") exit(0);


if(!file_exists($key_path)){
	echo "file $key_path is not exists" ;
	exit(1);
}
$cmd = "./client -g ".$source_name." ".$source_loc." ".$key_path." ".$source_local." ".$other_msg ;
//echo $cmd ;
//exit(0);
exec($cmd,$result,$status) ;

//echo $key_path ;
//echo $result[0] ;
//echo $result[1] ;
//echo $result[3]." : " ;
//echo $result[2]."" ;
if($result[4] == "110"){
	$code_text = base64_encode($result[1]);
	$cmd = "./generate_png -size 400x400 QR_CODE ".$code_text." ./keystore/tdc.png";
	exec($cmd,$result,$status) ;
	echo "0";
	echo $status ;
	
	exec("echo ".$cmd." > ./keystore/tmp",$result1,$status) ;
}
else{
	echo $result[3];
}

?>
