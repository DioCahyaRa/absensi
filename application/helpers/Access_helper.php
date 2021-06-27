<?php

function Access_User(){
    $ci = get_instance();
    if($ci->session->userdata('role') != "user") {
        redirect('User/Dashboard_c');
    }
}

?>