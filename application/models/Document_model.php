<?php

class Document_model extends CI_Model
{
	public function insertDocument($data)
	{
		return $this->db->insert('documnet_inforamtion', $data);
	}
	public function AttachDocument($data, $carta_number)
	{
		$this->db->where('carta_number', $carta_number);
		$query = $this->db->update('documnet_inforamtion', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function getDocumentList()
	{
		$this->db->select('*');
		$this->db->from('document_info');
		$this->db->join('city', 'city.city_id = document_info.city');
		$this->db->join('subcity', 'subcity.subcity_id = document_info.subcity');
		$this->db->join('kebele', 'kebele.kebele_id = document_info.kebele');
		$this->db->join('owner_type_ship', 'owner_type_ship.owner_type_ship_id = document_info.earth_status_owner_ship', 'left');
		$this->db->join('document_info_type', 'document_info_type.document_info_type_id = document_info.document_status_info', 'left');
		$query = $this->db->get();
		return $query->result();
	}
	public function RequestAccessDocument($id){
		$data=array(
			'request_document_status'=>1,
			'request_date'=>date('Y-m-d H:i:s'),
			'requested_by'=>$this->session->userdata('username'),
			'requested_office'=>$this->session->userdata('office'),
			'end_request_date'=>$this->input->post('end_date')
		);
		$this->db->where('carta_number', $id);
		$query= $this->db->update('documnet_inforamtion',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}
	}
	public function RequestApprovedDocument($card){
		$data=array(
			'request_document_status'=>2,
			'is_request_approved'=>1,
			'request_approved_by'=>$this->session->userdata('username'),
			'request_approved_at'=>date('Y-m-d H:i:s')
		);
		$this->db->where('carta_number', $card);
		$query= $this->db->update('documnet_inforamtion',$data);
		if($query){
			return true;
		}
		else{
			return false;
		}	
	}
	public function getAllRequestDocument(){
		$this->db->select('*');
		$this->db->from('documnet_inforamtion');
		$this->db->join('city', 'city.city_id = documnet_inforamtion.city','left');
		$this->db->join('kebele', 'kebele.kebele_id = documnet_inforamtion.kebele','left');
		$this->db->join('owner_type_ship', 'owner_type_ship.owner_type_ship_id = documnet_inforamtion.earth_owner_status', 'left');
		
		$query = $this->db->get();
		return $query->result();
	}
	public function insertUserDocument($userData)
	{
		return $this->db->insert('file_info', $userData);
	}
	public function Edit_Document($id)
	{
		$this->db->select('*');
		$this->db->from('documnet_inforamtion');
		$this->db->where('document_info', $id);
		$query = $this->db->get();
		return $query->row();
	}
	public function getUserDocuments($uId)
	{
		$this->db->select('*');
		$this->db->from('file_info');
		$this->db->where('user_id', $uId);
		$query = $this->db->get();
		if ($query) {
			return $query->result();
		}
	}
	public function SubcityEditDocument($id)
	{
		$this->db->select('*');
		$this->db->from('document_info');
		$this->db->where('document_info', $id);
		// $this->db->where('subcity', $this->session->userdata('subcity'));
		$query = $this->db->get();
		return $query->row();
	}
	public function updateDocument($data, $id)
	{
		return $this->db->update('document_info', $data, ['document_info' => $id]);
	}

	public function checkPdfFile($id)
	{
		$query = $this->db->get_where('documnet_inforamtion', ['document_info' => $id]);
		return $query->row();
	}

	public function deleteDocuement($id)
	{
		return $this->db->delete('documnet_inforamtion', ['document_info' => $id]);
	}

	public function getDocumentFiles()
	{
		return $this->db->get('documnet_inforamtion')->result_array();
	}
	public function getAllDocuments($limit, $start, $first_name = null, $carta_number = null)
	{
		// if ($first_name or $carta_number) {
		// 	$this->db->or_like('first_name', $first_name);
		// 	$this->db->like('carta_number', $carta_number);
		// }		
		$query = $this->db->get('documnet_inforamtion', $limit, $start)->result();
		
		//  echo $this->db->last_query();
		//  die();
		return $query;		
	}

	public function getAllDocument($limit, $start, $keyword = null, $first_name = null, $carta_number = null)
	{
		if ($keyword or $first_name or $carta_number) {
			
			$this->db->like('kebele', $keyword);
			$this->db->like('first_name', $first_name);
			$this->db->like('carta_number', $carta_number);
		}
		$query = $this->db->get('documnet_inforamtion', $limit, $start)->result();
		
		//  echo $this->db->last_query();
		//  die();	


		return $query;
	}

	public function getAllDocumenthasNoFullInfo($limit, $start)
	{

		$this->db->join('subcity', 'subcity.subcity_id = document_info.subcity');
		$this->db->join('city', 'city.city_id = document_info.city');
		$this->db->join('kebele', 'kebele.kebele_id = document_info.kebele');
		$this->db->join('owner_type_ship', 'owner_type_ship.owner_type_ship_id = document_info.earth_status_owner_ship', 'left');
		$this->db->limit($limit, $start);
		$this->db->where('kebele =', '');
		$this->db->or_where('carta_number =', '');
		$this->db->or_where('full_name =', '');
		$query = $this->db->get('document_info');
		return $query->result();
	}
	public function getSearchedDocument($limit, $start)
	{

		$full_name = substr($this->input->get('full_name'), 0, 2);
		$this->db->select('*');
		$this->db->from('document_info');
		$this->db->limit($limit, $start);
		$this->db->like('full_name', $this->input->get('full_name'));
		$this->db->or_like('kebele', $this->input->get('kebele'));
		$this->db->or_like('carta_number', $this->input->get('carta_number'));
		$query = $this->db->get();
		//		echo $this->db->last_query();
		////		die();
		return $query->result();
	}

	public function countAllDocuments()
	{
		$this->db->get('document_info')->num_rows();
	}

	public function insert_batch($data)
	{
		$this->db->insert_batch('documnet_inforamtion', $data);
		if ($this->db->affected_rows() > 0) {
			return 1;
		} else {
			return 0;
		}
	}
}
