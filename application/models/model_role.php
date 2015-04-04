<?php

class Model_role extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getRoles(){
		$list = $this->db->get('tbl_roles');

		return $list->result_array();
	}
}