<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：链接管理<span>&gt;</span>链接列表</div>
    <div id="table">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th>链接名称</th>
                    <th>链接网址</th>
                    <th>排序</th>
                    <th>状态</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
                <?php foreach($lists as $v) {?>
                <tr class="tr">
                    <td><?php echo $v['name']?></td>
                    <td><?php echo $v['url']?></td>
                    <td><?php echo $v['sort']?></td>
                    <td><?php echo $v['status']?'显示':'隐藏'?></td>
                    <td><?php echo date('Y-m-d H:i:s',$v['addtime'])?></td>
                    <td><a href="<?php echo site_url(MODULE.'/'.C.'/edit/'.$v['id'])?>">编辑</a> | <a onclick="return confirm('确定删除？')" href="<?php echo site_url(MODULE.'/'.C.'/del/'.$v['id'])?>">删除</a></td>
                </tr>
                <?php }?>
            </table>
            <div class="pagination"></div>
        </div>
    </div>
</div>
</body>
</html>