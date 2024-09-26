 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-12">
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">Gejala</h6></div>
 				<div class="card-body table-responsive">
 					<table class="table table-bordered table-striped tabel-hover" id="example">
 						<thead>
 							<tr>
 								<th>Kode</th>
 								<th>Nama</th>
 								<th>Opsi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<?php foreach($gejala as $key => $value): ?>

 								<tr>
 									<td><?php echo $value['kode_gejala'] ?></td>
 									<td><?php echo $value['nama_gejala'] ?></td>
 									<td nowrap="nowrap">
 										<a href="<?php echo base_url('admin/gejala/ubah/'.$value['kode_gejala']); ?>" class="btn btn-warning btn-sm">Ubah</a>
 										<a href="<?php echo base_url('admin/gejala/hapus/'.$value['kode_gejala']); ?>" class="btn btn-danger btn-sm">Hapus</a>
 									</td>
 								</tr>
 							<?php endforeach ?>
 						</tbody>

 					</table>
 					<a href="<?php echo base_url('admin/gejala/tambah') ?>" class="btn btn-primary">Tambah Gejala</a>
 					
 				</div>
 		</div>
 	</div>
</div>

</div>
 </section>