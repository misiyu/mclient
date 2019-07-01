var MyUserName = "";
var MyGroup = "" ;
var MyPhone = "" ;
var isIP = false ;

MyUserName = getQueryVariable("username");
MyGroup = getQueryVariable("groupname");
MyPhone = getQueryVariable("phone");

function getUserData(obj){
	if(MyUserName == "") {
		alert("请先登录");
		return false ;
	}
	var mlink = obj.href ;
	mlink = mlink + "&username="+MyUserName+"&groupname="+MyGroup+
		"&phone="+MyPhone ;
	window.open(mlink);
}
function load_param(){
	
}
function getQueryVariable(variable)
{
	var query = window.location.search.substring(1);
	var vars = query.split("&");
	for (var i=0;i<vars.length;i++) {
		var pair = vars[i].split("=");
		if(pair[0] == variable){return pair[1];}
	}
	return(false);
}

function load_cert(cer_name){
	$.post("./cer/load_cert.php",{
		cer_name: cer_name
	},
	function(data,status){
		if(data[0] == 0 ){
			var arr = data.split(',');
			MyUserName = arr[1];
			MyGroup = arr[2];
			MyPhone = arr[3];
			//alert(MyUserName + " , "+MyGroup + " , "+ MyPhone);
			var alert_content = "用户名: "+ MyUserName + " ; 所在群: "+MyGroup+" ; 用户ID: "+MyPhone ;
			bs4pop.alert1("证书加载成功", alert_content , function(){

			});
			
		}else{
			alert(data);
		}
	});
}

