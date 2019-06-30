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
	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.js"></script>
	<script src="js/bs4.pop.js"></script>

	<script type="text/javascript" charset="utf-8">
function test(){
	console.log("hellpo--------------------------------");
	bs4pop.confirm('你确定要退出系统吗？', function(sure){ console.log('我按了确定吗:', sure);}) ;
}
	</script>

    <title >资源列表</title>

    <style type="text/css">
        body {
            margin: 0;
            padding: 7px 0 0;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            position: relative;
        }

        a {
            color: #0000cc;
        }

        a:link {
            color: #0000cc
        }

        img, ul, li, h3, form, table {
            margin: 0;
            padding: 0;
            border: 0;
            list-style: none;
        }

        #head {
            width: 100%;
            border-bottom: 1px solid #ebebeb;
        }

        .s_form:after, .s_tab:after {
            content: ".";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden
        }

        .s_form {
            zoom: 1;
            width: 1000px;
            height: 55px;
            margin: 0 auto;
        }

        .logo {
            float: left;
            margin: 7px 0 0;
        }

        .logo img {
            width: 101px;
        }

        .fm {
            clear: none;
            position: relative;
            float: left;
            margin: 11px 0 0 10px;
        }

        .s_ipt_wr {
            border: 1px solid #b6b6b6;
            border-color: #7b7b7b #b6b6b6 #b6b6b6 #7b7b7b;
            background: #fff;
            display: inline-block;
            vertical-align: top;
            width: 539px;
            height: 32px;
            margin-right: 0px;
            border-right-width: 0px;
            border-color: #b8b8b8 transparent #cccccc #b8b8b8;
            overflow: hidden;
        }

        .s_ipt_wr:hover, .s_ipt_wr.ipthover {
            border-color: #999 transparent #b3b3b3 #999;
        }

        .s_ipt_wr.iptfocus {
            border-color: #4791ff transparent #4791ff #4791ff;
        }

        .i {
            width: 540px;
            height: 34px;
            font: 16px/18px arial;
            line-height: 22px \9;
            padding: 5px 10px 8px 7px;
            background: #fff;
            border: 0;
            outline: none;
            -webkit-appearance: none
        }

        .btn_wr {
            width: auto;
            height: auto;
            border-bottom: 1px solid transparent;
            *border-bottom: none;
            display: inline-block;
        }

        .btn1 {
            width: 100px;
            height: 34px;
            font-size: 14px;
            color: white;
            letter-spacing: 1px;
            background: #c0392b;
            border: none;
            padding: 0;
            border-bottom: 1px solid #2d78f4;
            outline: medium;
            *border-bottom: none;
            -webkit-appearance: none;
            -webkit-border-radius: 0px;
            cursor: pointer;
        }

        .btn_h {
            background: #317ef3;
            border-bottom: 1px solid #2868c8;
            *border-bottom: none;
            box-shadow: 1px 1px 1px #cccccc;
        }

        #s_tab {
            background: #f8f8f8;
            width: 100%;
            height: 38px;
            padding: 0;
            float: none;
            zoom: 1;
            font: normal 13px/36px arial, "Sim Sun"
        }

        #s_tab_wrap {
            width: 1000px;
            margin: 0 auto;
        }

        #main {
            width: 1000px;
            padding: 0;
            margin: 0 auto;
        }

        .crumb {
            font-family: arial "Sim Sun";
            color: #666;
        }

        .crumb a {
            text-decoration: none;
            color: #0000d0;
        }

        .crumb a:hover {
            text-decoration: underline;
        }

        input {
            padding-top: 0;
            padding-bottom: 0;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        #u, #head, #tool, #search, #foot {
            font-size: 13px
        }

        .seth {
            margin-left: 20px;
            display: none;
        }

        .seth a {
            color: #00c
        }

        #help {
            margin-left: 20px;
        }

        .short-line {
            margin: 0 0 0 7px;
            color: #999999;
        }

        #tb_mr {
            color: #00c;
            cursor: pointer;
            position: relative;
            z-index: 298
        }

        #tb_mr small {
            font-size: 11px
        }

        #tb_mr b {
            font-weight: normal;
            text-decoration: underline
        }

        #more {
            width: 58px;
            height: 100px;
            border: 1px solid #9A99FF;
            background: #fff;
            position: absolute;
            z-index: 298;
            left: 452px;
            top: 45px;
            *top: 46px;
            overflow: hidden;
            display: none;
            outline: none
        }

        #more a {
            width: 53px;
            height: 25%;
            line-height: 24px;
            display: block;
            padding: 0 0 0 7px;
            color: #0001CF;
            text-decoration: none
        }

        #more a span {
            font-family: "宋体"
        }

        #more a:hover {
            background: #D9E1F6
        }

        #more div {
            height: 1px;
            overflow: hidden;
            background: #ccf;
            margin: 0 3px
        }

        #page {
            white-space: nowrap
        }

        #page {
            word-spacing: 4px
        }

        #page .n {
            font-size: 16px
        }

        .tools {
            width: 220px;
            position: absolute;
            top: 10px;
        }

        .tools a {
            text-decoration: none;
        }

        .tools a:hover {
            text-decoration: underline;
        }

        #mHolder {
            width: 62px;
            position: relative;
            z-index: 296;
            top: -18px;
            margin-left: 9px;
            margin-right: -12px;
            display: none
        }

        #mCon {
            height: 18px;
            position: absolute;
            right: 7px;
            top: 3px;
            top: 6px \9;
            cursor: pointer;
            padding: 0 18px 0 0;
            line-height: 18px;
            background: url(https://www.baidu.com/img/bg-1.0.0.gif) no-repeat right -133px;
            background-position: right -135px \9
        }

        #mCon span {
            color: #00c;
            cursor: default;
            display: block
        }

        #mCon .hw {
            text-decoration: underline;
            cursor: pointer
        }

        #mMenu {
            width: 56px;
            border: 1px solid #9a99ff;
            position: absolute;
            right: 7px;
            top: 28px;
            display: none;
            background: #fff
        }

        #mMenu a {
            width: 100%;
            height: 100%;
            color: #00c;
            display: block;
            line-height: 22px;
            text-indent: 6px;
            text-decoration: none
        }

        #mMenu a:hover {
            background: #d9e1f6
        }

        #mMenu .ln {
            height: 1px;
            background: #ccf;
            overflow: hidden;
            margin: 2px;
            font-size: 1px;
            line-height: 1px
        }

        h3 {
            font-size: 14px;
            padding-bottom: 10px;
            margin: 30px 0 0 0;
            border-bottom: 1px solid #ebebeb;
            font-family: arial, "Sim Sun";
            color: #333;
            width: 1000px;
        }

        h3 sup {
            font: normal 14px arial, "Sim Sun";
            color: #fff;
            padding-left: 2px;
            vertical-align: top;
            background-color: #f43d39;
            margin-left: 6px;
        }

        h3.new {
            margin: 30px 0 0 0;
        }

        .l {
            float: left;
        }

        .con {
            float: left;
            width: 225px;
            margin: 0 20px 0 0;
            _overflow: hidden;
            _height: 66px;
            padding: 15px 0 16px 10px;
            height: 34px;
            border-bottom: 1px solid #f3f3f3;
        }

        .con_last {
            margin: 0;
        }

        .con a {
            margin-bottom: 4px;
            display: inline-block;
            font-family: arial "MicroSoft YaHei";
            font-weight: bold;
            color: #014cd2;
            text-decoration: none;
        }

        .con a:hover {
            text-decoration: underline;
        }

        .con span {
            font-family: arial, "Sim Sun";
            font-size: 12px;
            color: #666;
        }

        .abg {
            width: 24px;
            height: 24px;
            display: block;
            float: left;
            margin-right: 8px;
            overflow: hidden;
            background: url(./images/video.png) ;
        }


        .cl {
            clear: both;
            height: 0px;
            line-height: 0px;
            font-size: 0px;
            overflow: hidden;
        }

        .footer {
            height: 42px;
            line-height: 42px;
            border-top: 1px solid #ebebeb;
            background-color: #f8f8f8;
            text-align: center;
            color: #666;
            font-size: 12px;
            margin-top: 40px;
            width: 100%;
        }

        .footer a {
            color: #666;
        }

        .con .fengyunbang {
            background-position: 0px 0px
        }

        .con .nuomi {
            background-position: 0px -25px
        }

        .con .image {
            background-position: 0px -50px
        }

        .con .qqyy {
            background-position: 0px -75px
        }

        .con .tuiguang {
            background-position: 0px -100px
        }

        .con .wenku {
            background-position: 0px -125px
        }

        .con .zhidao {
            background-position: 0px -150px
        }

		.switch{
			width: 60px;
			height: 34px;
			position: relative;
			display: inline-block;
		}
		.round{
			border-radius: 24px;
		}
		.slider{
			background: #ccc;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			transition: all .4s;
			cursor: pointer;
		}
		.slider:after{
			content: '';
			width: 26px;
			height: 26px;
			display: block;
			border-radius: 50%;
			background-color: #FFFFFF;
			position: absolute;
			top: 4px;
			left: 4px;
			transition: all .4s;
		}

		input:checked+.slider{
			background: #2196F3;
		}
		input:checked+.slider:after{
			transform: translateX(26px);
		}

		.ndn_switch {
			position : relative ;
			float : left ;
			margin : 8px 0 0 40px ;
		}
    </style>

    <style type="text/css">
        @media (max-width: 1024px) {
            body {
                position: relative;
            }

            h3 {
                width: 100%;
            }

            h3, h3.new {
                margin-top: 15px;
            }

            #head {
                padding-bottom: 7px;
                margin: 0 10px;
                width: auto;
                border-bottom: 0;
            }

            #help {
                padding: 13px;
                margin: 0;
                display: block;
            }

            #main {
                margin: 0 10px;
                width: auto;
            }

            #foot {
                width: auto
            }

            .i {
                width: 100%;
                height: 38px;
            }

            .s_form {
                width: 100%;
                height: auto;
                position: relative;
            }

            .fm {
                margin: 0 42px 0 108px;
                float: none;
            }

            .s_ipt_wr {
                margin-right: 90px;
                display: block;
                width: auto;
                height: auto;
                box-sizing: border-box;
            }

            .btn_wr {
                position: absolute;
                right: 0;
                top: 0;
            }

            .btn1 {
                height: 40px;
                width: 90px;
            }

            .logo {
                position: absolute;
                margin-top: 0px;
            }

            .tools {
                width: auto;
                min-width: 30px;
                top: 0;
                right: -52px;
            }

            #s_tab {
                border-top: 1px solid #ebebeb;
                padding: 0 10px;
                width: auto;
            }

            #s_tab_wrap {
                width: 100%;
            }

            .crumb a {
                line-height: 40px;
                display: inline-block;
            }

            .con {
                padding: 8px 0 15px;
                position: relative;
            }

            .con_last {
                margin: 0 20px 0 0;
            }

            .con .abg {
                margin-bottom: 0;
            }

            .con .secr {
                margin-bottom: 0;
            }

            div[id^="sd"] {
                top: 39px !important;
                z-index: 1;
            }

            div[id^="sd"] td {
                line-height: 28px !important;
            }

            .con div:last-child > a {
                margin: 2px 0 0;
                padding: 0;
                position: absolute;
                padding: 0 0 15px 30px;
                display: block;
                width: 80%;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }

            .con span {
                height: 15px;
                overflow: hidden;
                display: inline-block;
                text-overflow: ellipsis;
                white-space: nowrap;
                width: 100%;
            }

        }

        @media (max-width: 740px) {
            .con {
                margin: 0;
                width: 33.3%;
            }

            .con span {
                height: 15px;
                overflow: hidden;
                display: inline-block;
                text-overflow: ellipsis;
                white-space: nowrap;
                width: 100%;
            }

        }

        @media (max-width: 512px) {
            .fm {
                padding: 30px 0 0 0;
                margin: 0;
            }

            .btn_wr {
                top: 30px;
            }

            .tools {
                right: 0;
            }

            div[id^="sd"] {
                top: 69px !important;
            }

            #help {
                margin-top: -10px;
            }

            .logo img {
                width: 70px;
            }

            .con .abg {
                display: none;
            }

            .con .secr {
                display: none;
            }

            .con {
                width: 50%;
                margin: 0;
            }

            .con span {
                height: 15px;
                overflow: hidden;
                display: inline-block;
                text-overflow: ellipsis;
                white-space: nowrap;
                width: 100%;
                margin-top: 4px;
            }

            .con div:last-child > a {
                margin: 2px 0 0;
                padding: 0;
                position: absolute;
                padding: 0 0 18px 0;
                display: block;
                width: 95%;
            }

        }
    </style>


