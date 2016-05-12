<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx065f03f742fbfd9d", "f1045b60f79d1f58255279ac6c3c50d8");
$signPackage = $jssdk->GetSignPackage();
?>
<!doctype html>
<html lang="ch">
<head>
 <meta charset="utf-8" />
<title>詹家喜宴-邀请函</title>
<meta name="descripton" content="谨定于2015年2月24日，为：詹俊新先生 张益萍女士举行结婚典礼。">
 <meta name="apple-touch-fullscreen" content="YES" />
 <meta name="format-detection" content="telephone=no" />
 <meta name="apple-mobile-web-app-capable" content="yes" />
 <meta name="apple-mobile-web-app-status-bar-style" content="black" />
 <meta http-equiv="Expires" content="-1" />
 <meta http-equiv="pragram" content="no-cache" />
 <link rel="stylesheet" type="text/css" href="css/copyright.css" />
 <link rel="stylesheet" type="text/css" href="css/main.css" />
 <link rel="stylesheet" type="text/css" href="css/add2home.css" />
 <script type="text/javascript" src="js/offline.js" ></script>
 
 <script type="text/javascript">
 
  var phoneWidth = parseInt(window.screen.width);
  var phoneScale = phoneWidth/640;

  var ua = navigator.userAgent;
  if (/Android (\d+\.\d+)/.test(ua)){
   var version = parseFloat(RegExp.$1);
   if(version>2.3){
    document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
   }else{
    document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
   }
  } else {
   document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
  }
  if(IsPC()){
   window.location.href = '/';
  }
  function IsPC() {
   var userAgentInfo = navigator.userAgent;
   var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
   var flag = true;
   for (var v = 0; v < Agents.length; v++) {
    if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }
   }
   return flag;
  }
  
 </script>
  <title>谨定于2015年2月24日，为詹俊新先生 张益萍女士举行结婚典礼</title>

</head>

<body class='s-bg-ddd'>
<div style="display:none;"><img src="http://img.bjkxy010.com/wx/qingjian8/img/001.jpg?newfsa"></div>
<section class="u-alert">
 <div style='display:none;'><img  src="img/loading_large.gif" /></div>
<!--  <div class='alert-loading z-move'>
  <div class='cycleWrap'>
   <span class='cycle cycle-1'></span>
   <span class='cycle cycle-2'></span>
   <span class='cycle cycle-3'></span>
   <span class='cycle cycle-4'></span>
  </div>
  <div class="lineWrap">
   <span class='line line-1'></span>
   <span class='line line-2'></span>
   <span class='line line-3'></span>
  </div>
 </div> -->
<div id="app-loading" class="app-loading">
<div class="cycleWrap">
<span class="cycle cycle-1"></span>
<span class="cycle cycle-2"></span>
<span class="cycle cycle-3"></span>
<span class="cycle cycle-4"></span>
</div>
<span class="logoText">loading...</span>
</div>
</section>
<section class='u-audio f-hide' data-src='Unheilig-Neuland.mp3'>
 <p id='coffee_flow' class="btn_audio">
  <strong class='txt_audio z-hide'> </strong>
  <span class='css_sprite01 audio_open'></span>
 </p>
</section>
<section class='u-arrow f-hide'><p class="css_sprite01"></p></section>
<!-- 箭头指示引导 end-->
  
