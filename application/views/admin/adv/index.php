<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：广告管理<span>&gt;</span>广告列表</div>
    <div id="table">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th width="90">选择</th>
                    <th>广告名称</th>
                    <th>广告链接</th>
                    <th width="120">新窗口打开</th>
                    <th width="70">状态</th>
                    <th width="150">所属分类</th>
                    <th width="70">排序</th>
                    <th width="150">添加时间</th>
                    <th width="90">操作</th>
                </tr>
                <form id="adv_form" action="<?php echo site_url(MODULE.'/'.C.'/del')?>" method="post">
                <?php foreach($rows as $v){?>
                <tr class="tr">
                    <td class="td_center"><input type="checkbox" name="id[]" value="<?php echo $v['id']?>" /></td>
                    <td><?php echo $v['name']?></td>
                    <td><?php echo $v['url']?></td>
                    <td><?php echo $v['is_blank']?></td>
                    <td><?php echo $v['status']?></td>
                    <td><?php echo $v['catename']?></td>
                    <td><?php echo $v['sort']?></td>
                    <td><?php echo $v['addtime']?></td>
                    <td><a href="<?php echo site_url(MODULE.'/'.C.'/edit/'.$v['id'])?>">编辑</a> | <a onclick="return confirm('确定删除？')" href="<?php echo site_url(MODULE.'/'.C.'/del/'.$v['id'])?>">删除</a></td>
                </tr>
                <?php }?>
                <tr class="tr">
                	<td class="td_center"><input type="button" name="select_all" class="btn btn82 btn_checked" value="全选" /></td>
                    <td colspan="8"><input type="submit" name="delete_all" class="btn btn82 btn_del" value="删除" /></td>
                </tr>
                </form>
                            </table>
            <div class="pagination"><?php echo $pagination?></div>
        </div>
    </div>
</div>
</body>
</html>