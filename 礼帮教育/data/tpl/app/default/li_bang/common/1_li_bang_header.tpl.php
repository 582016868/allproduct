<?php defined('IN_IA') or exit('Access Denied');?>﻿<style>
 .viewpager {
 	width:100%;
 	height:546px;
 }
 .js-silder{
    position: relative; 
    min-width: 320px;
}
.silder-scroll{
    width: 100%;
    overflow: hidden;
}
.silder-main{
    position: relative;
    width: 100%;
    overflow: hidden;
}
.silder-main-img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}
.silder-main-img img{
    width: 100%;
}
.js-silder-ctrl{
    width: 100%;
    text-align: center;
}
.silder-ctrl-prev,
.silder-ctrl-next{
    position: absolute;
    top: 0;
    width: 8%;
    height: 100%;
    vertical-align: middle;
    cursor: pointer;
    color: #fff;
    font-family: "宋体";
    font-size: 52px;
    font-weight: 600;
    text-shadow: #666 2px 2px 5px;
}
.silder-ctrl-prev{
    left: 0;
    text-align: left;
}
.silder-ctrl-next{
    right: 0;
    text-align: right;
}
.silder-ctrl-prev>span,
.silder-ctrl-next>span{
    position: absolute;
    top: 50%;
    margin-top: -40px;
}
.silder-ctrl-prev>span{
    left: 0;
}
.silder-ctrl-next>span{
    right: 0;
}
.silder-ctrl-con{
    display: inline-block;
    width: 4%;
    padding: 10px 0;
    margin: 0 10px;
    cursor: pointer;
}
.silder-ctrl-con>span{
    display: block;
    line-height: 0;
    text-indent: -9999px;
    overflow: hidden;
    padding: 5px 0;
    cursor: pointer;
    background-color: #e4e4e4;
}
.silder-ctrl-con.active>span{
    background-color: #7bbedf;
}

@media (max-width: 768px){
    .silder-ctrl-prev,
    .silder-ctrl-next{
        width: 10%;
        font-size: 26px;
        margin-top: -25px;
    }
    .silder-ctrl-con{
        width: 14px;
        height: 14px;
        padding: 0;
        margin: 0 5px;
    }
    .silder-ctrl-con>span{
        display: block;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        padding: 0;
    }
}
</style>
<script src="../addons/li_bang/template/public/wySilder.min.js" type="text/javascript"></script>
<!-- 顶部开始 -->
<div class="top">
    <!-- logo图片 -->
    <div class="logo">
        <a href="">
            <img src="../addons/li_bang/template/public/logo_gai.png" alt="">
        </a>
    </div>
    <!-- 公司名称 -->
    <div class="company">
        <div class="com1">上海礼邦文化发展中心</div>
        <div class="com2">上海礼邦教育科技有限公司</div>
    </div>
    <!-- 搜索框 -->
    <div class="research">
        <form action="<?php  echo $this->createMobileUrl('sousuo');?>" method="post">
            <input type="text" name="title" placeholder="请输入关键词进行搜索">
            <input type="image" src="../addons/li_bang/template/public/res.png" class="img">
        </form>
    </div>
</div>
<!-- 轮播图开始 -->
<div class="viewpager">
    <div class="js-silder">
       <div class="silder-scroll">
            <div class="silder-main">
                <?php  if(is_array($slide)) { foreach($slide as $index => $item) { ?>
                <div class="silder-main-img">
                    <img src="../attachment/<?php  echo $item['image'];?>" alt="" style="width:100%;height:100%;">
                </div>
                <?php  } } ?>
            </div>
        </div>
    </div>
</div>
<!-- 轮播图结束 -->
<!-- 导航栏 -->
<div class="banner">
    <ul>
        <?php  if($_GET['id']) { ?>
       
            <a href="<?php  echo $this->createMobileUrl('index')?>" class="bn">网站首页</a>
       
        <?php  } else { ?>
      
            <a href="<?php  echo $this->createMobileUrl('index')?>" class="bn toop">网站首页</a>
      
        <?php  } ?>
         <?php  if(is_array($cate)) { foreach($cate as $index => $item) { ?>
         <?php  if($_GET['id'] == $item['id']) { ?>
       
            <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=<?php  echo $item['id'];?>" class="bn toop"><?php  echo $item['name'];?></a>
      
        <?php  } else { ?>
       
            <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=<?php  echo $item['id'];?>" class="bn"><?php  echo $item['name'];?></a>
      
        <?php  } ?>
        <?php  } } ?>
        <div class="clear"></div>
    </ul>
</div>
<div class="bai"></div>
<!-- 顶部结束 -->
<script>
    $(function (){
        $(".js-silder").silder({
            auto: true,//自动播放，传入任何可以转化为true的值都会自动轮播
            speed: 10,//轮播图运动速度
            sideCtrl: true,//是否需要侧边控制按钮
            bottomCtrl: true,//是否需要底部控制按钮
            defaultView: 0,//默认显示的索引
            interval: 3000,//自动轮播的时间，以毫秒为单位，默认3000毫秒
            activeClass: "active",//小的控制按钮激活的样式，不包括作用两边，默认active
        });
       
       $('.banner ul a:last').attr('href',"<?php  echo $this->createMobileUrl('index')?>#lbsc");
    });
</script>