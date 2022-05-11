<?php

    class Games_model extends CI_Model {

        public function index()
        {
            return $this->db->get("tb_games")->result_array(); 
        }

        // Cadastra jogos no db
        public function store($game)
        {
            /**
             * insert() insere ta tabela tb_games
             * o que foi passado como parâmetro em
             * $game
             */
            $this->db->insert("tb_games", $game);
        }

        // Busca jogos cadastrados no db
        public function show($id)
        {
            return $this->db->get_where("tb_games", array(
                "id" => $id
            ))->row_array();
        }

        // Atualiza os jogos do db
        public function update($id, $game)
        {
            $this->db->where("id", $id);
            $this->db->update("tb_games", $game);
        }

        // Exclui jogos do db
        public function destroy($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('tb_games');
        }
    }
?>