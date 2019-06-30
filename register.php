<?php

header('Access-Control-Allow-Origin:*');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
header('Access-Control-Allow-Methods: GET, POST, PUT,DELETE,OPTIONS,PATCH');

$username = $_POST['input1'];
$phone_number = $_POST['input2'];
$prefix = $_POST['input3'];
$key_path = $_POST['input4'];
$real_name = $_POST['input5'] ;
$id_card = $_POST['input6'] ;
$other_msg = $_POST['input7'] ;
//echo $username ;

$username = preg_replace('# #','',$username);
$phone_number = preg_replace('# #','',$phone_number);
$prefix = preg_replace('# #','',$prefix);
$key_path = preg_replace('# #','',$key_path);
$real_name = preg_replace('# #','',$real_name);
$id_card = preg_replace('# #','',$id_card);
$other_msg = preg_replace('# #','',$other_msg);


if($prefix == ""){
	exit(0);
}else if($prefix[0] != '/'){
	echo "请求正确填写前缀名";
	exit(1);
}
$real_msg = $username.",".$other_msg.",".$phone_number.",".$real_name.",".$id_card ;
$cmd = "./client -r ".$prefix." ".$key_path." ".$real_msg ;
//echo $cmd ;
//exit(0);
exec($cmd,$result,$status) ;
if($result[3][0] != '{'){
	echo $result[3] ;
	exit(1);
}
$result_3 = $result[3];

$code_text = base64_encode($result_3);
//addcslashes($result_3,'}"')

$cmd = "./generate_png -size 400x400 QR_CODE ".$code_text." ./keystore/tdc.png";
exec("echo ".$cmd." > ./keystore/tmp ") ;
exec($cmd,$result1,$status) ;
//echo $cmd."^^^\n";
//echo $status ;
echo "ok\n" ;
echo "请扫码完成活体信息采集";

//echo $key_path ;
//echo $result[0] ;
//echo $result[1] ;
//echo $result[3]." : " ;
//echo $result[2]."\n\n" ;
//if ($result[3] == 502) {
	//echo "请修改您要申请的前缀名\n" ;
//}
//else if($result[3] == 500){
	//echo "您可以在查询页面查询您的前缀申请状态\n" ;
//}


?>
