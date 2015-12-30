<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Admin_Controller {
	
	public function index(){
		$data = array();		
		$this->load->model(MODULE.'/Jurisdiction_model','Jur');
		$data['menu'] = $this->Jur->left_menu();
		
		$data['jur'] = explode(',',$_SESSION['user']['jurisdiction']);
		$data['supper_user'] = '';
		$this->config->load('admin_config');
		if(in_array($_SESSION['user']['id'],$this->config->item('supper')))		
			$data['supper_user'] = 'TRUE';
			
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	
	public function right(){
		$this->load->view(MODULE.'/'.C.'/'.__FUNCTION__);
	}
	
	//登陆退出
	public function login_out(){
		if(!empty($_SESSION['user'])){
			unset($_SESSION['user']);
			$_SESSION['user'] = NULL;
		}
		echo '<script>top.location.href="'.site_url(MODULE.'/login/index').'"</script>';
		exit();
	}
}