<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model(MODULE.'/User_model');
	}
	
	public function update_pass(){
		if(!empty($_POST)){
			//旧密码验证
			$old_password = $this->input->post('old_password');
			$where = array(
				'id' => $_SESSION['user']['id'],
				'password' => $this->_password($old_password)
			);
			$row = $this->User_model->login($where);
			if(empty($row)){
				Errmsg('旧密码错误');
				exit();
			}
			
			//新密码修改
			$new_password = $this->input->post('new_password');					
			$date = array(
				'password' => $this->_password($new_password)
			);			
			$affected_rows = $this->User_model->updata_pass($date);
			if(empty($affected_rows)){
				Errmsg('修改失败');
			}else{
				Msgbox('修改成功',site_url(MODULE.'/'.C.'/'.M));
			}
			exit();
		}
		$this->load->view(MODULE.'/'.C.'/'.M);
	}
}