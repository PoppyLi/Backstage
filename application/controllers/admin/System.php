<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System extends Admin_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model(MODULE.'/System_model','sys');
				
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	//系统信息
	public function index(){
		$data = array();
		$data['row'] = $this->sys->row();
		if(!empty($_POST)){
			$affected_rows = $this->sys->edit();
			if(!empty($affected_rows)){
				$data['row'] = $_POST;
			}
		}
		$this->load->view(MODULE.'/'.C.'/'.M,$data);
	}
}