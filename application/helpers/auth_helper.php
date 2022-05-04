<?php 

    function permission() {
        $ci = get_instance();
        $loggeduser = $ci->session->userdata('logged_user');
        if(!$loggeduser) {
            $ci->session->set_flashdata('danger', 'Você precisa estar logado');
            redirect('login');
        }
        return $loggeduser;
    }
?>