<?php
require_once 'transaksi.php';

$tanggalKosong = false;
$namaKosong = false;
$namaPendek = false;
$namaPanjang = false;
$barangKosong = false;
$barangPanjang = false;
$barangPendek = false;
$hargaKosong = false;
$hargaStr = false;
$hargaMin = false;
$hargaMax = false;
$nomorKosong = false;
$nomorPanjang = false;
$nomorPendek = false;


if (isset($_POST['submit'])) {

    if (empty($_POST['tanggal_transaksi'])) {
        $tanggalKosong = true;
    } 
    
    if (empty($_POST['nama_penyewa'])) {
        $namaKosong = true;
    } elseif (strlen(($_POST['nama_penyewa'])) < 3) {
        $namaPendek = true;
    } elseif (strlen(($_POST['nama_penyewa'])) > 50) {
        $namaPanjang = true;
    }

    if (empty($_POST['barang_disewa'])) {
        $barangKosong = true;
    } elseif (strlen(($_POST['barang_disewa'])) < 5) {
        $barangPendek = true;
    } elseif (strlen(($_POST['barang_disewa'])) > 200) {
        $barangPanjang = true;
    }

    if (empty($_POST['jumlah_harga'])) {
        $hargaKosong = true;
    } elseif (is_numeric($_POST['jumlah_harga']) == false) {
        $hargaStr = true;
    } elseif (($_POST['jumlah_harga']) < 1000) {
        $hargaMin = true;
    } elseif (($_POST['jumlah_harga']) > 9999999) {
        $hargaMax = true;
    }

    if (empty($_POST['nomor_telepon'])) {
        $nomorKosong = true;
    } elseif (strlen(($_POST['nomor_telepon'])) < 10) {
        $nomorPendek = true;
    } elseif (strlen(($_POST['nomor_telepon'])) > 20) {
        $nomorPanjang = true;
    }
    
    if ($tanggalKosong != true && $namaKosong != true && $namaPendek != true && $namaPanjang != true && $barangKosong != true && $barangPendek != true && $barangPanjang != true && $hargaKosong != true && $hargaStr != true && $hargaMin != true && $hargaMax != true && $nomorKosong != true && $nomorPendek != true && $nomorPanjang != true) {
        // cek apakah data berhasil ditambahkan atau tidak
        if (Transaksi::create($_POST) > 0) {
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
            <?php if ($tanggalKosong == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Tanggal tidak boleh kosong!</p>
            <?php endif ?>
            <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" value="<?php if (isset($_POST['submit'])) {echo($_POST['tanggal_transaksi']);} ?>">
            <label for="nama_penyewa">Nama Penyewa: </label>
            <?php if ($namaKosong == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Nama tidak boleh kosong!</p>
            <?php endif ?>
            <?php if ($namaPendek == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Nama harus memiliki minimal 3 karakter!</p>
            <?php endif ?>
            <?php if ($namaPanjang == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Nama maksimal 50 karakter!</p>
            <?php endif ?>
            <input type="text" name="nama_penyewa" id="nama_penyewa" value="<?php if (isset($_POST['submit'])) {echo($_POST['nama_penyewa']);} ?>">
            <label for="barang_disewa">Barang Disewa: </label>
            <?php if ($barangKosong == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Barang tidak boleh kosong!</p>
            <?php endif ?>
            <?php if ($barangPendek == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Barang harus memiliki minimal 5 karakter!</p>
            <?php endif ?>
            <?php if ($barangPanjang == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Barang maksimal 200 karakter!</p>
            <?php endif ?>
            <input type="text" name="barang_disewa" id="barang_disewa" value="<?php if (isset($_POST['submit'])) {echo($_POST['barang_disewa']);} ?>">
            <label for="jumlah_harga">Harga: </label>
            <?php if ($hargaKosong == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Harga tidak boleh kosong!</p>
            <?php endif ?>
            <?php if ($hargaStr == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Harga harus berisi angka!</p>
            <?php endif ?>
            <?php if ($hargaMin == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Harga minimal 1000!</p>
            <?php endif ?>
            <?php if ($hargaMax == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Harga maximal 9.999.999!</p>
            <?php endif ?>
            <input type="text" name="jumlah_harga" id="jumlah_harga" value="<?php if (isset($_POST['submit'])) {echo($_POST['jumlah_harga']);} ?>">
            <label for="nomor_telepon">Nomor telepon : </label>
            <?php if ($nomorKosong == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Nomor tidak boleh kosong!</p>
            <?php endif ?>
            <?php if ($nomorPendek == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Nomor minimal 10 karakter!</p>
            <?php endif ?>
            <?php if ($nomorPanjang == true) : ?>
                <p style="color: red; font-size: 12px; font-weight: 600;">Nomor maksimal 20 karakter!</p>
            <?php endif ?>
            <input type="text" name="nomor_telepon" id="nomor_telepon" value="<?php if (isset($_POST['submit'])) {echo($_POST['nomor_telepon']);} ?>">
            <label for="struk">Struk : </label>
            <input type="file" name="struk" id="struk">

            <button type="submit" name="submit" class="create">Tambah Data</button>
        </form>
    </div>
</body>

</html>