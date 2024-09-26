<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Peraturan extends CI_controller{

public function __construct()
{
		parent::__construct();
		$this->load->model("Mpenyakit");
		$this->load->model("Mgejala");
		$this->load->model("Mperaturan");


}
	function index()
	{
		$this->load->model("Mperaturan");
		$data['peraturan'] = $this->Mperaturan->tampil_peraturan();


		$this->load->view("admin/header");
		$this->load->view("admin/peraturan",$data);
		$this->load->view("admin/footer");

	}
	function tambah(){
		$data['penyakit']= $this->Mpenyakit->tampil_penyakit();
		$data['gejala']= $this->Mgejala->tampil_gejala();

		$input = $this->input->post();

		if ($input) {
			$this->Mperaturan->simpan_peraturan($input);

			$this->session->set_flashdata('pesan_sukses', 'Berhasil tersimpan');
			redirect('admin/peraturan','refresh');
		}
		$this->load->view("admin/header");
		$this->load->view("admin/peraturan_tambah",$data);
		$this->load->view("admin/footer");


	}
	function ubah($id_peraturan){
		$data['penyakit']= $this->Mpenyakit->tampil_penyakit();
		$data['gejala']= $this->Mgejala->tampil_gejala();
		$data['peraturan']= $this->Mperaturan->ambil_peraturan($id_peraturan);

		$input = $this->input->post();

		if ($input) {
			$this->Mperaturan->ubah_peraturan($input,$id_peraturan);

			$this->session->set_flashdata('pesan_sukses', 'Berhasil tersimpan');
			redirect('admin/peraturan','refresh');
		}
		$this->load->view("admin/header");
		$this->load->view("admin/peraturan_ubah",$data);
		$this->load->view("admin/footer");


	}

	function hapus($id_peraturan){

			$this->Mperaturan->hapus_peraturan($id_peraturan);

			$this->session->set_flashdata('pesan_sukses', 'Berhasil tehapus');
			redirect('admin/peraturan','refresh');
		

	}
	


}


 ?>