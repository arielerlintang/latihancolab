<section class = "container mt-5">
	<div class="row">
		<div class="col-6 offset-3">
			
			<div class="card">
				<div class="card-header bg-primary"><h6 class="text-white">Profil</h6></div>
				<div class="card-body">
					<form method="post">
						<div class="mb-3">
							<label>Username</label>
							<input type="text" name= "username_pasien" class="form-control" value="<?php echo $pasien['username_pasien'] ?>" required>
						</div>

						<div class="mb-3">
							<label>Password</label>
							<input type="password" name="password_pasien" class= "form-control" value="">
							<label class="text-danger"><i>Kosongkan password bila tidak diubah</i></label>
						</div>
						
						<div class="mb-3">
							<label>Nama</label>
							<input type="text" name="nama_pasien" class="form-control" value="<?php echo $pasien['nama_pasien'] ?>">
						</div>
						<div class="mb-3">
							<label>Telepon</label>
							<input type="text" name="telepon_pasien" class="form-control" value="<?php echo $pasien['telepon_pasien'] ?>">
						</div>
						<div class="mb-3">
							<label>Umur</label>
							<input type="text" name="umur_pasien" class="form-control" value="<?php echo $pasien['umur_pasien'] ?>">
						</div>
						<div class="mb-3">
							<label>jenis kelamin</label>
							<select class="form-control" name="jk_pasien">
								<option>pilih</option>
								<option value="laki-laki">laki-laki</option>
								<option value="perempuan">perempuan</option>
							</select>
						</div>
						<div class="mb-3">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat_pasien"><?php echo $pasien['alamat_pasien'] ?></textarea>
						</div>
						<button class="btn btn-primary">Ubah</button>
					</form>	
				</div>
			</div>
		</div>

	</div>
</section>