<?php

class SettingController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Setting_model', 'stm');
	}
	public function cityAdmin()
	{
		if ($this->session->userdata('username')) {

			$data['citys'] = $this->stm->getCityAdmin();
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('city/city_list', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
	public function Offices(){
		if ($this->session->userdata('username')) {

			$data['citys'] = $this->stm->getCityAdmin();
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('office/office_list', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
	public function SaveCity()
	{
		$data = array(
			'city_name' => $this->input->post('city_name')
		);
		$city = new Setting_model();
		$res = $city->InsertCity($data);
		$this->session->set_flashdata('status', 'Document Information Successfully');
		redirect(base_url('city_admin'));
	}
	public function UpdateCity($id)
	{
		$data = array(
			'city_name' => $this->input->post('city_name')
		);
		$city = new Setting_model();
		$res = $city->UpdateCity($data, $id);
		$this->session->set_flashdata('status', 'Document Information Successfully');
		redirect(base_url('city_admin'));
	}
	public function DeleteCity($id)
	{
		$city = new Setting_model();
		$res = $city->DeleteCity($id);
		$this->session->set_flashdata('status', 'Document Information Successfully');
		redirect(base_url('city_admin'));
	}

	// Subcity Controlle

	public function Subcity()
	{
		if ($this->session->userdata('username')) {
			$data['subcitys'] = $this->stm->getSubcity();
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('subcity/subcity_list', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}

	public function SaveSubCity()
	{
		$data = array(
			'subcity_name' => $this->input->post('subcity_name'),
			'city_id' => 'Adaamaa',
		);
		$subcit = new Setting_model;
		$res = $subcit->insertSucity($data);
		$this->session->set_flashdata('status', 'Subcity Successfully Added');
		redirect(base_url('subcity_list'));
	}

	public function UpdateSubCity($id)
	{
		$data = array(
			'subcity_name' => $this->input->post('subcity_name')
		);
		$city = new Setting_model();
		$res = $city->UpdateSubCity($data, $id);
		$this->session->set_flashdata('status', 'Subcity Successfully Updated');
		redirect(base_url('subcity_list'));
	}
	public function DeleteSubCity($id)
	{
		$city = new Setting_model();
		$res = $city->DeleteSubCity($id);
		$this->session->set_flashdata('status', 'Subcity Successfully Deleted');
		redirect(base_url('subcity_list'));
	}


	// Kebele Controlle

	public function Kebele()
	{
		if ($this->session->userdata('username')) {
			$data['kebeles'] = $this->stm->getKebele();
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('kebele/kebele_list', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
	public function getKebeleCascade()  
   {  
      //set selected country id from POST  
      echo $subcity= $this->input->post('subcity',TRUE);  
      //run the query for the cities we specified earlier  
      $districtData['districtDrop']=$this->stm->getKebeleCascade($subcity);  
      $output = null;  
      foreach ($districtData['districtDrop'] as $row)  
      {  
         //here we build a dropdown item line for each   query result
		       $output .= "<option value='".$row->kebele_name."'>".$row->kebele_name."</option>";  
      }  
      echo $output;  
   } 
	public function getKebeleCascadef()
	{
		$result = $this->stm->getKebeleCascade();
		echo json_encode($result);
	}

	public function SaveKebele()
	{
		$data = array(
			'kebele_name' => $this->input->post('kebele_name'),
			'subcity_name' => $this->input->post('subcity_name'),
		);
		$subcit = new Setting_model;
		$res = $subcit->insertKebele($data);
		$this->session->set_flashdata('status', 'Kebele Successfully Added');
		redirect(base_url('kebele_list'));
	}

	public function UpdateKebele($id)
	{
		$data = array(
			'kebele_name' => $this->input->post('kebele_name'),
			'subcity_name' => $this->input->post('subcity_name')
		);
		// die($this->input->post('subcity_name'));
		$kebele = new Setting_model();
		$res = $kebele->UpdateKebele($data, $id);
		$this->session->set_flashdata('status', 'Kebele Successfully Updated');
		redirect(base_url('kebele_list'));
	}
	public function DeleteKebele($id)
	{
		$city = new Setting_model();
		$res = $city->DeleteKebele($id);
		$this->session->set_flashdata('status', 'Kebele Successfully Deleted');
		redirect(base_url('kebele_list'));
	}
}
