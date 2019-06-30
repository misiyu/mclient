<?php
	
$source_local = $_POST['input3'];
if(!file_exists($source_local)){
	echo "file $source_local is not exists" ;
	exit(1);
}
//$cmd = "md5sum ".$source_local." -d ' ' -f 1";
$cmd = "md5sum ".$source_local;
exec($cmd,$result,$status) ;
$result2 =  explode(' ',$result[0]);
echo $result2[0]
//echo $result[0];

?>
