<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

	function cek_user($input){

		$pe = sha1($input['password']);

		$this->db->where('username_admin',$input
			['username']);
		$this->db->where('password_admin',$pe);
		$admin = $this->db->get('admin')->row_array();

		if ($admin) {

			$this->session->set_userdata('admin',$admin);
			return "sukses";


		}
		else{

			return "gagal";
		}

	}
	function cek_pasien($input){

		$pe = sha1($input['password']);

		$this->db->where('username_pasien',$input
			['username']);
		$this->db->where('password_pasien',$pe);
		$pasien = $this->db->get('pasien')->row_array();

		if ($pasien) {

			$this->session->set_userdata('pasien',$pasien);
			return "sukses";


		}
		else{

			return "gagal";
		}

	}
}
?>


