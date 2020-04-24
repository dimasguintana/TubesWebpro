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
		$content['title'] = 'Pasien';

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

	public function deletePasien($username){
		$this->Pasien_Model->deleteDataPasien($username);
	}

	public function getPasienByUsername($username)
	{
		$data = $this->Pasien_Model->getPasienByUsername($username);

		echo json_encode($data);
	}

	public function updatePasien($username)
	{
		foreach ($_POST as $key => $value) {
			$post[$key] = $value;
		}

		$data = [

			"username" => $post['usernameP'],
			"nama" => $post['namaP'],
			"alamat" => $post['alamatP'],
			"usia" => $post['usiaP'],
			"jeniskelamin" => $post['jkP']

		];

		$kesuksesan['sukses'] = true;
		$this->Pasien_Model->updatePasien($username, $data);

		echo json_encode($kesuksesan);

	}

}

/* End of file Pasien.php */
/* Location: ./application/controllers/Pasien.php */