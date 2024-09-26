<?php
class Mperiksa extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function simpanJawaban($kode_gejala, $jawaban) {
        $this->session->set_userdata("gejala[$kode_gejala]", $jawaban);

        // Save the answer in session
        $_SESSION['gejala'][$kode_gejala] = $jawaban;
    }

    public function pertanyaanPertama() {
        $this->db->select('*');
        $this->db->from('aturan');
        $this->db->join('gejala', 'aturan.kode_gejala_pertanyaan = gejala.kode_gejala');
        $this->db->where('aturan.kode_gejala_parent', 'G001');
        $query = $this->db->get();
        $data['pertanyaan'] = $query->row_array();
        return $data;
    }

    public function ambilPertanyaan($id_aturan, $jawaban) {
        // Fetch next question or result based on answer
        $this->db->where('id_aturan', $id_aturan);
        $aturan = $this->db->get('aturan')->row_array();
        
        if ($jawaban == 'ya') {
            $id_gejala_pertanyaan = $aturan['kode_gejala_ya'];
            $kode_penyakit = $aturan['kode_penyakit'];
        } else {
            $id_gejala_pertanyaan = $aturan['kode_gejala_tidak'];
            $kode_penyakit = "";
        }

        if (!empty($id_gejala_pertanyaan)) {
            $this->db->select('*');
            $this->db->from('aturan');
            $this->db->join('gejala', 'aturan.kode_gejala_pertanyaan = gejala.kode_gejala');
            $this->db->where('aturan.kode_gejala_parent', $id_gejala_pertanyaan);
            $query = $this->db->get();
            $data['pertanyaan'] = $query->row_array();
        } else if (!empty($kode_penyakit)) {
            $this->db->where('kode_penyakit', $kode_penyakit);
            $data['penyakit'] = $this->db->get('penyakit')->row_array();
            $data['penyakit']['persen'] = 100; 
        } else {
            $data['hitungkerusakan'] = $this->hitunganKerusakan();
        }
        return $data;
    }

    private function hitunganKerusakan() {
        
    }

    public function getHasilDiagnosis() {
        
        $data['penyakit'] = $this->session->userdata('penyakit');
        $data['penyakit']['persen'] = 100; 

        
        $this->db->insert('riwayat_diagnosis', [
            'id_pasien' => $this->session->userdata('id_pasien'),
            'tanggal_diagnosis' => date('Y-m-d'),
            'kode_penyakit' => $data['penyakit']['kode_penyakit'],
            'persen' => $data['penyakit']['persen']
        ]);

        return $data;
    }
}
?>
