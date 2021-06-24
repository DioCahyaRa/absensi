<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_c extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('User/Head_v');
        $this->load->view('User/Dashboard_v');
        $this->load->view('User/Footer_v');
    }
}