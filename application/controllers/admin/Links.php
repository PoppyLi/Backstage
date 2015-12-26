<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends Admin_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model(MODULE.'/Links_model','Dcate');
				
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	//内容分类
	public function index(){
		$data['lists'] = $this->Dcate->lists();
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
		
	//添加分类
	public function add(){
		$state = $this->form_validation->run('links');			
		if($state && (!empty($_POST))){
			$affected_rows = $this->Dcate->add();
			if(empty($affected_rows)){
				Errmsg('添加失败');
			}else{
				Msgbox('添加成功',site_url(MODULE.'/'.C.'/add'));
			}
		}
		
		$this->load->view(MODULE.'/'.C.'/'.M);
	}
	
	//编辑分类
	public function edit(){
		$data = array();
		$id = $this->uri->segment(4,0);		
		if(empty($id)){
			Errmsg('非法参数');
			exit();
		}
		$where = array('id' => $id);	
		$data['rows'] = $this->Dcate->rows($where);
		if(empty($data['rows'])){
			Errmsg('数据非法');
		}		
		$state = $this->form_validation->run('links');		
		if($state && (!empty($_POST))){
			$affected_rows = $this->Dcate->edit($where);
			if(empty($affected_rows)){
				Errmsg('修改失败');
			}else{
				Msgbox('修改成功',site_url(MODULE.'/'.C.'/index'));
			}
			exit();
		}		
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	
	//删除分类
	public function del(){
		$data = array();
		$id = $this->uri->segment(4,0);		
		if(empty($id)){
			Errmsg('非法参数');
			exit();
		}
		$affected_rows = $this->Dcate->del($id);
		if($affected_rows){
			Msgbox('删除成功',site_url(MODULE.'/'.C.'/index'));
		}
	}
}