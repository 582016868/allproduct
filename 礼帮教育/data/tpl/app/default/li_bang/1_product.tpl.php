<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" href="../addons/li_bang/template/public/index.css">
<link rel="stylesheet" href="../addons/li_bang/template/public/product.css">
<div class="content1">
     <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_header', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_header', TEMPLATE_INCLUDEPATH));?>
    <div class="service main_title">
        <div class="title" style="padding-top:80px;">
            <p></p>
            <p><?php  echo $libintro['name'];?></p>
            <p><?php  echo $libintro['ename'];?></p>
            <p>一</p>
        </div>
        <div class="navigate">
            <ul>
                <?php  if($_GET['pid']) { ?>
                <li class="nav"><a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=5">所有服务</a></li>
                <?php  } else { ?>
                <li class="nav active">
                    <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=5" class="action">所有服务</a>
                </li>
                <?php  } ?>
                 <?php  if(is_array($proserver)) { foreach($proserver as $index => $item) { ?>
                 <?php  if($_GET['pid'] == $item['id']) { ?>
                <li class="nav active"><a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=<?php  echo $item['pid'];?>&pid=<?php  echo $item['id'];?>" class="action"><?php  echo $item['name'];?></a></li>
                <?php  } else { ?>
                <li class="nav">
                    <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=<?php  echo $item['pid'];?>&pid=<?php  echo $item['id'];?>"><?php  echo $item['name'];?></a>
                </li>
                <?php  } ?>
                <?php  } } ?>
            </ul>
        </div>
        <!-- <div class="navs">
            <div class="mui-slider">
                <div class="mui-slider-group">
                    <div class="mui-slider-item creden">
                        <a href="#">
                            <div class="small active">所有服务</div>                          
                        </a>
                    </div>
                     <?php  if(is_array($proserver)) { foreach($proserver as $index => $item) { ?>
                    <div class="mui-slider-item creden">
                        <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=<?php  echo $item['pid'];?>&pid=<?php  echo $item['id'];?>">
                             <?php  echo $item['name'];?>
                        </a>
                    </div>
                    <?php  } } ?>
                </div>
            </div>
        </div> -->
        <div class="all_server product_server">
            <ul>
                <?php  if(is_array($all)) { foreach($all as $index => $item) { ?>
                <a href="<?php  echo $this->createMobileUrl('productmore')?>&id=<?php  echo $item['id'];?>">
                    <li>
                        <div class="mui-slider">
                            <div class="mui-slider-group mui-slider-loop" style="height: 15rem;">
                                <!--支持循环，需要重复图片节点-->
                                <div class="mui-slider-item mui-slider-item-duplicate">
                                    <img src="../attachment/<?php  echo $item['last'];?>" width="351px" height="234px"/>
                                </div>
                                <?php  if(is_array($item['image'])) { foreach($item['image'] as $index => $items) { ?>
                                <div class="mui-slider-item">
                                    <img src="../attachment/<?php  echo $items;?>" width="300px" height="234px"/>
                                </div>
                                <?php  } } ?>
                                <!--支持循环，需要重复图片节点-->
                                <div class="mui-slider-item mui-slider-item-duplicate">
                                    <img src="../attachment/<?php  echo $item['first'];?>" width="351px" height="234px"/>
                                </div>
                            </div>
                        </div>
                        <!-- <img src="../attachment/<?php  echo $item['image'];?>" alt=""> -->
                        <div class="title"><?php  echo $item['title'];?></div>
                        <div class="line"></div>
                        <div class="content"><?php  echo $item['intro'];?></div>
                    </li>
                </a>
                <?php  } } ?>
            </ul>
        </div>
        <div style="text-align:center"><div class="page"><?php  echo $pager;?></div></div>
    </div>
    <div class="baidu">
    	<?php  echo $tu['content'];?>
    </div>
    <!-- 礼邦商城开始 -->
    <div class="mwai">
        <div class="mall main_title" style="height: 485px;">
            <div class="title">
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
        </div>
    </div>
    <!-- 礼邦商城结束 -->
     <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_footer', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_footer', TEMPLATE_INCLUDEPATH));?> 
</div>
<style>
    .mui-slider .mui-slider-group .mui-slider-item img{
        width: 100%;
        height:15rem;
    }
    .all_server .content p{
        font-size: 0.9rem;
        text-align: justify;
        text-align-last: left;
    }
    .baidu{
        width:70%;
        position: relative;
        margin: 0 auto;
        /*border:1px solid red;*/ 
    }
    .baidu iframe{
    	width: 100%;
    	/*border:1px solid red;*/ 
    }
</style>
<script>
    var gallery = mui('.mui-slider');
    gallery.slider({
        interval: 6000//自动轮播周期，若为0则不自动播放，默认为0；
    });
</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>