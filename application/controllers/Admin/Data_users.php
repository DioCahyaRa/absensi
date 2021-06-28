<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_users extends MY_Controller {

    public function __construct(){
        parent::__construct();
        Access_Admin();
        $this->load->model('User_m');
    }

    public function index(){
        $data['title'] = 'Data Users';
        $data['user'] = $this->db->get('user')->result_array();
        $this->load->view('User/Head_v',$data);
        $this->load->view('Admin/Data_users_v');
        $this->load->view('User/Footer_v');
    }

    public function laporan_pdf(){
        $this->load->library('pdf');
        $data['pdf'] = $this->User_m->to_pdf_user();
        $html = $this->load->view('Admin/Pdf_user_v', $data, true);
        $filename = 'report_'.time();
        $this->pdf->generate($html, $filename, true, 'A4', 'portrait');
    }
}