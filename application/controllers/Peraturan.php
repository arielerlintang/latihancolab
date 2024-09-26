<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class peraturan extends CI_Controller{

	function index()
{

	$this->load->model('Mperaturan");
	$data['peraturan']=$this->Mperaturan-tampil_peraturan();


	$this->load->view("admin/header");
	$this->load->view("admin/peraturan",$data);
	$this->load->view("admin/footer")

}
}

 ?>