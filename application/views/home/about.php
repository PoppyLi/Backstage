<!DOCTYPE HTML>
<html>
<head>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>公司简介-装饰公司</title>
<meta name="description" content="装饰工程有限公司成立于2006年，于2011年增加注册资本金为600万元，是一家专业从事公共空间设计与施工的企业，本企业系国家建设部颁发的建筑装饰装修工程设计与施工一体化贰级资质；河南省建设厅建筑装饰协会理事单位；ISO9001质量、环境、职业健康安全管理体系认证通过企业。" />
<meta name="keywords" content="" />
<?php $this->load->view('home/common/Style')?>
</head>

<body>
<?php $this->load->view('home/common/header')?>

<div class="sidebar-box">
  <div class="sidebar-con">
        <div class="sidebar-con-left">
            <div class="sidebar-con-tit">
        <div class="sidebar-con-box"><font class="this"><?php echo $about[0]['name']?></font><span class="this">About</span></div>
      </div>
            <div class="sidebar-con-left-nav">
        <ul>
                    <li>
            <a href="/gongsijianjie/index/2.html">关于我们</a>
          </li>
                    <li>
            <a href="/gongsijianjie/index/3.html">经验理念</a>
          </li>
                    <li>
            <a href="/gongsijianjie/index/4.html">企业锋芒</a>
          </li>
                    <li>
            <a href="/gongsijianjie/index/5.html">公司文化</a>
          </li>
                  </ul>
        <div class="clear"></div>  
      </div>
      
      <div class="sidebar-con-tit">
        <div class="sidebar-con-box"><font class="this">联系方式</font><span class="this">CONTACT&nbsp;</span></div>
      </div>
      <div class="sidebar-con-left-con">
        <div>地址：时代广场1号楼A座1008室</div>
        <div>电话：0871-55667788</div>
        <div>联系人：冯先生 13833338888</div>
        <div>邮箱：mail@163.com</div>
        </div>
    </div>
    
    <div class="sidebar-con-right">    
      <div class="sidebar-con-tit">
        <p>当前位置： <a href="<?php echo site_url();?>">网站首页</a> &gt; <a href="<?php echo site_url($about[0]['url'])?>"><?php echo $about[0]['name']?></a></p>
        <font class="this"><?php echo $about[0]['name']?></font><span class="this">About&nbsp;</span>
      </div>
      
      <div class="sidebar-con-right-con">        
        <div class="editor active" id="showtext">
        	<?php echo empty($content[0]['content'])?'':$content[0]['content']?>          
			<div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>

<?php $this->load->view('home/common/footer')?>
</body>
</html>