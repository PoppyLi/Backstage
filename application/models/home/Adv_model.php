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
}