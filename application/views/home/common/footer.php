<div class="footer-box">
        <div class="foot-nav">
        	<?php foreach($nav as $key => $v){
				echo !empty($key)?'<span>|</span>':'';
			?>            	
            	<a href="<?php echo site_url($v['url'])?>"><?php echo $v['name']?></a>
            <?php }?>
        </div>
        
    <p><?php echo $row['company_name']?> <?php echo $row['copyright']?></p>
    <p>地址：<?php echo $row['address']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电话：<?php echo $row['telphone']?></p>
    <!--版权信息-->
    <div class="powered_by_metinfo">
    Powered&nbsp;by&nbsp;<a href="<?php echo $row['website']?>"><?php echo $row['company_name']?></a>
    &copy;2012-2015&nbsp;
    <a href="http://www.website.com"><?php echo $row['website']?></a>
    </div>
    <!--版权信息结束-->
</div>