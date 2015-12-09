<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	//密码验证
	public function login($where = array()){
		if(empty($where)){
			return array();
		}		
		return $this->db->get_where('user',$where)->row_array();
	}
	
	//新密码修改
	public function updata_pass($data){
		if(empty($data)){
			return false;
		}		
		$where = array(
			'id' => $_SESSION['user']['id']
		);		
		$this->db->update('user',$data,$where);
		return $this->db->affected_rows();
	}
}