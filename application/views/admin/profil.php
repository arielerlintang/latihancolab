 <section class = "container mt-5">
 	<div class="row">
 		<div class="col-6 offset-3">
 			
 			<div class="card">
 				<div class="card-header bg-primary"><h6 class="text-white">Profil</h6></div>
 				<div class="card-body">
 					<form method="post">
 					<div class="mb-3">
 						<label>Username</label>
 						<input type="text" name= "username_admin" class="form-control" value="<?php echo $admin['username_admin'] ?>" required>
 	 			</div>

 				<div class="mb-3">
 					<label>Password</label>
 					<input type="password" name="password_admin" class= "form-control" value="">
 					<label class="text-danger"><i>Kosongkan password bila tidak diubah</i></label>
 				</div>
 				<div class="mb-3">
 					<label>Nama</label>
 					<input type="text" name="nama_admin" class="form-control" value=" <?php echo $admin['nama_admin'] ?>">
 				</div>
 				<button class="btn btn-primary">Ubah</button>
 			</form>	
 		</div>
 	</div>
</div>

</div>
 </section>