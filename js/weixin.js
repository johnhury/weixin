;(function($){
    $.fn.wx = function(option){
        var $wx = $(this);
        var opts = $.extend({},$.fn.wx.defaults,option);  // 缁ф壙浼犲叆鐨勫€�

        document.addEventListener("WeixinJSBridgeReady", function(){
            window.G_WEIXIN_READY = true;
        }, false);

        function CallWeiXinAPI(fn, count){
            var total = 2000;   //30s     
            count = count || 0;
            
            if(true === window.G_WEIXIN_READY || ("WeixinJSBridge" in window)){
                fn.apply(null, []);
            }else{
                if(count <= total){
                    setTimeout(function(){
                        CallWeiXinAPI(fn, count++);
                    }, 15);
                }
            }
        }

        var _unit = {
             execHandler : function(handler){
                if(handler && handler instanceof Object){
                    var callback = handler.callback || null;
                    var args = handler.args || [];
                    var context = handler.context || null;
                    var delay = handler.delay || -1;

                    if(callback && callback instanceof Function){
                        if(typeof(delay) == "number" && delay >= 0){
                            setTimeout(function(){
                                callback.apply(context, args);
                            }, delay);
                        }else{
                            callback.apply(context, args);
                        }
                    }
                }
            },
            execAfterMergerHandler : function(handler, _args){
                if(handler && handler instanceof Object){
                    var args = handler.args || [];

                    handler.args = _args.concat(args);
                }
                
                this.execHandler(handler);
            }
        };

        var _api = {
            Share : {
                "weibo" : function(options, handler){
                    CallWeiXinAPI(function(){
                        WeixinJSBridge.on("menu:share:weibo",function(argv){
                            WeixinJSBridge.invoke('shareWeibo', options, function(res){
                                _unit.execAfterMergerHandler(handler, [res]);
                            });
                        });
                    });
                },
                "timeline" : function(options, handler){
                    CallWeiXinAPI(function(){
                        WeixinJSBridge.on("menu:share:timeline",function(argv){
                            WeixinJSBridge.invoke('shareTimeline', options, function(res){
                                _unit.execAfterMergerHandler(handler, [res]);
                            });
                        });
                    });
                },
                "message" : function(options, handler){
                    CallWeiXinAPI(function(){
                        WeixinJSBridge.on("menu:share:appmessage",function(argv){
                            WeixinJSBridge.invoke('sendAppMessage', options, function(res){
                                _unit.execAfterMergerHandler(handler, [res]);
                            });
                        });
                    });
                }
            },
            "setToolbar" : function(visible, handler){
                CallWeiXinAPI(function(){
                    if(true === visible){
                        WeixinJSBridge.call('showToolbar');
                    }else{
                        WeixinJSBridge.call('hideToolbar');
                    }
                    _unit.execAfterMergerHandler(handler, [visible]);
                });
            },
            "setOptionMenu" : function(visible, handler){
                CallWeiXinAPI(function(){
                    if(true === visible){
                        WeixinJSBridge.call('showOptionMenu');
                    }else{
                        WeixinJSBridge.call('hideOptionMenu');
                    }
                    _unit.execAfterMergerHandler(handler, [visible]);
                });
            },
            "pay" : function(data, handlerMap){
                CallWeiXinAPI(function(){
                    var requireData = {"appId":"","timeStamp":"","nonceStr":"","package":"","signType":"","paySign":""};
                    var map = handlerMap || {};
                    var handler = null;
                    var args = [data];

                    for(var key in requireData){
                        if(requireData.hasOwnProperty(key)){
                            requireData[key] = data[key]||"";
                            console.info(key + " = " + requireData[key]);
                        }
                    }

                    WeixinJSBridge.invoke('getBrandWCPayRequest', requireData, function(response){
                        var key = "get_brand_wcpay_request:";
                        switch(response.err_msg){
                            case key + "ok":
                                handler = map.success;
                                break;
                            case key + "fail":
                                handler = map.fail || map.error;
                                break;
                            case key + "cancel":
                                handler = map.cancel || map.error;
                                break;
                            default:
                                handler = map.error;
                                break;
                        }

                        _unit.execAfterMergerHandler(handler, args);
                    });
                });                
            }
        };

        var opt1 = {
            "content" : opts.con
        };

        var opt2 = {
            "img_url" : opts.img,
            "img_width" : 180,
            "img_height" : 180,
            "link" : opts.link,
            "desc" : opts.con,
            "title" : opts.title
        };

        // var opt3 = $.extend({"appid":"wx21f7e6a981efd178"}, opt2);

        handler = {
            callback : function(){
                
            }
        };

        _api.Share.timeline(opt2,handler);
        _api.Share.message(opt2,handler);
        _api.Share.weibo(opt1,handler);

        return $wx;
    };
    $.fn.wx.defaults = {
        title : '遵义欧亚男科医院',
        con : '20年男科品牌，遵义男人的第一选择!',
        link : document.URL,
        img  : 'http://nk.ffsyz.com/wx/img/logo.jpg'
    };

$.fn.wx.version = '1.0.0';

})(Zepto);

