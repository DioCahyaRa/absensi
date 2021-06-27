<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_c extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_m');
        $this->load->helper('date');
    }

    public function index(){
        $data['title'] = 'Absensi';
        $data['absensi_u'] = $this->User_m->Absensi_user();
        $data['user'] = $this->User_m->User_profile();
        $this->load->view('User/Head_v',$data);
        $this->load->view('User/Absen_v');
        $this->load->view('User/Footer_v');
    }

    public function Create_absen(){
        date_default_timezone_set('Asia/Jakarta'); // Defined City For Timezone
        $data_absen = [
            'nama' => $this->input->post('nama'),
            'nit' => $this->input->post('nit'),
            'jam_masuk' => now('Asia/Jakarta'),
            'jam_masuk_format' => date("Y-m-d H:i:s",now('Asia/Jakarta'))
        ];
        $this->db->insert('absensi', $data_absen);
        redirect('User/Absen_c');
    }

    public function Selesai_Absen(){
        date_default_timezone_set('Asia/Jakarta'); // Defined City For Timezone
        $data_absen = [
            'jam_keluar' => now('Asia/Jakarta'),
            'jam_keluar_format' => date("Y-m-d H:i:s",now('Asia/Jakarta')),
            'status' => 'success'
        ];
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('absensi',$data_absen);
        redirect('User/Absen_c');
    }
}