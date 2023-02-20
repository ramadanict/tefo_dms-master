<?php

class DocumentRegistrationController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Setting_model', 'stm');
		$this->load->model('Document_model', 'dcm');
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/document_registration');
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}

	public function save_document()
	{
		$kebele_id = $this->input->post('kebele_name');
		if ($kebele_id == 'Gadaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Gadaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Gurmuu') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Gurmuu/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Odaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Odaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Badhaatuu') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Badhaatuu/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Dhadacha Araaraa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Dhadacha Araaraa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Gooroo') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Gooroo/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Dhakaa Adii') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Dhakaa Adii/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Irreechaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Irreechaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Malkaa Adaamaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Malkaa Adaamaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Dagaagaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Dagaagaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Biqqaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Biqqaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Gaara Luugoo') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Gaara Luugoo/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Hangaatuu') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Hangaatuu/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Caffee') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Caffee/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Daabee Solloqqee') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Daabee Solloqqee/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Barreechaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Barreechaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Bokkuu Shanaan') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Bokkuu Shanaan/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Migiraa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Migiraa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('document_file')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/document_registration', $error);
			$this->load->view('themes/footer');
		} else {
			$document_file = $this->upload->data('document_file');
			$registration_no = 'AD-' . substr($this->input->post('kebele_name'), 0, 2) . date('Y');
			$data = [
				'full_name' => $this->input->post('full_name'),
				'city' => $this->input->post('city_name'),
				'subcity' => $this->input->post('subcity_name'),
				'kebele' => $this->input->post('kebele_name'),
				'carta_number' => $this->input->post('carta_number'),
				'level' => $this->input->post('level'),
				'services' => $this->input->post('services'),
				'area' => $this->input->post('area'),
				'build_height' => $this->input->post('build_height'),
				'earth_status_owner_ship' => $this->input->post('earth_status_owner_ship'),
				'end_year_of_leaze' => $this->input->post('end_year_of_leaze'),
				'services_year_of_leaze' => $this->input->post('services_year_of_leaze'),
				'document_status_info' => $this->input->post('document_status_info'),
				'shelf_no' => $this->input->post('shelf_no'),
				'block' => $this->input->post('block'),
				'parsili' => $this->input->post('parsili'),
				'file_name' => $document_file
			];

			$document = new Document_model();
			$res = $document->insertDocument($data);
			$this->session->set_flashdata('status', 'Document Information Successfully Registered');
			redirect(base_url('manage-documents'));
		}
	}
