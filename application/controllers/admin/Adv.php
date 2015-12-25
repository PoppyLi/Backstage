<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adv extends Admin_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model(MODULE.'/Advcate_model','Dcate');
		$this->load->model(MODULE.'/Adv_model','Doc');
		
		$this->load->helper('form');		
		$this->load->library('form_validation');
	}
	
	public function index(){
		$data = array();
		
		$config['base_url'] = site_url(MODULE.'/'.C.'/'.M);
		$config['total_rows'] = $this->Doc->total();
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$config['num_links'] = 5;
		$config['first_link'] = False;
		$config['last_link'] = False;
		$this->load->library('pagination');
		$this->pagination->initialize($config);				
		$data['pagination'] = $this->pagination->create_links();
		
		$offset = $this->uri->segment($config['uri_segment'],0);
		$data['rows'] = $this->Doc->lists($config['per_page'],$offset);
		$this->load->view(MODULE.'/'.C.'/'.M,$data);	
	}
	
	public function edit(){
		$data = array();
		$advcate_id = $this->uri->segment(4,0);	
		if(empty($advcate_id)){
			Errmsg('数据非法');
			exit();
		}
		$where = array('id' => $advcate_id);
		$state = $this->form_validation->run('adv');
		$data['rows'] = $this->Doc->rows($where);	
						
		if($state){			
			if($_FILES['filename']['tmp_name']){		
				file_exists($data['rows'][0]['image'])?unlink($data['rows'][0]['image']):NULL;
				$config['upload_path'] = './upload/images/'.C.'/';
				$images = $this->_image_upload($config,'filename');
				$pic = !empty($images)?$config['upload_path'].$images['file_name']:NULL;
				
			}else{
				$pic = $this->input->post('img');
			}
			$affected_rows = $this->Doc->edit($where,$pic);	
			Msgbox('修改成功',site_url(MODULE.'/'.C.'/index'));
			exit();
		}
			
		$data['lists'] = $this->Dcate->lists();
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
	
	public function add(){
		$data = array();
		$data['advcate_id'] = $this->uri->segment(4,0);		
		$state = $this->form_validation->run('adv');		
		if($state){	  
			$config['upload_path'] = './upload/images/'.C.'/';			
			$images = $this->_image_upload($config,'filename');
			$img = !empty($images)?$config['upload_path'].$images['file_name']:'';
			$insert_id = $this->Doc->add($img);
			if(empty($insert_id)){
				Errmsg('添加失败');
			}else{
				Msgbox('添加成功',site_url(MODULE.'/'.C.'/'.M.'/'.$this->input->post('advcate_id',0)));
			}
			exit();
		}		
		$data['lists'] = $this->Dcate->lists();
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
			Errmsg('非法参数');
			exit();
		}
		$affected_rows = $this->Doc->del($id);
		if(empty($affected_rows)){
			Errmsg('删除失败');
			exit();
		}
		redirect(MODULE.'/'.C.'/index');	
	}
}