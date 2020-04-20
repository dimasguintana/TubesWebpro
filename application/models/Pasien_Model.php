<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_Model extends CI_Model {

	public function getPasien(){
		return $this->db->get('pasien')->result_array();
	}

	public function tambahDataPasien($data){
		return $this->db->insert('pasien', $data);
	}
}

/* End of file Pasien_Model.php */
/* Location: ./application/models/Pasien_Model.php */