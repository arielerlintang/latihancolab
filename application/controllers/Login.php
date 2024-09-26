<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function index()
	{
		$input =$this->input->post();

		if ($input) {
			$this->load->model('Mlogin');
			$hasil_admin = $this->Mlogin->cek_user($input);
			$hasil_pasien = $this->Mlogin->cek_pasien($input);

			if ($hasil_admin=="sukses") {

				redirect('admin/dashboard','refresh');
			}
			elseif ($hasil_pasien=="sukses") {
				
				redirect('pasien/dashboard','refresh');

			}
			else{

				redirect('login','refresh');

			}

		}

		$this->load->view('login');
		
	}
}
