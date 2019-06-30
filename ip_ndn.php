<?php

$url = $_POST['url'];
$cmd = "echo ./client ".$url." > ./recv_client/cmd.txt" ;
exec($cmd,$result,$status) ;
echo "0 " ;

?>
