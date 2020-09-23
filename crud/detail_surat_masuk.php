<?php 
include 'koneksi.php';
?>
<?php
$id_surat =$_GET['id_surat'];
$det=mysqli_query($koneksi,"SELECT * from surat where id_surat='$id_surat'")or die(mysqli_error($koneksi));
while($d=mysqli_fetch_array($det)){
?>					
	
			<table border="0" width="100%;" style="padding:5px">
				
			<tr>
				<td>Nomor Surat</td>
				<td><input type="text" class="form-control"  name="nomor" value="<?php echo $d['nomor'] ?>">
				 <input name="id_surat" type="text" value="<?php echo $d['id_surat'];?>" hidden></td>

				
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tgl_terima" class="form-control"value="<?php echo $d['tgl_terima'] ?>"></td>
			</tr>
			<tr>
				<td>Asal</td>
				
				<td><input type="text" name="asal" class="form-control"value="<?php echo $d['asal'] ?>"></td>
			
			</tr>
			<tr>
				<td>Perihal</td>
				
				<td><input type="text" name="asal" class="form-control"value="<?php echo $d['asal'] ?>"></td>
			
			</tr>
			<tr>
				<td>keterangan</td>
				
				<td><input type="text" name="keterangan" class="form-control"value="<?php echo $d['keterangan'] ?>"></td>
			
			</tr>
			<tr>
				<td>Kategori</td>
				
				<td>
					<select name="kategori" class="form-control" required>
						<option value="<?php echo $d['kategori'] ?>"><?php echo $d['kategori'] ?></option>
					</select>
				</td>
			
			</tr>
			<tr>
				<td>File</td>
					<td><a href="crud/download.php?foto=<?=$d['foto']?>">Download</a></td>
			</tr>
			<tr>
				<td>Tanggal terkahir di ubah</td>
				<td><input type="text"  class="form-control"  value="<?php echo $d['tgl_post']?>" readOnly></td>
			</tr>
			<tr>
				<td>Waktu terakhir di ubah </td>
				<td><input type="text" name="waktu" class="form-control"  value="<?php echo $d['waktu_terima']?>" readOnly></td>
			</tr>
			
			</table>
	<?php 
}
?>
