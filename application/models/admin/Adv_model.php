<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adv_model extends MY_Model {
	private $t='Adv';	
	private $tc='Advcate';
	
	public function lists($limit=2,$offset){
		$this->db->select($this->t.'.*,'.$this->tc.'.name as catename');
		$this->db->join($this->tc,$this->t.'.Advcate_id = '.$this->tc.'.id','LEFT');
		$this->db->order_by($this->t.'.Advcate_id,'.$this->t.'.sort',$this->t.'.addtime');			
		$query = $this->db->get($this->t,$limit,$offset);
		$result = $query->result_array();
		return $result;
	}
	
	public function total(){
		$this->db->select('COUNT("id") as total');			
		$total = $this->db->get($this->t)->row_array();
		return $total['total'];
	}
	
	public function rows($where = array()){
		if(empty($where)){
			return false;
		}
		return $this->db->get_where($this->t,$where)->result_array();
	}
	
	public function edit($where = array(),$image = NULL){
		if(empty($where)){
			return 0;
		}
		$data = $this->_get_data($this->t);
		if(empty($data)){
			return 0;
		}	
		$data['image'] = $image;
		$data['addtime'] = empty($data['addtime'])?time():strtotime($data['addtime']);
		$this->db->update($this->t,$data,$where);
		return $this->db->affected_rows();
	}
	
	public function add($images = NULL){
		$data = $this->_get_data($this->t);
		if(empty($data)){
			return 0;
		}		
		$data['image'] = $images;
		$data['addtime'] = empty($data['addtime'])?time():strtotime($data['addtime']);
		$this->db->insert($this->t,$data);
		return $this->db->insert_id();
	}
	
	public function del($id = array(),$field = ''){
		if(empty($id)){
			return 0;
		}
		if(empty($field)){
			$field = 'id';
		}
		$images = $this->db->select('image')->where_in($field,$id)->get($this->t)->result_array();
		foreach($images as $v){
			file_exists($v['image'])?unlink($v['image']):NULL;
		}
		$this->db->where_in($field,$id)->delete($this->t);
		return $this->db->affected_rows();
	}
}