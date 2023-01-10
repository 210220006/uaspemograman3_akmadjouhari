<! DOCTYPE html>
<html>
<html>
<title>Losway.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$nama= $_POST['nama'];
$a=mysqli_query($koneksi,"insert into kategori values('','$nama')");
if ($a){
header("location:tampil_kategori.php");
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
<a href="tampil_kategori.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA KATEGORI</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama Kategori</td>
	<td><input type="text" Name="nama"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>