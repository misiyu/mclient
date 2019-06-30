<?php
	
$group_name = $_POST['input1'];
$phone = $_POST['input2'];
$username = $_POST['input3'];
$userid = $_POST['input4'];
$company = $_POST['input5'];

$cmd = "./gsc -j ".$group_name." ".$phone;
//exit(0);
exec($cmd,$result,$status) ;
if($result[0] == "ok"){
	echo "o" ;
}
else{
	echo $result[0];
}
echo $cmd ;

?>
