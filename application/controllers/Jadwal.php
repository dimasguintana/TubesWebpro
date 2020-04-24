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


    public function tambahJadwal(){
        foreach ($_POST as $key => $value) {
            $d[$key] = $value;
        }
        $data = [
            "username_dokter" => $d['dokterJ'],
            "username_admin" => $d['adminJ'],
            "tanggal" => $d['tanggalJ'],
            "jam" => $d['jamJ'],
            "ruangan" => "Ruangan " . $this->Jadwal_Model->getNamaDokter($d['dokterJ'])
		];
		
        $this->Jadwal_Model->tambahDataJadwal($data);
        $insert["cek"] = true;
        echo json_encode($insert);
    }

    public function tambahJadwalPasien()
    {
        $data = [
            "username_pasien" => $this->session->userdata('username')
        ];

        $this->Jadwal_Model->updateJadwal($this->input->post('sub_category', true), $data);

        $content['main_view'] = 'Cari_Jadwal';
        $this->load->view('Halaman', $content);
    }

    public function getJadwalById($id_jadwal)
    {
        $data = $this->Jadwal_Model->getjadwalById($id_jadwal);

        echo json_encode($data);
    }

    public function getJadwalByDokter2()
    {
        $data = $this->Jadwal_Model->getJadwalByDokter2();

        echo json_encode($data);
    }

    public function updateJadwal($id_jadwal)
    {
        foreach ($_POST as $key => $value) {
            $post[$key] = $value;
        }

        $data = [
            "tanggal" => $post['tanggalJ'],
            "jam" => $post['jamJ']
            
        ];

        $kesuksesan['sukses'] = true;
        $this->Jadwal_Model->updateJadwal($id_jadwal, $data);

        echo json_encode($kesuksesan);
    }

}
