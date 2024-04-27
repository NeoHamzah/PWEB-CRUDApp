<?php 
require_once'transaksi.php';

if (isset($_POST["submit"])) {
  // cek apakah data berhasil ditambahkan atau tidak
  if (Transaksi::create($_POST['tanggal_transaksi'], $_POST['nama_penyewa'], $_POST['barang_disewa'], $_POST['jumlah_harga'], $_POST['nomor_telepon']) > 0) {
      echo "
          <script>
              alert('data berhasil ditambahkan!')
              document.location.href = 'dashboard.php'
          </script>
      ";
  } else {
      echo "
          <script>
              alert('data gagal ditambahkan!')
              document.location.href = 'dashboard.php'
          </script>
      ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Kamera | Create Data</title>
    <link rel="stylesheet" href="style/CreateUpdateData.css">
</head>
<body>
      <?php include("sidebar.php") ?>
      <div class="container">
      <h1>Tambah Data Transaksi Sewa</h1>
        <form class="form" action="" method="post" enctype="multipart/form-data">
            <label for="tanggal_transaksi">Tanggal Transaksi: </label>
            <input type="date" name="tanggal_transaksi" id="tanggal_transaksi">
            <label for="nama_penyewa">Nama Penyewa: </label>
            <input type="text" name="nama_penyewa" id="nama_penyewa">
            <label for="barang_disewa">Barang Disewa: </label>
            <input type="text" name="barang_disewa" id="barang_disewa">
            <label for="jumlah_harga">Harga:  </label>
            <input type="text" name="jumlah_harga" id="jumlah_harga">
            <label for="nomor_telepon">Nomor telepon : </label>
            <input type="text" name="nomor_telepon" id="nomor_telepon">

            <button type="submit" name="submit" class="create">Tambah Data</button>
        </form>
      </div>
</body>
</html>