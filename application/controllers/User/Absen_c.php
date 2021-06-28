<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_c extends MY_Controller {

    public function __construct(){
        parent::__construct();
        Access_User();
        $this->load->library('form_validation');
        $this->load->model('User_m');
        $this->load->helper('date');
    }

    public function index(){
        $data['title'] = 'Absensi';
        date_default_timezone_set('Asia/Jakarta'); // Defined City For Timezone
        $time = (int)date('Hi',time());
        if($time > 0600 && $time <= 1200){
            $data['keterangan'] = "Jam Jaga 1";
        }
        if($time > 1200 && $time <= 1800){
            $data['keterangan'] = "Jam Jaga 2";
        }
        if($time > 1800 && $time <= 2329){
            $data['keterangan'] = "Jam Jaga 3";
        }
        if($time > 0000 && $time <= 0600){
            $data['keterangan'] = "Jam Jaga 4";
        }

        $today = date('Y-m-d',time());
        $data['absen_today'] = $this->User_m->Absen_today($today);

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
            'jam_masuk' => date("H:i",now('Asia/Jakarta')),
            'tanggal' => date("Y-m-d",now('Asia/Jakarta')),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->db->insert('absensi', $data_absen);
        $this->session->set_flashdata('msg-success','<script>Swal.fire("Success Absen","Semangat Bekerja","success")</script>');
        redirect('User/Absen_c');
    }

    public function Selesai_Absen(){
        date_default_timezone_set('Asia/Jakarta'); // Defined City For Timezone
        
        $data_absen = [
            'jam_keluar' => date("H:i",now('Asia/Jakarta')),
            'status' => 'success'
        ];
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('absensi',$data_absen);
        $this->session->set_flashdata('msg-update','<script>Swal.fire("","Anda telah menyelesaikan pekerjaan","success")</script>');
        redirect('User/Absen_c');
    }
}