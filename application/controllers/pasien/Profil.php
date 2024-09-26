 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Profil extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		
        if (empty($this->session->userdata('pasien'))) {

            $this->session->set_flashdata('pesan_gagal', 'Anda Harus Login');
            redirect('/','refresh');
        }
 		$this->load->model("Mpasien");
 	}
 	function index()
 	{

 		$id_pasien = $_SESSION['pasien']['id_pasien'];
 		$data['pasien']= $this->Mpasien->ambil_pasien($id_pasien);

 		
 		$input = $this->input->post();
 		if ($input) {

 			$this->Mpasien->ubah_pasien($id_pasien,$input);
 			$this->session->set_flashdata('pesan_sukses', 'Data Profil Berhasil Terubah');
 			redirect('pasien/profil','refresh');
 		}


 		$this->load->view("pasien/header");
 		$this->load->view("pasien/profil",$data);
 		$this->load->view("pasien/footer");

 	}

 }

 /* End of file Profil.php */
/* Location: ./application/controllers/pasien/Profil.php */