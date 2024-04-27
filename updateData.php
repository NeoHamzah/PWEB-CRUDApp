<?php 
require "transaksi.php";

// ambil data di url
$id = $_GET['id'];

// ambil data mahasiswa berdasarkan id
$trs = Transaksi::selectSatu($id)[0];

if (isset($_POST["submit"])) {
    // cek apakah data berhasil diubah atau tidak
    if (Transaksi::update($id, $_POST['tanggal_transaksi'], $_POST['nama_penyewa'], $_POST['barang_disewa'], $_POST['jumlah_harga'], $_POST['nomor_telepon']) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!')
                document.location.href = 'dashboard.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!')
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
  <title>Sewa Kamera | Update Data</title>
  <link rel="stylesheet" href="style/CreateUpdateData.css">
</head>

<body>
  <?php include("sidebar.php") ?>

  <div class="container">
    <h1>Update Data Transaksi Sewa</h1>
    <form class="form" action="" method="post" enctype="multipart/form-data">
      <label for="tanggal_transaksi">Tanggal Transaksi: </label>
      <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" value="<?= $trs['tanggal_transaksi'] ?>" required>
      <label for="nama_penyewa">Nama Penyewa: </label>
      <input type="text" name="nama_penyewa" id="nama_penyewa" value="<?= $trs['nama_penyewa'] ?>" required>
      <label for="barang_disewa">Barang Disewa: </label>
      <input type="text" name="barang_disewa" id="barang_disewa" value="<?= $trs['barang_disewa'] ?>" required>
      <label for="jumlah_harga">Harga: </label>
      <input type="text" name="jumlah_harga" id="jumlah_harga" value="<?= $trs['jumlah_harga'] ?>" required>
      <label for="nomor_telepon">Nomor telepon : </label>
      <input type="text" name="nomor_telepon" id="nomor_telepon" value="<?= $trs['nomor_telepon'] ?>" required>

      <button type="submit" name="submit" class="update">Update Data</button>
    </form>
  </div>
</body>

</html>