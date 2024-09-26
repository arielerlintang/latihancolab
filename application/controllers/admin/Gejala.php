<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Gejala extends CI_Controller {

	
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

		$this->load->model("Mgejala");

		$data['gejala'] = $this->Mgejala->tampil_gejala();

		$this->load->view("admin/header");
		$this->load->view("admin/gejala",$data);
		$this->load->view("admin/footer");



	}
	function hapus($kode_gejala){

		$this->load->model("Mgejala");
		$this->Mgejala->hapus_gejala($kode_gejala);

		redirect('admin/gejala','refresh');

	}

	function tambah(){

		$input = $this->input->post();

		if ($input) {

			$this->load->model("Mgejala");
			$this->Mgejala->simpan_gejala($input);
			redirect('admin/gejala');
		}

		$this->load->view("admin/header");
		$this->load->view("admin/gejala_tambah");
		$this->load->view("admin/footer");


	}

	function ubah($kode_gejala){
		$this->load->model("Mgejala");
		$data['gejala'] = $this->Mgejala->ambil_gejala($kode_gejala);

		$input = $this->input->post();

		if($input) {
			$this->Mgejala->ubah_gejala($input,$kode_gejala);
			redirect('admin/gejala');

		}

		$this->load->view("admin/header");
		$this->load->view("admin/gejala_ubah",$data);
		$this->load->view("admin/footer");

	}


}













?>