</head>
<script type="text/javascript">
    function h(obj) {
        obj.style.behavior = 'url(#default#homepage)';
        obj.setHomePage('http://www.baidu.com/more/')
    };
</script>
<!--
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous" type="text/javascript"></script> -->
<body>
<div id="head">
	
	<div id="ndn-switch" class="ndn_switch" >
		<label class="switch" >
			<input type="checkbox" value="ip" onClick="ndn_switch(this)" id="ip-ndn-checkbox" />
			<div class="slider round"></div>
		</label>
	</div>
    <div id="s_fm" class="s_form" >
        <a href="./play.html" class="logo">
            <img src="./images/002.png" border="0" alt="到百度首页" height="40"
                 onMouseDown="nsclick('logo')">
        </a>
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
                <a href="./ip_detail.php" title="127.0.0.1" target="_blank"  >IP网资源</a>
                <br/>
                <span>IP互联网</span>
            </div>
        </div>

			<button class="btn btn-primary" onclick="test()">Confirm</button>

<div class = "cl"></div>

</div >
<div class="cl"></div>



</div>


<script type="text/javascript" >var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F9f14aaa038bbba8b12ec2a4a3e51d254' type='text/javascript'%3E%3C/script%3E"));</script>

<script >
function ndn_switch(obj){
	var value = obj.value ;
	if(value == "ip")
	{
		//alert("本机开启CCN模式！") ;
		//alert("hello");
		bs4pop.confirm("本机开启CCN模式" , function(sure){
			console.log("sure = " , sure);
		});
		obj.value = "ndn" ;
	}
	else{
		alert("本机开启IP模式！") ;
		obj.value = "ip" ;
	}
}

