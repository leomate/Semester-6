<?php

<!----------------------------
## File Name: dosen-add.php ##
----------------------------->

<h1 class="page-header">Tambah Dosen</h1>
<form class="form-horizontal" action="process/dosen_add_process.php" method="post">
	<div class="form-group">
		<label class="col-sm-2">Kode Dosen</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="kode_dosen" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2">Nama Dosen</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="nama_dosen" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2">Telepon</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="telepon" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2">Foto</label>
		<div class="col-sm-10">
			<input type="file" name="foto" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2">Email</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="email" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2">Password</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="password" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2"></label>
		<div class="col-sm-10">
			<input type="submit" class="btn btn-primary" value="Simpan" />
		</div>
	</div>
</form>