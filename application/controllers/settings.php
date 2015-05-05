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
	public function addRole(){
		if($this->session->userdata('user_id') != null && $this->input->post() != null){
			$data = $this->input->post();

			$this->model_settings->addRole($data); //<--------- returns the id

			header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function addCategory(){
		if($this->session->userdata('user_id') != null && $this->input->post() != null){
			$data = $this->input->post();

			$this->model_settings->addCategory($data); //<--------- returns the id

			header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function addCourse(){
		if($this->session->userdata('user_id') != null && $this->input->post() != null){
			$data = $this->input->post();

			$this->model_settings->addCourse($data); //<--------- returns the id

			header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function addYear(){
		if($this->session->userdata('user_id') != null && $this->input->post() != null){
			$data = $this->input->post();

			$this->model_settings->addYear($data); //<--------- returns the id

			header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}


	public function editRole($id){
		if($this->session->userdata('user_id') != null && $id != null){

			echo json_encode($this->model_settings->getRole($id));

			
		}else{
			show_404();
		}

	}
	public function editCategory($id){
		if($this->session->userdata('user_id') != null && $id != null){

			echo json_encode($this->model_settings->getCategory($id));

			
		}else{
			show_404();
		}

	}
	public function editCourse($id){
		if($this->session->userdata('user_id') != null && $id != null){

			echo json_encode($this->model_settings->getCourse($id));

			
		}else{
			show_404();
		}

	}
	public function editYear($id){
		if($this->session->userdata('user_id') != null && $id != null){

			echo json_encode($this->model_settings->getYear($id));

			
		}else{
			show_404();
		}

	}
	//---- end ----//
}