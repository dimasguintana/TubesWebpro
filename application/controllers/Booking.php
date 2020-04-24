<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dokter_Model');
		$this->load->model('Jadwal_Model');
	}

	public function index()
	{
		$content['main_view'] = 'Booking_View';
		$content['title'] = 'Booking Jadwal';
		$content['dokter'] = $this->Dokter_Model->getDokter();

		$this->load->view('Halaman', $content);
	}

	public function getJadwalByDokter()
	{
		$username = $this->input->post('username_dokter', true);
		$data = $this->Jadwal_Model->getJadwalByDokter($username)->result();

		echo json_encode($data);
	}

}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */