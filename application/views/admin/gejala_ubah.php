 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-6 offset-3">
 			
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">Ubah Gejala</h6></div>
 				<div class="card-body">
 					<form method="post">
 					<div class="mb-3">
 						<label>Kode Gejala</label>
 						<input type="text" name="kode_gejala" class="form-control" value="<?php echo $gejala['kode_gejala'] ?>" readonly>
 	 			</div>
 				<div class="mb-3">
 					<label>Nama Gejala</label>
 					<input type="text" name="nama_gejala" class= "form-control" value="<?php echo $gejala['nama_gejala'] ?>" required>
 				</div>
 				</div>
 				<button class="btn btn-primary">Simpan</button>
 			</form>	
 		</div>
 	</div>
</div>

</div>
 </section>