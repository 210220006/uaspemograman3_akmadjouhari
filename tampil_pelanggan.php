<?php
include 'koneksi.php';
	$data = mysqli_query($koneksi,"select * from pelanggan");
	?>
	<form method="POST">
</html>
	<head>
	<title>Losway.com</title>
	</head>
	<body>
	<h2>Pemograman 3 2022</h2>
	<br/>
	<a href="input_pelanggan.php">+ TAMBAH PELANGGAN</a>
	<br/>
	<table border="2">
	<tr>
		<th>Nama_pelanggan</th>
		<th>no_tlp</th>
		<th>status</th>
	</tr>
	<?php
	$data = mysqli_query($koneksi,"select * from pelanggan");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<th><?php echo $d['nama_pelanggan'];?></th>
			<th><?php echo $d['no_tlp'];?></th>
            <th><?php echo $d['status'];?></th>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>