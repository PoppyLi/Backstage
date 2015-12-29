<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends MY_Model {
	private $t = 'user'; 
	
	//密码验证
	public function login($where){
		if(empty($where)){
			return array();
		}
		$where['password'] = $this->_password($where['password']);
		return $this->db->get_where($this->t,$where)->row_array();
	}
	
	//用户列表
	public function lists(){
		return $this->db->get($this->t)->result_array();	
	}
	
	//查询单用户记录
	public function row($id = NULL){
		if(empty($id)){
			return 0;	
		}	
		return $this->db->get_where($this->t,array('id' => $id))->row_array();
	}
	
	//查询用户名是已经存在
	public function user_exists($username){
		if(empty($username)){
			return false;
		}
		$affected = $this->db->get_where($this->t,array('username' => $username))->row_array();
		if(!empty($affected))
			return true;
	}
	
	//添加新用户
	public function add(){
		$data = array();
		$data = $this->_get_data($this->t);
		$data['password'] = $this->_password($data['password']);
		$data['addtime'] = empty($data['addtime'])?time():strtotime($data['addtime']);
		$data['jurisdiction'] = implode(',',$data['jurisdiction']);
		$this->db->insert($this->t,$data);
		return $this->db->insert_id();
	}
	
	//编辑用户
	public function edit($id=NULL){
		$data = array();
		$data = $this->_get_data($this->t);	
		if(!empty($data['password'])){
			$data['password'] = $this->_password($data['password']);
		}else{
			unset($data['password']);	
		}
		$data['addtime'] = empty($data['addtime'])?time():strtotime($data['addtime']);
		$data['jurisdiction'] = implode(',',$data['jurisdiction']);
		$this->db->update($this->t,$data,array('id' => $id));
		return $this->db->affected_rows();
	}
	
	//删除用户
	public function del($id){
		return $this->db->delete($this->t,array('id' => $id));
	}
	
	//新密码修改
	public function updata_pass($new_password){
		if(empty($new_password)){
			return false;
		}		
		$data = array(
			'password' => $this->_password($new_password)
		);
		$where = array(
			'id' => $_SESSION['user']['id']
		);		
		$this->db->update($this->t,$data,$where);
		return $this->db->affected_rows();
	}
	
	public function update_login($user=array()){
		$data = array(
			'login_num'		=>	$user['login_num'] + 1,
			'login_time'	=>	time(),
			'login_ip'		=>	$this->input->ip_address()
		);
		$where = array('id' => $user['id']);
		
		$this->db->update($this->t,$data,$where);
	}
}