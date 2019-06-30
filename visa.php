<?php
header('Access-Control-Allow-Origin:*');
	
$sname = $_POST['input1'];
$phone = $_POST['input2'];
$username = $_POST['input3'];
$key_path = $_POST['input4'];
if(!file_exists($key_path)){
	echo "file $key_path is not exists" ;
	exit(1);
}
$cmd = "./regmain ".$sname." ".$phone." ".$username." ".$key_path;
$ecmd = "echo ".$cmd." > ./recv_client/cmd.txt";
exec($ecmd,$result,$status);

$path = "./recv_client/lxw.txt";
$tt = 0;
sleep(2);
while(!file_exists($path)){
	sleep(2);
	$tt = $tt + 1;
	if($tt > 3) break;
}
$myfile = fopen($path,"r") or die("unable to open file ".$path) ;
$output = fread($myfile , filesize($path));
echo $output;
?>
