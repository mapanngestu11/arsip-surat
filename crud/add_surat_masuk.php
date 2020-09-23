<?php 
include 'koneksi.php';

$nomor = $_POST['nomor'];
$tgl_terima = $_POST['tgl_terima'];
$asal = $_POST['asal'];
$pengirim = $_POST['pengirim'];
$penerima = $_POST['penerima'];
$jenis = $_POST['jenis'];
$perihal = $_POST['perihal'];
$keterangan = $_POST['keterangan'];
$kategori = $_POST['kategori'];
$tgl_post = date('d-M-y');
$waktu_terima = date('h:i:s');
// upload foto
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','docx','pdf');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
// upload dokumen
  
 
if(!in_array($ext,$ekstensi) ) {
	header("location:../list.surat.masuk.php?alert=gagal_ekstensi");

}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'dokumen/'.$rand.'_'.$filename);
	
		$tambahdata =mysqli_query($koneksi, "INSERT INTO `surat` (`id_surat`,`nomor`,`tgl_terima`,`asal`,`jenis`,`perihal`,`pengirim`,`penerima`,`keterangan`,`kategori`,`tgl_post`,`waktu_terima`,`foto`) 
											VALUES(NULL,'$nomor','$tgl_terima','$asal','$jenis','$perihal','$pengirim','$penerima','$keterangan','$kategori','$tgl_post','$waktu_terima','$xx')");

			if (!$tambahdata) {
			header("location:../list.surat.masuk.php?alert=gagal_ukuran");
			
	}
	else{

		header("location:../list.surat.masuk.php?alert=berhasil");
				
	}
	
	
}
}
