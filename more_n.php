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

<script type="text/javascript" charset="utf-8">
function test(){
	console.log("hellpo--------------------------------");
	bs4pop.confirm1('你确定要退出系统吗？', function(sure){ console.log('我按了确定吗:', sure);}) ;
}

</script>
	<title >导航</title>

</head>
<body>
<div id="head">

	<button class="btn btn-primary ndn_switch" onclick="login(this)">登录</button>
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
		<h3 class="new">新上线<sup>新！</sup></h3>
		<div class="con">
			<div>
				<a href="https://dumall.baidu.com/?utm_source=baidu&utm_medium=all-products" class="abg xiaodu"
				   target="_blank"></a>
			</div>
			<div>
				<a href="./ip_detail.php?name=0" title="127.0.0.1" target="_blank" onClick="getUserData(this) ; return false ;" >IP网数据</a>
				<br/>
				<span>IP互联网</span>
			</div>
		</div>
		<div class="con">
			<div>
				<a href="https://dumall.baidu.com/?utm_source=baidu&utm_medium=all-products" class="abg xiaodu"
				   target="_blank"></a>
			</div>
			<div>
				<a href="./isn_detail.php?name=0" title="127.0.0.1" target="_blank"  onClick="getUserData(this) ; return false ;">pkusz-js主权网资源</a>
				<br/>
				<span>主权网内部数据</span>
			</div>
		</div>
		<div class="con">
			<div>
				<a href="https://dumall.baidu.com/?utm_source=baidu&utm_medium=all-products" class="abg xiaodu"
				   target="_blank"></a>
			</div>
			<div>
				<a href="./osn_detail.php?name=0" title="127.0.0.1" target="_blank"  onClick="getUserData(this) ; return false ;">dx主权网资源</a>
				<br/>
				<span>电信主权网数据</span>
			</div>
		</div>

<?php
$cmd = "./client -e all";
exec($cmd,$result,$status);
#echo "result = ".$result;

#echo "<br>".substr($result[1],3,strlen($result[1])-1);

#截取返回信息中的json数据部分
#$data_result = substr($result[1],3,strlen($result[1])-1);
#echo "json = ".$data_result;
$data_result = $result[1];
$data_result = json_decode($data_result,true);
#定义账户名列表
$list = array();
#定义公钥列表
$pubkey_list = array();
#echo "类型 = ".var_dump($data_result);	
#筛选json中的msg属性
foreach( $data_result as $k => $v){
	if( $k == "msg"){
		#echo "msg = ".$v."<br>";
		$msg = $v;
	}
}
#判断用户是否为空
if( $msg == ""){
	echo "null";
}else{
	foreach( $msg as $each){
		foreach($each as $a => $b){
			if( $a == "pubkey"){
				array_push($pubkey_list,$b);
			}
		}
		foreach($each as $k => $v){
			if( $k == "real_msg"){
				array_push($list,$v);
			}
		}
	}


	//echo '
				//<!--新上线产品列表-->
						//<h3 class="new">新上线<sup>新！</sup></h3>
			//';

			#定义列表下标i
	$i = 0;
	$url = "detail.php?";


	#显示用户名信息
	foreach($list as $name){
		$name_array = explode(",",$name);
		$first_name = $name_array[0];
		$remark = $name_array[1];

		$query = array(
			'pubkey' => $pubkey_list[$i],
			'name' => $first_name
		);
		$i++;
		$link = $url.http_build_query($query);

		echo '
			<div class="con">
						<div>
								<a href="'.$link.'" class="abg xiaodu"
						 target="_blank"></a>
						</div>
						<div>
								<a href="'.$link.'" target="_blank" onClick="getUserData(this) ; return false ;">'.$first_name.'</a>
						<br/>
							<span>'.$remark.'</span>
					</div>
					</div>
			';
	}
}

?>


<div class = "cl"></div>

</div>
<div class="cl"></div>
</div>
<div class="footer3" >
	<!--<p >Copyright@国家重大科技基础实施——未来网络北大深圳创新中心/深圳市信息论与未来网络体系重点实验室<a target="_blank" href="" ></a></p> -->
</div>
</body>
</html>

