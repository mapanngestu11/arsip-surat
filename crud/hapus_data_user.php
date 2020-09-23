<?php
 include 'koneksi.php';

 $id_user = $_GET['id_user'];

 	$tambahdata = mysqli_query($koneksi, "DELETE from user where id_user ='$id_user'");

 		if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='../list.user.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data berhasil Di Hapus !');window.location.href='../list.user.php';</script>";		
	}

 	

?>