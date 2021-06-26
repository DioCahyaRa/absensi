<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_c extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_m');
    }

    public function index(){
        $data['title'] = 'Profile';
        $data['user'] = $this->User_m->User_profile();
        $this->load->view('User/Head_v',$data);
        $this->load->view('User/Profile_v');
        $this->load->view('User/Footer_v');
    }
}