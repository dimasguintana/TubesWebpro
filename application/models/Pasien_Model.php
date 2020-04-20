<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_Model extends CI_Model {

	public function getPasien(){
		return $this->db->get('pasien')->result_array();
	}
	public function tambahDataPasien(){
		$data = [
			"username_pasien" => $this->input->post('usernameP',true),
			"password_pasien" => $this->input->post('passwordP',true),
			"nama" => $this->input->post('namaP',true),
			"alamat" => $this->input->post('alamatP', true),
			"usia" => $this->input->post('usiaP', true),
			"jeniskelamin" => $this->input->post('jkP', true),
		];
		return $this->db->insert('pasien', $data);
	}

	

}

/* End of file Pasien_Model.php */
/* Location: ./application/models/Pasien_Model.php */