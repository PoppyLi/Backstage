<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：内容管理<span>&gt;</span>编辑分类</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="<?php echo site_url(MODULE.'/'.C.'/'.M.'/'.$rows[0]['id']);?>" class="jqtransform" method="post">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr >
                                <td class="td_right">上级分类：</td>
                                <td>
                                    <div class="select_border">
                                        <div class="select_containers ">
                                            <select name="pid" class="select">
                                                <option value="0" selected="selected">顶级分类</option>
												<?php 
													if(!empty($lists)){
														foreach($lists as $v){
												?>
													<option value="<?php echo $v['id']?>" <?php echo ($rows[0]['pid'] == $v['id'])?"selected='selected'":""?>><?php echo str_repeat('&nbsp;',($v['level'] - 1)*4).$v['name']?></option>
												<?php
														}
													}
												?>
											</select>&nbsp;<?php echo form_error('pid');?>
                                        </div>
                                    </div>                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">分类名称：</td>
                                <td><input type="text" name="name" class="input-text lh30" required value="<?php echo $rows[0]['name']; ?>"/>&nbsp;<?php echo form_error('name');?></td>
                            </tr>
                            <tr>
                                <td class="td_right">英文名称：</td>
                                <td><input type="text" name="en_name" class="input-text lh30" value="<?php echo $rows[0]['en_name']; ?>"/></td>
                            </tr>
                            <tr>
                                <td class="td_right">分类排序：</td>
                                <td><input type="text" name="sort" class="input-text lh30" value="<?php echo $rows[0]['sort']; ?>" pattern="[0-9]+" />&nbsp;<?php echo form_error('sort');?>&nbsp;值越小越排在前</td>
                            </tr>
                            <tr>
                                <td class="td_right">是否为菜单：</td>
                                <td><label><input type="radio" name="is_nav" value="1" <?php echo !empty($rows[0]['is_nav'])?' checked="checked"':''?>/>&nbsp;是</label>&nbsp;&nbsp;<label><input type="radio" name="is_nav" value="0"<?php echo !empty($rows[0]['is_nav'])?'':' checked="checked"'?>/>&nbsp;否</label></td>
                            </tr>
                            <tr>
                                <td class="td_right">链接地址：</td>
                                <td><input type="text" name="url" class="input-text lh30" value="<?php echo $rows[0]['url']; ?>"/></td>
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