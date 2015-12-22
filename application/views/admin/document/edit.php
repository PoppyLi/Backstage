<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：内容管理<span>&gt;</span>编辑内容</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="<?php echo site_url(MODULE.'/'.C.'/'.M.'/'.$rows[0]['id'])?>" enctype="multipart/form-data" method="post" class="jqtransform">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="td_right">所属分类：</td>
                                <td>
                                    <div class="select_border">
                                        <div class="select_containers ">
                                            <select name="documentcate_id" class="select">
                                                <?php 
													if(!empty($lists)){
														foreach($lists as $v){
												?>
													<option value="<?php echo $v['id']?>" <?php echo ($v['id'] == $rows[0]['id'])?'selected="selected"':'' ?>><?php echo str_repeat('&nbsp;',($v['level'] - 1)*4).$v['name']?></option>
												<?php
														}
													}
												?>
                                            </select>&nbsp;<?php echo form_error('documentcate_id');?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">标题：</td>
                                <td><input type="text" name="title" class="input-text lh30" value="<?php echo $rows[0]['title']?>"/>&nbsp;<?php echo form_error('title');?></td>
                            </tr>
                            <tr>
                                <td class="td_right">排序：</td>
                                <td><input type="text" name="sort" class="input-text lh30" value="<?php echo $rows[0]['sort']?>" pattern="[0-9]+" />&nbsp;<?php echo form_error('sort');?></td>
                            </tr>
                            <tr>
                                <td class="td_right">添加时间：</td>
                                <td><input type="text" name="addtime" class="input-text lh30" value="<?php echo date('Y-m-d H:m:s',$rows[0]['addtime'])?>" />&nbsp;<?php echo form_error('addtime');?></td>
                            </tr>
                            <tr>
                              	<td valign="top" class="td_right">图片：</td>
                              	<td><input type="text" name="image" class="input-text lh30" value="<?php echo $rows[0]['image']?>" /><input type="file" name="filename"/></td>
                            </tr>
                            <tr>
                                <td valign="top" class="td_right">内容：</td>
                                <td><textarea id="content" name="content" style="width:700px;height:200px;visibility:hidden;"><?php echo (set_value('content')==null)?htmlspecialchars($rows[0]['content']):set_value('content');?></textarea>&nbsp;<?php echo form_error('content');?></td>
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