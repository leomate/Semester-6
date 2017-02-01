<?php
###############################
## File Name: dosen-edit.php ##
###############################

// GET URL DATA
$id = $_GET['id'];

$sql = "???";
$stmt = $db->prepare($sql);
$stmt->execute(['id' => $id]);
$row = $stmt->fetch();
?>
<h1 class="page-header">Edit Data Dosen</h1>
<form class="form-horizontal" action="process/dosen_edit_process.php?id=<?php echo $row['id'] ?>" method="post">
	<div class="form-group">
		<label class="col-sm-2">Kode Dosen</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="kode_dosen" value="<?php echo $row['kode_user'] ?>" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2">Nama Dosen</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="nama_dosen" value="<?php echo $row['nama_dosen'] ?>" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2">Telepon</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="telepon" value="<?php echo $row['telepon'] ?>" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2">Foto</label>
		<div class="col-sm-10">
			<input type="file" name="foto" value="<?php echo $row['foto'] ?>" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2">Email</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2">Password</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" name="password" value="<?php echo $row['password'] ?>" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2"></label>
		<div class="col-sm-10">
			<input type="submit" class="btn btn-primary" value="Simpan" />
		</div>
	</div>
</form>