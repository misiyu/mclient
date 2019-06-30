<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
header('Access-Control-Allow-Methods: GET, POST, PUT,DELETE,OPTIONS,PATCH');

//$e_addr = $_POST['e_addr'];
$file_id = $_POST['file_id'];
//$msg = "123" ;
$e_addr = "123" ;
$msg = "123";

$myfile = fopen("../recv_client/edatabase/e_cur_id","r") or die("unable to open file ../recv_client/edatabase/e_cur_id!") ;
$e_id = fread($myfile , filesize("../recv_client/edatabase/e_cur_id"));
fclose($myfile);
$wait_file = "../recv_client/edatabase/email-".$e_id ;
$cmd = "echo \"./ndn_email_c -r ".$e_addr." ".$msg." ".$file_id."\" > ../recv_client/cmd.txt";
//echo $cmd;
//exit(0);
exec($cmd,$result,$status) ;
$i = 0 ;
while(!file_exists($wait_file)){
	sleep(1);
	$i = $i + 1 ;
	if($i > 6) break ;
}
$myfile = fopen($wait_file,"r") or die("unable to open file ".$wait_file) ;
$result = fread($myfile , filesize($wait_file));
fclose($myfile) ;
echo $result ;

?>
