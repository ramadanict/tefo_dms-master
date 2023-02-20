<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Setting_model', 'stm');
	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('dashboard/dashboard');
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}

	public function SubcityDashboard()
	{
		if ($this->session->userdata('username')) {
			$subcity = $this->session->userdata('subcity');
			$data['kebeles'] = $this->stm->getKebekeBySubcity($subcity);
			
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('dashboard/subcity_dashboard', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}

	public function KebeleDashboard()
	{
		if ($this->session->userdata('username')) {
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('dashboard/kebele_dashboard');
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}

	public function DataEncoderDashboard()
	{
		if ($this->session->userdata('username')) {
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('dashboard/kebele_dashboard');
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
	public function KebeleDataEncoderDashboard()
	{
		if ($this->session->userdata('username')) {
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('dashboard/kebele_dashboard');
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
}
