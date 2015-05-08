<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');

		if($this->session->userdata('user_id') != null){
			$this->load->helper('url');
			$this->load->helper('inflector'); // <-- para gumana an plural()
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
	public function listSettings($type){
		if($this->session->userdata('user_id')){
			$data['header'] = '';
			$data['type'] = '';
			$data['values'] = '';
			if($type == 'role'){
				$data['values'] = $this->model_settings->getRoles();
				$data['header'] = 'Role';
				$data['type'] = $type;
			}else if($type == 'category'){
				$data['values'] = $this->model_settings->getCategories();
				$data['header'] = 'Category';
				$data['type'] = $type;
			}else if($type == 'course'){
				$data['values'] = $this->model_settings->getCourses();
				$data['header'] = 'Course';
				$data['type'] = $type;
			}else if($type == 'year'){
				$data['values'] = $this->model_settings->getYears();
				$data['header'] = 'Year Level';
				$data['type'] = $type;
			}

			$this->load->view('forms/settings_list_page', $data);
		}else{
			show_404();
		}
	}
	//----end----//



	//---- functions ----//
	public function addRole(){
		if($this->session->userdata('user_id') != null && $this->input->post() != null){
			$data['role'] = $this->input->post('data');

			$this->model_settings->addRole($data); //<--------- returns the id

			$this->listSettings('role');
			//header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function addCategory(){
		if($this->session->userdata('user_id') != null && $this->input->post() != null){
			$data['category'] = $this->input->post('data');

			$this->model_settings->addCategory($data); //<--------- returns the id

			$this->listSettings('category');
			//header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function addCourse(){
		if($this->session->userdata('user_id') != null && $this->input->post() != null){
			$data['course'] = $this->input->post('data');

			$this->model_settings->addCourse($data); //<--------- returns the id

			$this->listSettings('course');
			//header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function addYear(){
		if($this->session->userdata('user_id') != null && $this->input->post() != null){
			$data['year'] = $this->input->post('data');

			$this->model_settings->addYear($data); //<--------- returns the id

			$this->listSettings('year');
			//header('location: '. base_url() . 'settings');
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


	public function updateRole($id){
		if($this->session->userdata('user_id') != null && $id != null){
			$data['role'] = $this->input->post('data');

			$this->model_settings->updateRole($data, $id);
			
			$this->listSettings('role');
			//header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function updateCategory($id){
		if($this->session->userdata('user_id') != null && $id != null){
			$data['category'] = $this->input->post('data');

			$this->model_settings->updateCategory($data, $id);
			
			$this->listSettings('category');
			//header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function updateCourse($id){
		if($this->session->userdata('user_id') != null && $id != null){
			$data['course'] = $this->input->post('data');

			$this->model_settings->updateCourse($data, $id);
			
			$this->listSettings('course');
			//header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function updateYear($id){
		if($this->session->userdata('user_id') != null && $id != null){
			$data['year'] = $this->input->post('data');

			$this->model_settings->updateYear($data, $id);
			
			$this->listSettings('year');
			//header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}


	public function deleteRole($id){
		if($this->session->userdata('user_id') != null && $id != null){

			$this->model_settings->deleteRole($id);
			
			$this->listSettings('role');
			//header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function deleteCategory($id){
		if($this->session->userdata('user_id') != null && $id != null){

			$this->model_settings->deleteCategory($id);
			
			$this->listSettings('category');
			//header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function deleteCourse($id){
		if($this->session->userdata('user_id') != null && $id != null){

			$this->model_settings->deleteCourse($id);
			
			$this->listSettings('course');
			//header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	public function deleteYear($id){
		if($this->session->userdata('user_id') != null && $id != null){

			$this->model_settings->deleteYear($id);
			
			$this->listSettings('year');
			//header('location: '. base_url() . 'settings');
		}else{
			show_404();
		}
	}
	//---- end ----//
}