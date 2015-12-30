<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8" />
<title>后台管理</title>
<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/style.css')?>">
<link rel="stylesheet" href="<?PHP echo base_url(PUB.'/'.MODULE.'/css/common.css')?>">
<script type="text/javascript" src="<?PHP echo base_url(PUB.'/'.MODULE.'/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?PHP echo base_url(PUB.'/'.MODULE.'/js/jquery.SuperSlide.js')?>"></script>
<script type="text/javascript">
$(function(){
	$(".sideMenu").slide({
		titCell:"h3", 
		targetCell:"ul",
		defaultIndex:0, 
		effect:'slideDown', 
		delayTime:'500' , 
		trigger:'click', 
		triggerTime:'150', 
		defaultPlay:true, 
		returnDefault:false,
		easing:'easeInQuint',
		endFun:function(){
			scrollWW();
		}
	});
	
	$(window).resize(function() {
		scrollWW();
	});
	
	$('.sideMenu li a').click(function(){
		$(this).parent('li').addClass('on').siblings().removeClass('on');
	});
});

function scrollWW(){
	if($(".side").height()<$(".sideMenu").height()){
	   $(".scroll").show();
	   var pos = $(".sideMenu ul:visible").position().top-38;
	   $('.sideMenu').animate({top:pos});
	}else{
	   $(".scroll").hide();
	   $('.sideMenu').animate({top:44});
	   n=1;
	}
} 

var n=1;
function menuScroll(num){
	var Scroll = $('.sideMenu');
	var ScrollP = $('.sideMenu').position();
	if (num==1) {
		Scroll.animate({top:ScrollP.top-38});
		n = n+1;
	} else {
		if (ScrollP.top > -38 && ScrollP.top != 0) {
			ScrollP.top = -38;
		}
		if (ScrollP.top<0) {
			Scroll.animate({top:38+ScrollP.top});
		} else {
			n=1;
		}
		if (n>1) {
			n = n-1;
		}
	}
}
</script>
</head>

<body>
<div class="top">
    <div id="top_t">
        <div id="logo" class="fl">后台管理</div>
        <div id="photo_info" class="fr">
            <div id="photo" class="fl"> <a href="javascript:void(0)"><img src="<?php echo base_url(PUB.'/'.MODULE.'/images/a.png')?>" alt="" width="60" height="60"></a> </div>
            <div id="base_info" class="fr">
                <div class="help_info"> <a href="<?php echo site_url(MODULE.'/user/update_pass')?>" id="hp" target="right">改密</a> <a href="index.php" id="gy" target="_blank">前台</a> <a href="<?php echo site_url(MODULE.'/'.C.'/login_out')?>" id="out">退出</a> </div>
                <div class="info_center"> <?php echo $_SESSION['user']['username']?> </div>
            </div>
        </div>
    </div>
</div>

<div class="side">
    <div id="side_here"></div>
    <div class="sideMenu">
        <h3> 网站信息 </h3>
        <ul>
            <li class="on"><a href="<?php echo site_url(MODULE.'/main/right')?>" target="right">网站信息</a></li>
        </ul>
        <?php 
		foreach($menu as $v){
			if(!$v['status'])
				continue;
			if(empty($supper_user)){
				if(! in_array($v['id'],$jur))
					continue;
			}
		?>
        <h3><?php echo $v['name']?></h3>
        <ul>
        	<?php 
			foreach($v['child'] as $val){
				if(!$val['status'])
					continue;
				if(empty($supper_user)){
					if(! in_array($val['id'],$jur))
						continue;
				}
			?>
            <li><a href="<?php echo site_url(MODULE.'/'.$val['class_method'])?>" target="right"><?php echo $val['name']?></a></li>
            <?php }?>
        </ul>
        <?php }?>
    </div>
</div>

<div class="main">
    <iframe name="right" id="rightMain" src="<?php echo site_url('admin/main/right');?>" frameborder="no" scrolling="auto" width="100%" height="auto" allowtransparency="true"></iframe>
</div>

<div class="bottom">
    <div id="bottom_bg">copyright &copy; 2012-2015</div>
</div>

<div class="scroll"> <a href="javascript:;" class="per" title="使用鼠标滚轴滚动侧栏" onClick="menuScroll(1);"></a> <a href="javascript:;" class="next" title="使用鼠标滚轴滚动侧栏" onClick="menuScroll(2);"></a> </div>
</body>
</html>