<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('model_user');

	}

	public function login(){
		if($this->session->userdata('user_id') == null){
			$data = $this->input->post();

			$user = $this->model_user->getUser($data);
			if($user != null){
				$this->session->set_userdata('user_id', $user[0]['id']);
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
		header("location: ".base_url());
	}
}