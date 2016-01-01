<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends MY_Controller{
	public function __construct(){
		parent :: __construct('Home',1,2);
	}
}

class Admin_Controller extends MY_Controller{
	public function __construct(){
		parent :: __construct();
		
		//判断用户是否登陆
		if(empty($_SESSION['user'])){
			echo '<script>top.location.href="'.site_url(MODULE.'/login/index').'"</script>';
			exit();
		}		
		//权限判断
		$this->config->load('admin_config');
		$user_id = $_SESSION['user']['id'];
		$supper = $this->config->item('supper');
		$supper_page = $this->config->item('supper_page');
		$page = C.'/'.M;
		
		if(! in_array($user_id,$supper) && ! in_array($page,$supper_page)){
			$this->load->model(MODULE.'/Jurisdiction_model','Jur');				
			$row = $this->Jur->rows(array('class_method' => $page),'id');
			if(empty($row[0]['id'])){
				Errmsg('没有权限');	
			}
			$jur_arr = explode(',',$_SESSION['user']['jurisdiction']);
			if(! in_array($row[0]['id'],$jur_arr)){
				Errmsg('没有权限');
			}
		}
		
	}
	
	public function _image_upload($arr = array(),$file){        
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 0;
		$config['file_name'] = date('YmdHis').'_'.rand(1000,9999);		
		$config = array_merge($config,$arr);
        $this->load->library('upload', $config);
        if($this->upload->do_upload($file)){
         	return $this->upload->data();  
        }
		return null;
	}
}

class MY_Controller extends CI_Controller {
	public function __construct($MODULE='admin',$controller=2,$method=3){
		parent :: __construct();
		
		//session_start();
		header("Content-type: text/html; charset=utf-8");
		ini_set('date.timezone','Asia/Shanghai');
		
		define('PUB','public');
		define('MODULE',$MODULE);
		define('C',$this->uri->segment($controller,'main'));
		define('M',$this->uri->segment($method,'index'));		
	}
	
	//验证码
	protected function _captcha(){
		$this->load->helper('captcha');
		
		$_SESSION['verify'] = Rand(10000,99999);
				
		$config = array(
		    'word'      => $_SESSION['verify'],
			'img_path'  => './'.PUB.'/captcha/',
			'img_url'   => base_url('public/captcha/'),
			'font_path' => './system/fonts/texb.ttf',
			'img_width' => '150',
			'img_height'    => 30,
			'expiration'    => 7200,
			'word_length'   => 8,
			'font_size' => 16,
			'img_id'    => 'Imageid',
			'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
		);
			
		$captcha = create_captcha($config);
		
		return $config['img_url'].'/'.$captcha['filename'];
	}
	
	//内容级别显示
	public function _cate_level($data,$pid=0,$level=1){
		$array = array();
		foreach($data as $v){
			if($v['pid'] == $pid){
				$v['level'] = $level;
				$array[] = $v;
				$array = array_merge($array,$this->_cate_level($data,$v['id'],$level + 1));
			}
		}
		return $array;
	}
	
	//底部信息调用
	public function GetFooter(){
		$this->load->model(MODULE.'/System_model','sys');
		return $this->sys->row();
	}
	
}