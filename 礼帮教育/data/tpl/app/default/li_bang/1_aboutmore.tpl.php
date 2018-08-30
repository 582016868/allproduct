<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" href="../addons/li_bang/template/public/index.css">
<link rel="stylesheet" href="../addons/li_bang/template/public/aboutmore.css">
<div class="content1">
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_header', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_header', TEMPLATE_INCLUDEPATH));?>
    <div class="aboutmore main_title">
        <div class="title">
            <p></p>
            <p><?php  echo $detail['title'];?></p>
            <p><?php  echo $detail['english'];?></p>
            <p>一</p>
        </div>
        <div class="content" id="con">
             <?php  echo $detail['content'];?>
        </div>
        <!-- <div class="tu">
            <img src="../addons/li_bang/template/public/a1.jpg" alt="">
        </div> -->
    </div>
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_footer', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_footer', TEMPLATE_INCLUDEPATH));?>
</div>
<style>
    .news {
        display: none;
    }
</style>
<script>
    
</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>