<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	public function index()
	{
		session_destroy();
		$content['main_view'] = 'Login_View';
		$content['title'] = 'Login';
		$this->load->view('Halaman', $content);
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}

	public function register()
	{
		$content['main_view'] = 'Register_View';
		$content['title'] = 'Register';
		$this->load->view('Halaman', $content);
	}

	public function pasienv(){
		$data['main_view'] = 'Pasien_View';
        $data['title'] = 'Pasien';
		$this->load->view('Halaman', $data);
	}
	
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$data['main_view'] = 'Login_View';
		$data['title'] = 'Login';

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Halaman', $data);
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$peran;
			$query = $this->db->get_where('pasien', ['username' => $username])->row_array();

			//Jika username terdeteksi di table pasien
			if ($query) {
				$peran = 'pasien';
			} else {
				$query = $this->db->get_where('dokter', ['username' => $username])->row_array();

				//Jika username terdeteksi di table dokter
				if ($query) {
					$peran = 'dokter';
				} else {
					$query = $this->db->get_where('admin', ['username' => $username])->row_array();

					//Jika username terdeteksi di table admin
					if ($query) {
						$peran = 'admin';
					}
				}
			}

			//Jika username valid di pasien
			if ($peran == 'pasien') {

				if ($password == $query['password']) {
					$data = [
						'username' => $query['username'],
						'nama' => $query['nama'],
						'peran' => $peran
					];
					
					$this->session->set_userdata($data);
                	$data['main_view'] = 'Halaman_Pasien';
                	$data['title'] = 'Pasien';
					$this->load->view('Halaman', $data);

				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
					redirect('Welcome/login');
				}

				//Jika username valid di dokter
			} else if ($peran == 'dokter') {
				if ($password == $query['password']) {
					$data = [
						'username' => $query['username'],
						'nama' => $query['nama'],
						'peran' => $peran
					];

					$this->session->set_userdata($data);
                	$data['main_view'] = 'Halaman_Dokter';
                	$data['title'] = 'Dokter';
					$this->load->view('Halaman', $data);

				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
					redirect('Welcome/login');
				}

				//Jika username valid di admin
			} else if ($peran == 'admin') {
				if ($password == $query['password']) {
					$data = [
						'username' => $query['username'],
						// 'nama' => $query['nama'],
						'peran' => $peran
					];
					
					$this->session->set_userdata($data);
                	$data['main_view'] = 'Pasien_View';
                	$data['title'] = 'Pasien';
					$this->load->view('Halaman', $data);

				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Invalid</div>');
					redirect('Welcome/login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Invalid</div>');
				redirect('Welcome/login');

			}
		}
	}

}