<!-- page页面内容 -->
<section class='p-ct'>
 <!-- 旋转正面 -->

 <!-- 旋转正面 end-->

 <!-- 旋转反面 -->
 <div class='translate-back f-hide'>
  <!-- 封页 1-->
  <!-- 擦一擦 --><input id="ca-tips"   type="hidden" value="" />
  <!-- 蒙板背景图 -->
  
  <div class='m-page m-fengye f-hide' data-page-type='info_pic3' data-statics='info_pic3'>
   <div class="page-con lazy-img" data-src='img/001.jpg?dfnwef'></div>
  </div>
  <!-- 封页 end-->

 
  <!-- 大图文1 -->
  <div class='m-page m-bigTxt f-hide' data-page-type='bigTxt' data-statics=''>
   <div class="page-con j-txtWrap lazy-img" data-src='img/index.jpg'>
   </div>
  </div>
  <!-- 大图文 end-->
  

  <!-- 大图文 3-->
  <div class='m-page m-bigTxt f-hide' data-page-type='bigTxt' data-statics=''>
   <div class="page-con j-txtWrap lazy-img" data-src='img/2.jpg?234dxf54'>
   </div>
  </div>
  <!-- 大图文 end-->


  <!-- 大图文 7-->
  <div class='m-page m-bigTxt f-hide' data-page-type='bigTxt' data-statics=''>
   <div class="page-con j-txtWrap lazy-img" data-src='img/6.jpg?f434512'></div>
  </div>
  <!-- 大图文 end-->

    
  <!-- 大图文 12-->
  <div class='m-page m-bigTxt f-hide' data-page-type='bigTxt' data-statics=''>
   <div class="page-con j-txtWrap lazy-img" data-src='img/19.jpg?newa32s'></div>
  </div>
  <!-- 大图文 end-->
    <!-- 视频-->
  <div class='m-page m-bigTxt f-hide' data-page-type='bigTxt' data-statics=''>
   <div class="page-con j-txtWrap lazy-img" data-src='img/21.jpg?f2afz37e'></div>
   <div class="meiti_nr" style="position: absolute;top: 120px;left: 13px;">
  <DIV class=close_light_bg id=close_light_bg></DIV>
  <div class="video" id="CuPlayer"> 
    <SCRIPT LANGUAGE=JavaScript>
<!--
var vID        = ""; 
var vWidth     = 614;
var vHeight    = 428;
var vFile      = "img/CuSunV2set.xml";
var vPlayer    = "img/player.swf?v=2.5";
var vMp4url    = "img/movie.mp4";
var vPic       = "img/movie.jpg";
//-->
</SCRIPT> 
    <SCRIPT LANGUAGE=JavaScript>
	
	
	
function getLight(pars)
{	
	//alert("播放器模式参数值："+string+"");
	if(pars == "open")
	{
		close_light(this);
	}
	else
	{
		close_light(this);
	}
}
//兼容性
function thisMovie(movieName) {
    if (navigator.appName.indexOf("Microsoft") != -1) {
        return window[movieName]
    }
    else {
        return document[movieName]
    }
}
</SCRIPT> 
    <script class="CuPlayerVideo" data-mce-role="CuPlayerVideo" type="text/javascript" src="js/AsComV3.js"></script> 
    <SCRIPT language=javascript src="js/action.js" type=text/javascript></SCRIPT> 
  </div></div>

  </div>  
  <!-- 大图文 end--> 

