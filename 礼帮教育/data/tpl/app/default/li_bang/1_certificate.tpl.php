<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" href="../addons/li_bang/template/public/index.css">
<link rel="stylesheet" href="../addons/li_bang/template/public/certificate.css">
<div class="content1">
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_header', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_header', TEMPLATE_INCLUDEPATH));?>
    <!--企业证书-->
    <div class="certificate main_title">
        <div class="title">
            <p></p>
            <p><?php  echo $libintro['name'];?></p>
            <p><?php  echo $libintro['ename'];?></p>
            <p>一</p>
        </div>
        <ul>
             <?php  if(is_array($all)) { foreach($all as $index => $item) { ?>
            <li>
            	<div class="img_kuang">
            		<img class="img_certificate" src="../attachment/<?php  echo $item['image'];?>" alt="" title="<?php  echo $item['title'];?>">
            	</div>
            	<span class="certificate_name"><?php  echo $item['intro'];?></span>
            </li><a href="sdfsddfsds" name="ksldjfld"></a>
            <?php  } } ?>
        </ul>
    </div>
    <!-- 触摸企业证书图片放大预览 -->
        <div class="img_enlarge_div"></div>
    <div style="text-align:center"><div class="page"><?php  echo $pager;?></div></div>
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_footer', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_footer', TEMPLATE_INCLUDEPATH));?>
</div>
<style>
    .img_enlarge_div{  
        max-width: 60%;
        max-height: 37rem;
        position: absolute;
        left: 22%;
         z-index: -10; 
         display: none;
        overflow: scroll;
        /* background-color: black; */
        /* border: solid 2px #000000; */
    } 
</style>
<script>
    $('.img_certificate').mousemove(function (e) {
            // var xx = e.originalEvent.x || e.originalEvent.layerX || 0;
            // var size = 10 * $('.img_certificate').width();
            var yy = e.originalEvent.y || e.originalEvent.layerY || 0;
            $(".img_certificate").click(function (event) {
                var _target = $(event.target);
                if (_target.is('img')) {
                    $('.img_enlarge_div img').remove();
                    $(".img_enlarge_div").show();
                    $(".img_enlarge_div").css({ "z-index": 10, "top": yy+100 });
                    $("<img id='img_enlarge' src='" + _target.attr("src") + "'>").css({
                        "width": '100%'
                    }).appendTo($(".img_enlarge_div"));
                    /*将当前所有匹配元素追加到指定元素内部的末尾位置。*/
                }
            })
            $("body").click(function(event){
                var _target = $(event.target);
                if(!_target.is('img')) {
                    $(".img_enlarge_div").css({ "z-index": -10 });
                    $("#img_enlarge").remove();/*移除元素*/
                   	$(".img_enlarge_div").hide();
                }
            })
            
        });
</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
