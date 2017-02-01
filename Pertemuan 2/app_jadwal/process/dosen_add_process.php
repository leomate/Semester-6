<?php
######################################
## File Name: dosen_add_process.php ##
######################################

include_once("koneksi.php");

// Form Data
$kode_dosen		= $_POST['kode_dosen'];
$nama_dosen		= $_POST['nama_dosen'];
$telepon		= $_POST['telepon'];
$foto			= $_POST['foto'];
$email			= $_POST['email'];
$password		= $_POST['password'];

$sql = "INSERT INTO users (kode_user, role, email, password, nama_user, telepon, foto) 
		VALUES (:kode_user, :role, :email, :password, :nama_user, :telepon, :foto)";
$stmt = $db->prepare($sql);
$stmt->execute(['kode_user' => $kode_dosen,
				'role' => "dosen",
				'email' => $email,
				'password' => $password,
				'nama_user' => $nama_dosen,
				'telepon' => $telepon,
				'foto' => $foto]);

header('Location: ../index.php?page=dosen');