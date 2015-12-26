<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：链接管理<span>&gt;</span>添加链接</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="<?php echo site_url(MODULE.'/'.C.'/'.M)?>" class="jqtransform" method="post">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="td_right">链接名称：</td>
                                <td><input type="text" name="name" class="input-text lh30" required />&nbsp;<?php echo form_error('name');?></td>
                            </tr>
                            <tr>
                                <td class="td_right">链接网址：</td>
                                <td><input type="text" name="url" class="input-text lh30" placeholder="http://" />&nbsp;<?php echo form_error('url');?></td>
                            </tr>
                            <tr>
                                <td class="td_right">状态：</td>
                                <td>
                                	<label><input name="status" type="radio" value="1" checked="checked" /> 显示</label>
                                    &nbsp;&nbsp;&nbsp;
                                    <label><input name="status" type="radio" value="0" /> 隐藏</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">排序：</td>
                                <td><input type="text" name="sort" class="input-text lh30" value="1" pattern="[0-9]+" />&nbsp;<?php echo form_error('sort');?></td>
                            </tr>
                            <tr>
                                <td class="td_right">添加时间：</td>
                                <td><input type="text" name="addtime" class="input-text lh30" value="<?php echo date('Y-m-d H:i:s')?>" />&nbsp;<?php echo form_error('addtime');?></td>
                            </tr>
                            <tr>
                                <td class="td_right">&nbsp;</td>
                                <td><input type="submit" name="button1" class="btn btn82 btn_save2" value="保存" />
                                    <input type="reset" name="button2" class="btn btn82 btn_res" value="重置" /></td>
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