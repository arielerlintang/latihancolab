 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		
        if (empty($this->session->userdata('pasien'))) {

            $this->session->set_flashdata('pesan_gagal', 'Anda Harus Login');
            redirect('/','refresh');
        }
		
	}
	function index()
	{

			


		$this->load->view("pasien/header");
		$this->load->view("pasien/dashboard");
		$this->load->view("pasien/footer");
		
	}

}

?>