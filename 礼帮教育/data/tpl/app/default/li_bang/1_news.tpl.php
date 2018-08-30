<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" href="../addons/li_bang/template/public/index.css">
<link rel="stylesheet" href="../addons/li_bang/template/public/news.css">
<div class="content1">
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_header', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_header', TEMPLATE_INCLUDEPATH));?>
    <!-- 新闻中心 -->
    <div class="news main_title" style="display:block;background: #F5F5F5;">
         <?php  if($news) { ?>
        <div class="title">
            <p></p>
            <p><?php  echo $new['name'];?></p>
            <p><?php  echo $new['ename'];?></p>
            <p>一</p>
        </div>
        <div class="news_type">
          <?php  if(is_array($newcate)) { foreach($newcate as $index => $item) { ?>
        	<a href="<?php  echo $this->createMobileUrl('liebiao')?>&action=newscate&cateid=<?php  echo $item['id'];?>&id=8" class="type_01"><span></span><?php  echo $item['name'];?></a>
          <?php  } } ?>
        </div>
        <?php  } ?>
        <div class="new_center">
            <ul class="type_01_news">
                <?php  if($news) { ?>
                <?php  if(is_array($news)) { foreach($news as $index => $item) { ?>
                <li>
                    <img src="../attachment/<?php  echo $item['image'];?>" alt="">
                    <div class="content">
                        <div class="title">
                            <a href="<?php  echo $this->createMobileUrl('newsmore')?>&id=<?php  echo $item['id'];?>"><?php  echo $item['title'];?></a>
                        </div>
                        <div class="time"><img src="../attachment/images/1/2018/06/write.png" /><?php  echo $item['addtime'];?></div>
                        <?php  echo $item['intro'];?>
                    </div>
                </li>
                <?php  } } ?>
                <?php  } else { ?>
                <h4>对不起，该分类无任何记录</h4>
                <?php  } ?>
            </ul>
            <ul class="type_02_news">
                <?php  if($news) { ?>
                <?php  if(is_array($news)) { foreach($news as $index => $item) { ?>
                <li>
                    <img src="../attachment/<?php  echo $item['image'];?>" alt="">
                    <div class="content">
                        <div class="title">
                            <a href="<?php  echo $this->createMobileUrl('newsmore')?>&id=<?php  echo $item['id'];?>"><?php  echo $item['title'];?></a>
                        </div>
                        <div class="time"><img src="../attachment/images/1/2018/06/write.png" /><?php  echo $item['addtime'];?></div>
                        <?php  echo $item['intro'];?>
                    </div>
                </li>
                <?php  } } ?>
                <?php  } else { ?>
                <h4>对不起，该分类无任何记录</h4>
                <?php  } ?>
            </ul>
        </div>
        <div style="text-align:center;"><div class="page"><?php  echo $pager;?></div></div>
    </div>

    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_footer', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_footer', TEMPLATE_INCLUDEPATH));?>
</div>
<style>
    h4{
        padding-top:100px;
        margin-left:603px;
    }
    .news{
        display:none;
    }
    .page{
        height:102px;
        /* margin-top:547px; */
        /* border:1px solid red; */
    }
</style>
<script>
	$(function(){
		$('.type_01').click(function(){
			$('.type_01').css('color','#1F80BE');
			$('.type_01 span').css('background-color','#1F80BE');
			$('.type_02').css('color','#000000');
			$('.type_02 span').css('background-color','#000000');
			$('.type_02_news').slideUp(3000,function(){
				$('ul.type_01_news').slideDown(3000);
				$('ul.type_02_news').hide();
			});
		});
		$('.type_02').click(function(){
			$('.type_02').css('color','#1F80BE');
			$('.type_02 span').css('background-color','#1F80BE');
			$('.type_01').css('color','#000000');
			$('.type_01 span').css('background-color','#000000');
			$('.type_01_news').slideUp(3000,function(){
				$('ul.type_02_news').slideDown(3000);
				$('ul.type_01_news').hide();
			});
		});
	})
</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>