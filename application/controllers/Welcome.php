<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$data['title'] = "Dashboard - CodeIgniter";

		$this->load->view('pages/dashboard', $data);
	}
}
