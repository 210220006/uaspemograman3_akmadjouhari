<! DOCTYPE html>
<html>
<html>
<title>Losway.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
$nama_transaksi = $_POST ['nama_transaksi'];
$tgl_transaksi = $_POST ['tgl_transaksi'];
$harga = $_POST ['harga'];
$qty = $_POST ['qty'];
$id_barang = $_POST ['id_barang'];
$diskon = $_POST ['diskon'];
$id_pelanggan = $_POST ['id_pelanggan'];

$a=mysqli_query($koneksi,"insert into transaksi values('','$nama_transaksi','$tgl_transaksi','$harga','$qty','$id_barang','$diskon','$id_pelanggan')");
if ($a)
{
header("location:tampil_transaksi.php");
}
else
{
	echo mysqli_error($koneksi);
	
}
}
$querybarang = "SELECT * FROM barang";
$resultbarang = mysqli_query($koneksi,$querybarang);

$querypelanggan = "SELECT * FROM pelanggan";
$resultpelanggan = mysqli_query($koneksi,$querypelanggan);

?>
<body>
<h2>Losway.com<h/2>
<br/>
<a href="index.php">HOME</a>
<br/>
<br/>
<br/>
<a href="tampil_transaksi.php">KEMBALI<a/>
<br/>
<h3>TAMBAH DATA TRANSAKSI</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama Transaksi</td>
	<td><input type="text" Name = "nama_transaksi"></td>
	</tr>
	<tr>
	<td>Tgl Transaksi</td>
	<td><input type="date" Name = "tgl_transaksi"></td>
	</tr>
    <tr>
    <td>Harga</td>
	<td><input type="number" Name = "harga"></td>
	</tr>
	<tr>
	<td>Qty</td>
	<td><input type="number" Name = "qty"></td>
	</tr>
	<tr>
	<td>Id Barang</td>
	<td><select name = "id_barang">
	<option value="">---Pilih---</option>
	<?php
	while ($databarang=mysqli_fetch_array($resultbarang))
	{
		echo "<option value=$databarang[id_barang]>$databarang[nama]</option>";
	}
	?>
	</select>
    </td>
    </tr>
	<tr>
	<td>Diskon</td>
	<td><input type="text" name="diskon"></td>
	</tr>
	<td>Id Pelanggan</td>
	<td><select name = "pelanggan_id">
	<option value="">---Pilih---</option>
	<?php
	while ($datapelanggan=mysqli_fetch_array($resultpelanggan))
	{
		echo "<option value=$datapelanggan[id_pelanggan]>$datapelanggan[id_pelanggan]</option>";
	}
	?>
	</select>
	</td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>