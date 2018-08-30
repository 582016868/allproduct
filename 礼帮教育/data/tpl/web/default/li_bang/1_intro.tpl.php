<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template("common/header", TEMPLATE_INCLUDEPATH)) : (include template("common/header", TEMPLATE_INCLUDEPATH));?>
<form role="form" action="<?php  echo $this->createWebUrl('intro');?>&action=select" method="post">
    <div class="form-group">
        <label for="name">选择列表</label>
        <select class="form-control" name="id">
             <?php  if(is_array($cate)) { foreach($cate as $index => $item) { ?>
            <option value="<?php  echo $item['id'];?>"><?php  echo $item['name'];?></option>
            <?php  } } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-default">查询</button>
</form>
<a href="<?php  echo $this->createWebUrl('intro');?>&action=introadd" class="btn btn-primary">添加简介</a>
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">添加简介</button> -->
<div class="panel panel-primary" style="margin-top:10px;">
    <div class="panel-heading">
        <h3 class="panel-title">简介 </h3>
    </div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th>序号</th>
                    <th>顶级分类</th>
                    <th>所属分类</th>
                    <th>标题</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php  if(is_array($intro)) { foreach($intro as $index => $item) { ?>
                <tr class="active">
                    <td><?php  echo $item['id'];?></td>
                    <td><?php  echo $item['catepid'];?></td>
                    <td><?php  echo $item['cateid'];?></td>
                    <td><?php  echo $item['title'];?></td>
                    <td>
                        <a href="<?php  echo $this->createWebUrl('intro');?>&action=edit&id=<?php  echo $item['id'];?>" class="btn btn-primary btn-xs">编辑</a>
     
                        <a href="<?php  echo $this->createWebUrl('intro');?>&action=check&id=<?php  echo $item['id'];?>" class="btn btn-primary btn-xs">查看详情</a>
                
                        <a href="javascript:(void)" class="btn btn-danger btn-xs del" id="<?php  echo $item['id'];?>" data-i="<?php  echo $item['title'];?>">删除</a>                 
 </td>
                </tr>
                <?php  } } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">添加/更新简介</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="<?php  echo $this->createWebUrl('intro');?>&action=save" method="post">
                    <div class="form-group">
                        <label for="name" id="mo">所属分类</label>
                        <select class="form-control" name="cateid" class="sel">
                            <option value="0">--请选择--</option>
                            <?php  if(is_array($cate1)) { foreach($cate1 as $index => $item) { ?>
                            <option pid="<?php  echo $item['pid'];?>" value="<?php  echo $item['id'];?>" <?php  if($item['id'] == 1 || $item['id'] == 5 ||$item['id'] == 6||$item['id'] == 8) { ?>disabled<?php  } ?>><?php  echo $item['class_name'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">标题</label>
                        <input type="text" name="title" class="form-control" id="name" placeholder="请输入标题">
                    </div>

                    <div class="form-group" style="display: none;" id="img1">
                        <label for="inputfile">图片</label>
                         <?php  echo tpl_form_field_multi_image('image1');?>
                    </div>
                    <div class="form-group" style="display: none;" id="img2">
                        <label for="inputfile">图片</label>
                        <?php  echo tpl_form_field_image('image');?>
                    </div>
                    <div class="form-group">
                        <label for="name">简介</label>
                        <textarea class="form-control" rows="15" name="intro"><?php  echo $result['intro'];?></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .uploader-modal {
        z-index: 1050;
    }
</style>
<script>
    $('.del').click(function(){
        var that = $(this);
        var title = $(this).attr('data-i');
        var id = $(this).attr('id');
        var r = confirm('亲！确定删除《'+title+'》吗？这可能会给前台展示带来影响哦！');
        if(r){
            that.parent('td').parent('tr').remove();
            $.get("<?php  echo $this->createWebUrl('intro');?>&action=del&id="+id,function(data){
                if(data.message = "删除成功"){
                    alert('亲，已经成功帮您删除了哦！');
                }
            },'json')
        }
    });
    $("#mo").next('select').change(function(){
        var pid = $(this).find("option:selected").attr("pid");
        var id = $(this).val();
        if(pid == 1){
            $('#img2').css('display','block');
            $('#img1').css('display', 'none');
        }else if(pid == 5){
            $('#img1').css('display', 'block');
            $('#img2').css('display', 'none');
        } else if (pid == 6) {
            $('#img2').css('display', 'block');
            $('#img1').css('display', 'none');
        } else if (id == 7) {
            $('#img2').css('display', 'block');
            $('#img1').css('display', 'none');
        } else if (pid == 8) {
            $('#img2').css('display', 'block');
            $('#img1').css('display', 'none');
        } else if (id == 9) {
            $('#img2').css('display', 'none');
            $('#img1').css('display', 'none');
        }
    });
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template("common/footer", TEMPLATE_INCLUDEPATH)) : (include template("common/footer", TEMPLATE_INCLUDEPATH));?>