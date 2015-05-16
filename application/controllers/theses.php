<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theses extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
/*
		if ($this->session->userdata('user_id') != null) {
            show_404();
        }
*/
	}

	public function index(){
		$data['user_id'] = $this->session->userdata('user_id');

		$this->load->view('template/header', $data);
		$this->load->view('contents/theses', $data);
		$this->load->view('template/footer', $data);
	}
}