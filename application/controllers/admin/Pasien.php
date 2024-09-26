<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Pasien extends CI_Controller {

	
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

		$this->load->model("Mpasien");

		$data['pasien'] = $this->Mpasien->tampil_pasien();

		$this->load->view("admin/header");
		$this->load->view("admin/pasien",$data);
		$this->load->view("admin/footer");



	}
	function hapus($kode_pasien){

		$this->load->model("Mpasien");
		$this->Mpasien->hapus_pasien($kode_pasien);

		redirect('admin/pasien','refresh');

	}

	function tambah(){

		$input = $this->input->post();

		if ($input) {

			$this->load->model("Mpasien");
			$this->Mpasien->simpan_pasien($input);
			$this->session->set_flashdata('pesan_sukses', 'Berhasil tersimpan');
			redirect('admin/pasien');
		}

		$this->load->view("admin/header");
		$this->load->view("admin/pasien_tambah");
		$this->load->view("admin/footer");


	}

	function ubah($kode_pasien){
		$this->load->model("Mpasien");
		$data['pasien'] = $this->Mpasien->ambil_pasien($kode_pasien);

		$input = $this->input->post();

		if($input) {
			$this->Mpasien->ubah_pasien($input,$kode_pasien);
			redirect('admin/pasien');

		}

		$this->load->view("admin/header");
		$this->load->view("admin/pasien_ubah",$data);
		$this->load->view("admin/footer");

	}


}













?>