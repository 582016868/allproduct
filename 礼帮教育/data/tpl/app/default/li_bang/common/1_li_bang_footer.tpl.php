<?php defined('IN_IA') or exit('Access Denied');?>﻿
<style>

</style>
<!-- 底部导航开始 -->
<div class="bottom">
    <div class="contain">
    <div class="contact">
        <div class="title">联系我们</div>
        <div class="address" style="position:relative;top:22px;">
            <i style="background-position: 22px 4px;"></i>
            <div class="detail" style="position:relative;top:17px;left:1px;font-size:0.8rem;"><?php  echo $address['title'];?></div>
        </div>
        <div class="address" style="margin-top:40px;">
            <i style="background-position: 22px -56px;"></i>
            <div class="detail" style="position:relative;top:-1px;left:1px;font-size:0.8rem;"><?php  echo $phone['title'];?></div>
        </div>
        <div class="address">
            <i style="background-position: 22px -84px;"></i>
            <div class="detail" style="position:relative;top:0px;left:1px;font-size:0.8rem;"><?php  echo $fax['title'];?></div>
        </div>
        <div class="address">
            <i style="background-position: 22px -113px;"></i>
            <div class="detail" style="position:relative;top:-20px;left:25px;width:22rem;font-size:0.8rem;"><?php  echo $email['title'];?></div>
        </div>
        <div class="address">
            <i style="background-position: 22px 23px;"></i>
            <div class="detail" style="position:relative;top:-15px;left:1px;font-size:0.8rem;"><?php  echo $qq['title'];?></div>
        </div>
    </div>
    <div class="our">
        <div class="title">关于礼邦</div>
         <?php  if(is_array($ablib)) { foreach($ablib as $index => $item) { ?>
        <div class="address">
            <i></i>
            <div class="detail">
                <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=1" style="color:#aaa;font-size:0.8rem;"><?php  echo $item['name'];?></a>
            </div>
        </div>
        <?php  } } ?>
    </div>
    <style>
        .bottom .contact .address .detail a:link{
            color:#aaa;
        }
        .bottom .contact .address .detail a:visited{
            color:#aaa;
        }
    </style>
    <div class="product1">
        <div class="title"><?php  echo $product['name'];?></div>
         <?php  if(is_array($procate)) { foreach($procate as $index => $item) { ?>
        <div class="address">
            <i></i>
            <div class="detail">
                <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=<?php  echo $item['pid'];?>&pid=<?php  echo $item['id'];?>" style="color:#aaa;font-size:0.8rem;"><?php  echo $item['name'];?></a>
            </div>
        </div>
        <?php  } } ?>
    </div>
    <div class="product1">
    	<div class="title">客户案例</div>
         <?php  if(is_array($clicate)) { foreach($clicate as $index => $item) { ?>
        <div class="address">
            <i></i>
            <div class="detail">
                <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=<?php  echo $item['pid'];?>&pid=<?php  echo $item['id'];?>" style="color:#aaa;font-size:0.8rem;"><?php  echo $item['name'];?></a>
            </div>
        </div>
        <?php  } } ?>
    </div>
    <div class="product1">
    	<div class="title"><?php  echo $shop['name'];?></div>
         <?php  if(is_array($link)) { foreach($link as $index => $item) { ?>
        <div class="address">
            <i></i>
            <div class="detail">
                <a href="<?php  echo $this->createMobileUrl('jieshao')?>&action=get&id=<?php  echo $item['id'];?>" style="color:#aaa;font-size:0.8rem;"><?php  echo $item['name'];?></a>
            </div>
        </div>
        <?php  } } ?>
    </div>
    <div class="code" style="width:117px;">
        <img src="../attachment/<?php  echo $code['image'];?>" alt="" style="display:block;margin:0 auto;width:100%;">
        <div class="title"><?php  echo $code['title'];?></div>
    </div>
    </div>
</div>
<!-- 底部导航结束 -->