<?php

class Model_User extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	function getUser($credentials){
		$where['username'] = $credentials['username'];
		$where['password'] = $credentials['password'];

		$this->db->where($where);
		$list = $this->db->get('tbl_users');

		return $list->result_array();
	}
}