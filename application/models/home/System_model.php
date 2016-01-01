<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System_model extends MY_Model {
	private $t='system';
	
	public function row(){
		return $this->db->get($this->t)->row_array();
	}	
	
	public function edit(){
		$data = $this->_get_data($this->t);
		$this->db->update($this->t,$data);
		return $this->db->affected_rows();
	}
}