 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-6 offset-3">
 			
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">Tambah informasi</h6></div>
 				<div class="card-body">
 					<form method="post" enctype="multipart/form-data">

 						<div class="mb-3">
 							<label>Judul</label>
 							<input type="text" name="judul" class="form-control" value="<?php echo $informasi['judul'] ?>">
 						</div>

 						<div class="mb-3">
 							<label>Tanggal</label>
 							<input type="datetime-local" name="tanggal" class="form-control" value="<?php echo $informasi['tanggal'] ?>">
 						</div>
 						<div class="mb-3">
 							<img src="<?php echo base_url('assets/informasi/'.$informasi['foto']) ?>" width="100">
 						</div>
 						<div class="mb-3">
 							<label>Foto</label>
 							<input type="file" name="foto" class="form-control">
 						</div>
 						<div class="mb-3">
 							<label>isi</label>
 							<textarea name="isi" class="form-control"><?php echo $informasi['isi'] ?></textarea>
 						</div>
 						<button class="btn btn-primary">Simpan</button>
 					</form>	
 				</div>
 			</div>
 		</div>

 	</div>
 </section>
