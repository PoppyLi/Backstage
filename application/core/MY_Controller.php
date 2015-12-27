<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller{
	public function __construct(){
		parent :: __construct();
		
		//判断用户是否登陆
		if(empty($_SESSION['user'])){
			echo '<script>top.location.href="'.site_url(MODULE.'/login/index').'"</script>';
			exit();
		}		
		//权限判断
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
	public function __construct(){
		parent :: __construct();
		
		//session_start();
		
		define('PUB','public');
		define('MODULE','admin');
		define('C',$this->uri->segment(2,'main'));
		define('M',$this->uri->segment(3,'index'));
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
	
}