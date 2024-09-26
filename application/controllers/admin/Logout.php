<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin')) {
			$this->session->set_flashdata('pesan_gagal', 'Anda Harus Login');
			redirect('/login');
		}
	}
	function index()
	{

		unset($_SESSION['admin']);

		redirect('/','refresh');
		
	}
}
