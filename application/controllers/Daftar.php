<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mpasien");
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('daftar');
		$this->load->view('footer');
	}

}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */