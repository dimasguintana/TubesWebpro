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
		$data = $this->Pasien_Model->getPasien();

		echo json_encode($data);
	}

	public function tambahPasien(){
		$data = [
			"username" => $this->input->POST('usernameP', true),
			"password" => $this->input->post('passwordP', true),
			"nama" => $this->input->post('namaP', true),
			"alamat" => $this->input->post('alamatP', true),
			"usia" => $this->input->post('usiaP', true),
			"jeniskelamin" => $this->input->post('jeniskelamin', true),
		];
		$this->Pasien_Model->tambahDataPasien($data);
		redirect('Welcome/login','refresh');
	}

}

/* End of file Pasien.php */
/* Location: ./application/controllers/Pasien.php */