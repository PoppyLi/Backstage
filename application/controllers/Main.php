<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Home_Controller {
	public function __construct(){
		parent :: __construct();
	}
	
	public function index()
	{
		$this->load->view('home/main/index');
	}
}
