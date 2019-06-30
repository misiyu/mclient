<?php

$url = $_POST['url'];
$username = $_POST['username'];
if($username== "") $username = "123";
$cmd = "echo ./osn_client ".$url."/~/".$username." > ./recv_client/cmd.txt" ;
//exit(0);

$signal_file = "./recv_client/nosign.txt"; 

if(!file_exists($signal_file)){
	echo "signal file ".$signal_file." do not exist";
	exit(0);
}
$exec_signal = 0 ;
file_put_contents($signal_file , $exec_signal);
exec($cmd,$result,$status) ;
//while()
for ($i = 0; $i < 5; $i++) {
	$exec_signal = file_get_contents($signal_file);
	if($exec_signal != 0) break ;
	sleep(1);
}

if($exec_signal == 1) {
	echo 0 ;
	exit(0);
}
echo "1" ;

?>
