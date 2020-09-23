<?php 
include 'koneksi.php';
?>
<?php
$id_user =$_GET['id_user'];
$det=mysqli_query($koneksi,"SELECT * from user where id_user='$id_user'")or die(mysqli_error($koneksi));
while($d=mysqli_fetch_array($det)){
?>					
	
			<table border="0" width="100%;" style="padding:5px">
				
			<tr>
				<td>Nama</td>
				<td><input type="text" class="form-control"  name="nama" value="<?php echo $d['nama'] ?>">
				 <input name="id_user" type="text" value="<?php echo $d['id_user'];?>" hidden></td>

				
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" class="form-control"value="<?php echo $d['username'] ?>"></td>
			</tr>
			<tr>
				<td>Hak akses</td>
				<td>
					<select name="hak_akses" class="form-control" required>
							<option value="<?php echo $d['hak_akses'] ?>"><?php echo $d['hak_akses'] ?></option>
							<option value="admin">Administrator</option>
							<option value="camat">Kepala Camat</option>
							<option value="sekcam">Sekretaris Camat</option>
							<option value="kasubag">Kasubag</option>

					</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal Terkahir di ubah</td>
				<td><input type="text" name="tanggal" class="form-control"  value="<?php echo $d['tanggal']?>" readOnly></td>
			</tr>
			<tr>
				<td>Waktu</td>
				<td><input type="text" name="waktu" class="form-control"  value="<?php echo $d['waktu']?>" readOnly></td>
			</tr>
			
			</table>
	<?php 
}
?>