public function RequestAccessDocument($id){
	$result= $this->dcm->RequestAccessDocument($id);
	if ($result) {
		$this->session->set_flashdata('status', 'Successfully Send Request to Access document');
	} else {
		$this->session->set_flashdata('error_status', 'Failed to Send Request to access document');
	}
	redirect(base_url('request-document-manage'));
}
public function RequestApprovedDocument($carta){
	$result= $this->dcm->RequestApprovedDocument($carta);
	if ($result) {
		$this->session->set_flashdata('status', 'Successfully Approved Document Request');
	} else {
		$this->session->set_flashdata('error_status', 'Failed to Approve Request Document');
	}
	redirect(base_url('request-document-manage'));
}
	public function update_document($id)
	{
		$old_pdf_file_name = $this->input->post('old_pdf_file');
		$new_pdf_file_name = $_FILES['document_file']['name'];
		//		echo $old_pdf_file_name;
		//		die();

		$kebele_id = $this->input->post('kebele_name');
		if ($kebele_id == 'Gadaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Gadaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}
		if ($new_pdf_file_name == TRUE) {
			if ($kebele_id == 'Gadaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Gadaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Gurmuu') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Gurmuu/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Odaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Odaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Badhaatuu') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Badhaatuu/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Dhadacha Araaraa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Dhadacha Araaraa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Gooroo') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Gooroo/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Dhakaa Adii') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Dhakaa Adii/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/Dhakaa Adii/" . $old_pdf_file_name)) {
						unlink("./document/Dhakaa Adii" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Irreechaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Irreechaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Malkaa Adaamaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Malkaa Adaamaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Dagaagaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Dagaagaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Biqqaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Biqqaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Gaara Luugoo') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Gaara Luugoo/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Hangaatuu') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Hangaatuu/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Caffee') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Caffee/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Daabee Solloqqee') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Daabee Solloqqee/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Barreechaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Barreechaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Bokkuu Shanaan') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Bokkuu Shanaan/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Migiraa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Migiraa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			}
		} else {
			$update_filename = $old_pdf_file_name;
		}
		$data = [
			'full_name' => $this->input->post('full_name'),
			'city' => "Adaamaa",
			'subcity' => $this->session->userdata('subcity'),
			'kebele' => $this->input->post('kebele_name'),
			'carta_number' => $this->input->post('carta_number'),
			'level' => $this->input->post('level'),
			'services' => $this->input->post('services'),
			'area' => $this->input->post('area'),
			'build_height' => $this->input->post('build_height'),
			'earth_status_owner_ship' => $this->input->post('earth_status_owner_ship'),
			'end_year_of_leaze' => $this->input->post('end_year_of_leaze'),
			'services_year_of_leaze' => $this->input->post('services_year_of_leaze'),
			'document_status_info' => $this->input->post('document_status_info'),
			'shelf_no' => $this->input->post('shelf_no'),
			'block' => $this->input->post('block'),
			'parsili' => $this->input->post('parsili'),
			'registration_file_name' => $update_filename,
		];
		$document_pdf = new Document_model;
		$res = $document_pdf->updateDocument($data, $id);
		$this->session->set_flashdata('status', "Document Updated Successfully");
		redirect(base_url('document-edit/' . $id));
	}

	public function Delete_Document($id)
	{
		$document = new Document_model;
		if ($document->checkPdfFile($id)) {
			$data = $document->checkPdfFile($id);
			if (file_exists("./document/" . $data->file_name)) {
				unlink("./document/" . $data->file_name);
			}
			$document->deleteDocuement($id);
			$this->session->set_flashdata('status', 'Pdf file Documents and File information Deleted Seccussfullyy');
			redirect(base_url('kebele-manage-documents'));
		}
	}

	public function ListDocuments()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('DocumentRegistrationController/ListDocuments');
		//		data searching start here ...
		if ($this->input->get('submit')) {
			//			getting data from form
			$data['keyword'] = $this->input->get('kebele');
			$data['full_name'] = $this->input->get('full_name');
			$data['carta_number'] = $this->input->get('carta_number');
			// Storing data to session
			$this->session->set_userdata('kebele', $data['keyword']);
			$this->session->set_userdata('full_name', $data['full_name']);
			$this->session->set_userdata('carta_number', $data['carta_number']);
		} else {
			$data['keyword'] = $this->session->userdata('kebele');
			$data['full_name'] = $this->session->userdata('full_name');
			$data['carta_number'] = $this->session->userdata('carta_number');
		}
		$this->db->like('kebele', $data['keyword']);
		$this->db->like('first_name', $data['full_name']);
		$this->db->like('carta_number', $data['carta_number']);
		$this->db->from('documnet_inforamtion');

		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = "50";
		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		//call the model function to get the department data

		$data['documents'] = $this->dcm->getAllDocument($config["per_page"], $data['start'], $data['keyword'], $data['full_name'], $data['carta_number']);

		$data['pagination'] = $this->pagination->create_links();
		if ($this->session->userdata('username')) {

			//		$data['documents'] = $this->dcm->getDocumentList();
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/list_document', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
	public function GetDocuments()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('DocumentRegistrationController/GetDocuments');
		//		data searching start here ...
		if ($this->input->get('submit')) {
			//			getting data from form
			$data['full_name'] = $this->input->get('full_name');
			$data['carta_number'] = $this->input->get('carta_number');
			// Storing data to session
			$this->session->set_userdata('full_name', $data['full_name']);
			$this->session->set_userdata('carta_number', $data['carta_number']);
		} else {
			$data['full_name'] = $this->session->userdata('full_name');
			$data['carta_number'] = $this->session->userdata('carta_number');
		}


		$config['total_rows'] = $this->db->count_all_results('documnet_inforamtion');
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = "50";
		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		//call the model function to get the department data

		$data['alldocuments'] = $this->dcm->getAllDocuments($config["per_page"], $data['start'], $data['full_name'], $data['carta_number']);

		$data['pagination'] = $this->pagination->create_links();
		if ($this->session->userdata('username')) {

			//		$data['documents'] = $this->dcm->getDocumentList();
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/list_all_document', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}

	public function Edit_Document($id)
	{
		if ($this->session->userdata('username')) {
			$data['edit_document'] = $this->dcm->Edit_Document($id);
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/edit_document', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
	public function SubcityDocumentUpdate($id)
	{
		$old_pdf_file_name = $this->input->post('old_pdf_file');
		$new_pdf_file_name = $_FILES['document_file']['name'];
		//		echo $old_pdf_file_name;
		//		die();

		$kebele_id = $this->input->post('kebele_name');
		if ($kebele_id == 'Gadaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Gadaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}
		if ($new_pdf_file_name == TRUE) {
			if ($kebele_id == 'Gadaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Gadaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Gurmuu') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Gurmuu/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Odaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Odaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Badhaatuu') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Badhaatuu/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Dhadacha Araaraa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Dhadacha Araaraa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Gooroo') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Gooroo/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Dhakaa Adii') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Dhakaa Adii/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/Dhakaa Adii/" . $old_pdf_file_name)) {
						unlink("./document/Dhakaa Adii" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Irreechaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Irreechaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Malkaa Adaamaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Malkaa Adaamaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Dagaagaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Dagaagaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Biqqaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Biqqaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Gaara Luugoo') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Gaara Luugoo/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Hangaatuu') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Hangaatuu/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Caffee') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Caffee/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Daabee Solloqqee') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Daabee Solloqqee/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Barreechaa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Barreechaa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Bokkuu Shanaan') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Bokkuu Shanaan/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			} else if ($kebele_id == 'Migiraa') {
				$update_filename = $new_pdf_file_name;
				$config = [
					'upload_path' => './document/Migiraa/',
					'allowed_types' => 'pdf|png|jpg|jpeg',
					'file_name' => $update_filename,
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('document_file')) {
					if (file_exists("./document/" . $old_pdf_file_name)) {
						unlink("./document/" . $old_pdf_file_name);
					}
				}
			}
		} else {
			$update_filename = $old_pdf_file_name;
		}
		$data = [
			'full_name' => $this->input->post('full_name'),
			'city' => "Adaamaa",
			'subcity' => $this->session->userdata('subcity'),
			'kebele' => $this->input->post('kebele_name'),
			'carta_number' => $this->input->post('carta_number'),
			'level' => $this->input->post('level'),
			'services' => $this->input->post('services'),
			'area' => $this->input->post('area'),
			'build_height' => $this->input->post('build_height'),
			'earth_status_owner_ship' => $this->input->post('earth_status_owner_ship'),
			'end_year_of_leaze' => $this->input->post('end_year_of_leaze'),
			'services_year_of_leaze' => $this->input->post('services_year_of_leaze'),
			'document_status_info' => $this->input->post('document_status_info'),
			'shelf_no' => $this->input->post('shelf_no'),
			'block' => $this->input->post('block'),
			'parsili' => $this->input->post('parsili'),
			'registration_file_name' => $update_filename,
		];
		$document_pdf = new Document_model;
		$res = $document_pdf->updateDocument($data, $id);
		$this->session->set_flashdata('status', "Document Updated Successfully");
		redirect(base_url('document-edit/' . $id));
	}
	public function SubcityEditDocument($id)
	{
		if ($this->session->userdata('username')) {
			$data['edit_document'] = $this->dcm->SubcityEditDocument($id);
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/subcity_edit_document', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}

	public function search_document()
	{
		$this->load->library('pagination');


		$kebele_data = $this->input->post('kebele');
		$data['documents'] = $this->input->post('full_name');
		$data['documents'] = $this->input->post('carta_number');
		$kebele_data = $this->session->set_userdata('kebele', $kebele_data);
		$data['kevbele_v'] = $this->session->userdata('kebele');
		$this->session->set_userdata('full_name', $data['documents']);
		$this->session->set_userdata('carta_number', $data['documents']);

		//pagination settings


		$full_name = $this->session->userdata('full_name');
		$carta_number = $this->session->userdata('carta_number');
		echo $full_name . $data['kevbele_v'] . ' ' . $carta_number;
		// die();
		$this->db->like('kebele', $data['kevbele_v']);
		$this->db->like('full_name', $this->input->post('full_name'));
		$this->db->like('carta_number', $this->input->post('carta_number'));
		$this->db->from('document_info');
		$config['total_rows'] = $this->db->count_all_results();
		//		echo $this->db->last_query();
		//die();
		$data['total_rows'] = $config['total_rows'];
		$config['base_url'] = site_url('search-document');

		$config['per_page'] = "15";
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		//config for bootstrap pagination class integration
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');


		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		//call the model function to post the department data
		$data['documents'] = $this->dcm->getSearchedDocument($config["per_page"], $data['page']);

		$data['pagination'] = $this->pagination->create_links();
		if ($this->session->userdata('username')) {
			$this->load->view('themes/header', $data);
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/search_document', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}

	public function Document_no_full_information()
	{
		$this->load->library('pagination');
		$config['base_url'] = site_url('DocumentRegistrationController/Document_no_full_information');
		$this->db->where('full_name =', '');
		$this->db->or_where('kebele =', '');
		$this->db->or_where('city =', '');
		$this->db->or_where('subcity =', '');
		$this->db->or_where('carta_number =', '');
		$this->db->or_where('full_name =', '');
		$this->db->from('document_info');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = "10";
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		//config for bootstrap pagination class integration
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-lg-center">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');


		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		//call the model function to get the department data
		$data['documents'] = $this->dcm->getAllDocumenthasNoFullInfo($config["per_page"], $data['page']);

		$data['pagination'] = $this->pagination->create_links();
		if ($this->session->userdata('username')) {
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/document_no_full_info', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}

	// ===================kebele Document Registration===========
	// ==========================================================

	// Kebele Document Registration

	public function KebeleDcument()
	{
		if ($this->session->userdata('username')) {
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/kebele_document_registration');
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
	public function SubcityDcument()
	{
		if ($this->session->userdata('username')) {
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/subcity_document_registration');
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
	public function SubcitySaveData()
	{
		$kebele_id = $this->session->userdata('kebele');
		if ($kebele_id == 'Gadaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Gadaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Gurmuu') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Gurmuu/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Odaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Odaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Badhaatuu') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Badhaatuu/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Dhadacha Araaraa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Dhadacha Araaraa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Gooroo') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Gooroo/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Dhakaa Adii') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Dhakaa Adii/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Irreechaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Irreechaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Malkaa Adaamaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Malkaa Adaamaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Dagaagaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Dagaagaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Biqqaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Biqqaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Gaara Luugoo') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Gaara Luugoo/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Hangaatuu') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Hangaatuu/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Caffee') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Caffee/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Daabee Solloqqee') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Daabee Solloqqee/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Barreechaa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Barreechaa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Bokkuu Shanaan') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Bokkuu Shanaan/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == 'Migiraa') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			$config = [
				'upload_path' => './document/Migiraa/',
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('document_file')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/document_registration', $error);
			$this->load->view('themes/footer');
		} else {
			$document_file = $this->upload->data('file_name');
			$registration_no = 'AD-' . substr($this->input->post('kebele_name'), 0, 2) . date('Y');
			$data = [
				'full_name' => $this->input->post('full_name'),
				'city' => 'Adaamaa',
				'subcity' => $this->session->userdata('subcity'),
				'kebele' => $this->input->post('kebele'),
				'carta_number' => $this->input->post('carta_number'),
				'level' => $this->input->post('level'),
				'services' => $this->input->post('services'),
				'area' => $this->input->post('area'),
				'build_height' => $this->input->post('build_height'),
				'earth_status_owner_ship' => $this->input->post('earth_status_owner_ship'),
				'end_year_of_leaze' => $this->input->post('end_year_of_leaze'),
				'services_year_of_leaze' => $this->input->post('services_year_of_leaze'),
				'document_status_info' => $this->input->post('document_status_info'),
				'shelf_no' => $this->input->post('shelf_no'),
				'block' => $this->input->post('block'),
				'parsili' => $this->input->post('parsili'),
				'registration_file_name' => $document_file
			];

			$document = new Document_model();
			$res = $document->insertDocument($data);
			$this->session->set_flashdata('status', 'Document Information Successfully Registered');
			redirect(base_url('subcity-manage-documents'));
		}
	}
	public function AttachKebeleDocument($carta_number)
	{

		$config = [];
		$kebele_id = $this->session->userdata('kebele');
		// $carta_number = $this->input->post('carta_number');
		//kebele Folder path creation
		$g_01 = 'document/kebele01/' . $carta_number;
		$g_02 = 'document/kebele02/' . $carta_number;
		$g_03 = 'document/kebele03/' . $carta_number;
		$g_04 = 'document/kebele04/' . $carta_number;
		$g_05 = 'document/kebele05/' . $carta_number;
		$g_06 = 'document/kebele06/' . $carta_number;
		$g_07 = 'document/kebele07/' . $carta_number;
		$g_08 = 'document/kebele08/' . $carta_number;
		$g_09 = 'document/kebele09/' . $carta_number;
		$g_10 = 'document/kebele10/' . $carta_number;
		// $Biqqaa = 'document/biqqaa/' . $carta_number;
		// $gaara_luugoo = 'document/Gaara Luugoo/' . $carta_number;
		// $hangaatuu = 'document/Hangaatuu/' . $carta_number;
		// $caffee = 'document/Caffee/' . $carta_number;
		// $daabee_solloqqee = 'document/Daabee Solloqqee/' . $carta_number;
		// $barreechaa = 'document/Barreechaa/' . $carta_number;
		// $bokkuu_shanaan = 'document/Bokkuu Shanaan/' . $carta_number;
		// $migiraa = 'document/Migiraa/' . $carta_number;

		//Ganda Gada 
		if ($kebele_id == '01' and !is_dir($g_01)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_01, 0777, true);
			$config = [
				'upload_path' => $g_01,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '01') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_01, 0777, true);
			$config = [
				'upload_path' => $g_01,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}
		//Ganda Gurmuu

		else if ($kebele_id == '02' and !is_dir($g_02)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_02, 0777, true);
			$config = [
				'upload_path' => $g_02,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '02') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_02, 0777, true);
			$config = [
				'upload_path' => $g_02,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}

		// Ganda Odaa Document Upload and file save


		else if ($kebele_id == '03' and !is_dir($g_03)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_03, 0777, true);
			$config = [
				'upload_path' => $g_03,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '03') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_03, 0777, true);
			$config = [
				'upload_path' => $g_03,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}

		// Ganda Odaa file upload
		else if ($kebele_id == '04' and !is_dir($g_04)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_04, 0777, true);
			$config = [
				'upload_path' => $g_04,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == ')4') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_04, 0777, true);
			$config = [
				'upload_path' => $g_04,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}

		// Ganda Badhaatuu
		else if ($kebele_id == '05' and !is_dir($g_05)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_05, 0777, true);
			$config = [
				'upload_path' => $g_05,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '05') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_05, 0777, true);
			$config = [
				'upload_path' => $g_05,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}

		// Ganda Dhadachaa araara dataupload

		else if ($kebele_id == '06' and !is_dir($g_06)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_06, 0777, true);
			$config = [
				'upload_path' => $g_06,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '06') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_06, 0777, true);
			$config = [
				'upload_path' => $g_06,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}

		// Ganda Gooroo

		else if ($kebele_id == '07' and !is_dir($g_07)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_07, 0777, true);
			$config = [
				'upload_path' => $g_07,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '07') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_07, 0777, true);
			$config = [
				'upload_path' => $g_07,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}

		// Dhakaa adii

		else if ($kebele_id == '08' and !is_dir($g_08)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_08, 0777, true);
			$config = [
				'upload_path' => $g_08,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '08') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_08, 0777, true);
			$config = [
				'upload_path' => $g_08,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}
		// Irrechaa
		else if ($kebele_id == '09' and !is_dir($g_09)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_09, 0777, true);
			$config = [
				'upload_path' => $g_09,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '09') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_09, 0777, true);
			$config = [
				'upload_path' => $g_09,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}
		//Malkaa Adaamaa
		else if ($kebele_id == '10' and !is_dir($g_10)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_10, 0777, true);
			$config = [
				'upload_path' => $g_10,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}
		 $this->load->library('upload', $config);
		if (!$this->upload->do_upload('document_file')) {
			$error = array('error' => $this->upload->display_errors());
			// $this->load->view('themes/header');
			// $this->load->view('themes/topmenu');
			// $this->load->view('themes/sidemenu');
			// $this->load->view('document/document_registration', $error);
			// $this->load->view('themes/footer');
			redirect(base_url('kebele-manage-documents'));
		} else {
			$document_file = $this->upload->data('file_name');
			$registration_no = 'AD-' . substr($this->input->post('kebele_name'), 0, 2) . date('Y');
			$data = [
				'file_name' => $document_file
			];
			$document = new Document_model();
			$res = $document->AttachDocument($data,$carta_number);
			if($res){
				$userdata=[
					'kebele'=>$this->session->userdata('kebele'),
					'user_id'=>$carta_number,
					'file_name'=>$document_file
				];
				$new_file = new Document_model();
				$UserDoc=$new_file->insertUserDocument($userdata,$carta_number);
			}
			$this->session->set_flashdata('status', 'Document Information Successfully Registered');
			redirect(base_url('kebele-manage-documents'));
		}
	}
	public function SaveKebeleDocument()
	{
		$config = [];
		$kebele_id = $this->session->userdata('kebele');
		// $kebele_id = $this->session->userdata('kebele');
		$carta_number = $this->input->post('carta_number');

		//kebele Folder path creation
		// $dukem_kebele_path = 'document/kebele01/01'.$carta_number;

		$g_k_01 = 'document/kebele01/' . $carta_number;
		$g_k_02 = 'document/kebele02/' . $carta_number;
		$g_k_03 = 'document/kebele03/' . $carta_number;
		$g_k_04 = 'document/kebele04/' . $carta_number;
		$g_k_05 = 'document/kebele05/' . $carta_number;
		$g_k_06 = 'document/kebele06/' . $carta_number;
		$g_k_07 = 'document/kebele07/' . $carta_number;
		$g_k_08 = 'document/kebele08/' . $carta_number;
		$g_k_09 = 'document/kebele09/' . $carta_number;
		$g_k_10 = 'document/kebele10/' . $carta_number;
		
		//Ganda 01 
		if ($kebele_id == '01' and !is_dir($g_k_01)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_k_01, 0777, true);
			$config = [
				'upload_path' => $g_k_01,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '02') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_k_02, 0777, true);
			$config = [
				'upload_path' => $g_k_02,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}
		//Ganda Gurmuu

		else if ($kebele_id == '03' and !is_dir($g_k_03)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_k_03, 0777, true);
			$config = [
				'upload_path' => $g_k_03,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '04') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_k_04, 0777, true);
			$config = [
				'upload_path' => $g_k_04,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}
		// Ganda Odaa Document Upload and file save
		else if ($kebele_id == '05' and !is_dir($g_k_05)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_k_05, 0777, true);
			$config = [
				'upload_path' => $g_k_05,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '06') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_k_06, 0777, true);
			$config = [
				'upload_path' => $g_k_06,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}

		// Ganda Odaa file upload
		else if ($kebele_id == '07' and !is_dir($g_k_07)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_k_07, 0777, true);
			$config = [
				'upload_path' => $g_k_07,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '08') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_k_08, 0777, true);
			$config = [
				'upload_path' => $g_k_08,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}

		// Ganda Badhaatuu
		else if ($kebele_id == '09' and !is_dir($g_k_09)) {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_k_09, 0777, true);
			$config = [
				'upload_path' => $g_k_09,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		} else if ($kebele_id == '10') {
			$file_name = $_FILES['document_file']['name'];
			$new_name = $file_name;
			mkdir($g_k_10, 0777, true);
			$config = [
				'upload_path' => $g_k_10,
				'allowed_types' => 'pdf|jpg|png|jpeg',
				'max_size' => 0,
				'file_name' => $new_name,
			];
		}

		// Ganda Dhadachaa araara data upload

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('document_file')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/kebele_document_registration', $error);
			$this->load->view('themes/footer');
		} else {
			$document_file = $this->upload->data('file_name');
			$registration_no = 'AD-' . substr($this->input->post('kebele_name'), 0, 2) . date('Y');
			$data = [
				'first_name' => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name' => $this->input->post('last_name'),
				'city' => 'Lega Tafo City',
				'kebele' => $this->session->userdata('kebele'),								
				'recite_number' => $this->input->post('recite_number'),
				'date_of_recite' => $this->input->post('date_of_recite'),
				'carta_number' => $this->input->post('carta_number'),
				'name_of_carta' => $this->input->post('name_of_carta'),				
				'date_carta_number' => $this->input->post('date_carta_number'),
				'blockploit' => $this->input->post('blockploit'),
				'block' => $this->input->post('block'),
				'ploit' => $this->input->post('ploit'),
				
				'neighbor' => $this->input->post('neighbor'),
				'earth_owner_status' => $this->input->post('earth_statuses_owner_ship'),
				'building_height' => $this->input->post('building_height'),
				'area' => $this->input->post('area'),
				'service_status' => $this->input->post('service_status'),
				'block_b' => $this->input->post('block_b'),
				'ploit_p' => $this->input->post('ploit_p'),
				'end_leazy_year' => $this->input->post('end_leazy_year'),
				'file_name' => $document_file
			];
			// die($this->input->post('recite_number'));
			$document = new Document_model();
			$res = $document->insertDocument($data);
			$documentFile = new Document_model();
			$res = $documentFile->AttachDocument($data,$carta_number);
			if($res){
				$userdata=[
					'kebele'=>$this->session->userdata('kebele'),
					'user_id'=>$carta_number,
					'file_name'=>$document_file
				];
				$new_file = new Document_model();
				$UserDoc=$new_file->insertUserDocument($userdata,$carta_number);
			}
			$this->session->set_flashdata('status', 'Document Information Successfully Registered');
			redirect(base_url('kebele-manage-documents'));
		}
	}
	public function SubcityListDocuments()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('DocumentRegistrationController/SubcityListDocuments');
		//		data searching start here ...
		if ($this->input->post('submit')) {
			//			getting data from form

			$data['keyword'] = $this->input->post('kebele');
			$data['full_name'] = $this->input->post('full_name');
			$data['carta_number'] = $this->input->post('carta_number');
			// Storing data to session
			$this->session->set_userdata('kebele', $data['keyword']);
			$this->session->set_userdata('full_name', $data['full_name']);
			$this->session->set_userdata('carta_number', $data['carta_number']);
		} else {
			$data['keyword'] = $this->session->userdata('kebele');
			$data['full_name'] = $this->session->userdata('full_name');
			$data['carta_number'] = $this->session->userdata('carta_number');
		}

		$this->db->like('kebele', $data['keyword']);
		$this->db->like('full_name', $data['full_name']);
		$this->db->like('carta_number', $data['carta_number']);
		$this->db->from('document_info');

		$config['total_rows'] = $this->db->count_all_results();
		// echo $this->db->last_query();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = "30";


		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);

		//call the model function to get the department data

		$data['documents'] = $this->dcm->getAllDocument($config["per_page"], $data['start'], $data['keyword'], $data['full_name'], $data['carta_number']);

		$data['pagination'] = $this->pagination->create_links();
		if ($this->session->userdata('username')) {

			//		$data['documents'] = $this->dcm->getDocumentList();
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/subcity_list_document', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}

	public function KebeleListDocumentst()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('DocumentRegistrationController/KebeleListDocumentst');
		//		data searching start here ...
		if ($this->input->get('submit')) {
			//	getting data from form
			$data['keyword'] = $this->session->userdata('kebele');
			$data['full_name_search'] = $this->input->get('full_name');
			$data['carta_number'] = $this->input->get('carta_number');
			// Storing data to session
			$this->session->set_userdata('kebele', $data['keyword']);
			$this->session->set_userdata('full_name_search', $data['full_name_search']);
			$this->session->set_userdata('carta_number', $data['carta_number']);
		} 
		else {
			$data['keyword'] = $this->session->userdata('kebele');
			$data['full_name_search'] = $this->session->userdata('full_name_search');
			$data['carta_number'] = $this->session->userdata('carta_number');
		}		

		$this->db->like('kebele', $data['keyword']);
		$this->db->like('first_name', $data['full_name_search']);
		$this->db->like('carta_number', $data['carta_number']);
		$this->db->from('documnet_inforamtion');
		$config['total_rows'] = $this->db->count_all_results();

		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = "50";
		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		//call the model function to get the department data
		$data['documents'] = $this->dcm->getAllDocument($config["per_page"], $data['start'], $data['keyword'], $data['full_name_search'], $data['carta_number']);
		$data['pagination'] = $this->pagination->create_links();
		if ($this->session->userdata('username')) {
					// $data['documents'] = $this->dcm->getDocume();
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/kebele_list_document', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
	public function RequestDocumentstList()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('DocumentRegistrationController/RequestDocumentstList');
		//		data searching start here ...
		if ($this->input->get('submit')) {
			//	getting data from form
			$data['keyword'] = $this->session->userdata('kebele');
			$data['full_name_search'] = $this->input->get('full_name');
			$data['carta_number'] = $this->input->get('carta_number');
			// Storing data to session
			$this->session->set_userdata('kebele', $data['keyword']);
			$this->session->set_userdata('full_name_search', $data['full_name_search']);
			$this->session->set_userdata('carta_number', $data['carta_number']);
		} 
		else {
			$data['keyword'] = $this->session->userdata('kebele');
			$data['full_name_search'] = $this->session->userdata('full_name_search');
			$data['carta_number'] = $this->session->userdata('carta_number');
		}		

		$this->db->like('kebele', $data['keyword']);
		$this->db->like('first_name', $data['full_name_search']);
		$this->db->like('carta_number', $data['carta_number']);
		$this->db->or_where('request_document_status',1);
		$this->db->or_where('request_document_status',2);
		$this->db->from('documnet_inforamtion');
		$config['total_rows'] = $this->db->count_all_results();

		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = "50";
		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		//call the model function to get the department data
		$data['documents'] = $this->dcm->getAllRequestDocument($config["per_page"], $data['start'], $data['keyword'], $data['full_name_search'], $data['carta_number']);
		$data['pagination'] = $this->pagination->create_links();
		if ($this->session->userdata('username')) {
					// $data['documents'] = $this->dcm->getDocume();
			$this->load->view('themes/header');
			$this->load->view('themes/topmenu');
			$this->load->view('themes/sidemenu');
			$this->load->view('document/other_list_document', $data);
			$this->load->view('themes/footer');
		} else {
			redirect(base_url('login'));
		}
	}
}
