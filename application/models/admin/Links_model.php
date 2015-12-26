<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links_model extends MY_Model {
	private $t='Links';
	
	public function lists($where = array()){
		return $this->db->order_by('sort,id')->get_where($this->t,$where)->result_array();
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
		$data['addtime'] = empty($data['addtime'])?time():strtotime($data['addtime']);
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
		$data['addtime'] = empty($data['addtime'])?time():strtotime($data['addtime']);
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