<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentcate_model extends MY_Model {
	private $t='documentcate';
	
	public function lists($where = array()){
		$data = array();
		$data = $this->db->order_by('sort,pid,id')->get_where($this->t,$where)->result_array();
		return parent :: _get_child($data);
	}	
	
	public function rows($where = array()){
		if(empty($where)){
			return false;
		}
		return $this->db->get_where($this->t,$where)->result_array();
	}
}