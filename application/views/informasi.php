<section class="py-5">
	<h3 class="text-center mb-3">Informasi</h3>
	<div class="container">
		<div class="row">
			<?php foreach ($informasi as $key => $value): ?>
				<div class="col-md-4">
					<div class="card" style="width: 18rem;">
						<img src="<?php echo base_url('assets/informasi/'.$value['foto']) ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?php echo $value['judul'] ?></h5>
							<p class="card-text"><?php echo substr($value['isi'], 0, 100) ?></p>
							<a href="<?php echo base_url('informasi/detail/'.$value['id_informasi']) ?>" class="btn btn-primary">Detail</a>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>