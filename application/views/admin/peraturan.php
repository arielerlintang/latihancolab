 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-12">
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">Peraturan</h6></div>
 				<div class="card-body table-responsive">
 					<table class="table table-bordered table-striped tabel-hover" id="example">
 						<thead>
 							<tr>
 								<th>No</th>
 								<th>Kd Gejala Parent</th>
 								<th>Kd Gejala Pertanyaan</th>
 								<th>Kd Gejala Ya</th>
 								<th>Kd Gejala Tidak</th>
 								<th>Kode Penyakit</th>
 								<th>Opsi</th>
 							
 							</tr>
 						</thead>
 						<tbody>
 							<?php foreach($peraturan as $key => $value): ?>

 								<tr>
 									<td><?php echo $key+1 ?></td>
 									<td><?php echo $value['kode_gejala_parent'] ?></td>
 									<td><?php echo $value['kode_gejala_pertanyaan'] ?></td>
 									<td><?php echo $value['kode_gejala_ya'] ?></td>
 									<td><?php echo $value['kode_gejala_tidak'] ?></td>
 									<td><?php echo $value['kode_penyakit'] ?></td>
 		
 									
 									<td nowrap="nowrap">
 										<a href="<?php echo base_url('admin/peraturan/ubah/'.$value['id_peraturan']); ?>" class="btn btn-warning btn-sm">Ubah</a>
 										<a href="<?php echo base_url('admin/peraturan/hapus/'.$value['id_peraturan']); ?>" onclick="return confirm('Anda Yaqin ?')" class="btn btn-danger btn-sm">Hapus</a>
 									</td>
 								</tr>
 							<?php endforeach ?>
 						</tbody>

 					</table>
 					<a href="<?php echo base_url('admin/peraturan/tambah') ?>" class="btn btn-primary">Tambah</a>
 				</div>
 		</div>
 	</div>
</div>

</div>
 </section>