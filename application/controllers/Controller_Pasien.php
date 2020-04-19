<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Pasien extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pasien_Model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		
	}

}

/* End of file Controller_Pasien.php */
/* Location: ./application/controllers/Controller_Pasien.php */