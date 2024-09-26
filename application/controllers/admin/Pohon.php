<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class pohon extends CI_Controller {

	
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

		$this->load->model("Mpohon");

		$data['pohon'] = $this->Mpohon->tampil_pohon();

		$this->load->view("admin/header");
		$this->load->view("admin/pohon",$data);
		$this->load->view("admin/footer");


	}
	function hapus($kode_pohon){

		$this->load->model("Mpohon");
			$this->Mpohon->hapus_pohon($kode_pohon);

			redirect('admin/pohon,refresh');

	}

	function tambah(){

		$input = $this->input->post();

		if ($input) {

			$this->load->model("Mpohon");
			$this->Mpohon->simpan_pohon($input);
			
		}

		$this->load->view("admin/header");
		$this->load->view("admin/pohon_tambah");
		$this->load->view("admin/footer");


	}

	function ubah($kode_pohon){
			$this->load->model("Mpohon");
			$data['pohon'] = $this->Mpohon->ambil_pohon($kode_pohon);

			$input = $this->input->post();

			if($input) {
					$this->Mpohon->ubah_pohon($input,$kode_pohon);
					redirect('admin/pohon');

			}

			$this->load->view("admin/header");
			$this->load->view("admin/pohon_ubah",$data);
			$this->load->view("admin/footer");



	}
}
















 ?>