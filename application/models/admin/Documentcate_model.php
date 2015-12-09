<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentcate_model extends MY_Model {
	private $t='documentcate';
	
	public function lists($where = array()){
		return $this->db->order_by('sort,pid,id')->get_where($this->t,$where)->result_array();
	}	
	
	public function rows($where = array()){
		if(empty($where)){
			return false;
		}
		return $this->db->get_where($this->t,$where)->result_array();
	}
	
	public function add(){
		$data = $this->_get_data($this->t);
		if(empty($data)){
			return 0;
		}
		$this->db->insert($this->t,$data);
		return $this->db->insert_id();
	}
	
	public function edit($where = array()){
		if(empty($where)){
			return 0;
		}
		$data = $this->_get_data($this->t);
		if(empty($data)){
			return 0;
		}		
		$this->db->update($this->t,$data,$where);
		return $this->db->affected_rows();
	}
	
	public function del($where = array()){
		if(empty($where)){
			return 0;
		}
		$this->db->where_in('id',$where)->delete($this->t);
		return $this->db->affected_rows();
	}
}