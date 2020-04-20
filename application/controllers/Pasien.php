<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pasien_Model');
	}
	public function index()
	{
		$content['main_view'] = 'Pasien_View';
		$content['title'] = 'Data Pasien';

		$this->load->view('Halaman', $content);
	}

	public function allPasien()
	{
		$data = $this->Pasien_Model->getAllPasien();

		echo json_encode($data);
	}

	public function tambahPasien(){
		$this->Pasien_Model->tambahDataPasien();
		$this->session->$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data'.'Berhasil Ditambah');
	}

}

/* End of file Pasien.php */
/* Location: ./application/controllers/Pasien.php */