</html>
	<head>
	<title>Losway.com</title>
	</head>
	<body>
	<h2>Losway.com</h2>
	<br/>
	<a href="input_kategori.php">TAMBAH KATEGORI</a>
	<br/>
	<table border="1">
	<tr>
		<th>Nama Kategori</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from kategori");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $d['nama']; ?></td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>