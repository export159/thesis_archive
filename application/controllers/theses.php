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
}