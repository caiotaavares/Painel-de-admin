<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        permission();
        $this->load->model('users_model');
    }

	public function index()
	{

        $data['name'] = $this->session->set_userdata('name');

		$data['title'] = "Perfil - CodeIgniter";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
		$this->load->view('pages/perfil', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
	}
}
