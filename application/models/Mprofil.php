<?php 
defined ('BASEPATH') OR exit('No direct script acces allowed');

class Mprofil extends CI_Model{

	function tampil_admin($id_admin){

		$this->db->where("id_admin",$id_admin);
		$admin = $this->db->get("admin")->row_array();
 	
 	  return $admin;
	}

	function ubah_profil($input,$id_admin){

		if (empty($input['password_admin'])) {

			unset($input['password_admin']);
		}

		else{

			$pe = sha1($input['password_admin']);

			$input['password_admin'] = $pe;

		}

		$this->db->where("id_admin",$id_admin);
		$this->db->update("admin",$input);

		}
	} 



 ?>