<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }
	
	public function index()
	{
		$data['title'] = "Signup - CodeIgniter";
		$this->load->view('pages/signup', $data);
	}

	public function store()
	{
		$user = array(
			"name" => $this->input->post("name"),
			"country" => $_POST["country"], 
			"email" => $_POST["email"],
			"password" => md5($_POST["password"])
		);

		$this->users_model->store($user);
		redirect("login");
	}
}
