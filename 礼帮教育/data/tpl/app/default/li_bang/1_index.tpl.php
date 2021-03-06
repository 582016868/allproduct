<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" href="../addons/li_bang/template/public/index.css">
<link rel="stylesheet" href="../addons/li_bang/template/public/img_cengdie.css">
<div class="content1">
     <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_header', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_header', TEMPLATE_INCLUDEPATH));?>
    <!-- 产品与服务开始 -->
    <div class="product main_title">
        <div class="title">
            <p></p>
            <p><?php  echo $product['name'];?></p>
            <p><?php  echo $product['ename'];?></p>
            <p>一</p>
        </div>
        <div class="service">  
            <?php  if(is_array($procate)) { foreach($procate as $index => $item) { ?>
            <li>
                <div class="img">
                    <div class="mui-slider">
                        <div class="mui-slider-group mui-slider-loop">
                            <!--支持循环，需要重复图片节点-->
                            <div class="mui-slider-item mui-slider-item-duplicate">
                                <img src="../attachment/<?php  echo $item['end'];?>" />
                            </div>
                             <?php  if(is_array($item['intro'])) { foreach($item['intro'] as $index => $items) { ?>
                            <div class="mui-slider-item">
                                    <img src="../attachment/<?php  echo $items;?>" />
                            </div>
                            <?php  } } ?>
                            <!--支持循环，需要重复图片节点-->
                            <div class="mui-slider-item mui-slider-item-duplicate">
                                <img src="../attachment/<?php  echo $item['first'];?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="model">
                    <p><?php  echo $item['name'];?></p>
                    <p><a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=<?php  echo $item['pid'];?>&pid=<?php  echo $item['id'];?>">查看更多 ></a></p>
                </div>
                <div class="clear"></div>
            </li>
            <?php  } } ?>
            <div class="clear"></div>
        </div>
    </div>
    <style>
        .product .service li .model p:first-child{
            font-size:1.5rem;
            line-height: 2rem;
            margin-bottom: 20px;
            margin-top: 34%;
          	letter-spacing: 1px;
        }
        .product .service li .model p:nth-child(2) a{
            font-size: 1rem;
    	    color:#fff;
    	    text-decoration: none;
        }
        .product .service li .model p:last-child:hover{
        	border-bottom: solid 2px #fff;
        }
        .ritual .more a{
      	    color:#2583C0;
        }
        /*关于礼邦轮播*/
        .picture, .img_banner, .imgList, .imgList>li, .imgList img{margin: 0;padding: 0; font-size: 0;}
	    ul,li{list-style: none;}
	    .img_banner{position:relative;width: 100%;height: 100%;overflow: hidden;}
	    .imgList{position:relative;width:5000px;height:100%;z-index: 10;overflow: hidden;}
	    .imgList li{float:left;display: inline; height: 100%;}
	    .imgList li img{width: 100%; height: 100%;}
    </style>
    <!-- 产品与服务结束 -->
    <!-- 关于礼邦开始 -->
    <div class="me">
    <div class="ritual">
        <!-- 蓝色背景 -->
        <div class="back">
            <!-- 简介 -->
            <div class="intro main_title">
                <div class="title"><?php  echo $libang['name'];?></div>
                <div class="line"></div>
                 
                <div class="content"><?php  echo $libintro['intro'];?></div>
                <div class="more"><a href="<?php  echo $this->createMobileUrl('aboutmore')?>&id=<?php  echo $libintro['id'];?>" style="color:#428bca;">查看更多 <span class="arrow">></span></a></div>
            </div>
            <!--<div class="picture"><img src="../attachment/<?php  echo $libintro['image'];?>" alt=""></div>-->
            <div class="picture"><!-- 最外层部分 -->
			    <div class="img_banner"><!-- 轮播部分 -->
			      <ul class="imgList"><!-- 图片部分 -->
			      	<?php  if(is_array($libintro['image'])) { foreach($libintro['image'] as $index => $item) { ?>
			        <li><img src="../attachment/<?php  echo $item;?>" alt=""></li>
			        <?php  } } ?>
			      </ul>
			    </div>
			</div>
			
        </div>
    </div>
    </div>
    <!-- 关于礼邦结束 -->
    <!-- 客户案例开始 -->
    <div class="customer main_title">
        <div class="title">
            <p></p>
            <p><?php  echo $client['name'];?></p>
            <p><?php  echo $client['ename'];?></p>
            <p>一</p>
        </div>
        <div class="Cooldog_container">
		    <div class="Cooldog_content">
		        <ul>
		        	<?php  if(is_array($cliintro)) { foreach($cliintro as $index => $item) { ?>
			        	<li class="pic<?php  echo $index;?>">
			                <a href="#">
			                    <img src="../attachment/<?php  echo $item['image'];?>" alt="error">
			                </a>
			                <div class="more">
			                    <p><?php  echo $item['title'];?></p>
			                    <p>
			                        <a href="<?php  echo $this->createMobileUrl('productmore')?>&id=<?php  echo $item['id'];?>">查看更多 ></a>
			                    </p>
			                </div>
			            </li>
		        	<?php  } } ?>
		        </ul>
		    </div>
		    <a href="javascript:;" class="btn_left">
		        <i class="iconfont icon-zuoyoujiantou"></i>
		    </a>
		    <a href="javascript:;" class="btn_right">
		        <i class="iconfont icon-zuoyoujiantou-copy-copy"></i>
		    </a>
		</div>
    </div>
    <!-- 客户案例结束 -->
    <!-- 礼邦商城开始 -->
    <div class="mwai" id="lbsc">
    <div class="mall main_title">
        <div class="title" style="padding-top:70px;">
            <p></p>
            <p><?php  echo $shop['name'];?></p>
            <p><?php  echo $shop['ename'];?></p>
            <p>一</p>
        </div>
        <ul>
             <?php  if(is_array($link)) { foreach($link as $index => $item) { ?>
            <li>
                <img src="../attachment/<?php  echo $item['image'];?>" alt="">
                <a href="<?php  echo $this->createMobileUrl('jieshao')?>&action=get&id=<?php  echo $item['id'];?>"><div class="pass">点击进入 ></div></a>
            </li>
            <?php  } } ?>
        </ul>
        <div class="oa">
            <div class="email">
            <div class="pho"></div>
            </div>
            <div class="menu" id="me1">
                <form class="form-inline" role="form">
                    <div class="form-group" style="width:76px;height:38px;border-radius:5px;border:1px solid rgba(0,0,0,.2);position:relative;left:-36px;top:-6px;">
                        <select class="form-control">
                            <option style="">邮箱</option>
                            <option style="">OA系统</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="name">邮箱</label>
                        <input type="text" class="form-control" id="name" placeholder="请输入账号">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="name">名称</label>
                        <input type="password" class="form-control" id="pass" placeholder="请输入密码">
                    </div>
                    <a href="https://exmail.qq.com/cgi-bin/loginpage" style="width: 0; height: 0; display: inline-block; border: none;"><button type="button" class="btn btn-primary sub">登录</button></a>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- 礼邦商城结束 -->
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_footer', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_footer', TEMPLATE_INCLUDEPATH));?>
</div>
<style>
    .news{
        display:none;
    }
    .ac{
        color:white;
        background: #1F80BE;
    }
