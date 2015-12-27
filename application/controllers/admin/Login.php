<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index(){
		$data = array();
		
		if(!empty($_POST)){
			$username = $this->input->post('username',NULL);
			$password = $this->input->post('password',NULL);
			$verify = strtoupper($this->input->post('verify',NULL));
			
			if(empty($username) || empty($password) || empty($verify)){
				Errmsg('不能为空');
				exit();
			}
			
			if($verify != $_SESSION['verify']){
				Errmsg('验证码不正确');
				exit();
			}
			unset($_SESSION['verify']);
			$_SESSION['verify'] = NULL;
			
			$this->load->model(MODULE.'/User_model');
			$where = array(
				'username' => $username,
				'password' => $password
			);
			$user = $this->User_model->login($where);
			if(empty($user)){
				Errmsg('用户名或密码错误');
				exit();
			}
			
			if(empty($user['status'])){
				Errmsg('你已经被禁用');
				exit();
			}
			
			$_SESSION['user'] = $user;
			$this->User_model->update_login($user);		
			redirect(MODULE.'/main/index');
			exit();
		}
		//$data['captcha'] = $this->_captcha();
		$this->load->view(MODULE.'/user/login',$data);

	}
	
	public function captcha(){
		$get = $this->input->get('i',NULL);
		if(empty($get)){
			exit();
		}
		echo $this->_captcha();
	}
	
	public function codev(){
		$config = array(
			'width'	=>	80,
			'height'=>	25,
			'codeLen'=>	4,
			'fontSize'=>16
			);
		$this->load->library('Code', $config);
		$this->code->show();
	}
}