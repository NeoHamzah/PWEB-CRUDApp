<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Kamera | Update Data</title>
    <link rel="stylesheet" href="style/CreateUpdateData.css">
</head>
<body>
      <?php include("sidebar.php") ?>
      
      <div class="container">
      <h1>Update Data Transaksi Sewa</h1>
        <form class="form" action="">
            <label for="id">Id Transaksi: </label>
            <input type="text" name="id" id="id" disabled placeholder="1">
            <label for="tanggalTransaksi">Tanggal Transaksi: </label>
            <input type="text" name="tanggalTransaksi" id="tanggalTransaksi" placeholder="05-04-2024">
            <label for="nama">Nama Penyewa: </label>
            <input type="text" name="nama" id="nama" placeholder="Aril">
            <label for="barang">Barang Disewa: </label>
            <input type="text" name="barang" id="barang" placeholder="Sony A6000">
            <label for="harga">Harga: </label>
            <input type="text" name="harga" id="harga" placeholder="125.000">
            <label for="telp">Nomor telepon : </label>
            <input type="text" name="telp" id="telp" placeholder="083890768546">

            <button class="update">Update Data</button>
        </form>
      </div>
</body>
</html>