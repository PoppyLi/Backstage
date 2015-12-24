<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：广告管理<span>&gt;</span>添加分类</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="admin/advcate/add" class="jqtransform" method="post">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="td_right">分类名称：</td>
                                <td><input type="text" name="name" class="input-text lh30" required /></td>
                            </tr>
                            <tr>
                                <td class="td_right">图片大小：</td>
                                <td><input type="text" name="width" class="input-text lh30 input-text80" value="200" pattern="[0-9]+" /> 宽x高 <input type="text" name="height" class="input-text lh30 input-text80" value="150" pattern="[0-9]+" /> 该分类下图片宽与高(单位：px)</td>
                            </tr>
                            <tr>
                                <td class="td_right">分类排序：</td>
                                <td><input type="text" name="sort" class="input-text lh30" value="1" pattern="[0-9]+" /> 值越小越排在前</td>
                            </tr>
                            <tr>
                                <td class="td_right">备注：</td>
                                <td><textarea name="remark" cols="30" rows="10" class="textarea"></textarea></td>
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