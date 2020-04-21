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
		foreach ($_POST as $key => $value) {
        	$d[$key] = $value;
      	}
		$data = [
			"username_pasien" => $d['usernameP'],
			"password_pasien" => $d['passwordP'],
			"nama" => $d['namaP'],
			"alamat" => $d['alamatP'],
			"usia" => $d['usiaP'],
			"jeniskelamin" => $d['jkP'],
		];
		$this->Pasien_Model->tambahDataPasien($data);
		$insert["cek"] = true;
		echo json_encode($insert);
	}

	public function deletePasien($username){
		$this->Pasien_Model->deleteDataPasien($username);
	}

}

/* End of file Pasien.php */
/* Location: ./application/controllers/Pasien.php */