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

    public function updateJadwal($id_jadwal)
    {
        foreach ($_POST as $key => $value) {
            $post[$key] = $value;
        }

        $data = [

            "nama" => $post['nama'],
            "tanggal" => $post['tanggal'],
            "jam" => $post['jam'],
            "ruangan" => $post['ruangan'],

        ];

        $valid['sukses'] = true;
        $this->Jadwal_Model->updateJadwal($id_jadwal, $data);

        echo json_encode($valid);

    }

}
