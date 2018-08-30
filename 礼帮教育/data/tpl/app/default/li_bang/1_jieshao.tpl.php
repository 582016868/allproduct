<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" href="../addons/li_bang/template/public/index.css">
<link rel="stylesheet" href="../addons/li_bang/template/public/jieshao.css">
<div class="content1">
     <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_header', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_header', TEMPLATE_INCLUDEPATH));?>
     <div class="content1_title">
        <h2><strong>产品介绍</strong></h2>
        <h4>PRODUCT INTRODUCTION</h4>
        <div class="content1_line"></div>
     </div>
     <form action="<?php  echo $this->createMobileUrl('yuyue')?>&id=<?php  echo $item['id'];?>" method="post" onsubmit="return func()">
         <div class="link"><?php  echo $jieshao['link'];?></div>
        <div style="clear:both;"></div>
        <input type="hidden" name="linkid" value="<?php  echo $jieshao['id'];?>">
        <div class="content1_form">
            <div class="content1_img">
                <h2>我要预约</h2>
                <h4>RESERVATION</h4>
                <div class="content1_line_02"></div>
            </div>
            <div class="content1_input">
                <div class="content1_input_text">
                    <span>姓名：</span>
                    <input type="text" value="" name="name">
                    <span style="position: absolute;right: 12px;bottom: 25px;"></span>
                </div>
                <div class="content1_input_text">
                    <span>联系电话：</span>
                    <input type="text" value="" name="phone" placeholder="仅限手机号"/>
                    <span style="position: absolute;right: 12px;bottom: 25px;"></span>
                </div>
                <div class="content1_input_text">
                    <span>邮箱：</span>
                    <input type="text" value="" name="email"/>
                    <span style="position: absolute;right: 12px;bottom: 25px;"></span>
                </div>
                <div>
                    <input class="content1_btn" type="submit" value="确认提交" />
                </div>
            </div>
        </div>
     </form>
      <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_footer', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_footer', TEMPLATE_INCLUDEPATH));?> 
</div>
<style>
  .link{width: 84%;margin: 0 auto;overflow:hidden;}
  .content1_input_text{position: relative;}
</style>
<script>
  EMAIL=false;
  NAME=false;
  PHONE=false;
  $("input[name='email']").blur(function(){
      //获取邮箱
      email=$(this).val();
      ob=$(this);
      if(email.length == 0){
        $(this).next("span").css("color","red").html("请填写邮箱");
        EMAIL=false;
      }else if(email.match(/^\w+@\w+(\.\w+)$/)==null){
        $(this).next("span").css("color","red").html("邮箱格式不对");
        EMAIL=false;
      }else{
        $(this).next("span").html('');
        EMAIL=true;
      }
  })
  $("input[name='name']").blur(function(){
      //获取邮箱
      name=$(this).val();
      ob=$(this);
      if(name.length == 0){
        $(this).next("span").css("color","red").html("请填写姓名");
        NAME=false;
      }else{
        $(this).next("span").html('');
        NAME=true;
      }
  })
  $("input[name='phone']").blur(function(){
      //获取邮箱
      phone=$(this).val();
      ob=$(this);
      if(phone.length == 0){
        $(this).next("span").css("color","red").html("请填写手机号");
        PHONE=false;
      }else if(phone.match(/^1[34578]\d{9}$/)==null){
        $(this).next("span").css("color","red").html("手机号格式不对");
        PHONE=false;
      }else{
        $(this).next("span").html('');
        PHONE=true;
      }
  })
function func(){
  $("input").trigger("blur");
    if(EMAIL && PHONE && NAME){
      return true;
    }else{
      return false;
    }
}
</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>