<! DOCTYPE html>
<html>
<html>
<title>Losway.com</title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
$nama_pelanggan = $_POST['nama_pelanggan'];
$no_tlp = $_POST['no_tlp'];
$status = $_POST['status'];
$a=mysqli_query($koneksi,"insert into pelanggan values('','$nama_pelanggan','$no_tlp','$status')");
if ($a){
header("location:tampil_pelanggan.php");
}else{
	echo mysqli_error();
}
}
?>
<body>
<h2>Losway.com<h/2>
<br/>
<a href="index.php">HOME</a>
<br/>
<br/>
<br/>
<a href="tampil_pelanggan.php">KEMBALI<a/>
<br/>
<h3>TAMBAH DATA PELANGGAN</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama Pelanggan</td>
	<td><input type="char" name="nama_pelanggan"></td>
	</tr>
    <tr>
	<td>No Tlp</td>
	<td><input type="text" name="no_tlp"></td>
	</tr>
	<tr>
	<td>Status</td>
	<td><select name="status">
	<option value="">-----Pilih</option>
	<option value="baru">baru</option>
	<option value="lama">lama</option>
	<option value="tetap">tetap</option>
	</select>
	<td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>