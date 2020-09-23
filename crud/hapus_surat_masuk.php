<?php
 include 'koneksi.php';

 $id_surat = $_GET['id_surat'];

 	$tambahdata = mysqli_query($koneksi, "DELETE from surat where id_surat ='$id_surat'");

 		if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='../list.surat.masuk.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data berhasil Di Hapus !');window.location.href='../list.surat.masuk.php';</script>";		
	}

 	

?>