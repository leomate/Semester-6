<?php
#########################################
## File Name: dosen_delete_process.php ##
#########################################

include_once("koneksi.php");

// URL DATA
$id = $_GET['id'];

$sql = "DELETE FROM users
		WHERE id=:id";
$stmt = $db->prepare($sql);
$stmt->execute(['id' => $id ]);

header('Location: ../index.php?page=dosen');