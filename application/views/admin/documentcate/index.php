<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：内容管理<span>&gt;</span>内容分类</div>
    <div id="table">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th>ID</th>
                    <th>分类名称</th>
                    <th>级别</th>
                    <th>排序</th>
                    <th>操作</th>
                </tr>
				<?php 
				if(! empty($lists)){
					foreach($lists as $value){
				?>
                <tr class="tr">
                    <td><?php echo $value['id']?></td>
                    <td><div style="padding-left:0em;"><?php echo str_repeat('&nbsp;',($value['level'] - 1)*4).$value['name']?></div></td>
                    <td><?php echo $value['level']?>级</td>
                    <td><?php echo $value['sort']?></td>
                    <td><a href="<?php echo site_url(MODULE.'/'.C.'/edit/'.$value['id'])?>">编辑</a> | <a onClick="return confirm('确定删除？')" href="<?php echo site_url(MODULE.'/'.C.'/del/'.$value['id'])?>">删除</a></td>
                </tr>
				<?php 
					}
				}
				?>
            </table>
        </div>
    </div>
</div>
</body>
</html>