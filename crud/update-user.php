<?php

session_start();

include 'koneksi.php';

	$id_user = $_POST['id_user'];
   	$nama  	= $_POST['nama'];
    $username  		= $_POST['username'];
    $hak_akses       = $_POST['hak_akses'];	
 	$tanggal =	date('d-M-y');
 	$waktu = date('h:i:s');
 

$sql = "UPDATE `user` SET `nama`='$nama',`username`='$username',`hak_akses`='$hak_akses',`tanggal`='$tanggal',`waktu`='$waktu' 
		 WHERE `user`.`id_user` = $id_user";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal mengubah Data');window.location.href='../list.user.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data telah di ubah');window.location.href='../list.user.php';</script>";		
	}
	
	


?>