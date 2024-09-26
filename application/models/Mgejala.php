<?php 
defined ('BASEPATH') OR exit ('No direct script acces allowed');

class Mgejala extends CI_Model{

function tampil_gejala(){

	return $this->db->get("gejala")->result_array();
}
function detail_gejala($kode_gejala) {
	if (empty($kode_gejala)) {
		$this->db->order_by('gejala.kode_gejala', 'ASC');
	} else {
		$this->db->where('gejala.kode_gejala', $kode_gejala);
	}
	$this->db->join('gejala', 'pohon.kode_gejala = gejala.kode_gejala', 'left');
	return $this->db->get('pohon')->row_array();
}

function hapus_gejala($kode_gejala){

	$this->db->where("kode_gejala",$kode_gejala);
	$this->db->delete("gejala");
}

function simpan_gejala($input){
	$this->db->insert("gejala",$input);
}
 
function ambil_gejala($kode_gejala){
	$this->db->where("kode_gejala",$kode_gejala);
	return $this->db->get("gejala")->row_array();
}

function ubah_gejala($input,$kode_gejala){

	$this->db->where("kode_gejala",$kode_gejala);
	$this->db->update("gejala",$input);

}

}

 ?>