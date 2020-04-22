<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_Model extends CI_Model {

	public function getJadwal()
	{
		$query = $this->db->query('SELECT `pasien`.`nama` as `namapasien`,`dokter`.`nama`, `jadwal`.`tanggal`, `jadwal`.`jam`, `jadwal`.`ruangan` FROM `jadwal` LEFT JOIN `pasien` ON `pasien`.`username` = `jadwal`.`username_pasien` LEFT JOIN `dokter` ON `dokter`.`username` = `jadwal`.`username_dokter`;');
		// return $this->db->get('jadwal')->result_array();

		return $query->result();
	}

	public function deleteJadwal($idJadwal)
	{
		$this->db->where('idJadwal', $idJadwal);
		return $this->db->delete('jadwal');
	}

	

}

/* End of file Jadwal_Model.php */
/* Location: ./application/models/Jadwal_Model.php */