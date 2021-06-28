<?php
    class User_m extends CI_Model{

        public function User_profile(){
            return $this->db->get_where('user',['nit'=>$_SESSION['nit']])->result_array();
        }

        public function Absensi_user(){
            $this->db->select('*');
            $this->db->from('absensi');
            $this->db->where('nit',$_SESSION['nit']);
            return $this->db->get()->result_array();
        }

        public function Absen_today($today){
            $this->db->where('tanggal',$today);
            $this->db->where('nit',$_SESSION['nit']);
            return $this->db->get('absensi')->result_array();
        }

        public function to_pdf($per_tanggal,$sampai_tanggal){
            $this->db->where('tanggal >=', $per_tanggal);
            $this->db->where('tanggal <=', $sampai_tanggal);
            return $this->db->get('absensi')->result_array();
        }
    }
?>