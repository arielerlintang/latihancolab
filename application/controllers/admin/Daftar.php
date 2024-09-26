<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function index()
	{
		$input =$this->input->post();

		if ($input) {
			$this->load->model('Mpasien');
			$this->Mpasien->simpam_pasien($input);

			$this->session->set_flashdata('pesan_sukses', 'Berhasil Mendaftar, Silahkan Login');
			redirect('login','refresh')


		$this->load->view('header');
		$this->load->view('daftar');
		$this->load->view('footer');
		
	}
}
