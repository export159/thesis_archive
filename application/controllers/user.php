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
		$data = $this->input->post();

		$user = $this->model_user->getUser($data);
		print_r($user);
		if($user != null){
			$this->session->userdata('user_id', $user[0]['id']);
		}else{
			header("location: ".base_url());
		}
	}
}