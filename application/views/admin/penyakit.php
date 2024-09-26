 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-12">
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">Penyakit</h6></div>
 				<div class="card-body table-responsive">
 					<table class="table table-bordered table-striped tabel-hover" id="example">
 						<thead>
 							<tr>
 								<th>Kode</th>
 								<th>Nama</th>
 								<th>Keterangan</th>
 								<th>Solusi</th>
 								<th>Opsi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<?php foreach($penyakit as $key => $value): ?>

 								<tr>
 									<td><?php echo $value['kode_penyakit'] ?></td>
 									<td><?php echo $value['nama_penyakit'] ?></td>
 									<td><?php echo $value['keterangan'] ?></td>
 									<td><?php echo $value['solusi'] ?></td>
 									<td nowrap="nowrap">
 										<a href="<?php echo base_url('admin/penyakit/ubah/'.$value['kode_penyakit']); ?>" class="btn btn-warning btn-sm">Ubah</a>
 										<a href="<?php echo base_url('admin/penyakit/hapus/'.$value['kode_penyakit']); ?>" class="btn btn-danger btn-sm">Hapus</a>
 									</td>
 								</tr>
 							<?php endforeach ?>
 						</tbody>

 					</table>
 					<a href="<?php echo base_url('admin/penyakit/tambah') ?>" class="btn btn-primary">Tambah Penyakit</a>
 				</div>
 		</div>
 	</div>
</div>

</div>
 </section>