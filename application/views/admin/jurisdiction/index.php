<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：权限管理<span>&gt;</span>权限列表</div>
    <div id="table" class="">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th>权限名称</th>
                    <th>功能菜单</th>
                    <th>权限级别</th>
                    <th>权限排序</th>
                    <th>权限路径</th>
                    <th>操作</th>
                </tr>
                <?php foreach($lists as $v){?>
                <tr class="tr">
                    <td><div style="padding-left:0em;"><?php echo str_repeat('&nbsp;',($v['level'] - 1)*4).$v['name']?></div></td>
                    <td><?php echo $v['status']?'显示':'隐藏'?></td>
                    <td><?php echo $v['level']?></td>
                    <td><?php echo $v['sort']?></td>
                    <td><?php echo $v['class_method']?></td>
                    <td><a href="<?php echo site_url(MODULE.'/'.C.'/edit/'.$v['id'])?>">编辑</a> | <a onclick="return confirm('确定删除？')" href="<?php echo site_url(MODULE.'/'.C.'/del/'.$v['id'])?>">删除</a></td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>
</body>
</html>