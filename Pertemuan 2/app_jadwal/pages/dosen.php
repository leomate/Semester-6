<?php
##########################
## File Name: dosen.php ##
##########################

$sql = "SELECT * FROM users
		WHERE role = 'dosen'";
?>
<h1 class="page-header">Dosen</h1>

<a href="index.php?page=dosen-add" class="btn btn-primary">Tambah Dosen</a>
<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Kode Dosen</th>
				<th>Nama Dosen</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 1;
			foreach($db->query($sql) as $row){
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['kode_user']; ?></td>
				<td><?php echo $row['nama_user']; ?></td>
				<td>
					<a href="#" class="btn btn-primary btn-xs">View</a>
					<a href="index.php?page=dosen-edit" class="btn btn-warning btn-xs">Edit</a>
					<a href="process/<dosen_delete_process" class="php"></dosen_delete_process>" class="btn btn-danger btn-xs">Delete</a>
				</td>
			</tr>
			<?php
			$i++;
			}
			?>
		</tbody>
	</table>
</div>