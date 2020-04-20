<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_Model extends CI_Model {

	public function getPasien(){
		return $this->db->get('pasien')->result_array();
	}

	public function tambahDataPasien(){
		$data = [
			"nama_pasien" => $this->input->post('namaP',true),
			"jenis_kelamin" => $this->input->post('jk',true),
			"alamat" => $this->input->post('alamat',true),
			"usia" => $this->input->post('usia', true),
		];
		return $this->db->insert('pasien', $object);
	}

}

/* End of file Pasien_Model.php */
/* Location: ./application/models/Pasien_Model.php */