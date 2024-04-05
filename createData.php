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
        <form class="form" action="">
            <label for="tanggalTransaksi">Tanggal Transaksi: </label>
            <input type="text" name="tanggalTransaksi" id="tanggalTransaksi">
            <label for="nama">Nama Penyewa: </label>
            <input type="text" name="nama" id="nama">
            <label for="barang">Barang Disewa: </label>
            <input type="text" name="barang" id="barang">
            <label for="harga">Harga: </label>
            <input type="text" name="harga" id="harga">
            <label for="telp">Nomor telepon : </label>
            <input type="text" name="telp" id="telp">

            <button class="create">Tambah Data</button>
        </form>
      </div>
</body>
</html>