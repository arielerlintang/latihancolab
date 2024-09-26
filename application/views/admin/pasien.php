 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-12">
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">Pasien</h6></div>
 				<div class="card-body table-responsive">
 					<table class="table table-bordered table-striped tabel-hover" id="example">
 						<thead>
 							<tr>
 								<th>No</th>
 								<th>Nama</th>
 								<th>Alamat</th>
 								<th>telp</th>
 								<th>Opsi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<?php foreach($pasien as $key => $value): ?>

 								<tr>
 									<td><?php echo $key+1 ?></td>
 									<td><?php echo $value['nama_pasien'] ?></td>
 									<td><?php echo $value['alamat_pasien'] ?></td>
 									<td><?php echo $value['telepon_pasien'] ?></td>
 									<td>
 										<a href="<?php echo base_url('admin/pasien/ubah/'.$value['id_pasien']); ?>" class="btn btn-warning btn-sm">Ubah</a>
 										<a href="<?php echo base_url('admin/pasien/hapus/'.$value['id_pasien']); ?>" class="btn btn-danger btn-sm">Hapus</a>
 									</td>
 								</tr>
 							<?php endforeach ?>
 						</tbody>

 					</table>
 					<a href="<?php echo base_url('admin/pasien/tambah/'.$value['id_pasien']); ?>" class="btn btn-primary">Tambah</a>
 					
 				</div>
 		</div>
 	</div>
</div>

</div>
 </section>