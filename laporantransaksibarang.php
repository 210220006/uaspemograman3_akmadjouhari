<?php
  // Menyertakan file koneksi
  include 'transaksi.php';

  // Membuat query
  $query = "SELECT pelanggan, category, item, quantity, price, discount, (quantity * price - discount) AS total FROM transactions ORDER BY name ASC";

  // Menjalankan query
  $result = mysqli_query($conn, $query);

  // Menampilkan report transaksi barang
  if (mysqli_num_rows($result) > 0) {
    // Menampilkan data per baris
    while($row = mysqli_fetch_assoc($result)) {
      echo "Nama: " . $row["name"]. " - Kategori: " . $row["category"]. " - Barang: " . $row["item"]. " - Qty: " . $row["quantity"]. " - Harga: " . $row["price"]. " - Diskon: " . $row["discount"]. " - Total: " . $row["total"]. "<br>";
    }
  } else {
    echo "Tidak ada data";
  }

  // Menutup koneksi
  mysqli_close($conn);
?>
