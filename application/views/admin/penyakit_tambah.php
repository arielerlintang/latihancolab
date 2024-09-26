 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-6 offset-3">
 			
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">Tambah Penyakit</h6></div>
 				<div class="card-body">
 					<form method="post">
 						<div class="mb-3">
 							<label>Kode Penyakit</label>
 							<input type="text" name= "kode_penyakit" class="form-control" maxlength="5" required>
 						</div>
 						<div class="mb-3">
 							<label>Nama Penyakit</label>
 							<input type="text" name="nama_penyakit" class= "form-control" required>

 						</div>
 						
 						<div class="mb-3">
 							<label>Keterangan</label>
 							<textarea class="form-control" id="editor" style="height: 100px;" name="keterangan" required></textarea>
 						</div>
 						<div class="mb-3">
 							<label>Solusi</label>
 							<textarea class="form-control" id="editor" style="height: 100px;" name="solusi" required></textarea>
 						</div>
 						<button class="btn btn-primary">Simpan</button>
 					</form>	
 				</div>
 			</div>
 		</div>

 	</div>
 </section>