<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->library('session');
/*
		if ($this->session->userdata('user_id') != null) {
            show_404();
        }
*/
	}

	public function index(){
		$data['user_id'] = $this->session->userdata('user_id');
		$data['user_role'] = $this->session->userdata('user_role');
		$this->load->view('template/header', $data);
		$this->load->view('contents/home', $data);
		$this->load->view('template/footer', $data);
	}
}
