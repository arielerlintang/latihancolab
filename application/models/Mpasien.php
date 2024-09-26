<?php 
defined ('BASEPATH') OR exit ('No direct script acces allowed');

class Mpasien extends CI_Model{
	function tampil_pasien(){
		return $this->db->get("pasien")->result_array();
	}
	function simpan_pasien($input){
		$pe = sha1($input['password_pasien']);
		$input['password_pasien'] = $pe;
		$this->db->insert("pasien",$input);

	}
	function ambil_pasien($id_pasien){
		$this->db->where("id_pasien",$id_pasien);
		return $this->db->get("pasien")->row_array();
	}
	function ubah_pasien($id_pasien,$input){
		if ($input['password_pasien']) {
			$pe = sha1($input['password_pasien']);
			$input['password_pasien'] = $pe;
		}
		$this->db->where('id_pasien',$id_pasien);
		$this->db->update('pasien',$input);
	}
	function hapus_pasien($id_pasien){
		$this->db->where("id_pasien",$id_pasien);
		$this->db->delete("pasien");
	}
}
?>