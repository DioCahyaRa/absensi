<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_absensi extends MY_Controller {

    public function __construct(){
        parent::__construct();
        Access_Admin();
        $this->load->model('User_m');
    }

    public function index(){
        $data['title'] = 'Data Absensi';
        $data['absensi'] = $this->db->get('absensi')->result_array();
        $this->load->view('User/Head_v',$data);
        $this->load->view('Admin/Data_absensi',$data);
        $this->load->view('User/Footer_v');
    }

    public function laporan_pdf(){
        $this->load->library('pdf');
        $per_tanggal = $this->input->post('per_tanggal');
        $sampai_tanggal = $this->input->post('sampai_tanggal');
        $data['pdf'] = $this->User_m->to_pdf($per_tanggal,$sampai_tanggal);
        $data['per_tanggal'] = $per_tanggal;
        $data['sampai_tanggal'] = $sampai_tanggal;
        $html = $this->load->view('Admin/Pdf_v', $data, true);
        $filename = 'report_'.time();
        $this->pdf->generate($html, $filename, true, 'A4', 'portrait');
    }
}