<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：广告管理<span>&gt;</span>广告分类</div>
    <div id="table">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th>分类名称</th>
                    <th>图片宽</th>
                    <th>图片高</th>
                    <th>排序</th>
                    <th>备注</th>
                    <th>操作</th>
                </tr>
                <tr class="tr">
                    <td>幻灯片</td>
                    <td>1920</td>
                    <td>400</td>
                    <td>1</td>
                    <td></td>
                    <td><a href="admin/advcate/edit/1">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/advcate/del/1">删除</a></td>
                </tr>
           </table>
        </div>
    </div>
</div>
</body>
</html>