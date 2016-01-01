<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Home_Controller {
	public function __construct(){
		parent :: __construct();
	}
	
	public function index()
	{
		$data = array();
		$data['row'] = $this->GetFooter();
		$this->load->view('home/main/index',$data);
	}
}
