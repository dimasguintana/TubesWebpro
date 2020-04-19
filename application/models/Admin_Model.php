<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	public function getAdmin()
	{
		return $this->db->get('admin')->result_array();
	}

}

/* End of file Admin_Model.php */
/* Location: ./application/models/Admin_Model.php */