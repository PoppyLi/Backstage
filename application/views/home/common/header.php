<div class="header-box">
    <div class="header-top">
        <div class="top-nav">
            <span class="i"></span>
            <a href="javascript:void(0)" onclick='SetHome(this,window.location,"浏览器不支持此功能，请手动设置！");'>设为首页</a> | <a href="javascript:void(0)" onclick='addFavorite("浏览器不支持此功能，请手动设置！");'>收藏本站</a>
        </div>
    </div>

    <div class="header-con">
        <a href="" id="web_logo" title="装饰公司"><span>ZSGS</span>装饰公司<i>zsgs.com</i></a>
        <div class="nav-box">
        	<ul>
                <li class="navdown">
                  <a href="<?php echo site_url();?>">首 页</a>
                  <ul>
                  	<li><a href="<?php echo site_url();?>">首 页</a></li>
                  </ul>
                </li>
                <?php foreach($nav as $v){?>
				<li>
                  <a href="<?php echo site_url($v['url']);?>"><?php echo $v['name']?></a>
                  <ul>
                  	<li><a href="<?php echo site_url($v['url']);?>"><?php echo $v['name']?></a></li>
                  	<?php foreach($v['child'] as $val){?>
                    <li><a href="<?php echo site_url($val['url']);?>"><?php echo $val['name']?></a></li>
                    <?php }?>
                  </ul>
                </li>
                <?php }?>
         	</ul>
         </div>
    </div>
</div>

<div class="banner-box">
    <div class="banmove">
    	<?php foreach($banner as $v){?>
        <a href="javascript:void(0)" style="background:url(<?php echo base_url($v['image']);?>) no-repeat center center;"></a>
		<?php }?>
    </div>
    <div class="banmun"></div>
    <div class="banerbot"></div>
</div>