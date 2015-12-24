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
                	<th>编号</th>
                    <th>分类名称</th>
                    <th>图片(宽*高)</th>
                    <th>排序</th>
                    <th>备注</th>
                    <th>操作</th>
                </tr>
                <?php 
				if(! empty($lists)){
					foreach($lists as $v){?>
                <tr class="tr">
                	<td><?php echo $v['id']?></td>
                    <td><?php echo $v['name']?></td>
                    <td><?php echo $v['width']?>*<?php echo $v['height']?></td>
                    <td><?php echo $v['sort']?></td>
                    <td><?php echo $v['remark']?></td>
                    <td><a href="<?php echo site_url(MODULE.'/'.C.'/edit/'.$v['id'])?>">编辑</a> | <a onclick="return confirm('确定删除？')" href="<?php echo site_url(MODULE.'/'.C.'/del/'.$v['id'])?>">删除</a></td>
                </tr>
                <?php }}?>
           </table>
        </div>
    </div>
</div>
</body>
</html>