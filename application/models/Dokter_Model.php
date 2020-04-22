<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_Model extends CI_Model {

	public function getDokter()
	{
		return $this->db->get('dokter')->result_array();
	}

	public function tambahDataDokter($data){
		return $this->db->insert('dokter', $data);
	}

	public function getDokterByUsername($username)
	{
		$this->db->where('username', $username);
		return $this->db->get('dokter')->row();
	}

	public function updateDokter($username, $data)
	{
		$this->db->where('username', $username);
		return $this->db->update('dokter', $data);
	}

	public function deleteDataDokter($username)
	{
		$this->db->where('username', $username);
		return $this->db->delete('dokter');
	}

}

/* End of file Dokter_Model.php */
/* Location: ./application/models/Dokter_Model.php */
