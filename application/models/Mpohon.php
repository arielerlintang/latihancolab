<?php 
defined ('BASEPATH') OR exit ('No direct script acces allowed');

class Mpohon extends CI_Model{

function tampil_pohon(){

	return $this->db->get("pohon")->result_array();
}

function hapus_pohon($kode_pohon){

	$this->db->where("kode_pohon",$kode_pohon);
	$this->db->delete("pohon");
}

function simpan_pohon($input){
	$this->db->insert("pohon",$input);
}
 
function ambil_pohon($kode_pohon){
	$this->db->where("kode_pohon",$kode_pohon);
	return $this->db->get("pohon")->row_array();
}

function ubah_pohon($input,$kode_pohon){

	$this->db->where("kode_pohon",$kode_pohon);
	$this->db->update("pohon",$input);
}

}

 ?>