</html>
	<head>
	<title>Losway.com</title>
	</head>
	<body>
	<h2>Losway.com</h2>
	<br/>
	<a href="input_transaksi.php">+ TAMBAH TRANSAKSI</a>
	<br/>
	<table border="1">
	<tr>
		<th>Nama Transaksi</th>
		<th>Tgl Transaksi</th>
		<th>Harga</th>
		<th>Qty</th>
		<th>Id Barang</th>
		<th>Diskon</th>
		<th>Id Pelanggan</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from transaksi");
	while($d= mysqli_fetch_array($data)){
		?>
		<form method="POST">
		<tr>
		<tr>
			<th><?php echo $d['nama_transaksi']; ?></th>
			<th><?php echo $d['tgl_transaksi']; ?></th>
			<th><?php echo $d['harga']; ?></th>
			<th><?php echo $d['qty']; ?></th>
			<th><?php echo $d['id_barang']; ?></th>
			<th><?php echo $d['diskon']; ?></th>
			<th><?php echo $d['id_pelanggan']; ?></th>
			<td>
				<a href="edittransaksi.php?id_transaksi=<?php echo $d['id_transaksi']; ?>">EDIT</a>
				<a href="hapustransaksi.php?id_transaksi=<?php echo $d['id_transaksi']; ?>">HAPUS</a>
            </td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>