<! DOCTYPE html>
<html>
<html>
<title>Losway.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
$nama = $_POST['nama'];
$kategori_id = $_POST['kategori_id'];
$satuan_id = $_POST['satuan_id'];

$a=mysqli_query($koneksi,"insert into barang values('','$nama','$kategori_id','$satuan_id')");
if ($a)
{
header("location:tampil_barang.php");
}
else
{
	echo mysqli_error($koneksi);
	
}
}
$querykategori = "SELECT * FROM kategori";
$resultkategori = mysqli_query($koneksi,$querykategori);

?>
<body>
<h2>Losway.com<h/2>
<br/>
<a href="index.php">HOME</a>
<br/>
<br/>
<br/>
<a href="tampil_barang.php">KEMBALI</a>
<br/>
<h3>TAMBAH DATA Barang</h3>
<form method="POST">
	<table>
	<tr>
	<td>nama barang</td>
	<td><input type="text" name="nama"></td>
	</tr>
	<tr>
	<td>kategori</td>
	<td><select name="kategori_id">
	<option value="">-----Pilih</option>
	<?php
	while ($datakategori=mysqli_fetch_array($resultkategori))
	{
		echo "<option value=$datakategori[id_kategori]>$datakategori[nama]</option>";
	}
	?>
	</select>
	<td>
	</tr>
	<tr>
	<td>satuan</td>
	<td><input type="number" name="satuan_id"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>