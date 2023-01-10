</html>
	<head>
	<title>Losway.com</title>
	</head>
	<h2>Losway.com</h2>
	<br/>
	<a href="input_barang.php">+ TAMBAH BARANG</a>
	<br/>
	<table border="1">
	<tr>
		<th>nama barang</th>
		<th>Id Kategori</th>
		<th>Id Satuan</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from barang");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['kategori_id']; ?></td>
			<td><?php echo $d['satuan_id']; ?></td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>