<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Minformasi");
	}
	public function index()
	{
		$data['informasi'] = $this->Minformasi->tampil_informasi();
		$this->load->view("header");
		$this->load->view("informasi",$data);
		$this->load->view("footer");
	}
	function detail($id){
		$data['informasi'] = $this->Minformasi->ambil_informasi($id);
		$this->load->view("header");
		$this->load->view("informasi_detail",$data);
		$this->load->view("footer");
	}

}

/* End of file Informasi.php */
/* Location: ./application/controllers/Informasi.php */