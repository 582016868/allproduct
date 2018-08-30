<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<link rel="stylesheet" href="../addons/li_bang/template/public/index.css">
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=RKVMcKG7V23ABjbKnvOGyjY5GGaj0eLL"></script>
<div class="content1">
     <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/li_bang_header', TEMPLATE_INCLUDEPATH)) : (include template('common/li_bang_header', TEMPLATE_INCLUDEPATH));?>
    <div class="lian main_title">
        <div class="title">
            <p></p>
            <p><?php  echo $libintro['name'];?></p>
            <p><?php  echo $libintro['ename'];?></p>
            <p>一</p>
        </div>
        <div class="yiqi">
            <div class="quan">
                <img src="../addons/li_bang/template/public/c1.png" alt="">
                <div class="add" style="width: 250px;margin-left:70%;">
                    <?php  echo $address['intro'];?>
                </div>
            </div>
            <div class="quan">
                <img src="../addons/li_bang/template/public/c2.png" alt="">
                <div class="add">
                    <?php  echo $cuntry['intro'];?>
                    <?php  echo $phone['intro'];?> 
                    <?php  echo $fax['intro'];?>
                </div>
            </div>
            <div class="quan">
                <img src="../addons/li_bang/template/public/c3.png" alt="">
                <div class="add">
                    <?php  echo $wang['intro'];?> <?php  echo $you['intro'];?>
                </div>
            </div>
        </div>
    </div>
    <!--百度地图-->
    <!--<div class="baidut">
    	<?php  echo $tu['content'];?>
    	
    </div>-->
    <div class="baiduAPI">
    	<div id="l-map"></div>
    	<div id="r-result"></div>
    </div>
    
    <!-- 礼邦商城开始 -->
    <div class="mwai">
        <div class="mall main_title" style="height: 485px;">
            <div class="title" style="padding-top:80px;">
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
    .yiqi{
        width:70%;
        height:300px;
        position: relative;
        margin: 30px auto;
        /* border: solid 1px blue; */
    }
  	.yiqi .quan img{
  		width:8rem;
      	height:8rem;
  	}
    .news{
        display:none;
    }
    .baiduAPI{
        width:70%;
        height: 400px;
        position: relative;
        margin: 0 auto;
    }
    #l-map{
    	width:100%;
    	height:100%;
    }
    #r-result,#r-result table{
    	width:100%;
    }
    .baidu{
        width:70%;
        position: relative;
        margin: 0 auto;
    }
    .add{
        width:400px;
        position: absolute;
        left:-150px;
        text-align: center;
      	line-height:2.5rem;
    }
    .quan{
        border-radius: 50px;
        float:left;
        position: relative;
    }
  	.quan:nth-child(1){
        margin-left:3%;
    }
    .quan:nth-child(2){
        margin: 0 27%;
    }
    .lian{
        width:100%;
        position: relative;
        top:30px;
        padding-top:3px;
        background: #fff;
    }
    .lian .title{
        padding-top:70px;
        text-align: center;
    }
    .lian .title p:nth-child(2){
        font-size:50px;
        font-weight: bold;
        letter-spacing:5px;
    }
    .lian .title p:nth-child(3){
        margin-top: 35px;
        font-size:30px;
        color:#aaa;
    }
    .lian .title p:last-child{
        color:#1F80BE;
        font-size:40px;
    }
</style>
<script>
	// 百度地图API功能
    var map = new BMap.Map("l-map");
    map.centerAndZoom(new BMap.Point(121.447778, 31.302192), 20);
    map.addOverlay(new BMap.Marker(new BMap.Point(121.447778, 31.302192)));
    
  map.enableScrollWheelZoom(true);
    
    function cx(){ 
        var cfd = $("#cfd").val();
        if(cfd == ""){
            alert("请输入出发地") ;
            return false ;
        }
        var mdd = $("#mdd").val();
        if(mdd == ""){
            alert("请输入到达地") ;
            return false ;
        }
        var driving = new BMap.DrivingRoute(map, {renderOptions: {map: map, panel: "r-result", autoViewport: true}});
        driving.search(cfd, mdd); 
    }
</script>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>