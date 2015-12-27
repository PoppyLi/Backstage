<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>登录</title>
<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/login.css');?>">
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/jquery.min.js')?>"></script>
<script type="text/javascript">
$(function(){
	$('#login_form form').submit(function(){
		if($('input[name="username"]').val()==""){
			$('input[name="username"]').focus();
			return false;		
		}
		if($('input[name="password"]').val()==""){
			$('input[name="password"]').focus();
			return false;		
		}
		if($('input[name="verify"]').val()==""){
			$('input[name="verify"]').focus();
			return false;		
		}
	});
/*	$('img#verify').click(function(){
		$.ajax({
			url : '<?php echo site_url(MODULE.'/'.C.'/captcha');?>?i=' + Math.random(),
			success:function(data){
				$('img#verify').attr('src',data);
				return ;
			}
		});
	});*/
});
</script>
</head>

<body>
<div id="login_form">
    <form action="<?php echo site_url(MODULE.'/'.C.'/'.M); ?>" method="post">
        <div id="login_tip">用户登录<span></span></div>
        <div><input type="text" name="username" class="username" placeholder="用户名" value="" /></div>
        <div><input type="password" name="password" class="username password" placeholder="密码" value="" /></div>
        <div><input type="text" name="verify" class="username verify" placeholder="验证码" /></div>
        <div><img src="<?php echo site_url('admin/login/codev') ?>" alt="" />&nbsp;
        <input type="submit" id="submit" value="登&nbsp;&nbsp;陆" /></div>
    </form>
</div>
</body>
</html>