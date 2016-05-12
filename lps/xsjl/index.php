<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx065f03f742fbfd9d", "f1045b60f79d1f58255279ac6c3c50d8");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="ch">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>2015亚太区妇科微创技术最新进展-学术交流会</title>
<meta charset="utf-8">
<meta name="apple-touch-fullscreen" content="YES">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="pragram" content="no-cache">
<style>
body{font-family:"Microsoft YaHei",微软雅黑,"Microsoft JhengHei",华文细黑,STHeiti,MingLiu;}
</style>
<link rel="stylesheet" type="text/css" href="img/copyright.css">
<link rel="stylesheet" type="text/css" href="img/main.css">
<link rel="stylesheet" type="text/css" href="img/add2home.css">
<script type="text/javascript" src="img/offline.js"></script>
<!--移动端版本兼容 -->
<script type="text/javascript">
		var phoneWidth = parseInt(window.screen.width);
		var phoneScale = phoneWidth/480;

		var ua = navigator.userAgent;
		if (/Android (\d+\.\d+)/.test(ua)){
			var version = parseFloat(RegExp.$1);
			// andriod 2.3
			if(version>2.3){
				document.write('<meta name="viewport" content="width=480, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
			// andriod 2.3以上
			}else{
				document.write('<meta name="viewport" content="width=480, target-densitydpi=device-dpi">');
			}
			// 其他系统
		} else {
			document.write('<meta name="viewport" content="width=480, user-scalable=no, target-densitydpi=device-dpi">');
		}

		if(IsPC()){
			document.write('<meta name="viewport" content="width=480, user-scalable=no, target-densitydpi=device-dpi">');
			//window.location.href = 'error.html';
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
<meta name="viewport" content="width=480, user-scalable=no, target-densitydpi=device-dpi">
<meta name="viewport" content="width=480, user-scalable=no, target-densitydpi=device-dpi">
<!--移动端版本兼容 end -->
<style type="text/css">
#ads_c_tpc,[class^="ad_float_"],.a_fl,.a_fr,.a_h,.a_pb,.a_pr,.wp.a_f,#ad_text,[id^="ad_headerbanner"],.ad1,#abgne_float_ad,.ad_pip,[id^="ad_thread"],.ad2,.a_cn,.bm.a_c,.a_mu,#ad_wrapper,[id^="ad_footerbanner"],[id^="lovexin1"] {display:none!important;display:none}
.ad,.ad-980x90,.ad-text,[id^="pushAd_"],#sitefocus.focus,.top-ad,.adsbygoogle,[class^="ad_headerbanner"],#gg_head,.ad_column,#header_ad,[class$="_topad"],img[src*="/common/cf/"],#adtext,#ad_headerbanner,font.jammer {display:none!important;display:none}
.wp.a_t {display:none!important;display:none}
.a_pt {display:none!important;display:none}</style>
</head>
<body class="s-bg-ddd pc no-3d" style="-webkit-user-select: none;">
<!--模版加载提示-->
<section class="u-alert"> <img style="display:none;" src="img/loading_large.gif">
      <div class="alert-loading z-move">
            <div class="cycleWrap"> <span class="cycle cycle-1"></span> <span class="cycle cycle-2"></span> <span class="cycle cycle-3"></span> <span class="cycle cycle-4"></span> </div>
            <div class="lineWrap"> <span class="line line-1"></span> <span class="line line-2"></span> <span class="line line-3"></span> </div>
      </div>
</section>
<!--模版加载提示 end-->
<!-- 声音控件 -->
<section class="u-audio" data-src="img/Heartbeats.mp3">
      <p id="coffee_flow" class="btn_audio"> <strong class="txt_audio z-move z-hide">暂停</strong> <span class="css_sprite01 audio_open"></span>
      <div class="coffee-steam-box" style="height: 100px; width: 44px; left: 41px; top: -50px; position: absolute; overflow: hidden; z-index: 0; display: block; -webkit-transition: left 1.121s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s; transition: left 1.121s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s;"><span class="coffee-steam" style="position: absolute; left: -13px; top: 12px; color: rgb(200, 135, 167); font-family: &#39;Lucida Sans Unicode&#39;; display: block; opacity: 0; -webkit-transform: rotate(45deg) scale(0.7287127999588847); -webkit-transition: top 5.455s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; transition: top 5.455s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity;"><img src="img/audio_widget_01@2x.png"></span><span class="coffee-steam" style="position: absolute; left: -10px; top: 49px; color: rgb(119, 117, 56); font-family: &#39;Trebuchet MS&#39;; display: block; opacity: 0; -webkit-transform: rotate(24deg) scale(0.9642953889910132); -webkit-transition: top 4.971s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; transition: top 4.971s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity;"><img src="img/audio_widget_01@2x.png"></span><span class="coffee-steam" style="position: absolute; left: -9px; top: 7px; color: rgb(50, 8, 132); font-family: &#39;Lucida Sans Unicode&#39;; display: block; opacity: 0; -webkit-transform: rotate(-39deg) scale(0.8386090014129877); -webkit-transition: top 4.516s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; transition: top 4.516s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity;"><img src="img/audio_widget_01@2x.png"></span><span class="coffee-steam" style="position: absolute; left: -6px; top: 39px; color: rgb(148, 179, 113); font-family: &#39;MS Serif&#39;; display: block; opacity: 0; -webkit-transform: rotate(68deg) scale(0.4236914956942201); -webkit-transition: top 3.109s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; transition: top 3.109s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity;"><img src="img/audio_widget_01@2x.png"></span><span class="coffee-steam" style="position: absolute; left: -25px; top: 7px; color: rgb(178, 2, 85); font-family: &#39;Courier New&#39;; display: block; opacity: 0; -webkit-transform: rotate(77deg) scale(0.6080557135399431); -webkit-transition: top 3.304s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; transition: top 3.304s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity;"><img src="img/audio_widget_01@2x.png"></span><span class="coffee-steam" style="position: absolute; left: -8px; top: 22px; color: rgb(152, 145, 125); font-family: Geneva; display: block; opacity: 0; -webkit-transform: rotate(-87deg) scale(0.6854198688641191); -webkit-transition: top 5.593s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; transition: top 5.593s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity;"><img src="img/audio_widget_01@2x.png"></span><span class="coffee-steam" style="position: absolute; left: -5px; top: 35px; color: rgb(121, 138, 183); font-family: &#39;Trebuchet MS&#39;; display: block; opacity: 0; -webkit-transform: rotate(20deg) scale(0.9844048983417452); -webkit-transition: top 5.519s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; transition: top 5.519s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity;"><img src="img/audio_widget_01@2x.png"></span><span class="coffee-steam" style="position: absolute; left: -1px; top: 11px; color: rgb(149, 120, 22); font-family: Geneva; display: block; opacity: 0; -webkit-transform: rotate(56deg) scale(0.6522805492393673); -webkit-transition: top 3.715s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; transition: top 3.715s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity;"><img src="img/audio_widget_01@2x.png"></span></div>
      </p>
</section>
<!-- 声音控件 end-->
<!-- 箭头指示引导 -->
<section class="u-arrow">
      <p class="css_sprite01"></p>
</section>
<!-- 箭头指示引导 end-->
<!-- page页面内容 -->
<section class="p-ct transformNode-2d" style="height: 861px;">
      <!-- 旋转正面 -->
      <!-- 旋转正面 end-->
      <!-- 旋转反面 -->
      <div class="translate-back" style="height: 861px;">
            <!-- 封页 1-->
            <div class="m-page m-fengye z-animate" data-page-type="info_pic3" data-statics="info_pic3" style="" data-translate="">
                  <div class="page-con lazy-finish" data-src="img/top.jpg" data-position="50% 50%" data-size="cover" style="background-image: url(img/top.jpg); background-size: cover; height: 863px; background-position: 50% 50%;"></div>
            </div>
            <!-- 封页 end-->
            <!-- 大图文 3-->
            <!-- 大图文 end-->
            <div class="m-page m-bigTxt f-hide" data-page-type="bigTxt" data-statics="info_list" style="height: 861px;">
                  <div class="page-con j-txtWrap lazy-finish" data-src="img/1.jpg" data-position="50% 50%" data-size="cover" style="background-image: url(img/1.jpg); background-size: cover; background-position: 50% 50%;"> </div>
            </div>
            <div class="m-page m-bigTxt f-hide" data-page-type="bigTxt" data-statics="info_list" style="height: 861px;">
                  <div class="page-con j-txtWrap lazy-finish" data-src="img/2.jpg" data-position="50% 50%" data-size="cover" style="background-image: url(img/2.jpg); background-size: cover; background-position: 50% 50%;"> </div>
            </div>
            <!-- 大图文 3-->
            <div class="m-page m-bigTxt f-hide" data-page-type="bigTxt" data-statics="info_list" style="height: 861px;">
                  <div class="page-con j-txtWrap lazy-finish" data-src="img/3.jpg" data-position="50% 50%" data-size="cover" style="background-image: url(img/3.jpg); background-size: cover; background-position: 50% 50%;"></div>
            </div>
            <!-- 大图文 end-->
            <!-- 大图文 3-->
            <div class="m-page m-bigTxt f-hide" data-page-type="bigTxt" data-statics="info_list" style="height: 861px;">
                  <div class="page-con j-txtWrap lazy-finish" data-src="img/4.jpg" data-position="50% 50%" data-size="cover" style="background-image: url(img/4.jpg); background-size: cover; background-position: 50% 50%;"></div>
            </div>
            <!-- 大图文 end-->
            <div class="m-page m-bigTxt f-hide" data-page-type="bigTxt" data-statics="info_list" style="height: 861px;">
                  <div class="page-con j-txtWrap lazy-finish" data-src="img/5.jpg" data-position="50% 50%" data-size="cover" style="background-image: url(img/5.jpg); background-size: cover; background-position: 50% 50%;"></div>
            </div>
            <div class="m-page m-bigTxt f-hide" data-page-type="bigTxt" data-statics="info_list" style="height: 861px;">
                  <div class="page-con j-txtWrap lazy-finish" data-src="img/6.jpg" data-position="50% 50%" data-size="cover" style="background-image: url(img/6.jpg); background-size: cover; background-position: 50% 50%;"></div>
            </div>
			<div class="m-page m-bigTxt f-hide" data-page-type="bigTxt" data-statics="info_list" style="height: 861px;">
                  <div class="page-con j-txtWrap lazy-finish" data-src="img/7.jpg" data-position="50% 50%" data-size="cover" style="background-image: url(img/7.jpg); background-size: cover; background-position: 50% 50%;"></div>
            </div>
			
            <!-- 旋转反面 end-->
      </div>
</section>
<!-- 正文介绍 end-->
<!-- lightapp入口 -->
<div class="market-notice f-hide" data-action="Action://lightapp_open"> 点击了解 </div>
<div class="market-page f-hide" data-action="Action://lightapp_close">
      <div class="market-img"> <a href="http://4g.lpsyhfk.com"> <img src="img/market-tel.jpg"> </a> </div>
</div>
<!-- lightapp入口 end-->
<!--pageLoading-->
<section class="u-pageLoading"> <img src="img/load.gif" alt="loading"> </section>
<!--pageLoading end-->
<!-- 资源传递 -->
<!-- 模版ID -->
<!-- 微信分享信息 -->
<!-- 微信分享信息 -->
<!-- 微信分享信息 -->
<!-- 资源传递 end-->
<!--脚本加载-->
<script src="img/init.mix.js" type="text/javascript" charset="utf-8"></script>
<script src="img/weixin.js" type="text/javascript" charset="utf-8"></script>
<script src="img/coffee.js" type="text/javascript" charset="utf-8"></script>
<script src="img/10_ylMap.js" type="text/javascript" charset="utf-8"></script>
<script src="img/Lottery.js" type="text/javascript" charset="utf-8"></script>
<script src="img/99_main.js" type="text/javascript" charset="utf-8" defer＝'defer'=""></script>
<input id="activity_id" type="hidden" value="3464">
<input id="r-wx-title" type="hidden" value="  ">
<input id="r-wx-img" type="hidden" value=" ">
<input id="r-wx-con" type="hidden" value=" ">
<!--脚本加载 end-->
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
			title: '亚太区妇科微创技术学术交流会', // 分享标题
			desc: '2015亚太区妇科微创技术最新进展-学术交流会', // 分享描述
			link: '', // 分享链接
			imgUrl: 'http://img.bjkxy010.com/wx/lps/xsjl/img/face.jpg', // 分享图标
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
			title: '亚太区妇科微创技术学术交流会', // 分享标题
			desc: '2015亚太区妇科微创技术最新进展-学术交流会', // 分享描述
			link: '', // 分享链接
			imgUrl: 'http://img.bjkxy010.com/wx/lps/xsjl/img/face.jpg', // 分享图标
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
			title: '亚太区妇科微创技术学术交流会', // 分享标题
			desc: '2015亚太区妇科微创技术最新进展-学术交流会', // 分享描述
			link: '', // 分享链接
			imgUrl: 'http://img.bjkxy010.com/wx/lps/xsjl/img/face.jpg', // 分享图标
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
			title: '亚太区妇科微创技术学术交流会', // 分享标题
			desc: '2015亚太区妇科微创技术最新进展-学术交流会', // 分享描述
			link: '', // 分享链接
			imgUrl: 'http://img.bjkxy010.com/wx/lps/xsjl/img/face.jpg', // 分享图标
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
</body>
<style type="text/css" id="32439172000">
</style>
</html>
