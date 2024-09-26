<!-- application/views/pasien/hasil.php -->
<div class="container pt-4">
    <div class="card">
        <div class="card-header bg-success-subtle">
            <h6>Hasil Diagnosa</h6>
        </div>
        <div class="card-body">
            <section class="text-center">
                <h4 class="mb-5">Hasil Pemeriksaan Anda</h4>
                <p>Penyakit yang terdiagnosa: <strong><?php echo $penyakit['nama_penyakit']; ?></strong></p>
                <p>Persentase Kepastian: <strong><?php echo number_format($penyakit['persen'], 2); ?>%</strong></p>
                <p>Solusi yang disarankan: <?php echo $penyakit['solusi']; ?></p>
                <a href="<?php echo site_url('pasien/periksa'); ?>" class="btn btn-primary mt-4">Periksa Kembali</a>
            </section>
        </div>
    </div>
</div>
