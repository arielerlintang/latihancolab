<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Riwayat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        if (empty($this->session->userdata('pasien'))) {
            $this->session->set_flashdata('pesan_gagal', 'Anda Harus Login');
            redirect('/','refresh');
        }
        $this->load->model("Mperiksa");
	}
	public function index()
	{	

		$pasien = $this->session->userdata("pasien");

		$data['riwayat'] =  $this->Mperiksa->tampil_riwayat($id_pasien);
		$this->load->view('pasien/header');	
		$this->load->view('pasien/riwayat',$data);	
		$this->load->view('pasien/footer');	
	}



}

/* End of file Riwayat.php */
/* Location: ./application/controllers/pasien/Riwayat.php */