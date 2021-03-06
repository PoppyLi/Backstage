<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：广告管理<span>&gt;</span>添加广告</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="<?php echo site_url(MODULE .'/'. C .'/'. M)?>" method="post" enctype="multipart/form-data" class="jqtransform">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="td_right">所属分类：</td>
                                <td>
                                    <div class="select_border">
                                        <div class="select_containers ">
                                            <select name="advcate_id" class="select">
                                                <option value="0" selected="selected">-请选择-</option>
                                                <?php foreach($lists as $v){?>
												<option value="<?php echo $v['id']?>" <?php echo $advcate_id == $v['id']?' selected="selected"':'' ;?> <?php echo set_select('advcate_id', $v['id']);?>><?php echo $v['name']?></option>
                                                <?php }?>
                                            </select><?php echo form_error('advcate_id');?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">广告名称：</td>
                                <td><input type="text" name="name" class="input-text lh30" required /><?php echo form_error('name');?></td>
                            </tr>
                            <tr>
                                <td class="td_right">广告链接：</td>
                                <td><input type="text" name="url" class="input-text lh30" placeholder="http://" /></td>
                            </tr>
                            <tr>
                                <td class="td_right">是否新窗口打开：</td>
                                <td>
                                	<input name="is_blank" type="radio" value="1" checked="checked" />是
                                    &nbsp;&nbsp;&nbsp;
                                    <input name="is_blank" type="radio" value="0" />否
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">排序：</td>
                                <td><input type="text" name="sort" class="input-text lh30" value="3" pattern="[0-9]+" /><?php echo form_error('sort');?></td>
                            </tr>
                            <tr>
                                <td class="td_right">状态：</td>
                                <td>
                                	<input name="status" type="radio" value="1" checked="checked" />显示
                                    &nbsp;&nbsp;&nbsp;
                                    <input name="status" type="radio" value="0" />隐藏
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">添加时间：</td>
                                <td><input type="text" name="addtime" class="input-text lh30" value="<?php echo date('Y-m-d H:i:s')?>" /><?php echo form_error('addtime');?></td>
                            </tr>
                            <tr>
                              <td valign="top" class="td_right">广告图片：</td>
                              <td><input type="text" name="img" class="input-text lh30" />
                              <input type="file" name="filename" /></td>
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