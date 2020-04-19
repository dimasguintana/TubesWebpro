<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Pasien extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pasien_Model');
	}
	public function index()
	{
		$content['main_view'] = 'View_Pasien';
		$content['title'] = 'Data Pasien';

		$this->load->view('Pasien_View', $content);
	}

	public function allpasien()
	{
		$data = $this->Pasien_Model->getAllPasien();

		echo json_encode($data);
	}

	public function tambah_pasien(){
		$this->Pasien_Model->tambahDataPasien();
		$this->session->$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data'.'Berhasil Ditambah');
	}

}

/* End of file Controller_Pasien.php */
/* Location: ./application/controllers/Controller_Pasien.php */