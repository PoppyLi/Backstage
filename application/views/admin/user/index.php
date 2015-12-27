<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：用户管理<span>&gt;</span>用户列表</div>
    <div id="table">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th>用户名</th>
                    <th>性别</th>
                    <th>登录次数</th>
                    <th>上次登录时间</th>
                    <th>上次登录IP</th>
                    <th>状态</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
                <?php foreach($lists as $v){?>
                <tr class="tr">
                    <td><?php echo $v['username']?></td>
                    <td><?php echo $sex[$v['sex']]?></td>
                    <td><?php echo $v['login_num']?></td>
                    <td><?php echo $v['login_time']?></td>
                    <td><?php echo $v['login_ip']?></td>
                    <td><?php echo $status[$v['status']]?></td>
                    <td><?php echo date('Y-m-d H:i:s',$v['addtime'])?></td>
                    <td><a href="<?php echo site_url(MODULE.'/'.C.'/edit/'.$v['id'])?>">编辑</a> | <a onclick="return confirm('确定删除？')" href="<?php echo site_url(MODULE.'/'.C.'/del/'.$v['id'])?>">删除</a></td>
                </tr>
                <?php }?>
           </table>
        </div>
    </div>
</div>
</body>
</html>