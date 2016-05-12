
wx.config({
    debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
    appId: 'wx065f03f742fbfd9d', // 必填，公众号的唯一标识
    timestamp:1423744398, // 必填，生成签名的时间戳
    nonceStr: 'deqwefadsfadfasdf', // 必填，生成签名的随机串
    signature: '9d40444e8b0ff85c098468c0797fef692aadd359',// 必填，签名，见附录1
    jsApiList: ['onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
});


wx.onMenuShareAppMessage({
    title: '詹家喜宴-邀请函', // 分享标题
    desc: '谨定于2015年2月24日，为：詹俊新先生 张益萍女士举行结婚典礼。', // 分享描述
    link: '', // 分享链接
    imgUrl: 'http://img.bjkxy010.com/wx/qingjian/img/001.jpg', // 分享图标
    type: '', // 分享类型,music、video或link，不填默认为link
    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
    success: function () { 
    
    },
    cancel: function () { 
       
    }
});