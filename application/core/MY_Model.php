<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
	public function __construct(){
		parent :: __construct();
	}
	
	protected function _password($pass){
		return md5(md5($pass).'ci');
	}	
	
	protected function _get_data($t = NULL){
		if(empty($t)){
			return array();
		}
		$result = $this->db->query('DESC '.$this->db->dbprefix($t))->result_array();
		
		$fields = array();
		foreach($result as $v){
			if($v['Field'] == 'id')
				continue;	
			$fields[] = $v['Field'];
		}
		
		$data = array();
		foreach($_POST as $key => $value){
			if(in_array($key,$fields)){
				$data[$key] = $this->input->post($key);
			}
		}		
		return $data;
	}
}