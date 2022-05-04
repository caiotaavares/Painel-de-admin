<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        permission();
        $this->load->model('users_model');
    }
	
	public function index()
	{
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
  
        // Importa de dentro de games_model o método/função store()
        $this->games_model->store($game);
        redirect("games");
    }

    public function edit($id)
    {
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
        $game = $_POST;
        $this->games_model->update($id, $game);
        redirect("games");
    }

    public function delete($id)
    {
        $this->games_model->destroy($id);
        redirect('games');
    }
}
