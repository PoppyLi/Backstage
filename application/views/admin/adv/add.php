<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="public/admin/css/common.css">
<link rel="stylesheet" href="public/admin/css/main.css">
<script type="text/javascript" src="public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="public/admin/js/colResizable-1.3.min.js"></script>
<script type="text/javascript" src="public/admin/js/common.js"></script>
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
    <div id="here_location">当前位置：广告管理<span>&gt;</span>添加广告</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="admin/adv/add" method="post" enctype="multipart/form-data" class="jqtransform">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="td_right">所属分类：</td>
                                <td>
                                    <div class="select_border">
                                        <div class="select_containers ">
                                            <select name="advcate_id" class="select">
                                                <option value="0" selected="selected">-请选择-</option>
												                                                <option value="1">幻灯片</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">广告名称：</td>
                                <td><input type="text" name="name" class="input-text lh30" required /></td>
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
                                <td><input type="text" name="sort" class="input-text lh30" value="3" pattern="[0-9]+" /></td>
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
                                <td><input type="text" name="addtime" class="input-text lh30" value="2015-10-16 15:41:46" /></td>
                            </tr>
                            <tr>
                              <td valign="top" class="td_right">广告图片：</td>
                              <td><input type="text" name="img" class="input-text lh30" />
                              <input type="file" name="thumb" /></td>
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