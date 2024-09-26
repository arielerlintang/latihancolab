 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-6 offset-3">
 			
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">Tambah Pasien</h6></div>
 				<div class="card-body">
 					<form method="post">
 						<div class="mb-3">
 							<label>Username</label>
 							<input type="text" name="username_pasien" class="form-control" required>
 						</div>
 						<div class="mb-3">
 							<label>Password</label>
 							<input type="password" name="password_pasien" class="form-control" required>
 						</div>
 						<div class="mb-3">
 							<label>Nama</label>
 							<input type="text" name="nama_pasien" class= "form-control" required>
 						</div>
 						<div class="mb-3">
 							<label>Umur</label>
 							<input type="number" name="umur_pasien" class= "form-control" required>
 						</div>
 						<div class="mb-3">
 							<label>Telpon</label>
 							<input type="number" name="telepon_pasien" class= "form-control" required>
 						</div>
 						<div class="mb-3">
 							<label>Alamat</label>
 							<textarea class="form-control" name="alamat_pasien"></textarea>
 						</div>
 						<div class="mb-3">
 							<label>jenis kelamin</label>
 							<select name="jk_pasien" class="form-control">
 								<option value="">pilih</option>
 								<option value="laki-laki">laki-laki</option>
 								<option value="perempuan">Perempuan</option>
 							</select>
 						</div>
 						<button class="btn btn-primary">Simpan</button>
 					</form>	
 				</div>
 			</div>
 		</div>

 	</div>
 </section>