<?php

class User_model extends CI_Model
{
	public function getAllUser($limit, $start, $keyword = null)
	{
		if ($keyword) {
			$this->db->like('first_name', $keyword);
		}
		$query = $this->db->join('role', 'role.role_id= user.role')->get('user', $limit, $start)->result();
		// die($this->db->last_query());
		return $query;
	}

	public function StoreUser()
	{
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'phone' => $this->input->post('phone'),
			'city' => $this->session->userdata('city'),
			// 'subcity' => $this->input->post('subcity'),
			'kebele' => $this->input->post('kebele'),
			'office_name' => $this->input->post('office'),
			'role' => $this->input->post('role'),
			'status' => 0,
		);
		$query = $this->db->insert('user', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function UpdateUserData($id)
	{
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'phone' => $this->input->post('phone'),
			'city' => $this->session->userdata('city'),
			'office_name' => $this->input->post('office'),
			// 'subcity' => $this->input->post('subcity'),
			'kebele' => $this->input->post('kebele'),
		);
		$this->db->where('user_id', $id);
		$query = $this->db->update('user', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function DeleteUser($id)
	{
		$this->db->where('user_id', $id);
		$query = $this->db->delete('user');
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	public function ActivateUser($id)
	{
		$data = array(
			'status' => 1
		);
		$this->db->where('user_id', $id);
		$query = $this->db->update('user', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	public function getAllSearchedUser($limit, $start, $keyword = null)
	{
		if ($keyword) {
			$this->db->like('first_name', $keyword);
		}
		$this->db->limit($limit, $start);
		$query = $this->db->get('user');
		return $query->result();
	}
	public function DisableUser($id)
	{
		$data = array(
			'status' => 0
		);
		$this->db->where('user_id', $id);
		$query = $this->db->update('user', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	public function checkUser($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->limit(1);
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->where('status', 1);
		$query = $this->db->get();
		if ($query) {
			return $query->result();
		}
	}
}
