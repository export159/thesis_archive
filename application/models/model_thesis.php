<?php

class Model_Thesis extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	//--- thesis related functions ---//
	function addThesis($thesis){
		$this->db->insert('tbl_thesis',$thesis);

		return $this->db->insert_id();
	}

	function getAllTheses(){
		$rs = $this->db->query("select t.id, t.title, t.abstract, t.scope, t.year, t.pdf_path, t.system_path, c.category from tbl_thesis as t, tbl_category as c where c.id = t.category_id");

		$list = $rs->result_array();
		$counter = 0;
		foreach($list as $value){
			$list[$counter]['researchers'] = $this->getResearchers($value['id']);
			$counter++;
		} 
		return $list;
	}
	//-- end --//


	//--- researchers related functions ---//
	function addResearcher($researchers){
		$this->db->insert('tbl_researchers', $researchers);

		return $this->db->insert_id();
	}
	function getResearchers($id){

		$list = $this->db->query("SELECT r.first_name, r.middle_name, r.last_name, y.year, c.course FROM tbl_researchers as r, tbl_course as c, tbl_year as y WHERE y.id = r.year_id AND c.id = r.course_id AND r.thesis_id = ".$id." ORDER BY r.last_name");

		return $list->result_array();
	}
	//-- end --//

}