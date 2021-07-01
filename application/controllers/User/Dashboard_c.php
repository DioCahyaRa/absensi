<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_c extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_m');

    }

    public function index(){
        $session = $_SESSION;
        $data['title'] = 'Dashboard';
        $data['data_admin'] = $this->User_m->count_admin();
        $data['data_user'] = $this->User_m->count_user();
        $data['data_jabatan'] = $this->User_m->count_jabatan();
        $data['data_absensi'] = $this->User_m->count_absensi();
        $data['data_absensi_user'] = $this->User_m->count_absensi_user($session);
        $this->load->view('User/Head_v',$data);
        $this->load->view('User/Dashboard_v',$data);
        $this->load->view('User/Footer_v');
    }
}