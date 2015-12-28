<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：权限管理<span>&gt;</span>添加权限</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_top"><b class="pl15">添加权限</b></div>
                <div class="box_center">
                    <form action="<?php echo site_url(MODULE .'/'. C .'/'. M)?>" class="jqtransform" method="post">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr >
                                <td class="td_right">上级分类：</td>
                                <td>
                                    <div class="select_border">
                                        <div class="select_containers ">
                                            <select name="pid" class="select">
                                                <option value="0" selected="selected">顶级分类</option>
                                                <?php foreach($lists as $v){?>
                                                	<option value="<?php echo $v['id']?>" <?php echo ($v['id'] == $this->uri->segment(4,0))?'selected="selected"':''?>><?php echo str_repeat('&nbsp;',($v['level'] - 1)*4).$v['name']?></option>
												<?php }?>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">权限名称：</td>
                                <td><input type="text" name="name" class="input-text lh30" required /></td>
                            </tr>
                            <tr>
                                <td class="td_right">权限路径：</td>
                                <td><input type="text" name="class_method" class="input-text lh30" /></td>
                            </tr>
                            <tr>
                                <td class="td_right">功能菜单：</td>
                                <td>
                                	<label><input name="status" type="radio" value="1" checked="checked" /> 显示</label>
                                    &nbsp;&nbsp;&nbsp;
                                    <label><input name="status" type="radio" value="0" /> 隐藏</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">排序：</td>
                                <td><input type="text" name="sort" class="input-text lh30" value="1" pattern="[0-9]+" /> 值越小越排在前</td>
                            </tr>
                            <tr>
                                <td class="td_right">&nbsp;</td>
                                <td><input type="submit" name="button2" class="btn btn82 btn_save2" value="保存">
                                    <input type="reset" name="button2" class="btn btn82 btn_res" value="重置"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>