<!--ditu-->
<div class='m-page m-bigTxt f-hide' data-page-type='bigTxt' data-statics=''>
   <div class="page-con j-txtWrap lazy-img" data-src='img/20.jpg'>
   </div>
   <div style="position:absolute;top:0;left:0;z-index:90;">
   <img src="img/wenzi.png"></div>
   <div class="map_area">
   <div style="position:absolute;top:150px;left:12px;z-index:999;">
   <div id="dituContent" style="border-bottom: #ccc 1px solid; border-left: #ccc 1px solid; width: 613px; height: 330px; border-top: #ccc 1px solid; border-right: #ccc 1px solid;position:relative;z-index:999"></div>
   </div>
        <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
        <!--百度地图容器-->
        <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(119.012741,25.254202);//定义一个中心点坐标
        map.centerAndZoom(point,15);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    function addMapControl(){
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    var markerArr = [{title:'莆田市秀屿区东庄镇马厂小学旁',content:"<a href='http://api.map.baidu.com/marker?location=119.027079,25.253974&title=地图导航&content=%E7%A6%8F%E5%BB%BA%E7%9C%81%E8%8E%86%E7%94%B0%E5%B8%82%E4%B8%9C%E5%BA%84&output=html' title='点击一键导航'>点击一键导航</a>",point:"119.027079|25.253974",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#123456",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }

    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }

    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();
    </script>
  </div>  
<style>
.hinfo {
position: absolute;
top: 550px;
left: 190px;
width: 250px;
z-index: 9999;
}
.hinfo p{height:44px;font-size:16px;color:#fff;line-height:44px;background:url("img/icon.png") no-repeat #4BC7C7;margin:15px;text-indent:60px;overflow:hidden;}
.hinfo p.hour{background-position:17px -65px ;}
.hinfo p.phone{background-position:17px -123px ;}
.hinfo p.guide{background-position:17px -183px ;background-color:#F86868;}
.hinfo p a{display:block;width:100%;color:#fff}
.map_in {position:absolute;top:630px;left:0px;z-index:9999;padding: 0px 17px;width: 95%;}
.map_info {
padding: 20px 0px;
background: #ccc;
font: 22px/22px "黑体";
text-indent: 2em;
}
.line {
height: 2px;
background: url(../img/22_line_02.png) repeat-x;
margin: 0px auto;
}
.ul_item {
clear: both;
width: 100%;
margin: 10px auto 0;
padding: 0px 0px;
border-top: 1px #444239 solid;
border-bottom: 1px #7d7a74 solid;
border-collapse: separate;
}
.ul_item li {
float: left;
width: 50%;
height: 50px;
line-height: 22px;
font-size: 16px;
color: #fff;
border-top: 1px #7d7a74 solid;
border-bottom: 1px #444239 solid;
padding-top: 10px;
padding-bottom: 10px;
}
.ul_item li a {
color: #fff;
}
.ul_item li:first-child i, .ul_item li:nth-child(2) i, .ul_item li:nth-child(3) i, .ul_item li:nth-child(4) i {
display: inline-block;
float: left;
width: 48px;
height: 48px;
text-align: center;
margin: 1px 8px 1px 0px;
background: url(img/22_icons.png) no-repeat;
background-size: 200px auto;
}
.ul_item li:first-child i{background-position: 0px 0px;}
.ul_item li:nth-child(2) i{background-position: -48px 0px;}
.ul_item li:nth-child(3) i{background-position: -96px 0px;}
.ul_item li:nth-child(4) i{background-position: -144px 0px;}
.countdown{
font: 24px/40px '微软雅黑';
color: #FFFFFF;
width: 100%;
height: 40px;
margin: 5px;
text-align: center;}
#day_num{color: #F9E580;
margin: 0 10px;
font: 26px/40px '微软雅黑';}
</style>

<div class="hinfo">        
                   <p class="guide"><a href="http://api.map.baidu.com/marker?location=119.027079,25.253974&title=地图导航&content=%E7%A6%8F%E5%BB%BA%E7%9C%81%E8%8E%86%E7%94%B0%E5%B8%82%E4%B8%9C%E5%BA%84&output=html" title="点击一键导航">点击一键导航</a></p>
                  
            

        </div>
<div class="map_in">
<div class="map_info">莆田市秀屿区东庄镇马厂小学旁</div>
<div class="line"></div>
<ul class="ul_map">
<div style="clear:both;"></div>
</ul>
<ul class="ul_item">
<li><a href="tel:15085886566"><i></i>PHONE CALL<br>给新郎打电话</a></li>
<li><a href="tel:15985587856"><i></i>PHONE CALL<br>给新娘打电话</a></li>
<li><a href="javascript:show(2);window.scrollTo(0, -1);"><i></i>Wechat<br>分享到微信</a></li>
<li><a href="http://www.weibo.com/"><i></i>Weibo<br>分享到微博</a></li>
                <div style="clear:both;"></div>
</ul>
<div class="countdown">婚礼倒计时<span id="day_num"><script>
var oDate=new Date();
var oDay=oDate.getDate();
var myday=24-oDay;
if(myday>=0)
{document.write(myday);}
else
{document.write('0');}
</script></span>天</div>
</div>
</div>
 <!-- 旋转反面 end-->
</section>
<!-- 正文介绍 end-->

<!-- lightapp入口 -->
<div class='market-notice f-hide' data-action='Action://lightapp_open' style="display:none;">
 点击了解
</div>
<div class='market-page f-hide' data-action='Action://lightapp_close'>
 <div class='market-img'>

  <a href='tel:#'>
   <img src='img/market-tel.png'/>
  </a>
 </div>
</div>
<!-- lightapp入口 end-->
<!--pageLoading-->
<section class="u-pageLoading">
 <img src="img/load.jpg" alt="loading" />
</section>
<!--pageLoading end-->
<!-- 资源传递 -->
<!-- 模版ID --><input id="activity_id" type="hidden" value='3464' />
<!-- 微信分享信息 --><input id="r-wx-title" type="hidden" value="詹家喜宴-邀请函" />
<!-- 微信分享信息 --><input id="r-wx-img"   type="hidden" value="img/001.jpg" />
<!-- 微信分享信息 --><input id="r-wx-con"   type="hidden" value="谨定于2015年2月24日，为：詹俊新先生 张益萍女士举行结婚典礼。" />
<!-- 资源传递 end-->
<!--脚本加载-->
<script src="js/init.mix.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coffee.js" type="text/javascript" charset="utf-8"></script>
<script src="js/10_ylMap.js" type="text/javascript" charset="utf-8"></script>
<script src="js/Lottery.js" type="text/javascript" charset="utf-8"></script>
<script src="js/99_main.js" type="text/javascript" charset="utf-8" defer="defer"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<!--脚本加载 end-->
<script>
  wx.config({
    debug: 0,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: 
      ['onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo']
  });
  wx.ready(function () {
		  // 1 判断当前版本是否支持指定 JS 接口，支持批量判断
		  wx.onMenuShareAppMessage({
			title: '詹家喜宴-邀请函', // 分享标题
			desc: '谨定于2015年2月24日，为：詹俊新先生 张益萍女士举行结婚典礼。', // 分享描述
			link: '', // 分享链接
			imgUrl: 'http://img.bjkxy010.com/wx/qingjian8/img/001.jpg', // 分享图标
			type: '', // 分享类型,music、video或link，不填默认为link
			dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
			success: function () { 
			//alert("分享成功");
			},
			cancel: function () { 
			//	alert("分享失败");
			}
		});
		wx.onMenuShareTimeline({
			title: '詹家喜宴-邀请函', // 分享标题
			desc: '谨定于2015年2月24日，为：詹俊新先生 张益萍女士举行结婚典礼。', // 分享描述
			link: '', // 分享链接
			imgUrl: 'http://img.bjkxy010.com/wx/qingjian8/img/001.jpg', // 分享图标
			type: '', // 分享类型,music、video或link，不填默认为link
			dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
			success: function () { 
			//alert("分享成功");
			},
			cancel: function () { 
			//	alert("分享失败");
			}
		});
		wx.onMenuShareQQ({
			title: '詹家喜宴-邀请函', // 分享标题
			desc: '谨定于2015年2月24日，为：詹俊新先生 张益萍女士举行结婚典礼。', // 分享描述
			link: '', // 分享链接
			imgUrl: 'http://img.bjkxy010.com/wx/qingjian8/img/001.jpg', // 分享图标
			type: '', // 分享类型,music、video或link，不填默认为link
			dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
			success: function () { 
			alert("分享成功");
			},
			cancel: function () { 
				alert("分享失败");
			}
		});
		wx.onMenuShareTimeline({
			title: '詹家喜宴-邀请函', // 分享标题
			desc: '谨定于2015年2月24日，为：詹俊新先生 张益萍女士举行结婚典礼。', // 分享描述
			link: '', // 分享链接
			imgUrl: 'http://img.bjkxy010.com/wx/qingjian8/img/001.jpg', // 分享图标
			type: '', // 分享类型,music、video或link，不填默认为link
			dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
			success: function () { 
			alert("分享成功");
			},
			cancel: function () { 
				alert("分享失败");
			}
		});
  });

</script>
<script>
var biaoshi=false;
function gogogo(){
 var memusic = document.getElementById('memusic');  	 
	  //requestAnimationFrame(gogogo);
	   if($("#control").attr("class").indexOf("z-current")>=0)
	   {
	        if(!biaoshi){			
				 memusic.pause();				 
				 biaoshi=true;
			 }			 
	   }
	    if($("#control").attr("class").indexOf("z-current")<0)
	   {   
		  if(biaoshi){		  
		 memusic.play();
		  biaoshi=false;
		  }  
	   }
	  setTimeout(gogogo,500);
	}
	window.onload=function(){gogogo();}
</script>
</body>
</html>