<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Periksa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mperiksa');
        if (empty($this->session->userdata('pasien'))) {
            $this->session->set_flashdata('pesan_gagal', 'Anda Harus Login');
            redirect('/', 'refresh');
        }
    }

    public function index($id_aturan = 0) {
        if ($this->input->post()) {
            
            $jawaban = $this->input->post('jawab');
            $kode_gejala = $this->input->post('kode_gejala');
            
            $this->Mperiksa->simpanJawaban($kode_gejala, $jawaban);
            
            $data = $this->Mperiksa->ambilPertanyaan($id_aturan, $jawaban);
            if (isset($data['pertanyaan'])) {
                $this->load->view('pasien/header');
                $this->load->view('pasien/periksa', $data);
                $this->load->view('pasien/footer');
            } else {
                // Display results
                $this->load->view('pasien/header');
                $this->load->view('pasien/hasil', $data);
                $this->load->view('pasien/footer');
            }
        } else {
            $data = $this->Mperiksa->pertanyaanPertama();
            $this->load->view('pasien/header');
            $this->load->view('pasien/periksa', $data);
            $this->load->view('pasien/footer');
        }
    }

    public function hasil() {
        $data = $this->Mperiksa->getHasilDiagnosis();
        $this->load->view('pasien/header');
        $this->load->view('pasien/hasil', $data);
        $this->load->view('pasien/footer');
    }
}
?>
