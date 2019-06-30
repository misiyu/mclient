<?php

header('Access-Control-Allow-Origin:*');
//if($_SERVER['REQUEST_METHOD'] == 'OPTIONS'){
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
		header('Access-Control-Allow-Methods: GET, POST, PUT,DELETE,OPTIONS,PATCH');
//    exit;
//}

$username = $_POST['input1'];
$phone_number = $_POST['input2'];
$groupname = $_POST['input3'];
$key_path = $_POST['input4'];
$real_name = $_POST['input5'] ;
$id_card = $_POST['input6'] ;
$other_msg = $_POST['input7'] ;

$cert["username"]=$username ;
$cert["group"]=$groupname ;
$cert["key_path"]=$key_path ;
$cert["phone"]=$phone_number ;
$cert["real_name"] = $real_name ;
$cert["id_card"] = $id_card ;

//echo $groupname ;
//exit(0);

//echo json_encode($cert);
//exit(0);
$cer_path = "../keystore/".$username.".cert";
file_put_contents($cer_path , json_encode($cert));
echo "生成证书：".$cer_path ;


?>
