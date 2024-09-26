 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-12">
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">Informasi</h6></div>
 				<div class="card-body">
 					<table class="table table-bordered table-striped tabel-hover" id="example">
 						<thead>
 							<tr>
 								<th>Nomor</th>
 								<th>Judul</th>
 								<th>Tanggal</th>
 								<th>Foto</th>
 								<th>Opsi</th>
 								
 							</tr>
 						</thead>
 						<tbody>
 							<?php foreach($informasi as $key => $value): ?>

 								<tr>
 									<td><?php echo $key+1 ?></td>
 									<td><?php echo $value['judul'] ?></td>
 									<td><?php echo $value['tanggal'] ?></td>
 									<td><img src="<?php echo base_url('assets/informasi/'.$value['foto']); ?>" width="100"></td>
 									
 									<td nowrap="nowrap">
 										<a href="<?php echo base_url('admin/informasi/ubah/'.$value['id_informasi']); ?>" class="btn btn-warning btn-sm">Ubah</a>
 										<a href="<?php echo base_url('admin/informasi/hapus/'.$value['id_informasi']); ?>" class="btn btn-danger btn-sm">Hapus</a>
 									</td>
 								</tr>
 							<?php endforeach ?>
 						</tbody>

 					</table>
 					<a href="<?php echo base_url('admin/informasi/tambah') ?>" class="btn btn-primary">Tambah informasi</a>
 				</div>
 		</div>
 	</div>
</div>

</div>
 </section>