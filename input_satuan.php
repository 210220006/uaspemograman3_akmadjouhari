<! DOCTYPE html>
<html>
<html>
<title>Losway.com</title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$nama= $_POST['nama'];
$a=mysqli_query($koneksi,"insert into satuan values('','$nama')");
if ($a){
header("location:tampil_satuan.php");
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
<a href="tampil_satuan.php">KEMBALI<a/>
<br/>
<h3>TAMBAH JENIS SATUAN</h3>
<form method="POST">
	<table>
	<tr>
	<td>Bentuk Satuan</td>
	<td><input type="text" name="nama"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>