<?php

class Model_User extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	function addUser($user, $user_info){
		$this->db->insert('tbl_user_info', $user_info);
		$user['user_info_id'] = $this->db->insert_id();
		$this->db->insert('tbl_users', $user);

		return $this->db->insert_id();
	}

	function getUsers(){
		$list = $this->db->query('SELECT  user.id, user.username, user.password, info.first_name, info.middle_name, info.last_name, roles.role FROM tbl_users as user, tbl_user_info as info, tbl_roles as roles WHERE user.user_info_id = info.id AND user.role_id = roles.id');

		return $list->result_array();
	}

	function getUser($credentials){
		$where['username'] = $credentials['username'];
		$where['password'] = $credentials['password'];

		$this->db->where($where);
		$list = $this->db->get('tbl_users');

		return $list->result_array();
	}

}