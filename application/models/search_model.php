<?php

    class Search_model extends CI_Model
    {

        public function db_search($data) {

            if (empty($data)) {
                return array();
            }

            $data = $this->input->post('busca');
            $this->db->like('name', $data);

            return $this->db->get('tb_games')->result_array();
        }
    }
?>