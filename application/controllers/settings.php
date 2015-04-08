<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');

		if($this->session->userdata('user_id') != null){
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('model_settings');
		}else{
			show_404();
		}
		

	}
	//----pages----//
	public function index(){
		$data['user_id'] = $this->session->userdata('user_id');
		$data['roles'] = $this->model_settings->getRoles();
		$data['categories'] = $this->model_settings->getCategories();
		$data['year_levels'] = $this->model_settings->getYears();
		$data['courses'] = $this->model_settings->getCourses();
		$this->load->view('template/header', $data);
		$this->load->view('contents/settings', $data);
		$this->load->view('template/footer', $data);
	}
	//----end----//

	//---- functions ----//
	
	//---- end ----//
}