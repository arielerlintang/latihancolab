<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Informasi extends CI_Controller {

	
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

		$this->load->model("Minformasi");

		$data['informasi'] = $this->Minformasi->tampil_informasi();

		$this->load->view("admin/header");
		$this->load->view("admin/informasi",$data);
		$this->load->view("admin/footer");


	}
	function hapus($id_informasi){

		$this->load->model("Minformasi");
		$this->Minformasi->hapus_informasi($id_informasi);

		redirect('admin/informasi,refresh');

	}

	function tambah(){

		$input = $this->input->post();

		if ($input) {

			$this->load->model("Minformasi");
			$this->Minformasi->simpan_informasi($input);
			redirect('admin/informasi');
		}

		$this->load->view("admin/header");
		$this->load->view("admin/informasi_tambah");
		$this->load->view("admin/footer");


	}

	function ubah($id_informasi){
		
		$this->load->model("Minformasi");
		$data['informasi'] = $this->Minformasi->ambil_informasi($id_informasi);

		$input = $this->input->post();

		if($input) {
			$this->Minformasi->ubah_informasi($input,$id_informasi);
			redirect('admin/informasi');

		}

		$this->load->view("admin/header");
		$this->load->view("admin/informasi_ubah",$data);
		$this->load->view("admin/footer");



	}
}
















?>