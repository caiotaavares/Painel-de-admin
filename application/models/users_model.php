<?php 

    class Users_model extends CI_Model {

        // Insere $user no db
        public function store($user)
        {
            $this->db->insert("tb_users", $user);
        }
    }
?>