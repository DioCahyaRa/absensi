<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_c extends MY_Controller {

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

    public function edit_profile(){
        $data_update = [
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'email' => $this->input->post('email')
        ];
        $nit = $this->input->post('nit');

        $this->db->where('nit', $nit);
        $this->db->update('user', $data_update);
        $this->session->set_flashdata('msg-update','<script>Swal.fire("","Successfull Update Profile","success")</script>');
        redirect('User/Profile_c');
    }
}