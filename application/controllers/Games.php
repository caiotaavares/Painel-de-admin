<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {
	
	public function index()
	{
		$this->load->model('games_model');

		$data['games'] = $this->games_model->index(); 
		$data['title'] = "Games - CodeIgniter";

		// print_r($data); exit;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/games', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
	}

    public function new()
    {
        $data['title'] = "Games - CodeIgniter";

		// print_r($data); exit;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-games', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }

    public function store()
    {
        $game = $_POST;
        $game['user-id'] = '1';

        $this->load->model('games_model');  
        // Importa de dentro de games_model o método/função store()
        $this->games_model->store($game);
        redirect("games");
    }

    public function edit($id)
    {
        $this->load->model("games_model");
        $data["game"] = $this->games_model->show($id);
        $data["title"] = "Games - CodeIgniter";

        // print '<pre>';
        // print_r($data); exit;
        // print '</pre>';

        $this->load->view('templates/header',  $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/form-games', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }

    public function update($id)
    {
        $this->load->model("games_model");
        $game = $_POST;
        $this->games_model->update($id, $game);
        redirect("games");
    }
}
