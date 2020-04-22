<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_Model');
    }

    public function index()
    {
		$content['main_view'] = 'Jadwal_View';
		$content['title'] = 'Data Jadwal';

		$this->load->view('Halaman', $content);
    }

    public function allJadwal()
    {
        $data = $this->Jadwal_Model->getJadwal();
        echo json_encode($data);
    }

    public function deleteJadwal($id_jadwal){
        $this->Jadwal_Model->deleteJadwal($id_jadwal);
    }

    

}
