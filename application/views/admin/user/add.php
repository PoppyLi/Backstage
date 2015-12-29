<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：用户管理<span>&gt;</span>添加用户</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="<?php echo site_url(MODULE .'/'. C .'/'. M );?>" class="jqtransform" method="post">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="td_right">用户名：</td>
                                <td><input type="text" name="username" class="input-text lh30" required value="<?php echo set_value('username')?>" /><?php echo form_error('username');?></td>
                            </tr>
                            <tr>
                                <td class="td_right">密码：</td>
                                <td><input type="password" name="password" class="input-text lh30" required /></td>
                            </tr>
                            <tr>
                                <td class="td_right">性别：</td>
                                <td>
                                	<label><input name="sex" type="radio" value="1" checked="checked" /> 男</label>
                                    &nbsp;&nbsp;&nbsp;
                                    <label><input name="sex" type="radio" value="0" /> 女</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">状态：</td>
                                <td>
                                	<label><input name="status" type="radio" value="1" checked="checked" /> 启用</label>
                                    &nbsp;&nbsp;&nbsp;
                                    <label><input name="status" type="radio" value="0" /> 禁用</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">排序：</td>
                                <td><input type="text" name="sort" class="input-text lh30" value="1" pattern="[0-9]+" /> 值越小越排在前&nbsp;<?php echo form_error('sort')?></td>
                            </tr>
                            <tr>
                                <td class="td_right">添加时间：</td>
                                <td><input type="text" name="addtime" class="input-text lh30" value="<?php echo date('Y-m-d H:i:s');?>" required />&nbsp;<?php echo form_error('addtime')?></td>
                            </tr>
                            <tr>
                                <td class="td_right">权限：</td>
                                <td>
                                	<?php foreach($jurisdiction as $v){?>
                                    	<strong><label><input name="jurisdiction[]" type="checkbox" value="<?php echo $v['id']?>">&nbsp;<?php echo $v['name']?></label></strong><br>
                                        <?php 
											foreach($v['child'] as $val){
										?>
												<label><input name="jurisdiction[]" type="checkbox" value="<?php echo $val['id']?>">&nbsp;<?php echo $val['name']?></label>&nbsp;&nbsp;
                                        <?php
											}
										?><br><hr class="h1"><br>
                                    <?php }?>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">&nbsp;</td>
                                <td><input type="submit" name="button1" class="btn btn82 btn_save2" value="保存">
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