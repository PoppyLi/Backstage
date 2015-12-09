<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/common.css');?>">
<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/main.css');?>">
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/colResizable-1.3.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/common.js');?>"></script>
<script type="text/javascript">
$(function(){
	$(".list_table").colResizable({
		liveDrag:true,
		gripInnerHtml:"<div class='grip'></div>", 
		draggingClass:"dragging", 
		//minWidth:30
	}); 
}); 
</script>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：修改登录密码</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="<?php echo site_url(MODULE.'/'.C.'/'.M)?>" class="jqtransform" method="post">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="td_right">旧密码：</td>
                                <td><input type="password" name="old_password" class="input-text lh30" size="40" required="required" /></td>
                            </tr>
                            <tr>
                                <td class="td_right">新密码：</td>
                                <td><input type="password" name="new_password" class="input-text lh30" size="40" required="required" /></td>
                            </tr>
                            <tr>
                                <td class="td_right">&nbsp;</td>
                                <td><input type="submit" name="button2" class="btn btn82 btn_save2" value="保存">&nbsp;&nbsp;</td>
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