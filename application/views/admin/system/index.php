<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：系统管理<span>&gt;</span>系统设置</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="<?php echo site_url(MODULE.'/'.C.'/'.M)?>" class="jqtransform" method="post">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="td_right">公司名称：</td>
                                <td><input type="text" name="company_name" class="input-text lh30" value="<?php echo $row['company_name']?>" /></td>
                                <td class="td_right">公司地址：</td>
                                <td><input type="text" name="address" class="input-text lh30" value="<?php echo $row['address']?>" /></td>
                            </tr>
                            <tr>
                                <td class="td_right">坐机电话：</td>
                                <td><input type="text" name="telphone" class="input-text lh30" value="<?php echo $row['telphone']?>" /></td>
                                <td class="td_right">移动电话：</td>
                                <td><input type="text" name="mobile" class="input-text lh30" value="<?php echo $row['mobile']?>" /></td>
                            </tr>
                            <tr>
                                <td class="td_right">E-mail：</td>
                                <td><input type="text" name="email" class="input-text lh30" value="<?php echo $row['email']?>" /></td>
                                <td class="td_right">传真：</td>
                                <td><input type="text" name="fax" class="input-text lh30" value="<?php echo $row['fax']?>" /></td>
                            </tr>
                            <tr>
                                <td class="td_right">QQ：</td>
                                <td><input type="text" name="qq" class="input-text lh30" value="<?php echo $row['qq']?>" /></td>
                                <td class="td_right">邮编：</td>
                                <td><input type="text" name="zipcode" class="input-text lh30" id="zipcode" value="<?php echo $row['zipcode']?>" /></td>
                            </tr>
                            <tr>
                                <td class="td_right">网址：</td>
                                <td><input type="text" name="website" class="input-text lh30" value="<?php echo $row['website']?>" /></td>
                                <td class="td_right">版权所有：</td>
                                <td><input type="text" name="copyright" class="input-text lh30" value="<?php echo $row['copyright']?>" /></td>
                            </tr>
                            <tr>
                                <td class="td_right">首页标题：</td>
                                <td><input type="text" name="title" class="input-text lh30" value="<?php echo $row['title']?>" /></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td valign="top" class="td_right">首页关键词：</td>
                                <td><textarea name="keywords" class="textarea"><?php echo $row['keywords']?></textarea></td>
                                <td valign="top" class="td_right">首页描述：</td>
                                <td><textarea name="description" class="textarea"><?php echo $row['description']?></textarea></td>
                            </tr>
                            <tr>
                                <td valign="top" class="td_right">备注：</td>
                                <td><textarea name="remark" class="textarea"><?php echo $row['remark']?></textarea></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td class="td_right">&nbsp;</td>
                                <td><input type="submit" name="button1" class="btn btn82 btn_save2" value="保存">
                                    <input type="reset" name="button2" class="btn btn82 btn_res" value="重置"></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
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