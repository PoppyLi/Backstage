<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/common.css');?>">
<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/main.css');?>">
<link rel="stylesheet" href="<?php echo base_url(PUB.'/kindeditor/themes/default/default.css');?>" />
<link rel="stylesheet" href="<?php echo base_url(PUB.'/kindeditor/plugins/code/prettify.css');?>" />
<script charset="utf-8" src="<?php echo base_url(PUB.'/kindeditor/kindeditor.js');?>"></script>
<script charset="utf-8" src="<?php echo base_url(PUB.'/kindeditor/lang/zh_CN.js');?>"></script>
<script charset="utf-8" src="<?php echo base_url(PUB.'/kindeditor/plugins/code/prettify.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/colResizable-1.3.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/common.js');?>"></script>
<script type="text/javascript">
$(function(){
	$(".list_table").colResizable({
		liveDrag:true,
		gripInnerHtml:"<div class='grip'></div>", 
		draggingClass:"dragging", 
		//minWidth:30
	}); 
}); 

KindEditor.ready(function(K) {
	var editor1 = K.create('textarea[name="content"]', {
		cssPath : '<?php echo base_url(PUB.'/kindeditor/plugins/code/prettify.css');?>',
		uploadJson : '<?php echo base_url(PUB.'/kindeditor/php/upload_json.php');?>',
		fileManagerJson : '<?php echo base_url(PUB.'/kindeditor/php/file_manager_json.php');?>',
		allowFileManager : true
	});
	prettyPrint();
});
</script>	