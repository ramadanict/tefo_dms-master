<?php

class Setting_model extends CI_Model
{
	public function getGender(){
		$this->db->select('*');
		$this->db->from('gender');
		$query = $this->db->get();
		return $query->result();
	}
	public function getOffices(){
		$this->db->select('*');
		$this->db->from('office');
		$query = $this->db->get();
		return $query->result();
	}
	

	public function getCityAdmin(){
		$this->db->select('*');
		$this->db->from('city');
		$query = $this->db->get();
		return $query->result();
	}
	public function InsertCity($data){
		$query = $this->db->insert('city',$data);
		if($query)
		{
			return true;
		}
		else{
			return false;
		}

	}

	public function UpdateCity($data,$id){
		$this->db->where('city_id',$id);
		$query = $this->db->update('city',$data);
		if($query)
		{
			return true;
		}
		else{
			return false;
		}

	}
	public function getServicesType(){
		$this->db->select('*');
		$this->db->from('services');
		$query= $this->db->get();
		if($query)
		{
			return $query->result();
		}

	}

	public function DeleteCity($id){
		$this->db->where('city_id',$id);
		$query = $this->db->delete('city');
		if($query)
		{
			return true;
		}
		else{
			return false;
		}

	}
	public function getSubCity(){
		$this->db->select('*');
		$this->db->from('subcity');
		$query = $this->db->get();
		return $query->result();
	}
	public function getKebele(){
		$this->db->select('*');
		$this->db->from('kebele');
		$query = $this->db->get();
		return $query->result();
	}
	public function getKebeleCascade($subcity){
		$this->db->select('*');
		$this->db->from('kebele');
		$this->db->where('subcity_name',$subcity);
		$query = $this->db->get();
		return $query->result();
	}
	public function getRole(){
		$this->db->select('*');
		$this->db->from('role');
		$query = $this->db->get();
		return $query->result();
	}
	public function getEarthOwnerStatus(){
		$this->db->select('*');
		$this->db->from('owner_type_ship');
		$query = $this->db->get();
		return $query->result();
	}public function getDocumentStatus(){
		$this->db->select('*');
		$this->db->from('document_info_type');
		$query = $this->db->get();
		return $query->result();
	}
	public function insertSucity($data){
		$query = $this->db->insert('subcity',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}

	}

	public function UpdateSubCity($data,$id){
		$this->db->where('subcity_id',$id);
		$query = $this->db->update('subcity',$data);
		if($query)
		{
			return true;
		}
		else{
			return false;
		}

	}

	public function DeleteSubCity($id){
		$this->db->where('subcity_id',$id);
		$query = $this->db->delete('subcity');
		if($query)
		{
			return true;
		}
		else{
			return false;
		}

	}


	public function insertKebele($data){
		$query = $this->db->insert('kebele',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}

	}

	public function UpdateKebele($data,$id){
		$this->db->where('kebele_id',$id);
		$query = $this->db->update('kebele',$data);
		if($query)
		{
			return true;
		}
		else{
			return false;
		}

	}

	public function DeleteKebele($id){
		$this->db->where('kebele_id',$id);
		$query = $this->db->delete('kebele');
		if($query)
		{
			return true;
		}
		else{
			return false;
		}

	}
	

public function getKebekeBySubcity($subcity){
	$this->db->select('*');
	$this->db->from('kebele');
	$this->db->where('subcity_name',$subcity);
	$query= $this->db->get();
	return $query->result();
}
}
