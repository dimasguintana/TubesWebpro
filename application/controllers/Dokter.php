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

}
