<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_jabatan extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_m');

    }

    public function index(){
        $data['title'] = 'Data Jabatan';
        $data['jabatan'] = $this->db->get('jabatan')->result_array();
        $this->load->view('User/Head_v',$data);
        $this->load->view('Admin/Data_jabatan_v',$data);
        $this->load->view('User/Footer_v');
    }

    public function update_jabatan(){
        $id = $this->input->post('id');
        $data_update = [
            'nama_jabatan' => $this->input->post('nama_jabatan')
        ];

        $this->db->where('id',$id);
        $this->db->update('jabatan',$data_update);
        $this->session->set_flashdata('msg','<script>Swal.fire("","Success Update","success")</script>');
        redirect('Admin/Data_jabatan');
    }

    public function tambah_jabatan(){
        $data_insert = [
            'nama_jabatan' => $this->input->post('nama_jabatan')
        ];
        $this->db->insert('jabatan', $data_insert);
        $this->session->set_flashdata('msg','<script>Swal.fire("","Success Menambahkan Jabatan","success")</script>');
        redirect('Admin/Data_jabatan');
    }

    public function delete_jabatan(){
        $id = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->delete('jabatan');
        $this->session->set_flashdata('msg','<script>Swal.fire("","Success Hapus Jabatan","success")</script>');
        redirect('Admin/Data_jabatan');
    }
}