<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/Common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">
    <form action="<?php echo site_url(MODULE.'/'.C.'/'.M)?>" method="get">
    	内容分类：
        <select class="select" name="documentcate_id">
     		<option value="0" >-所有分类-</option>
            <?php 
				if(!empty($lists)){
					foreach($lists as $v){
			?>
				<option value="<?php echo $v['id']?>" <?php echo($v['id']==$documentcate_id)?'selected="selected"':'' ?>><?php echo str_repeat('&nbsp;',($v['level'] - 1)*4).$v['name']?></option>
			<?php
					}
				}
			?>
       	</select>
        关键词：
        <input name="name" type="text" class="input-text lh25" value="<?php echo $title?>" />
        <input class="btn btn82 btn_search" type="submit" value="搜索" />
	</form>
    当前位置：内容管理<span>&gt;</span>内容列表</div>
    <div id="table">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th width="90">&nbsp;</th>
                    <th width="371">标题</th>
                    <th width="135">所属分类</th>
                    <th width="256">排序</th>
                    <th width="140">添加时间</th>
                    <th width="80">操作</th>
                </tr>
              <form id="document_form" action="<?php echo site_url(MODULE.'/'.C.'/del/')?>" method="post">
              <?php 
			  	if(! empty($rows)){
					foreach($rows as $value){					
			  ?>
               <tr class="tr">
                    <td class="td_center"><input type="checkbox" name="id[]" value="<?php echo $value['id']?>" /></td>
                    <td><?php echo $value['title']?></td>
                    <td><?php echo $value['name']?></td>
                    <td><?php echo $value['sort']?></td>
                    <td><?php echo date('Y-m-d H:m:s',$value['addtime'])?></td>
                    <td><a href="<?php echo site_url(MODULE.'/'.C.'/edit/'.$value['id'])?>">编辑</a> | <a onclick="return confirm('确定删除？')" href="<?php echo site_url(MODULE.'/'.C.'/del/'.$value['id'])?>">删除</a></td>
              </tr>
              <?php 
					}
				}
			  ?>
               <tr class="tr">
                	<td class="td_center"><input type="button" name="select_all" class="btn btn82 btn_checked" value="全选" /></td>
                    <td colspan="5"><input type="submit" name="delete_all" class="btn btn82 btn_del" value="删除" onclick="return confirm('确定删除?');" /></td>
                </tr>
                </form>
                            </table>
            <div class="pagination"><?php echo $pagination?></div>
        </div>
    </div>
</div>
</body>
</html>