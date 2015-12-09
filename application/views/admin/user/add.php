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
    <div id="here_location">当前位置：用户管理<span>&gt;</span>添加用户</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="admin/user/add" class="jqtransform" method="post">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="td_right">用户名：</td>
                                <td><input type="text" name="username" class="input-text lh30" required /></td>
                            </tr>
                            <tr>
                                <td class="td_right">密码：</td>
                                <td><input type="password" name="password" class="input-text lh30" required /></td>
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
                                <td><input type="text" name="sort" class="input-text lh30" value="1" pattern="[0-9]+" /> 值越小越排在前</td>
                            </tr>
                            <tr>
                                <td valign="top" class="td_right">权限：</td>
                                <td>
                                                                <label><input name="jurisdiction[]" type="checkbox" value="1" /><strong>内容管理</strong></label><br />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="2" />内容分类</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="3" />添加分类</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="4" />删除分类</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="5" />编辑分类</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="6" />内容列表</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="7" />添加内容</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="8" />删除内容</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="9" />编辑内容</label>&nbsp;&nbsp;&nbsp;
                                                                <hr size="1" />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="20" /><strong>广告管理</strong></label><br />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="21" />广告分类</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="22" />添加分类</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="23" />删除分类</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="24" />编辑分类</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="25" />广告列表</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="26" />添加广告</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="27" />删除广告</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="28" />编辑广告</label>&nbsp;&nbsp;&nbsp;
                                                                <hr size="1" />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="29" /><strong>友情链接</strong></label><br />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="30" />链接列表</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="31" />添加链接</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="32" />删除链接</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="33" />编辑链接</label>&nbsp;&nbsp;&nbsp;
                                                                <hr size="1" />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="36" /><strong>信息管理</strong></label><br />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="37" />信息列表</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="38" />添加信息</label>&nbsp;&nbsp;&nbsp;
                                                                <hr size="1" />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="15" /><strong>用户管理</strong></label><br />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="16" />用户列表</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="17" />添加用户</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="18" />删除用户</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="19" />编辑用户</label>&nbsp;&nbsp;&nbsp;
                                                                <hr size="1" />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="10" /><strong>权限管理</strong></label><br />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="11" />权限列表</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="12" />添加权限</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="13" />删除权限</label>&nbsp;&nbsp;&nbsp;
                                                                <label><input name="jurisdiction[]" type="checkbox" value="14" />编辑权限</label>&nbsp;&nbsp;&nbsp;
                                                                <hr size="1" />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="34" /><strong>系统管理</strong></label><br />
                                                                <label><input name="jurisdiction[]" type="checkbox" value="35" />系统设置</label>&nbsp;&nbsp;&nbsp;
                                                                <hr size="1" />
                                                                </td>
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