<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	
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
		$id_admin = $_SESSION['admin']['id_admin'];

		$this->load->model("Mprofil"); 

		$data['admin'] = $this->Mprofil->tampil_admin($id_admin);

		$input = $this->input->post();

		if ($input) {

			$this->Mprofil->ubah_profil($input,$id_admin);

			redirect('admin/profil','refresh');

		}
		
		$this->load->view('admin/header');
		$this->load->view('admin/profil',$data);
		$this->load->view('admin/footer');
		
	}
}
