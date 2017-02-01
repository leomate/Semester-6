<?php
#######################################
## File Name: dosen_edit_process.php ##
#######################################

include_once("koneksi.php");

// URL DATA
$id = $_GET['id'];

// Form Data
$kode_dosen		= $_POST['kode_dosen'];
$nama_dosen		= $_POST['nama_dosen'];
$telepon		= $_POST['telepon'];
$foto			= $_POST['foto'];
$email			= $_POST['email'];
$password		= $_POST['password'];

$sql = "UPDATE users 
		SET kode_user=:kode_user, email=:email, password=:password, nama_user=:nama_user, telepon=:telepon, foto=:foto
		WHERE id=:id";
$stmt = $db->prepare($sql);
$stmt->execute(['kode_user' => $kode_dosen,
				'email' => $email,
				'password' => $password,
				'nama_user' => $nama_dosen,
				'telepon' => $telepon,
				'foto' => $foto,
				'id' => $id ]);

header('Location: ../index.php?page=dosen');