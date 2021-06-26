<?php
    class User_m extends CI_Model{

        public function User_profile(){
            return $this->db->get_where('user',['nit'=>$_SESSION['nit']])->result_array();
        }
    }
?>