</style>
<!--关于礼邦轮播-->
<script type="text/javascript">
	var curIndex = 0, //当前index
	imgLen = $(".imgList li").length; //图片总数
	var img_width = $('.picture').width();
	$('.imgList li').width(img_width)
	// 定时器自动变换2.5秒每次
	var autoChange = setInterval(function() {
		if(curIndex < imgLen - 1) {
			curIndex++;
		} else {
			curIndex = 0;
		}
		//调用变换处理函数
		changeTo(curIndex);
	}, 3000);
	
	function changeTo(num) {
		var img_width = $('.picture').width();
//		alert(img_width);
		var goLeft = num * img_width;
		$(".imgList").animate({ left: "-" + goLeft + "px" }, 1500);
		$(".infoList").find("li").removeClass("infoOn").eq(num).addClass("infoOn");
		$(".indexList").find("li").removeClass("indexOn").eq(num).addClass("indexOn");
	}
</script>
<script type="text/javascript">
    var gallery = mui('.mui-slider');
        gallery.slider({
        	interval: 6000  //自动轮播周期，若为0则不自动播放，默认为0；
        });
    $('.sys').click(function(){
        $(this).addClass('ac');
        $('.ema').removeClass('ac');
        $('#me2').css('display','block');
        $('#me1').css('display','none');
    });
    $('.ema').click(function () {
        $(this).addClass('ac');
        $('.sys').removeClass('ac');
        $('#me2').css('display', 'none');
        $('#me1').css('display', 'block');
    });
    
	//客户案例层叠式轮播图
    $(function () {
    	var _len = $('.Cooldog_content li').length - 1;
    	var arr = new Array();
    	for(var i = 0; i <= _len; i++){
    		arr[i]='pic'+i;
    		if(i>=6){
    			arr[i]='pic6';
    		}
    	}
		
		//上一张
		$('.btn_left').on('click', function () {
			btn_right();
		});
		
		//下一张
		$('.btn_right').on('click', function () {
                        btn_left();
		});
		
		//图片自动轮播
		timer = setInterval(btn_left, 4000);
		
		//点击上一张的封装函数
		function btn_left() {
			arr.unshift(arr[_len]);
			arr.pop();
			$('.Cooldog_content li').each(function (i, e) {
				$(e).removeClass().addClass(arr[i]);
			})
			index--;
			if (index < 0) {
				index = _len;
			}
			// show();
		}
		
		//点击下一张的封装函数
		function btn_right() {
			arr.push(arr[0]);
			arr.shift();
			$('.Cooldog_content li').each(function (i, e) {
				$(e).removeClass().addClass(arr[i]);
			})
			index++;
			if (index > _len) {
				index = 0;
			}
			// show();
		}
	})
</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>