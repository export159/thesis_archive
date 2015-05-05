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
	public function updateRole($data, $id){
		$where['id'] = $id;
		$this->db->where($where);
		$this->db->update('tbl_roles', $data);
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
	public function updateCategory($data, $id){
		$where['id'] = $id;
		$this->db->where($where);
		$this->db->update('tbl_category', $data);
	}
	//--- end ---/


	//--- Courses section ---//
	public function getCourses(){
		$this->db->order_by('course', 'asc');
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
	public function updateCourse($data, $id){
		$where['id'] = $id;
		$this->db->where($where);
		$this->db->update('tbl_course', $data);
	}
	//--- end ---/


	//--- Years section ---//
	public function getYears(){
		$this->db->order_by('year', 'asc');
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
	public function updateYear($data, $id){
		$where['id'] = $id;
		$this->db->where($where);
		$this->db->update('tbl_year', $data);
	}
	//--- end ---/
}