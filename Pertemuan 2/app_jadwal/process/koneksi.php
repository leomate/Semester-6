<?php
############################
## File Name: koneksi.php ##
############################

try{
	$dsn = ???;
	$db = new PDO($dsn, 'root', '');
}catch(PDOException $e){
	echo $e->getMessage();
	die();
}