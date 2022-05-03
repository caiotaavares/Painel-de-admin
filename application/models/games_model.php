<?php

    class Games_model extends CI_Model {

        public function index()
        {
            return $this->db->get("tb_games")->result_array(); 
        }

        public function store($game)
        {
            /**
             * insert() insere ta tabela tb_games
             * o que foi passado como parâmetro em
             * $game
             */
            $this->db->insert("tb_games", $game);
        }

        public function show($id)
        {
            return $this->db->get_where("tb_games", array(
                "id" => $id
            ))->row_array();
        }

        public function update($id, $game)
        {
            $this->db->where("id", $id);
            $this->db->update("tb_games", $game);
        }

        public function destroy($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tb_games');
        }
    }
?>