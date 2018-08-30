<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" href="../addons/li_bang/template/public/index.css">
<link rel="stylesheet" href="../addons/li_bang/template/public/product.css">
<div class="content1">
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_header', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_header', TEMPLATE_INCLUDEPATH));?>
    <!-- 客户案例 -->
    <div class="service main_title">
        <div class="title">
            <p></p>
            <p><?php  echo $libintro['name'];?></p>
            <p><?php  echo $libintro['ename'];?></p>
            <p>一</p>
        </div>
        <div class="navigate client_nav">
            <ul>
                 <?php  if($_GET['pid']) { ?>
                <li class="nav">
                    <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=6">所有服务</a>
                </li>
                <?php  } else { ?>
                <li class="nav active">
                    <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=6" class="action">所有服务</a>
                </li>
                <?php  } ?> <?php  if(is_array($proserver)) { foreach($proserver as $index => $item) { ?> <?php  if($_GET['pid'] == $item['id']) { ?>
                <li class="nav active">
                    <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=<?php  echo $item['pid'];?>&pid=<?php  echo $item['id'];?>" class="action"><?php  echo $item['name'];?></a>
                </li>
                <?php  } else { ?>
                <li class="nav">
                    <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=<?php  echo $item['pid'];?>&pid=<?php  echo $item['id'];?>"><?php  echo $item['name'];?></a>
                </li>
                <?php  } ?> <?php  } } ?>
            </ul>
        </div>
        <div class="all_server main_title client_p">
            <ul>
                <?php  if(is_array($all)) { foreach($all as $index => $item) { ?>
                <a href="<?php  echo $this->createMobileUrl('productmore')?>&id=<?php  echo $item['id'];?>">
                    <li>
                        <img src="../attachment/<?php  echo $item['image'];?>" alt="">
                        <div class="title" style="padding-top:50px;"><?php  echo $item['title'];?></div>
                        <div class="line"></div>
                        <div class="content"><?php  echo $item['intro'];?></div>
                    </li>
                </a>
                <?php  } } ?>
            </ul>
        </div>
        <div style="text-align:center;"><div class="page" style="margin-top:-30px;"><?php  echo $pager;?></div></div>
    </div>
	<!-- 新闻中心 -->
	 <div class="news news_bottom main_title">
	    <div class="title">
	        <p></p>
	        <p><?php  echo $new['name'];?></p>
	        <p><?php  echo $new['ename'];?></p>
	        <p>一</p>
	    </div>
	    <div class="new_center">
	        <ul>
				<?php  if($news) { ?>
                <?php  if(is_array($news)) { foreach($news as $index => $item) { ?>
                <li>
                    <img src="../attachment/<?php  echo $item['image'];?>" alt="">
                    <div class="content">
                        <div class="title">
                            <a href="<?php  echo $this->createMobileUrl('newsmore')?>&id=<?php  echo $item['id'];?>"><?php  echo $item['title'];?></a>
                        </div>
                        <div class="time"><img src="../attachment/images/1/2018/06/write.png" /><?php  echo $item['addtime'];?></div>
                        <p><?php  echo $item['intro'];?></p>
                    </div>
                </li>
                <?php  } } ?>
                <?php  } else { ?>
                <h4>对不起，该分类无任何记录</h4>
                <?php  } ?>
	        </ul>
	        <a href="<?php  echo $this->createMobileUrl('liebiao')?>&id=8">
	            <div class="more">
	            	查看更多 <span>></span>
	            </div>
	        </a>
	    </div>
	</div> 
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_footer', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_footer', TEMPLATE_INCLUDEPATH));?>
</div>
<style>
  .client_p p{
  	font-size:1rem !important;
  }
</style>
<script>
    var gallery = mui('.mui-slider');
    gallery.slider({
        interval: 1000//自动轮播周期，若为0则不自动播放，默认为0；
    });
</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>