<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getDokter()
	{
		return $this->db->get('dokter')->result_array();
	}

	public function deleteDokter($idDokter)
	{
		$this->db->where('idDokter', $idDokter);
		return $this->db->delete('dokter');
	}

}

/* End of file Dokter_Model.php */
/* Location: ./application/models/Dokter_Model.php */