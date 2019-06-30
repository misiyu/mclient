<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.css">
	<link rel="stylesheet" href="css/bs4.pop.css">
	<link rel="stylesheet" href="css/baidu.css">
	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.js"></script>
	<script src="js/bs4.pop.js"></script>
	<script src="js/wgh01.js"></script>

	<title >资源列表</title>




</head>
<script type="text/javascript">
function h(obj) {
	obj.style.behavior = 'url(#default#homepage)';
	obj.setHomePage('http://www.baidu.com/more/')
};
</script>
<body>
<div id="head">

	<div id="ndn-switch" class="ndn_switch" >
		<label class="switch" >
			<input type="checkbox" value="ip" onClick="ndn_switch(this)" id="ip-ndn-checkbox" />
			<div class="slider round"></div>
		</label>
	</div>
	<div id="s_fm" class="s_form" >
		<form name="f" action="https://www.baidu.com/s" class="fm">
			<input type="hidden" name="bs" value="lv">
			<input type="hidden" name="f" value="8">
			<input type="hidden" name="rsv_bp" value="1">
			<input type="hidden" name="rsv_spt" value="3">
			<span class="s_ipt_wr" onmousedown="this.className='s_ipt_wr iptfocus'"
				  onmouseout="this.className='s_ipt_wr'"><input name="wd" id="kw" class="i" value=""
																maxlength="100"></span><span class="btn_wr"><input
				type="submit" id="su" value="Go" class="btn1" onmouseover="this.className='btn1 btn_h'"
				onmousedown="this.className='btn1 btn_h'" onmouseout="this.className='btn1'"></span><span
				class="tools"><span id="mHolder"><div id="mCon"><span>输入法</span></div><ul id="mMenu"><li><a
				href="index.html#" name="ime_hw">手写</a></li><li><a href="index.html#" name="ime_py">拼音</a></li><li
				class="ln"></li><li><a href="index.html#" name="ime_cl">关闭</a></li></ul></span><span class="seth"
																									 id="seth"><a
				href="index.html#" onClick="h(this);">把本页设为主页</a><span class="short-line">|</span>
		</form>
	</div>
</div>

<div id="main">
	<div id="content">

<?php

$pubkey = $name = null;
if (isset($_GET['pubkey']))
	$pubkey = $_GET['pubkey'];
if (isset($_GET['name']))
	$name = $_GET['name'];

#echo "pubkey = ".$pubkey." and name = ".$name;

$cmd = "./client -q ".$pubkey." pubkey";
exec($cmd,$result,$status);

$data_result = $result[1];
$data = json_decode($data_result,true);
$NDN_list = array();
$IP_list = array();
$Other_list = array();
$i = 0;
foreach($data["msg"] as $each){
	#echo $each["NDN"]."<br>";
	$tmp = explode("/",$each["NDN"]);
	array_push($NDN_list,$tmp[count($tmp)-1]);

	array_push($IP_list,$each["NDN"]);
	array_push($Other_list,$each["other"]);
	#	echo $each["other"];
	#       echo "NDN:".$NDN_list[$i];
	$i++;
}

foreach($NDN_list as $each){
	#echo "<br>".$each;
}

echo '
				<!--$name-->
						<h3 class="new">'.$name.' : List<sup>new！</sup></h3>
			';

#定义列表下标i
$i = 0;
#$url = $IP_list[$i];


#显示用户名信息
foreach($NDN_list as $name){
	$url = $IP_list[$i];
	$query = array(
		'pubkey' => $pubkey_list[$i],
		'name' => $first_name
	);
	#$link = $url.http_build_query($query);
	$link = $url;

	echo '
				<div class="con">
					<div>
						<a href="'.$link.'" class="abg xiaodu"
							target="_blank"></a>
					</div>
					<div>
						<a href="" title="'.$link.'" target="_blank" onClick="play_name(this);return false;" >'.$name.'</a>
						<br/>

						<span >'.$Other_list[$i].'</span>
					</div>
				</div>
				';
	$i++;
}

?>


<div class = "cl"></div>

</div >
<div class="cl"></div>



</div>



<script >

function play_name(obj) {
	if(MyUserName == ""){
		bs4pop.alert1("请先登录" , "打开左上角开关，并上传证书" , function(){
			//return false ;
		});
		return false ;
	}
	var input_1 = obj.title;
	console.log("========================" + input_1 + "\n");
	var mark = document.getElementById("ip-ndn-checkbox").value;
	$.post("play.php",{
	input1: input_1
	},function(data,status){
		if(data == -1){
			alert("找不到该资源");
		}else{
			//var mark = data.substr(0,2);
			var source_url = data.substr(4,data.length-4);
			get_data(source_url);
			//alert(source_url) ;
		}
	});
}



function G(id) {
	return document.getElementById(id);
}

function addEV(o, e, f) {
	if (window.attachEvent) {
		o.attachEvent("on" + e, f);
	} else if (window.addEventListener) {
		o.addEventListener(e, f, false);
	}
}

</script>
<script src="https://www.baidu.com/js/bdsug.js?v=1.0.3.0"></script>
<div class="footer3" >
	<!--	<p >Copyright@国家重大科技基础实施——未来网络北大深圳创新中心/深圳市信息论与未来网络体系重点实验室<a target="_blank" href="" ></a></p> -->
</div>
</body>
</html>


