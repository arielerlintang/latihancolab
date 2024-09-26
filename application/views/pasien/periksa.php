<!-- application/views/pasien/periksa.php -->
<div class="container pt-4">
    <div class="card">
        <div class="card-header bg-info-subtle">
            <h6>Pemeriksaan</h6>
        </div>
        <div class="card-body">
            <section class="text-center">
                <form method="post">
                    <h4 class="mb-5">Apakah Anda Mengalami <?php echo $pertanyaan['nama_gejala']."   ".$pertanyaan['kode_gejala']; ?>?</h4>
                    <input type="hidden" name="kode_gejala" value="<?php echo $pertanyaan['kode_gejala']; ?>">
                    <button type="submit" name="jawab" value="ya" class="btn btn-success w-25">Ya</button>
                    <button type="submit" name="jawab" value="tidak" class="btn btn-danger w-25">Tidak</button>
                    <a href="<?php echo base_url('pasien/logout/reset') ?>" class="btn btn-warning mt-3">Reset</a>
                </form>
            </section>
        </div>
    </div>
</div>
