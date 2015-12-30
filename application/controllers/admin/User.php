<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model(MODULE.'/User_model');
		
		$this->load->helper('form');		
		$this->load->library('form_validation');
	}
	
	public function index(){
		$data = array();
		$this->config->load('admin_config');
		
		$data['lists'] = $this->User_model->lists();
		$data['sex'] = $this->config->item('sex');
		$data['status'] = $this->config->item('status');
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	
	public function add(){
		$data = array();
		$username = $this->input->post('username');
		$state = $this->form_validation->run('user');
		
		if($state){
			if($this->User_model->user_exists($username)){
				Errmsg('用户名 '.$username.' 已经存在');	
			}
			$affected = $this->User_model->add();
			if($affected){
				Msgbox('添加成功',site_url(MODULE.'/'.C.'/'.M));	
			}
		}
		$this->load->model(MODULE.'/Jurisdiction_model','Jur');
		$data['jurisdiction'] = $this->Jur->left_menu();
			
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	
	//编辑用户
	public function edit(){
		$data = array();
		$id = $this->uri->segment(4,0);
		$data['row'] = $this->User_model->row($id);
		
		if(!empty($_POST) && $id){
			$affected = $this->User_model->edit($id);	
			if($affected){
				Msgbox('修改成功',site_url(MODULE.'/'.C.'/index/'));	
			}
		}
		$this->load->model(MODULE.'/Jurisdiction_model','Jur');
		$data['jurisdiction'] = $this->Jur->left_menu();
		$data['jur'] = explode(',',$data['row']['jurisdiction']);
		$this->load->view(MODULE.'/'.C.'/'.M,$data);	
	}
	
	//删除用户
	public function del(){
		$id = $this->uri->segment(4,0);
		$affected = $this->User_model->del($id);
		if($affected){
				Msgbox('删除成功',site_url(MODULE.'/'.C.'/index/'));	
		}	
	}
	
	public function update_pass(){
		if(!empty($_POST)){
			//旧密码验证
			$old_password = $this->input->post('old_password');
			$where = array(
				'id' => $_SESSION['user']['id'],
				'password' => $old_password
			);
			$row = $this->User_model->login($where);
			if(empty($row)){
				Errmsg('旧密码错误');
				exit();
			}
			
			//新密码修改
			$new_password = $this->input->post('new_password');			
			$affected_rows = $this->User_model->updata_pass($new_password);
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