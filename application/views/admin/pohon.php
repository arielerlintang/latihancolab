 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-12">
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">pohon</h6></div>
 				<div class="card-body table-responsive">
 					<table class="table table-bordered table-striped tabel-hover" id="example">
 						<thead>
 							<tr>
 								<th>No</th>
 								<th>Kode Gejala</th>
 								<th>Kode Gejala Ya </th>
 								<th>Kode Gejala Tidak</th>
 								<th>Opsi</th>
 							</tr>
 						</thead>
 						<tbody>
 							<?php foreach($pohon as $key => $value): ?>

 								<tr>
 									<td><?php echo $key+1; ?></td>
 									<td><?php echo $value['kode_gejala'] ?></td>
 									<td><?php echo $value['kode_gejala_ya'] ?></td>
 									<td><?php echo $value['kode_gejala_tidak'] ?></td>
 									<td nowrap="nowrap">
 										
 									</td>
 								</tr>
 							<?php endforeach ?>
 						</tbody>

 					</table>
 					<a href="<?php echo base_url('admin/pohon/tambah') ?>" class="btn btn-primary">Tambah pohon</a>
 				</div>
 		</div>
 	</div>
</div>

</div>
 </section>