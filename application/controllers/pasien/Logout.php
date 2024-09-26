
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	 function index()
	{
		unset($_SESSION);
		$this->session->unset_userdata('pasien');
		redirect('/','refresh');
		
	}
	function reset()
	{
		unset($_SESSION['jawaban']);
		$this->session->unset_userdata('jawaban');
		redirect('pasien/periksa','refresh');
		
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/pasien/Logout.php */