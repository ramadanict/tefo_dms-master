<?php

class UserController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Setting_model', 'stm');
	}
	public function UserList()
	{

		$this->load->library('pagination');
		$config['base_url'] = base_url('UserController/UserList');
		//		data searching start here ...
		if ($this->input->post('submit')) {
			//			getting data from form
			$data['keyword'] = $this->input->post('keyword');
			// Storing data to session
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}
		$this->db->like('first_name', $data['keyword']);
		$this->db->from('user');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = "10";

		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);

		//call the model function to get the department data

		$data['users'] = $this->User_model->getAllUser($config["per_page"], $data['start'], $data['keyword']);
		// $data['users'] = $this->User_model->getAllUser(2, 2,$data['keyword']);

		$data['pagination'] = $this->pagination->create_links();
		if ($this->session->userdata('username')) {
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('user/user_list', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
	public function StoreUser()
	{
		$result = $this->User_model->StoreUser();
		if ($result) {
			$this->session->set_flashdata('user_status', 'Successfully Created User Account');
		} else {
			$this->session->set_flashdata('status_error', 'Failed to Create User Account');
		}
		redirect(base_url('user_list'));
	}
	public function ActivateUser($id)
	{
		$result = $this->User_model->ActivateUser($id);
		if ($result) {
			$this->session->set_flashdata('user_status', 'Successfully Activated User Account');
		} else {
			$this->session->set_flashdata('status_error', 'Failed to Activate User Account');
		}
		redirect(base_url('user_list'));
	}
	public function DisableUser($id)
	{
		$result = $this->User_model->DisableUser($id);
		if ($result) {
			$this->session->set_flashdata('user_status', 'Successfully Disabled User Account');
		} else {
			$this->session->set_flashdata('status_error', 'Failed to Disable User Account');
		}
		redirect(base_url('user_list'));
	}
	public function UpdateUserData($id)
	{
		$result = $this->User_model->UpdateUserData($id);
		if ($result) {
			$this->session->set_flashdata('user_status', 'Successfully Updated User Account');
		} else {
			$this->session->set_flashdata('status_error', 'Failed to Update User Account');
		}
		redirect(base_url('user_list'));
	}
	public function DeleteUser($id)
	{
		$result = $this->User_model->DeleteUser($id);
		if ($result) {
			$this->session->set_flashdata('user_status', 'Successfully Deleted User Account');
		} else {
			$this->session->set_flashdata('status_error', 'Failed to Delete User Account');
		}
		redirect(base_url('user_list'));
	}

	public function Login()
	{

		$this->load->view('user/login');
	}
	public function CheckUserLogin()
	{
		$username = $this->input->post('username');
		$password1 = $this->input->post('password');
		$password = md5($password1);
		$checkuser = $this->User_model->checkUser($username, $password);

		if ($checkuser) {
			foreach ($checkuser as $row);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('email', $row->email);
			$this->session->set_userdata('role', $row->role);
			$this->session->set_userdata('full_name', $row->first_name . ' ' . $row->middle_name . ' ' . $row->last_name);
			$this->session->set_userdata('id', $row->user_id);
			$this->session->set_userdata('status', $row->status);
			$this->session->set_userdata('kebele', $row->kebele);
			$this->session->set_userdata('city', $row->city);
			$this->session->set_userdata('status', $row->status);
			$this->session->set_userdata('office', $row->office_name);
			$role = $this->session->userdata('role');
			
			if ($role == 1) {
				redirect(base_url('admin-dashboard'));
			} else if ($role == 2) {
				redirect(base_url('admin-dashboard'));
			} else if ($role == 3) {
				redirect(base_url('kebele-dashboard'));
			} else if ($role == 4) {
				redirect(base_url('kebele-dashboard'));
			} else if ($role == 5) {
				redirect(base_url('kebele-dataecnoder-dashboard'));
			} else if ($role == 6) {
				redirect(base_url('report-viewer'));
			}
		} else {
			$this->session->set_flashdata('err_message', 'You entered Wrong Username or Password or your Account is disbaled');
			redirect(base_url('login'));
		}
	}
	public function Logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url('login'));
	}
}
