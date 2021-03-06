<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        if($this->session->userdata('nit')){
            redirect('User/Dashboard_c');
        }else{
            $this->load->view('Login_v');
        }
    }

    public function SignUp(){
        $data['jabatan'] = $this->db->get('jabatan')->result_array();
        $this->load->view('Signup_v',$data);
    }

    public function Act_Login(){

        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]',[
            'min_length[6]' => 'Password too Short Min 6 character'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('Login_v');
        }else{
            $nit = $this->input->post('nit');
            $password = $this->input->post('password');
            $user = $this->db->get_where('user', ['nit'=>$nit])->row_array();
        if($user){
            if(password_verify($password,$user['password'])){
                $data = [
                    'nit' => $nit,
                    'nama' => $user['nama'],
                    'role' => $user['role'],
                    'isLogged' => TRUE
                ];
                $this->session->set_userdata($data);
                redirect('User/Dashboard_c');
            }else{
                // Email Password Salah
                $this->session->set_flashdata('msg','<script>Swal.fire("","sorry your username or password is wrong","error")</script>');
                
                redirect(base_url().'Login_c');
            }
        }else{
            // User Email Belum Terdaftar
            $this->session->set_flashdata('msg','<script>Swal.fire("","sorry your username not regis","error")</script>');
            redirect('Login_c');
        }

            
        }

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
                'status' => 'active',
                'role' => 'user'
            ];
            $this->db->insert('user', $data_create);
            $this->session->set_flashdata('msg-succcess','<script>Swal.fire("","SignUp Success","success")</script>');
            redirect('Login_c');

        }
    }

    // Logout
    public function Logout(){
        $this->session->sess_destroy();
        redirect('Login_c');
    }
}