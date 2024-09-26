<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Penyakit extends CI_Controller {

	
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

		$this->load->model("Mpenyakit");

		$data['penyakit'] = $this->Mpenyakit->tampil_penyakit();

		$this->load->view("admin/header");
		$this->load->view("admin/penyakit",$data);
		$this->load->view("admin/footer");


	}
	function hapus($kode_penyakit){

		$this->load->model("Mpenyakit");
		$this->Mpenyakit->hapus_penyakit($kode_penyakit);

		redirect('admin/penyakit,refresh');

	}

	function tambah(){

		$input = $this->input->post();

		if ($input) {

			$this->load->model("Mpenyakit");
			$this->Mpenyakit->simpan_penyakit($input);
			redirect('admin/penyakit');
		}

		$this->load->view("admin/header");
		$this->load->view("admin/penyakit_tambah");
		$this->load->view("admin/footer");


	}

	function ubah($kode_penyakit){
		$this->load->model("Mpenyakit");
		$data['penyakit'] = $this->Mpenyakit->ambil_penyakit($kode_penyakit);

		$input = $this->input->post();
		if($input) {

			echo "<pre>";
			print_r ($input);
			echo "</pre>";
			exit();
			$this->Mpenyakit->ubah_penyakit($input,$kode_penyakit);
			redirect('admin/penyakit');
		}

		$this->load->view("admin/header");
		$this->load->view("admin/penyakit_ubah",$data);
		$this->load->view("admin/footer");



	}
}
















?>