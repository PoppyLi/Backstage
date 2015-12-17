<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends Admin_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model(MODULE.'/Documentcate_model');
		$this->load->model(MODULE.'/Document_model');
	}
	
	public function index(){
		$data = array();
		$where = array();
		$like = array();
		$suffix = '';
		$documentcate_id = $this->input->get('documentcate_id',0);
		if(!empty($documentcate_id)){
			$where['documentcate_id'] = $documentcate_id;
			$suffix = '?documentcate_id='.$documentcate_id;
		}
		$title = $this->input->get('name',NULL);
		if(!empty($title)){
			$like['title'] = $title;
			$suffix .= empty($suffix)?'?name='.$title:'&name='.$title;
		}
		$data['documentcate_id'] = $documentcate_id;
		$data['title'] = $title;
		
		
		$config['base_url'] = str_replace(config_item('url_suffix'),'',site_url(MODULE.'/'.C.'/'.M));
		$config['total_rows'] = $this->Document_model->total($where,$like);
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$config['num_links'] = 5;
		$config['first_link'] = False;
		$config['last_link'] = False;
		$config['suffix'] = $suffix;
		$this->load->library('pagination');
		$this->pagination->initialize($config);				
		$data['pagination'] = $this->pagination->create_links();
		
		$offset = $this->uri->segment($config['uri_segment'],0);
		$data['rows'] = $this->Document_model->lists($where,$like,$config['per_page'],$offset);
		$data['lists'] = $this->_cate_level($this->Documentcate_model->lists());
		$this->load->view(MODULE.'/'.C.'/'.M,$data);	
	}
	
	public function edit(){
		$data = array();
		$id = $this->uri->segment(4,0);	
		if(empty($id)){
			echo '<script>alert("非法参数！");history.back()"</script>';
			exit();
		}
		$where = array('id' => $id);
		
		//设置表单验证提交规则
		$this->load->helper('form');		
		$this->load->library('form_validation');
		$state = $this->form_validation->run('document');
		if($state && (! empty($_POST))){
			$affected_rows = $this->Document_model->edit($where);
			if(empty($affected_rows)){
				echo '<script>alert("修改失败！");history.back()"</script>';
			}else{
				echo '<script>alert("修改成功！");location.href="'.site_url(MODULE.'/'.C.'/index').'"</script>';
			}
			exit();
		}
		
		$data['rows'] = $this->Document_model->rows($where);
		if(empty($data['rows'])){
			echo '<script>alert("数据非法！");history.back()"</script>';
		}
		
		$data['lists'] = $this->_cate_level($this->Documentcate_model->lists());
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	
	public function add(){
		$data = array();
		
		//设置表单验证提交规则
		$this->load->helper('form');		
		$this->load->library('form_validation');
		$state = $this->form_validation->run('document');
		
		if($state && (! empty($_POST))){	  
			$config['upload_path'] = './upload/images/'.C.'/';
			$images = $this->_image_upload($config,'filename');
			$insert_id = $this->Document_model->add($config['upload_path'].$images['file_name']);
			if(empty($insert_id)){
				echo '<script>alert("添加失败！");history.back()"</script>';
			}else{
				echo '<script>alert("添加成功！");location.href="'.site_url(MODULE.'/'.C.'/'.M.'/'.$this->input->post('documentcate_id',0)).'"</script>';
			}
			exit();
		}
		$data['documentcate_id'] = $this->uri->segment(4,0);
		$data['lists'] = $this->_cate_level($this->Documentcate_model->lists());
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	
	public function del(){
		$id = array();			
		if(!empty($_POST)){
			$id = $this->input->post('id',array());
		}else{
			$id = $this->uri->segment(4,0);	
		}
		if(empty($id)){
			echo '<script>alert("非法参数！");history.back()"</script>';
			exit();
		}	
		$affected_rows = $this->Document_model->del($id);
		if(empty($affected_rows)){
			echo '<script>alert("删除失败！");history.back()"</script>';
			exit();
		}
		redirect(MODULE.'/'.C.'/index');	
	}
}