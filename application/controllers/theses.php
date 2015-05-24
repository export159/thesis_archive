<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theses extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('session');
		$this->load->model('model_thesis');
		$this->load->model('model_settings');
/*
		if ($this->session->userdata('user_id') != null) {
            show_404();
        }
*/
	}

	//-- pages --//
	public function index(){
		$data['user_id'] = $this->session->userdata('user_id');
		$data['user_role'] = $this->session->userdata('user_role');


		$data['theses'] = $this->model_thesis->getAllTheses();
		$data['categories'] = $this->model_settings->getCategories();
		$data['courses'] = $this->model_settings->getCourses();
		$data['years'] = $this->model_settings->getYears();

		$this->load->view('template/header', $data);
		$this->load->view('contents/theses', $data);
		$this->load->view('template/footer', $data);
	}

	public function thesesList(){
		$data['theses'] = $this->model_thesis->getAllTheses();
		$data['categories'] = $this->model_settings->getCategories();
		$data['courses'] = $this->model_settings->getCourses();
		$data['years'] = $this->model_settings->getYears();

		$this->load->view('forms/theses_list_page', $data);
	}
	//-- end --//


	//-- functions --//

	public function add(){
		if($this->session->userdata('user_id') != null && $this->input->post() != null){
			$thesis['title'] = $this->input->post('title');
			$thesis['abstract'] = $this->input->post('abstract');
			$thesis['scope'] = $this->input->post('scope');
			$thesis['year'] = $this->input->post('year');
			$thesis['category_id'] = $this->input->post('category');
			//-- researchers pa --//
			$thesis_id = $this->model_thesis->addThesis($thesis);

			for($counter = 0; $counter < count($this->input->post('res_fn')); $counter++){
				$researcher['thesis_id'] = $thesis_id;
				$researcher['first_name'] = $this->input->post('res_fn['.$counter.']');
				$researcher['middle_name'] = $this->input->post('res_mn['.$counter.']');
				$researcher['last_name'] = $this->input->post('res_ln['.$counter.']');
				$researcher['course_id'] = $this->input->post('res_course['.$counter.']');
				$researcher['year_id'] = $this->input->post('res_year['.$counter.']');

				$this->model_thesis->addResearcher($researcher);
			}

			//echo $this->thesesList();
			header('location: /archive_thesis/theses');
		}else{
			show_404();
		}
	}

	//-- end --//
}