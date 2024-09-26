  <section class = "container mt-5">
  	<div class="row">
  		<div class="col-6 offset-3">
  			
  			<div class="card">
  				<div class="card-header bg-primary"><h6 class="text-white">Ubah Penyakit</h6></div>
  				<div class="card-body">
  					<form method="post">
  						<div class="mb-3">
  							<label>Kode Penyakit</label>
  							<input type="text" name="kode_penyakit" class="form-control" value="<?php 	echo $penyakit['kode_penyakit'] ?>" readonly>
  						</div>
  						<div class="mb-3">
  							<label>Nama Penyakit</label>
  							<input type="text" name="nama_penyakit" class= "form-control" value="<?php 	echo $penyakit['nama_penyakit'] ?>" required>
  							
  						</div>
  						
  						<div class="mb-3">
  							<label>Keterangan</label>
  							<textarea name="keterangan" class="form-control" required><?php echo $penyakit['keterangan'] ?></textarea>
  						</div>
  						<div class="mb-3">
  							<label>Solusi</label>
  							<textarea name="solusi" class="form-control" id="editor" style="height: 100px;" required><?php echo $penyakit['solusi'] ?></textarea>
  						</div>
  						<button class="btn btn-primary">Simpan</button>
  					</form>	
  				</div>
  			</div>
  		</div>

  	</div>
  </section>