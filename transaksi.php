<?php
require_once 'database.php';

class Transaksi
{
    static function select()
    {
        global $conn;
        $sql = "SELECT * FROM transaksi";
        $result = mysqli_query($conn, $sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($a = $result->fetch_array()) {
                $data[] = $a;
            }
        }
        return $data;
    }

    static function selectSatu($id_transaksi)
    {
        global $conn;
        $sql = "SELECT * FROM transaksi WHERE id_transaksi=" . $id_transaksi;
        $result = mysqli_query($conn, $sql);
        $data = array();
        if ($result->num_rows > 0) {
            while ($a = $result->fetch_array()) {
                $data[] = $a;
            }
        }
        return $data;
    }

    static function create($tanggal_transaksi, $nama_penyewa, $barang_disewa, $jumlah_harga, $nomor_telepon)
    {
        global $conn;
        $sql = "INSERT INTO transaksi(tanggal_transaksi, nama_penyewa, barang_disewa, jumlah_harga, nomor_telepon) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssis', $tanggal_transaksi, $nama_penyewa, $barang_disewa, $jumlah_harga, $nomor_telepon);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function update($id_transaksi, $tanggal_transaksi, $nama_penyewa, $barang_disewa, $jumlah_harga, $nomor_telepon)
    {
        global $conn;
        $stmt = $conn->prepare("UPDATE transaksi set tanggal_transaksi=?, nama_penyewa=?, barang_disewa=?, jumlah_harga=?, nomor_telepon=? WHERE id_transaksi=" . $id_transaksi);
        $stmt->bind_param("sssis", $tanggal_transaksi, $nama_penyewa, $barang_disewa, $jumlah_harga, $nomor_telepon);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }

    static function delete($id_transaksi)
    {
        global $conn;
        $query = "DELETE FROM transaksi WHERE id_transaksi=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $id_transaksi);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        return $result;
    }
}
