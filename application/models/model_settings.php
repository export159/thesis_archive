<?php

class Model_settings extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	
	//--- roles section ---//
	public function getRoles(){
		$list = $this->db->get('tbl_roles');

		return $list->result_array();
	}
	//--- end ---/

	//--- Categories section ---//
	public function getCategories(){
		$list = $this->db->get('tbl_category');

		return $list->result_array();
	}
	//--- end ---/

	//--- Courses section ---//
	public function getCourses(){
		$list = $this->db->get('tbl_course');

		return $list->result_array();
	}
	//--- end ---/

	//--- Years section ---//
	public function getYears(){
		$list = $this->db->get('tbl_year');

		return $list->result_array();
	}
	//--- end ---/
}