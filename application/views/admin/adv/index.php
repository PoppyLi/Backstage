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
    <div id="here_location">当前位置：广告管理<span>&gt;</span>广告列表</div>
    <div id="table">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th width="90">&nbsp;</th>
                    <th>广告名称</th>
                    <th>广告链接</th>
                    <th width="120">新窗口打开</th>
                    <th width="70">状态</th>
                    <th width="150">所属分类</th>
                    <th width="70">排序</th>
                    <th width="150">添加时间</th>
                    <th width="90">操作</th>
                </tr>
                                <form id="adv_form" action="admin/adv/del" method="post">
                                <tr class="tr">
                    <td class="td_center"><input type="checkbox" name="id[1]" value="1" /></td>
                    <td>图1</td>
                    <td></td>
                    <td>是</td>
                    <td>显示</td>
                    <td>幻灯片</td>
                    <td>1</td>
                    <td>2015-10-15 11:26:36</td>
                    <td><a href="admin/adv/edit/1">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/adv/del/1">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td class="td_center"><input type="checkbox" name="id[2]" value="2" /></td>
                    <td>图2</td>
                    <td></td>
                    <td>是</td>
                    <td>显示</td>
                    <td>幻灯片</td>
                    <td>2</td>
                    <td>2015-10-15 11:34:45</td>
                    <td><a href="admin/adv/edit/2">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/adv/del/2">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td class="td_center"><input type="checkbox" name="id[3]" value="3" /></td>
                    <td>图3</td>
                    <td></td>
                    <td>是</td>
                    <td>显示</td>
                    <td>幻灯片</td>
                    <td>3</td>
                    <td>2015-10-15 11:36:17</td>
                    <td><a href="admin/adv/edit/3">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/adv/del/3">删除</a></td>
                </tr>
                                <tr class="tr">
                	<td class="td_center"><input type="button" name="select_all" class="btn btn82 btn_checked" value="全选" /></td>
                    <td colspan="8"><input type="submit" name="delete_all" class="btn btn82 btn_del" value="删除" /></td>
                </tr>
                </form>
                            </table>
            <div class="pagination"></div>
        </div>
    </div>
</div>
</body>
</html>