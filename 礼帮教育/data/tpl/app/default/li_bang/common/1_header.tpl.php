<?php defined('IN_IA') or exit('Access Denied');?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<title>
	礼邦教育
	</title>
	<meta name="format-detection" content="telephone=no, address=no">
	<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
	<meta name="apple-touch-fullscreen" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<link rel="shortcut icon" href="<?php  echo $_W['siteroot'];?><?php  echo $_W['config']['upload']['attachdir'];?>/<?php  if(!empty($_W['setting']['copyright']['icon'])) { ?><?php  echo $_W['setting']['copyright']['icon'];?><?php  } else { ?>images/global/wechat.jpg<?php  } ?>" />
	<script src="https://res.wx.qq.com/open/js/jweixin-1.3.2.js"></script>
	<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/app/util.js"></script>
	<script src="<?php  echo $_W['siteroot'];?>app/resource/js/require.js"></script>
	<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/jquery-1.11.1.min.js?v=20170802"></script>
	<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/mui.min.js?v=20170802"></script>
	<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/app/common.js?v=20170802"></script>
	<link href="<?php  echo $_W['siteroot'];?>app/resource/css/bootstrap.min.css?v=20170802" rel="stylesheet">
	<link href="<?php  echo $_W['siteroot'];?>app/resource/css/common.min.css?v=20170802" rel="stylesheet">
	<link rel="stylesheet" href="../addons/li_bang/template/public/index.css">
	<script type="text/javascript">
	if(navigator.appName == 'Microsoft Internet Explorer'){
		if(navigator.userAgent.indexOf("MSIE 5.0")>0 || navigator.userAgent.indexOf("MSIE 6.0")>0 || navigator.userAgent.indexOf("MSIE 7.0")>0) {
			alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
		}
	}
	window.sysinfo = {
		<?php  if(!empty($_W['uniacid'])) { ?>'uniacid': '<?php  echo $_W['uniacid'];?>',<?php  } ?>
		<?php  if(!empty($_W['acid'])) { ?>'acid': '<?php  echo $_W['acid'];?>',<?php  } ?><?php  if(!empty($_W['openid'])) { ?>'openid': '<?php  echo $_W['openid'];?>',<?php  } ?>
		<?php  if(!empty($_W['uid'])) { ?>'uid': '<?php  echo $_W['uid'];?>',<?php  } ?>
		'siteroot': '<?php  echo $_W['siteroot'];?>',
		'siteurl': '<?php  echo $_W['siteurl'];?>',
		'attachurl': '<?php  echo $_W['attachurl'];?>',
		'attachurl_local': '<?php  echo $_W['attachurl_local'];?>',
		'attachurl_remote': '<?php  echo $_W['attachurl_remote'];?>',
		<?php  if(defined('MODULE_URL')) { ?>'MODULE_URL': '<?php echo MODULE_URL;?>',<?php  } ?>
		'cookie' : {'pre': '<?php  echo $_W['config']['cookie']['pre'];?>'}
	};
	// jssdk config 对象
	jssdkconfig = <?php  echo json_encode($_W['account']['jssdkconfig']);?> || {};
	// 是否启用调试
	jssdkconfig.debug = false;
	jssdkconfig.jsApiList = [
		'checkJsApi',
		'onMenuShareTimeline',
		'onMenuShareAppMessage',
		'onMenuShareQQ',
		'onMenuShareWeibo',
		'hideMenuItems',
		'showMenuItems',
		'hideAllNonBaseMenuItem',
		'showAllNonBaseMenuItem',
		'translateVoice',
		'startRecord',
		'stopRecord',
		'onRecordEnd',
		'playVoice',
		'pauseVoice',
		'stopVoice',
		'uploadVoice',
		'downloadVoice',
		'chooseImage',
		'previewImage',
		'uploadImage',
		'downloadImage',
		'getNetworkType',
		'openLocation',
		'getLocation',
		'hideOptionMenu',
		'showOptionMenu',
		'closeWindow',
		'scanQRCode',
		'chooseWXPay',
		'openProductSpecificView',
		'addCard',
		'chooseCard',
		'openCard',
		'openAddress'
	];
	</script>
  	<style>
  		body {
  			min-width: 1200px;
  		}
       .container-fill {
                width: 1280px;
            }
          	html {
      			font-size:14px;
      		}
            ul,li{ list-style:none;}
        @media screen and (min-width: 200px) {
        	 .viewpager {
			 	height:440px !important;
			 }
			 .silder-main {
			 	height:440px !important;
			 }
			 .banner {
			 	top: -440px !important;
			 }
        }
        @media screen and (min-width: 1270px) {
            .container-fill {
                width: 1260px;
            }
            .content1 {
                margin-top:-42px;
            }
          	html {
      			font-size:12px;
      		}
            .navigate ul{
                height:45px;
                margin:0 auto;
            }
        	 .viewpager {
			 	height:440px !important;
			 }
			 .silder-main {
			 	height:440px !important;
			 }
			 .banner {
			 	top: -440px !important;
			 }
        }
        @media screen and (min-width: 1350px) {
            .container-fill {
                width: 1340px;
            }
            .content1 {
                margin-top:-42px;
            }
          	html {
      			font-size:16px;
      		}
        }
        @media screen and (min-width: 1590px) {
            .container-fill {
                width: 1580px;
            }
            .content1 {
                margin-top:-42px;
            }
          	html {
      			font-size:16px;
      		}
                .top .research {
                    position: absolute;
                    left: 74%;
                    top: 30px;
                }
            .viewpager {
			 	height:546px !important;
			 }
			 .silder-main {
			 	height:546px !important;
			 }
			 .banner {
			 	top: -546px !important;
			 }
            }
        }
        @media screen and (min-width: 1910px) {
            .container-fill {
                width: 1900px;
            }
            .content1 {
                margin-top:-42px;
            }
            html {
            	font-size:17px;
          	}
          	.top .company {
          		left: 24% !important;
          	}
            .top .research {
                    position: absolute;
                    left: 76%;
                    top: 30px;
                }
.client_nav {
    width: 74% !important;
    margin: 0 auto !important;
}
.client_nav ul {
    display: flex !important;
    justify-content: space-between !important;
}
            .navigate ul li {
                margin-right: 43px !important;
                }
            .yiqi {
            	width: 52% !important;
            }
        }
    </style>
</head>
<body>
<div class="container container-fill">
