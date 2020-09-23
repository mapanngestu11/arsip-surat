<?php

session_start();

include 'koneksi.php';


$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$hak_akses = $_POST['hak_akses'];
$tanggal = date('d-M-y');
$waktu = date('h:i:s');



$sql = "INSERT INTO `user` (`id_user`,`nama`,`username`,`password`,`hak_akses`,`tanggal`,`waktu`) 
		VALUES (NULL,'$nama','$username','$password','$hak_akses','$tanggal','$waktu');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Menambah Data');window.location.href='../list.user.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Ditambahkan');window.location.href='../list.user.php';</script>";		
	}
	
	


?>