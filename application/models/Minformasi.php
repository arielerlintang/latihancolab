<?php 
defined ('BASEPATH') OR exit ('No direct script acces allowed');

class Minformasi extends CI_Model{

	function tampil_informasi(){

		return $this->db->get("informasi")->result_array();
	}

	function hapus_informasi($id_informasi){

		$this->db->where("id_informasi",$id_informasi);
		$this->db->delete("informasi");
	}

	function simpan_informasi($input){

		$config = array(
			'upload_path' => "./assets/informasi/",
			'allowed_types' => "jpg|png|jpeg|gif",
			//'max_size' => "1024000", // file size , here it is 1 MB(1024 Kb)
		);
		$this->load->library('upload');

		$this->upload->initialize($config);

		$ngupload = $this->upload->do_upload('foto');
		if ($ngupload) {

			$input['foto'] = $this->upload->data('file_name');

		}

		$this->db->insert("informasi",$input);
	}
	
	function ambil_informasi($id_informasi){
		$this->db->where("id_informasi",$id_informasi);
		return $this->db->get("informasi")->row_array();
	}

	function ubah_informasi($input,$id_informasi){

		
		$config = array(
			'upload_path' => "./assets/informasi/",
			'allowed_types' => "jpg|png|jpeg|gif",
			//'max_size' => "1024000", // file size , here it is 1 MB(1024 Kb)
		);
		$this->load->library('upload');

		$this->upload->initialize($config);

		$ngupload = $this->upload->do_upload('foto');
		if ($ngupload) {

			$input['foto'] = $this->upload->data('file_name');

		}

		$this->db->where("id_informasi",$id_informasi);
		$this->db->update("informasi",$input);
	}

}

?>