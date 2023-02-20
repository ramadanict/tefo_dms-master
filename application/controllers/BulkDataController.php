<?php
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class BulkDataController extends CI_Controller
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
		$this->load->library('pagination');
		$config['base_url'] = site_url('BulkDataController/index');
		$this->db->like('kebele', $this->input->get('kebele'));
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
		$data['documents'] = $this->dcm->getAllDocument($config["per_page"], $data['page']);

		$data['pagination'] = $this->pagination->create_links();
		if ($this->session->userdata('username')) {

		$data['documents'] = $this->dcm->getDocumentList();
		$this->load->view('themes/header');
		$this->load->view('themes/topmenu');
		$this->load->view('themes/sidemenu');
		$this->load->view('document/list_document', $data);
		$this->load->view('themes/footer');
	} else {
		redirect(base_url('login'));
	}
	}
	public function BulkDataUpload(){
		if ($this->session->userdata('username')) {
		$this->load->view('themes/header');
		$this->load->view('themes/topmenu');
		$this->load->view('themes/sidemenu');
		$this->load->view('document/bulkdata_document');
		$this->load->view('themes/footer');
	} else {
		redirect(base_url('login'));
	}
}


	public function KebeleBulkDataUpload(){
		if ($this->session->userdata('username')) {
		$this->load->view('themes/header');
		$this->load->view('themes/topmenu');
		$this->load->view('themes/sidemenu');
		$this->load->view('document/kebele_bulkdata_document');
		$this->load->view('themes/footer');
	} else {
		redirect(base_url('login'));
	}
	}
	public function BulkImportData(){
		
		$upload_file = $_FILES['document_file']['name'];
		$extension = pathinfo($upload_file, PATHINFO_EXTENSION);
		if ($extension == 'csv') {
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else if ($extension == 'xls') {
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		} else {
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet = $reader->load($_FILES['document_file']['tmp_name']);
		$sheetdata = $spreadsheet->getActiveSheet()->toArray();
		$sheetcount = count($sheetdata);
		if ($sheetcount > 1) {
			$data = array();
			$subcity = $this->input->post('subcity');
			$kebele = $this->input->post('kebele');
			for ($i = 1; $i < $sheetcount; $i++) {
				$first_name = $sheetdata[$i][0];
				$middle_name = $sheetdata[$i][1];
				$last_name = $sheetdata[$i][2];
				$date_of_recite = $sheetdata[$i][3];
				$city = $sheetdata[$i][4];
				$kebele = $sheetdata[$i][5];
				$pdf_file_name = $sheetdata[$i][6];
				$recite_number = $sheetdata[$i][7];
				$name_of_carta = $sheetdata[$i][8];
				$carta_number = $sheetdata[$i][9];
				$date_carta_number = $sheetdata[$i][10];
				$blockploit = $sheetdata[$i][11];
				$block = $sheetdata[$i][12];
				$ploit = $sheetdata[$i][13];
				$building_height = $sheetdata[$i][14];
				$area = $sheetdata[$i][15];
				$earth_owner_status = $sheetdata[$i][16];
				$neighbor = $sheetdata[$i][17];
				$block_b = $sheetdata[$i][18];
				$ploit_p = $sheetdata[$i][19];
				$service_status = $sheetdata[$i][20];
				$end_leazy_year = $sheetdata[$i][21];
				$file_name = $sheetdata[$i][22];

				$data[] = array(
					'first_name' => $first_name,
					'middle_name' => $middle_name,
					'last_name' => $last_name,
					'date_of_recite' => $date_of_recite,
					'city' => $city,
					'kebele' => '0'.$kebele,
					'pdf_file_name' => $pdf_file_name,
					'recite_number' => $recite_number,
					'name_of_carta' => $name_of_carta,
					'carta_number' => $carta_number,
					'date_carta_number' => $date_carta_number,
					'blockploit' => $blockploit,
					'block' => $block,
					'ploit' => $ploit,
					'building_height' => $building_height,
					'area' => $area,
					'earth_owner_status' => $earth_owner_status,
					'neighbor' => $neighbor,
					'block_b' => $block_b,
					'ploit_p' => $ploit_p,
					'service_status' => $service_status,
					'end_leazy_year' => $end_leazy_year,
					'file_name' => $file_name,
				);
			}
			$inserdata = $this->dcm->insert_batch($data);
			$this->session->set_flashdata('status', 'Document Information Successfully Registered');
			redirect(base_url('kebele-manage-documents'));
		}
	}
}
