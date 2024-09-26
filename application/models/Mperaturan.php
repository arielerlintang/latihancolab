<?php 	

defined('BASEPATH') OR exit('No direct script acces allowed');

class Mperaturan extends CI_model {
	function tampil_peraturan(){
		
		return $this->db->get("peraturan")->result_array();

	}

	function simpan_peraturan($input){

		$this->db->insert("peraturan",$input);
	}
	function hapus_peraturan($id_peraturan){

		$this->db->where("id_peraturan",$id_peraturan);
		$this->db->delete("peraturan");
	}
	function ambil_peraturan($id_peraturan){

		$this->db->where("id_peraturan",$id_peraturan);
		return $this->db->get("peraturan")->row_array();
	}
		function ubah_peraturan($input,$id_peraturan){

		$this->db->where("id_peraturan",$id_peraturan);
		$this->db->update("peraturan",$input);
	}
}
