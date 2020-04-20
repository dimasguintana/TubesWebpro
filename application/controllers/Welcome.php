<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Pasien_Model');
	}

	public function index()
	{
		$content['main_view'] = 'Login_View';
		$content['title'] = 'Login';
		$this->load->view('Halaman', $content);
	}

	public function register()
	{
		$content['main_view'] = 'Register_View';
		$content['title'] = 'Register';
		$this->load->view('Halaman', $content);
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username');
		$this->form_validation->set_rules('password', 'Password');

		$data['main_view'] = 'Login_View';
		$data['title'] = 'Login';

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Halaman', $data);
		} else {
			$this->input->post('username');
			$this->input->post('password');

			$peran;
			$query1 = $this->db->get_where('pasien', ['username' => $username])->row_array();
			if ($query1->num_rows() > 0) {
				$peran = 'pasien';
			}

			$query2 = $this->db->get_where('dokter', ['username' => $username])->row_array();
			if ($query2->num_rows() > 0) {
				$peran = 'dokter';
			}

			$query3 = $this->db->get_where('admin', ['username' => $username])->row_array();
			if ($query3->num_rows() > 0) {
				$peran = 'admin';
			}

			//Jika username valid di pasien
			if ($peran == 'pasien') {

				if (password_verify($password, $query1['password'])) {
					$data = [
						'username' => $query1['username'],
						'nama' => $query1['nama'],
						'peran' => $peran
					];
					$this->session->set_userdata($data);
                	$data['main_view'] = 'Pasien_View';
					$this->load->view('Halaman', $data);
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
					redirect('Pasien/allPasien');
				}
				//Jika username valid di dokter
			} else if ($peran == 'dokter') {
				if (password_verify($password, $query2['password'])) {
					$data = [
						'username' => $query2['username'],
						'nama' => $query2['username'],
						'peran' => $peran
					];
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
					redirect('Pasien/allPasien');
				}
				//Jika username valid di admin
			} else if ($peran == 'admin') {
				if (password_verify($password, $query3['password'])) {
					$data = [
						'username' => $query3['username'],
						'nama' => $query3['username'],
						'peran' => $peran
					];
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
					redirect('Pasien/allPasien');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Invalid</div>');
				redirect('Pasien/allPasien');

			}
		}
	}
}
