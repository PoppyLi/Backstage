<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Home_Controller {
	public function __construct(){
		parent :: __construct();
	}
	
	public function index()
	{	
		$data = $this->CommonInfo;
		$this->load->view('home/index',$data);
	}
}
