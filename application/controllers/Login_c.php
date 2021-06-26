<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('Login_v');
    }

    public function SignUp(){
        $this->load->view('Signup_v');
    }

    public function SignUpAct(){
        $this->form_validation->set_rules('nit', 'Nit', 'trim|is_unique[user.nit]');
        $this->form_validation->set_rules('email', 'Email', 'trim|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]',[
            'min_length[6]' => 'Password too Short Min 6 character'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('Signup_v');
        }else{
            $data_create = [
                'nama' => $this->input->post('nama'),
                'nit' => $this->input->post('nit'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jabatan' => $this->input->post('jabatan'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'tgl_masuk' => $this->input->post('tgl_masuk'),
                'status' => 'active',
                'role' => 'admin'
            ];
            $this->db->insert('user', $data_create);
            $this->session->set_flashdata('msg-succcess','<script>Swal.fire("","SignUp Success","success")</script>');
            redirect('Login_c');

        }
    }
}