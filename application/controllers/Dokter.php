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

}
