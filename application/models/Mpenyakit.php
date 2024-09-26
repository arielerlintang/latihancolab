<?php 
defined ('BASEPATH') OR exit ('No direct script acces allowed');

class Mpenyakit extends CI_Model{

	function tampil_penyakit(){

		return $this->db->get("penyakit")->result_array();
	}

	function hapus_penyakit($kode_penyakit){

		$this->db->where("kode_penyakit",$kode_penyakit);
		$this->db->delete("penyakit");
	}

	function simpan_penyakit($input){
		$this->db->insert("penyakit",$input);
	}
	
	function ambil_penyakit($kode_penyakit){
		$this->db->where("kode_penyakit",$kode_penyakit);
		return $this->db->get("penyakit")->row_array();
	}

	function ubah_penyakit($input,$kode_penyakit){

		$this->db->where("kode_penyakit",$kode_penyakit);
		$this->db->update("penyakit",$input);
	}
	public function get_nama_penyakit($kode_penyakit)
	{
		$this->db->where('kode_penyakit', $kode_penyakit);
		$query = $this->db->get('penyakit');
		return $query->row()->nama_penyakit;
	}



}

?>