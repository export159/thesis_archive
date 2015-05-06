<?php

class Model_User extends CI_Model{
	function __construct(){
		$this->load->database();
		$this->load->helper('security');
	}

	function addUser($user, $user_info){
		$this->db->insert('tbl_user_info', $user_info);
		$user['user_info_id'] = $this->db->insert_id();
		$this->db->insert('tbl_users', $user);

		return $this->db->insert_id();
	}
	function updateUser($user, $user_info, $id){
		$this->db->where('id', $user['user_info_id']);
		$this->db->update('tbl_user_info', $user_info);

		$this->db->where('id', $id);
		$this->db->update('tbl_users', $user);
	}
	function deleteUser($id){
		$where['id'] = $id;
		$this->db->delete('tbl_user_info',$where);
	}

	function getUsers(){
		$list = $this->db->query('SELECT  user.id, user.username, user.password,info.id as info_id, info.first_name, info.middle_name, info.last_name, roles.role FROM tbl_users as user, tbl_user_info as info, tbl_roles as roles WHERE user.user_info_id = info.id AND user.role_id = roles.id');

		return $list->result_array();
	}
	/**
	 	getUser()
	 	usage: for Logging in  : getUser(*with value*, null);
	 		   for getting user: getUser(null, *with value*);
	 */

	function getUser($credentials, $id){
		$list;
		//---------use for logging in--------//
		if($credentials != null){

			$where['username'] = $credentials['username'];
			$where['password'] = do_hash($credentials['password']);

			$this->db->where($where);
			$list = $this->db->get('tbl_users');
		}
		//---------use for getting a user-----//
		else{
			$list = $this->db->query('SELECT  user.id, user.username, user.password, info.id as info_id, info.first_name, info.middle_name, info.last_name, roles.id as role_id, roles.role FROM tbl_users as user, tbl_user_info as info, tbl_roles as roles WHERE user.user_info_id = info.id AND user.role_id = roles.id AND user.id = '.$id);
		}

		return $list->row_array();
	}

}