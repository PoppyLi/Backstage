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
    <div id="here_location">当前位置：用户管理<span>&gt;</span>用户列表</div>
    <div id="table">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th>用户名</th>
                    <th>登录次数</th>
                    <th>上次登录时间</th>
                    <th>上次登录IP</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                                <tr class="tr">
                    <td>admin</td>
                    <td>22</td>
                    <td>2015-10-16 15:35:09</td>
                    <td>::1</td>
                    <td>启用</td>
                    <td><a href="admin/user/edit/1">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/user/del/1">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>root</td>
                    <td>4</td>
                    <td>2015-10-16 15:35:09</td>
                    <td>127.0.0.1</td>
                    <td>启用</td>
                    <td><a href="admin/user/edit/2">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/user/del/2">删除</a></td>
                </tr>
                            </table>
        </div>
    </div>
</div>
</body>
</html>