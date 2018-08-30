<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" href="../addons/li_bang/template/public/index.css">
<link rel="stylesheet" href="../addons/li_bang/template/public/productmore.css">
<div class="content1">
    <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_header', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_header', TEMPLATE_INCLUDEPATH));?>
    <div class="productmore">
        <div class="content">
        <p>
           <?php  echo $promore['content'];?>
        </p>
        </div>
        <!--<h4>礼邦创新实验室</h4>
        <p></p>-->
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
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>