function ndn_switch(obj){
	var content ;
	if(isIP == false){
		isIP = true ;
		content = "您将使用IP网络上网" ;
		bs4pop.alert1("使用IP网" , content, function(){});
	}
	else{
		isIP = false ;
		content = "您将使用身份网络上网" ;
		bs4pop.alert1("使用身份网" , content, function(){});
	}
	//if(MyUserName == "")
	//{
		//bs4pop.prompt1("上网证书" ,"确认" , "申请证书", "输入证书路径或名称","misiyu",function(ok){
			//if(ok == true){
				//cer_name = document.getElementById("prompt-input").value;
				//load_cert(cer_name);
			//}else{
				////跳转申请加入群
				////window.open( "./cer/gen_cer.html" ) ;
				//window.open( "localhost:8090" ) ;
			//}
			////var group_name = 
			////console.log(group_name);
		//});
	//}
	//else{
		//alert("退出登录") ;
		////obj.value = "ip" ;
		//MyUserName = "";
	//}
}
function login(obj){
	var value = obj.value ;
	//alert(value);
	if(MyUserName == "")
	{
		bs4pop.prompt1("上网证书" ,"确认" , "申请证书", "输入证书路径或名称","misiyu",function(ok){
			if(ok == true){
				cer_name = document.getElementById("prompt-input").value;
				load_cert(cer_name);
			}else{
				//跳转申请加入群
				//window.open( "./cer/gen_cer.html" ) ;
				window.open( "localhost:8090" ) ;
			}
		});
	}
	else{
		alert("退出登录") ;
		MyUserName = "";
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
			//if()
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

function get_ip_data(source_url , group_name){
	$.post("get_ip_data.php",{
		url: source_url ,
		group_name : group_name

	},
	function(data,status){
		if(data == 0 ){
			//alert("传输启动成功: " + data);
			alert(data);
		}else{
			if(data.indexOf("*") != -1){
				alert("传输文本中有不良信息，已经被外访节点过滤");
			}
			bs4pop.alert1("小说阅读" , data, function(){
				//ndn_ndn(input_1);
			});
		}
	});
}

function get_osn_data(source_url , username){
	$.post("get_osn_data.php",{
		url: source_url , 
		username : MyPhone
	},
	function(data,status){
		if(data[0] == '0' ){
			alert("传输启动成功");
		}else{
			//alert("您未获得该主权网签证，请先办理网络签证");
			var arr = source_url.split('/');
			var content ="您未获得该主权网"+ arr[1]+"的签证，请先办理网络签证" ;
			bs4pop.alert1("未签证" , content, function(){
				//ndn_ndn(input_1);
			});
		}
	});
}

function join_group(group_name){

	$.post("./recv_client/groupsig.php",{
		input1: group_name,
		input2: MyPhone,
		input3: MyUserName,
		input4: "",
		input5: ""
	},
		function(data,status){
			if(data[0] == 'o'){
				alert("成功加入群"+group_name+"") ;
				MyGroup = group_name ;
			}else{
				//window.location.href=data;
				alert(data);
			}

		});
}

function add_group(){
	var title = "获取群密钥";
	var content = "选择加入一个群: pkusz , scut , zgdx , jsy" ;
	bs4pop.prompt1( title ,"确认" , "取消", content ,"pkusz",function(ok){
		if(ok == true){
			group_name = document.getElementById("prompt-input").value;
			document.getElementById("ip-ndn-checkbox").value = group_name;
			join_group(group_name);

		}else{
			//跳转申请加入群
			var link ="groupsig.html" + '?value1='+ MyUserName ;
			window.open( link) ;
			//window.open( "./groupsig.html" ) ;
		}
	});
}

function get_visa(osn_name){


	$.post("visa.php",{
		input1: osn_name,
		input2: MyPhone,
		input3: MyUserName,
		input4: "/var/www/html/mclient/keystore/key0",
	},
		function(data,status){
			if(data == "insert OK!"){
				var content = "恭喜，申请主权网"+osn_name+"的网络签证成功";
				bs4pop.alert1("签证成功" , content, function(){});
			}else if(data == "has been inserted!"){
				//window.location.href=data;
				//alert("您已申请过签证了");
				var content = "重复签证";
				bs4pop.alert1("您的签证还有效，不需要重复签证" , content, function(){});
			}else{
				//alert("签证失败");
				var content = "请联系管理员";
				bs4pop.alert1("签证失败" , content, function(){});
			}

		});
}
function get_data(input_1){
	if(isIP && input_1[0] == '/'){
		var content = "您作为IP用户，不能访问主权网内部数据！" ;
		bs4pop.notice(content, {position: 'topright'}) ;
		return false ;
	}
	if(input_1[0] != '/'){
		var title = "获取IP互联网数据 : " + input_1  ;
		var content = "数据拉取行为需要签名并将被记录" ; 
		if(MyGroup == ""){
			content = content+ " 。 您还没加入任何群，为保护您的隐私，推荐先加入一个群" ;
			bs4pop.confirm1(title,"加入一个群","取消访问",content, function(sure){
				if(sure == true){
					add_group();
				}else{
				}
			}) ;
		}else{
			content = content + " 。使用群密钥:"+MyGroup+"进行匿名访问";
			bs4pop.confirm1(title,"确认","取消访问",content, function(sure){
				if(sure == true){
					get_ip_data(input_1 , MyGroup);
				}else{
					add_group();
				}
			}) ;
		}
	}else if(input_1[1] == '-'){
		// different network
		var title = "获取其它主权网数据 : " + input_1 ;
		content ="当前用户为: "+MyUserName + " ; 确保您已获得该主权网的访问签证" ;
		bs4pop.confirm1( title ,"确认","申请签证",content ,function(sure){
			if(sure == true){
				get_osn_data(input_1);	
			}else{
				var arr = input_1.split('/');
				var title = "申请签证" ;
				var content = "为用户" + MyUserName +"申请主权网"+arr[1]+"的网络签证" ;
				bs4pop.confirm1(title,"确定","取消",content, function(sure){
					if(sure == true){
						get_visa(arr[1]);
					}else{
						return ;
					}
				}) ;
				//get_visa(arr[1]);
			}

		}) ;
	}else{
		bs4pop.alert1("访问主权网内部资源" , input_1 , function(){
			ndn_ndn(input_1);
		});
	}
}

function play(obj) {
	//alert("hello");
	var input_1 = obj.title;
	console.log("========================" + input_1 + "\n");
	//document.getElementById("ip-ndn-checkbox").value = "helo";

	if(MyUserName == ""){
		bs4pop.alert1("请先登录" , "打开左上角开关，并上传证书" , function(){
			//return false ;
		});
		return false ;
	}
	get_data(input_1);

}

