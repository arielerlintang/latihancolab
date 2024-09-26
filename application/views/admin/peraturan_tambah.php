<section class="container mt-5">
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-header bg-primary"><h6 class="text-white">Tambah Peraturan</h6></div>
				<div class="card-body">
					<form method="post">
						
						<div class="mb-3">
							<label>Kode gejala Parent</label>
							<select name="kode_gejala_parent" class="form-control">
								<option value="">pilih</option>
								<?php foreach ($gejala as $key => $value): ?>
									<option value="<?php echo $value['kode_gejala'] ?>"><?php echo $value['kode_gejala'] ?><?php echo $value['nama_gejala'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="mb-3">
							<label>Kode gejala Pertanyaan</label>
							<select name="kode_gejala_pertanyaan" class="form-control">
								<option value="">pilih</option>
								<?php foreach ($gejala as $key => $value): ?>
									<option value="<?php echo $value['kode_gejala'] ?>"><?php echo $value['kode_gejala'] ?><?php echo $value['nama_gejala'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="mb-3">
							<label>Kode gejala Ya</label>
							<select name="kode_gejala_ya" class="form-control">
								<option value="">pilih</option>
								<?php foreach ($gejala as $key => $value): ?>
									<option value="<?php echo $value['kode_gejala'] ?>"><?php echo $value['kode_gejala'] ?><?php echo $value['nama_gejala'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="mb-3">
							<label>Kode gejala Tidak</label>
							<select name="kode_gejala_tidak" class="form-control">
								<option value="">pilih</option>
								<?php foreach ($gejala as $key => $value): ?>
									<option value="<?php echo $value['kode_gejala'] ?>"><?php echo $value['kode_gejala'] ?><?php echo $value['nama_gejala'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="mb-3">
							<label>Kode Penyakit</label>
							<select name="kode_penyakit" class="form-control">
								<option value="">pilih</option>
								<?php foreach ($penyakit as $key => $value): ?>
									<option value="<?php echo $value['kode_penyakit'] ?>"><?php echo $value['kode_penyakit'] ?><?php echo $value['nama_penyakit'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<button class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>