function ndn_ndn(source_url){
	//alert("ndn-ndn");
	$.post("ndn_ndn.php",{
		url: source_url 
	},
	function(data,status){
		if(data == 0 ){
			alert("传输启动成功");
		}else{
			alert("传输启动失败");
		}
	});
}
function ip_ndn(source_url){
	//alert("ndn-ndn");
	$.post("ip_ndn.php",{
		url: source_url 
	},
	function(data,status){
		if(data == 0 ){
			alert("传输启动成功");
		}else{
			alert("传输启动失败");
		}
	});
}
function ndn_ip(source_url){
	//alert("ndn-ip");
	$.post("ndn_ip.php",{
		url: source_url 
	},
	function(data,status){
		if(data == 0 ){
			alert("传输启动成功");
		}else{
			alert("传输启动失败");
		}
	});
}

function play(obj) {
	//alert("hello");
	var input_1 = obj.title;
	console.log("========================" + input_1 + "\n");
	var mark = document.getElementById("ip-ndn-checkbox").value;
	$.post("play.php",{
		input1: input_1
	},
	function(data,status){
		if(data == -1){
			//alert("找不到该资源");
		}else{
			//var mark = data.substr(0,2);
			var source_url = data.substr(4,data.length-4);
			if(mark == "ip")
			{
				mark = data.substr(2,2);
				if(mark == "ip"){
					var msg = "本主机处于IP网络\n" + "查询标识结果为 : "+source_url+"\n" + "资源处于IP网络中\n"+"传输也许会穿越CCN隧道\n";
					alert(msg);
					source_url = "http://"+source_url;
					window.location.href= source_url;
				}else if(mark == "nd"){
					var msg = "本主机处于IP网络\n" + "查询标识结果为 : "+source_url+"\n" + "资源处于CCN网络中\n"+"将为您进行跨异构网络传输\n";
					alert(msg);
					ip_ndn(source_url);
				}else{
					var msg = "标识："+ source_url+"\n为传统网络标识，将为您跳转到传统网络空间!!!\n";
					alert(msg);
					source_url = "http://"+source_url;
					window.location.href= source_url;
				}
			}
			else
			{
				mark = data.substr(2,2);
				if(mark == "nd"){
					var msg = "本主机处于CCN网络\n" + "查询标识结果为 : "+source_url+"\n" + "资源处于CCN网络中\n"+"将为您进行CCN传输\n";
					alert(msg);
					ndn_ndn(source_url);
				}else{
					var msg = "本主机处于CCN网络\n" + "查询标识结果为 : "+source_url+"\n" + "资源处于IP网络中\n"+"将为您进行跨异构网络传输\n";
					alert(msg);
					ndn_ip(source_url) ;
				}
			}
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
<script type="text/javascript">
    (function () {
        var maincon = document.getElementById("content");
        var links = maincon.getElementsByTagName("a");
        var len = links.length;
        var host = ("https:" == document.location.protocol) ? "https://sp1.baidu.com/8qUJcD3n0sgCo2Kml5_Y_D3" : "http://nsclick.baidu.com";
        for (var i = 0; i < len; i++) {
            addEV(links[i], 'mousedown', request);
        }

        function request(e) {
            var e = e || window.event;
            var tar = e.target || e.srcElement;
            if (tar.tagName.toLowerCase() == "img") {
                tar = tar.parentNode;
            }
            var logurl = encodeURIComponent(tar.href);
            var clicktxt = tar.innerHTML;
            var img = window["BD_PS_SUG" + (+new Date())] = new Image();
            img.src = host + "/v.gif?pid=306&pro=" + "more" + "&url=" + logurl + "&this=" + clicktxt + "&type=0" + "&t=" + (+new Date());
        }
    })();

    function nsclick(tab) {
        var p = encodeURIComponent(window.document.location.href),
            img = window["BD_PS_C" + (new Date()).getTime()] = new Image();
        img.src = host + "/v.gif?pid=306&pj=more&tab=" + tab + "&path=" + p + "&type=0" + "&t=" + new Date().getTime();
        return true;
    }
</script>
<script>
    (function () {
        var homepage = "http://www.baidu.com/more/";
        var isIE = navigator.userAgent.indexOf("MSIE") != -1 && !window.opera;
        var ran = Math.random() * 100;
        if (isIE) {
            try {
                var span = document.createElement("span");
                span.style.behavior = 'url(#default#homepage)';
                span.style.display = 'none';
                document.body.appendChild(span);

                var hpFlag = span.isHomePage(homepage);

                //如果未设置则显示设置按钮
                if (!hpFlag) {
                    var seth = G("seth");
                    var help = G("help");
                    if (seth) {
                        seth.style.display = "inline";
                        help.style.marginLeft = 7 + "px";
                    }
                }
            } catch (e) {
            }
        }
    })();
</script>
<script>
    (function () {
        function getNode() {
            var contents = [];
            var childs = document.getElementById("content").childNodes;
            var con = [];
            for (var i in childs) {
                var tmp = childs[i];
                if (tmp.nodeName && tmp.nodeName.toLowerCase() === 'h3' && con.length > 0) {
                    contents.push(con);
                    con = [];
                } else if (tmp.nodeName && tmp.nodeName.toLowerCase() === 'div' && tmp.className.toLowerCase().indexOf('con') !== -1) {
                    con.push(tmp);
                }
            }
            if (con.length > 0) {
                contents.push(con);
            }
            return contents;
        }


        var nodes = getNode();
        for (var i in nodes) {
            for (var j in nodes[i]) {
                if ((parseInt(j) + 1) % 4 == 0) {
                    nodes[i][j].className += ' con_last';
                }
            }
        }


    })();
</script>
<script src="https://www.baidu.com/js/bdsug.js?v=1.0.3.0"></script>
<div class="footer3" >
	<!--	<p >Copyright@国家重大科技基础实施——未来网络北大深圳创新中心/深圳市信息论与未来网络体系重点实验室<a target="_blank" href="" ></a></p> -->
</div>
</body>
</html>


