<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
 
$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }
 
    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
    for($i = 1;$i < count($sheetData);$i++)

    {
        $nomor = $sheetData[$i]['1'];
        $tgl_terima = $sheetData[$i]['2'];
        $asal = $sheetData[$i]['3'];
        $pengirim = $sheetData[$i]['4'];
        $penerima = $sheetData[$i]['5'];
        $perihal = $sheetData[$i]['6'];
        $keterangan = $sheetData[$i]['7'];
        $tgl_post = date('d-M-y');
        $waktu_terima = date('h:i:s');
       mysqli_query($koneksi, "INSERT INTO `surat` (`id_surat`,`nomor`,`tgl_terima`,`asal`,`jenis`,`perihal`,`pengirim`,`penerima`,`keterangan`,`tgl_post`,`waktu_terima`) VALUES(NULL,'$nomor','$tgl_terima','$asal','surat-masuk','$perihal','$pengirim','$penerima','$keterangan','$tgl_post','$waktu_terima')");
    }

    header("Location: list.surat.masuk.php"); 
}
?>
