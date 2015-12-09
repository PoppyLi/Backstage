<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index(){
		$data = array();
		
		if(!empty($_POST)){
			$username = $this->input->post('username',NULL);
			$password = $this->input->post('password',NULL);
			$verify = $this->input->post('verify',NULL);
			
			if(empty($username) || empty($password) || empty($verify)){
				echo '<script>alert("不能为空！");history.back();</script>';
				exit();
			}
			
			if($verify != $_SESSION['verify']){
				echo '<script>alert("验证码不正确！");history.back();</script>';
				exit();
			}
			unset($_SESSION['verify']);
			$_SESSION['verify'] = NULL;
			
			$this->load->model(MODULE.'/User_model');
			$where = array(
				'username' => $username,
				'password' => $this->_password($password)
			);
			$user = $this->User_model->login($where);
			if(empty($user)){
				echo '<script>alert("用户名或密码错误！");history.back();</script>';
				exit();
			}
			
			if(empty($user['status'])){
				echo '<script>alert("你已经被禁用！");history.back();</script>';
				exit();
			}
			
			$_SESSION['user'] = $user;			
			redirect(MODULE.'/main/index');
			exit();
		}
		
		$data['captcha'] = $this->_captcha();		
		$this->load->view(MODULE.'/user/login',$data);
	}
	
	public function captcha(){
		$get = $this->input->get('i',NULL);
		if(empty($get)){
			exit();
		}
		echo $this->_captcha();
	}	
}