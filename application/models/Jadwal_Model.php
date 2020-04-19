<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getJadwal()
	{
		return $this->db->get('jadwal')->result_array();
	}

	public function deleteJadwal($idJadwal)
	{
		$this->db->where('idJadwal', $idJadwal);
		return $this->db->delete('jadwal');
	}

}

/* End of file Jadwal_Model.php */
/* Location: ./application/models/Jadwal_Model.php */