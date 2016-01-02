<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Home_Controller {
	public function __construct(){
		parent :: __construct();
	}
	
	public function index()
	{
		$data = $this->CommonInfo;
		$id = $this->uri->segment(3,0);
		$data['about'] = $this->GetDocumentcate($id);
		$doc_id = $data['about'][0]['id'];
		$data['content'] = $this->GetOneDoc($doc_id);
		$this->load->view('home/about',$data);
	}
	
	public function GetOneDoc($id = 0){
		$this->load->model('home/Document_model','Doc');
		return $this->Doc->rows(array('documentcate_id' => $id));
	}
}
