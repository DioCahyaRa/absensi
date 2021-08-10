<?php
    class User_m extends CI_Model{

        public function User_profile(){
            return $this->db->get_where('user',['nit'=>$_SESSION['nit']])->result_array();
        }

        public function Absensi_user(){
            $this->db->select('*');
            $this->db->order_by('id','DESC');
            $this->db->from('absensi');
            $this->db->where('nit',$_SESSION['nit']);
            return $this->db->get()->result_array();
        }

        public function Absen_today($today){
            $this->db->count_all_results('absensi');
            $this->db->where('tanggal',$today);
            $this->db->where('nit',$_SESSION['nit']);
            $this->db->from('absensi');
            return $this->db->count_all_results();
        }

        public function to_pdf($per_tanggal,$sampai_tanggal){
            $this->db->where('tanggal >=', $per_tanggal);
            $this->db->where('tanggal <=', $sampai_tanggal);
            return $this->db->get('absensi')->result_array();
        }
        public function to_pdf_user(){
            return $this->db->get('user')->result_array();
        }

        public function count_admin(){
            $this->db->count_all_results('user');
            $this->db->where('role','admin');
            $this->db->from('user');
            return $this->db->count_all_results();
        }

        public function count_user(){
            $this->db->count_all_results('user');
            $this->db->where('role','user');
            $this->db->from('user');
            return $this->db->count_all_results();
        }

        public function count_jabatan(){
            $this->db->count_all_results('jabatan');
            $this->db->from('jabatan');
            return $this->db->count_all_results();
        }

        public function count_absensi(){
            $this->db->count_all_results('absensi');
            $this->db->where('status','success');
            $this->db->from('absensi');
            return $this->db->count_all_results();
        }

        public function count_absensi_user($session){
            $this->db->count_all_results('absensi');
            $this->db->where('status','success');
            $this->db->where('nit',$session['nit']);
            $this->db->from('absensi');
            return $this->db->count_all_results();
        }
    }
?>