<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" href="../addons/li_bang/template/public/index.css">
<link rel="stylesheet" href="../addons/li_bang/template/public/news.css">
<div class="content1">
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_header', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_header', TEMPLATE_INCLUDEPATH));?> 
    <div class="newsmore">
        <div class="content">
             <?php  echo $newsmore['content'];?>
        </div>
        <div class="goback">
            <div class="prev">
                 <?php  if($next) { ?>
                <div class="shang"><a href="<?php  echo $this->createMobileUrl('newsmore')?>&id=<?php  echo $next[0]['id'];?>">< 前一篇</a></div>
                <div class="xia"><?php  echo $next[0]['title'];?></div>
                <?php  } else { ?>
                <div class="shang">
                    <a href="">
                        < 前一篇</a>
                </div>
                <div class="xia">无</div>
                <?php  } ?>
            </div>
            <div class="next">
                 <?php  if($prev) { ?>
                <div class="shang">
                    <a href="<?php  echo $this->createMobileUrl('newsmore')?>&id=<?php  echo $prev[0]['id'];?>">后一篇 ></a>
                </div>
                <div class="xia"><?php  echo $prev[0]['title'];?></div>
                <?php  } else { ?>
                <div class="shang">
                    <a href="">后一篇 ></a>
                </div>
                <div class="xia">无</div>
                <?php  } ?>
            </div>
        </div>
    </div>
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_footer', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_footer', TEMPLATE_INCLUDEPATH));?>
</div>
<style>
    .news{
        display:none;
    }
</style>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>