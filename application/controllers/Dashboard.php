<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        permission();
        $this->load->model('games_model');
		$this->load->model('search_model');
	}
	
	public function index()
	{
		// $this->load->model('games_model');

		$data['games'] = $this->games_model->index(); 
		$data['title'] = "Dashboard - CodeIgniter";

		// print '<pre>';
		// print_r($_SESSION);
		// print '</pre>';
		// exit;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/dashboard', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
	}

	public function search()
	{
		$this->load->model('search_model');

		$data['title'] = 'Resultado de pesquisar por *'. $_POST['busca'] .'*';
		$data['result'] = $this->search_model->db_search($_POST);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/resultado', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
	}
}
