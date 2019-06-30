function h(obj) {
	obj.style.behavior = 'url(#default#homepage)';
	obj.setHomePage('http://www.baidu.com/more/')
};
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F9f14aaa038bbba8b12ec2a4a3e51d254' type='text/javascript'%3E%3C/script%3E"));


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
