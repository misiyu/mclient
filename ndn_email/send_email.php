<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
header('Access-Control-Allow-Methods: GET, POST, PUT,DELETE,OPTIONS,PATCH');

$d_addr = $_POST['d_addr'];
$s_addr = $_POST['s_addr'];
$msg = $_POST['msg'];
$msg = $d_addr.",".$s_addr.",".$msg ;
$cmd = "echo \"./ndn_email_c -s ".$d_addr." ".$msg."\" > ../recv_client/cmd.txt";
//echo $d_addr ;
//echo $s_addr."   " ;
//echo $cmd;
//exit(0);
exec($cmd,$result,$status) ;
 
echo $status."发送成功" ;
?>
