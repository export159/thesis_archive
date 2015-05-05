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
	public function getRole($id){
		$where['id'] = $id;
		$this->db->where($where);
		$list = $this->db->get('tbl_roles');

		return $list->result_array();
	}
	public function addRole($data){
		$this->db->insert('tbl_roles', $data);

		return $this->db->insert_id();
	}
	//--- end ---/


	//--- Categories section ---//
	public function getCategories(){
		$list = $this->db->get('tbl_category');

		return $list->result_array();
	}
	public function getCategory($id){
		$where['id'] = $id;
		$this->db->where($where);
		$list = $this->db->get('tbl_category');

		return $list->result_array();
	}
	public function addCategory($data){
		$this->db->insert('tbl_category', $data);

		return $this->db->insert_id();
	}
	//--- end ---/


	//--- Courses section ---//
	public function getCourses(){
		$list = $this->db->get('tbl_course');

		return $list->result_array();
	}
	public function getCourse($id){
		$where['id'] = $id;
		$this->db->where($where);
		$list = $this->db->get('tbl_course');

		return $list->result_array();
	}
	public function addCourse($data){
		$this->db->insert('tbl_course', $data);

		return $this->db->insert_id();
	}
	//--- end ---/


	//--- Years section ---//
	public function getYears(){
		$list = $this->db->get('tbl_year');

		return $list->result_array();
	}
	public function getYear($id){
		$where['id'] = $id;
		$this->db->where($where);
		$list = $this->db->get('tbl_year');

		return $list->result_array();
	}
	public function addYear($data){
		$this->db->insert('tbl_year', $data);

		return $this->db->insert_id();
	}
	//--- end ---/
}