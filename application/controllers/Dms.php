<?php

class Dms extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if ($this->session->userdata('username')) {
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('themes/dashboard');
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
}
