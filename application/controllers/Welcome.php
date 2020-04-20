<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pasien_Model');
	}

	public function index()
	{
		$content['title'] = 'Pasien';
		$this->load->view('welcome_message', $content);
	}

	public function allPasien()
	{
		echo json_encode($this->Pasien_Model->getPasien());
	}
}
