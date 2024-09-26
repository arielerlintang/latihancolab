<section class="py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 col-10 offset-2">
				
					<div class="card mb-4">
						<img src="<?php echo base_url('assets/informasi/'.$informasi['foto']) ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h2 class="card-title"><?php echo $informasi['judul'] ?></h2>
							
							<p class="card-text"><small class="text-muted">Diposting pada tanggal <?php echo date('d M Y',strtotime($informasi['tanggal'])); ?></small></p>
						</div>
					</div>
					<div class="card mb-3">
						<div class="card-body">
							<h5 class="card-title">Isi Informasi</h5>
							<p class="card-text"><?php echo $informasi['isi'] ?></p>
						</div>
					</div>

					<div class="text-start">
						
					<a href="<?php echo base_url('/') ?>" class="btn btn-primary">Kembali</a>
					</div>
			</div>
		</div>
	</div>
</section>