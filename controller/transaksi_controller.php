<?php

include_once 'model/transaksi_model.php';

class TransaksiController {
    static function add() {
        view('dash_page/layout', ['url' => 'view/transaksi_crud_page/add']);
    }

    static function saveAdd() {
        $post = array_map('htmlspecialchars', $_POST);
        $transaksi = Transaksi::create([
            'tanggal_transaksi' => $post['tanggal_transaksi'],
            'nama_penyewa' => $post['nama_penyewa'],
            'barang_disewa' => $post['barang_disewa'],
            'jumlah_harga' => $post['jumlah_harga'],
            'nomor_telepon' => $post['nomor_telepon'],
            'struk' => $post['struk'],
        ]);
        
        if ($transaksi) {
            header('Location: '.BASEURL.'dashboard');
        }
        else {
            header('Location: '.BASEURL.'dashboard/add?addFailed=true');
        }
    }

    static function edit() {
        view('dash_page/layout', [
            'url' => 'view/transaksi_crud_page/edit',
            'trs' => Transaksi::selectSatu($_GET['id'])
            ]);
    }

    static function saveEdit() {
        $post = array_map('htmlspecialchars', $_POST);
        $transaksi = Transaksi::update([
            'id_transaksi' => $post['id_transaksi'],
            'tanggal_transaksi' => $post['tanggal_transaksi'],
            'nama_penyewa' => $post['nama_penyewa'],
            'barang_disewa' => $post['barang_disewa'],
            'jumlah_harga' => $post['jumlah_harga'],
            'nomor_telepon' => $post['nomor_telepon'],
            'gambarLama' => $post['gambarLama'],
        ]);

        if ($transaksi) {
            header('Location: '.BASEURL.'dashboard');
        }
        // else {
        //     header('Location: '.BASEURL.'transaksi/edit?id='.$_GET['id'].'&editFailed=true');
        // }
    }

    static function remove() {

        $transaksi = Transaksi::delete($_GET['id']);
        if ($transaksi) {
            header('Location: '.BASEURL.'dashboard');
        }
        else {
            header('Location: '.BASEURL.'dashboard?removeFailed=true');
        }
    }
}