 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-6 offset-3">
 			
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">Tambah informasi</h6></div>
 				<div class="card-body">
 					<form method="post" enctype="multipart/form-data">

 						<div class="mb-3">
 							<label>Judul</label>
 							<input type="text" name="judul" class="form-control">
 						</div>

 						<div class="mb-3">
 							<label>Tanggal</label>
 							<input type="datetime-local" name="tanggal" class="form-control">
 						</div>
 						<div class="mb-3">
 							<label>Foto</label>
 							<input type="file" name="foto" class="form-control">
 						</div>
 						<div class="mb-3">
 							<label>isi</label>
 							<textarea name="isi" class="form-control" id="editor" style="height: 100px;"></textarea>
 						</div>
 						<button class="btn btn-primary">Simpan</button>
 					</form>	
 				</div>
 			</div>
 		</div>

 	</div>
 </section>
