<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_Model extends CI_Model {

	public function getPasien(){
		return $this->db->get('pasien')->result_array();
	}

	public function tambahDataPasien($data){
		return $this->db->insert('pasien', $data);
	}

	//nomor 1
	public function getPasienByUsername($username)
	{
		$this->db->where('username', $username);
		return $this->db->get('pasien')->row();
	}
	//end of nomor 1

	public function updatePasien($username, $data)
	{
		$this->db->where('username', $username);
		return $this->db->update('pasien', $data);
	}

	//nomor 2 
	public function deleteDataPasien($username){
		$this->db->where('username', $username);
		return $this->db->delete('pasien');
	}
	//end of nomor 2
}

/* End of file Pasien_Model.php */
/* Location: ./application/models/Pasien_Model.php */