<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function index()
	{
		$content['main_view'] = 'Booking_View';
		$content['title'] = 'Booking Jadwal';

		$this->load->view('Halaman', $content);
	}

}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */