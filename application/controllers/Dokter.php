<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dokter_Model');
	}

	public function index()
	{
		$content['main_view'] = 'Dokter_View';
		$content['title'] = 'Data Dokter';

		$this->load->view('Halaman', $content);
	}

	public function allDokter()
	{
		$data = $this->Dokter_Model->getDokter();

		echo json_encode($data);
	}

	// public function tambahDokter(){
	// 	$data = [
	// 		"username" => $this->input->post('usernameD', true),
	// 		"password" => $this->input->post('passwordD', true),
	// 		"nama" => $this->input->post('namaD', true),
	// 		"rating" => $this->input->post('alamatD', true),
	// 		"usia" => $this->input->post('usiaD', true),
	// 	];
	// 	$this->Dokter_Model->tambahDataDokter($data);
	// }
	public function tambahDokter(){
        foreach ($_POST as $key => $value) {
            $d[$key] = $value;
          }
        $data = [
            "username" => $d['usernameD'],
            "password" => $d['passwordD'],
            "nama" => $d['namaD'],
            "rating" => $d['ratingD'],
            "usia" => $d['usiaD'],
		];
		
        $this->Dokter_Model->tambahDataDokter($data);
        $insert["cek"] = true;
        echo json_encode($insert);
    }

	public function getDokterByUsername($username)
	{
		$data = $this->Dokter_Model->getDokterByUsername($username);

		echo json_encode($data);
	}

	public function updateDokter($username)
	{
		foreach ($_POST as $key => $value) {
			$post[$key] = $value;
		}

		$data = [

			"username" => $post['usernameD'],
			"nama" => $post['namaD'],
			"rating" => $post['ratingD'],
			"usia" => $post['usiaD'],

		];

		$valid['sukses'] = true;
		$this->Dokter_Model->updateDokter($username, $data);

		echo json_encode($valid);

	}

	public function deleteDokter($username)
	{
		$this->Dokter_Model->deleteDataDokter($username);
	}

	public function getJadwalD()
	{
		$this->load->model('Jadwal_Model');
		$data=$this->Jadwal_Model->getJadwal();

		echo json_encode($data);
	}

}
