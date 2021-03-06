<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('session');
		$this->load->model('model_user');
		$this->load->model('model_settings');

	}
	// pages -------------------------------------------------------------------------------------------
	public function index(){
		if($this->session->userdata('user_id') != null && $this->session->userdata('user_role') == do_hash('Administrator')){
			$data['user_id'] = $this->session->userdata('user_id');
			$data['user_role'] = $this->session->userdata('user_role');
			$data['users'] = $this->model_user->getUsers();
			$data['roles'] = $this->model_settings->getRoles();
			$this->load->view('template/header', $data);
			$this->load->view('contents/users', $data);
			$this->load->view('template/footer', $data);
		}else{
			show_404();
		}
	}
	public function profile($id){
		if($this->session->userdata('user_id') != null && $id != null && $this->session->userdata('user_role') == do_hash('Administrator')){
			$data['user_id'] = $this->session->userdata('user_id');
			$data['user'] = $this->model_user->getUser(null, $id);

			$this->load->view('template/header', $data);
			$this->load->view('contents/profile', $data);
			$this->load->view('template/footer', $data);
		}else{
			show_404();
		}
	}
	public function edit($id){
		if($this->session->userdata('user_id') != null && $id != null && $this->session->userdata('user_role') == do_hash('Administrator')){
			$data['user_id'] = $this->session->userdata('user_id');
			$data['user'] = $this->model_user->getUser(null, $id);
			$data['roles'] = $this->model_settings->getRoles();

			$this->load->view('template/header', $data);
			$this->load->view('forms/edit_page', $data);
			$this->load->view('template/footer', $data);
		}else{
			show_404();
		}
	}
	public function usersList(){
		if($this->session->userdata('user_id') != null && $this->session->userdata('user_role') == do_hash('Administrator')){
			$data['users'] = $this->model_user->getUsers();
			$this->load->view('/forms/user_list_page', $data);
		}else{
			show_404();
		}
	}
	//-------------------------------------------------------------------------------------------------

	//functionality
	public function add(){
		if($this->session->userdata('user_id') != null && $this->input->post() != null && $this->session->userdata('user_role') == do_hash('Administrator')){
			$user['username'] = $this->input->post('username');
			$user['password'] = do_hash($this->input->post('password'));
			$user['role_id'] = $this->input->post('role');

			$user_info['first_name'] = $this->input->post('first_name');
			$user_info['middle_name'] = $this->input->post('middle_name');
			$user_info['last_name'] = $this->input->post('last_name');

			$this->model_user->addUser($user, $user_info);

			header("location: ".base_url()."user");
		}else{
			show_404();
		}
	}
	public function update($id){
		if($this->session->userdata('user_id') != null && $this->input->post() != null && $this->session->userdata('user_role') == do_hash('Administrator')){
			$user['username'] = $this->input->post('username');
			$user['password'] = do_hash($this->input->post('password'));
			$user['user_info_id'] = $this->input->post('user_info_id');
			$user['role_id'] = $this->input->post('role');

			$user_info['first_name'] = $this->input->post('first_name');
			$user_info['middle_name'] = $this->input->post('middle_name');
			$user_info['last_name'] = $this->input->post('last_name');

			$this->model_user->updateUser($user, $user_info, $id);

			header("location: ".base_url()."user/$id");
		}
		else{
			show_404();
		}
	}
	public function delete($id){
		if($this->session->userdata('user_id') != null && $this->input->get() != null && $this->session->userdata('user_role') == do_hash('Administrator')){
			$this->model_user->deleteUser($id);
			$this->usersList();
		}
		else{
			show_404();
		}
	}

	public function login(){
		if($this->session->userdata('user_id') == null){
			$data['username'] = $this->input->post('username');
			$data['password'] = do_hash($this->input->post('password'));

			$user = $this->model_user->getUser($data, null);
			if($user != null){
				$this->session->set_userdata('user_id', $user['id']);
				$this->session->set_userdata('user_role', do_hash($user['role']));
				header("location: ".base_url());
			}else{
				header("location: ".base_url());
			}
			
		}else{
			show_404();
		}
	}

	public function logout(){
		$this->session->set_userdata('user_id', null);
		$this->session->set_userdata('user_role', null);
		header("location: ".base_url());
	}
}