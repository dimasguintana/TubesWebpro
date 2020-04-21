<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_Model extends CI_Model {

	public function getPasien(){
		return $this->db->get('pasien')->result_array();
	}

	public function tambahDataPasien($data){
		return $this->db->insert('pasien', $data);
	}
	public function deleteDataPasien($username){
		$this->db->where('username_pasien', $username);
		return $this->db->delete('pasien');
	}
}

/* End of file Pasien_Model.php */
/* Location: ./application/models/Pasien_Model.php */