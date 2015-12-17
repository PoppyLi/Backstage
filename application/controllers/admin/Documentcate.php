<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentcate extends Admin_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model(MODULE.'/Documentcate_model');
	}
	//内容分类
	public function index(){
		$data['lists'] = $this->_cate_level($this->Documentcate_model->lists());
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
		
	//添加分类
	public function add(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$state = $this->form_validation->run('documentcate');	
			
		if($state && (!empty($_POST))){
			$this->Documentcate_model->add();
		}
		
		$data['lists'] = $this->_cate_level($this->Documentcate_model->lists());
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	
	//编辑分类
	public function edit(){
		$data = array();
		$id = $this->uri->segment(4,0);		
		if(empty($id)){
			echo '<script>alert("非法参数！");history.back()"</script>';
			exit();
		}
		$where = array('id' => $id);	
		$data['rows'] = $this->Documentcate_model->rows($where);
		if(empty($data['rows'])){
			echo '<script>alert("数据非法！");history.back()"</script>';
		}
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$state = $this->form_validation->run('documentcate');	
			
		if($state && (!empty($_POST))){
			$affected_rows = $this->Documentcate_model->edit($where);
			if(empty($affected_rows)){
				echo '<script>alert("修改失败！");history.back()"</script>';
			}else{
				echo '<script>alert("修改成功！");location.href="'.site_url(MODULE.'/'.C.'/index').'"</script>';
			}
			exit();
		}
		
		$where = array('id !=' => $id);
		$data['lists'] = $this->_cate_level($this->Documentcate_model->lists($where));		
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	
	//删除分类
	public function del(){
		$data = array();
		$id = $this->uri->segment(4,0);		
		if(empty($id)){
			echo '<script>alert("非法参数！");history.back()"</script>';
			exit();
		}
		$del_id[] = $id;
		$data = $this->_cate_level($this->Documentcate_model->lists(),$id);		
		foreach($data as $v){
			$del_id[] = $v['id'];
		}
		$affected_rows = $this->Documentcate_model->del($del_id);
		if(empty($affected_rows)){
			echo '<script>alert("删除失败！");history.back()"</script>';
			exit();
		}else{
			$this->load->model(MODULE.'/Document_model');
			$this->Document_model->del($del_id,'documentcate_id');	
		}
		redirect(MODULE.'/'.C.'/index');
	}
}