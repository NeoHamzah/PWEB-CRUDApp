<?php

include_once 'model/transaksi_model.php';

class DashboardController {
    static function index() {
        view('dash_page/layout', ['transaksi' => Transaksi::select()]);
    }

    // static function transaksi() {
    //     view('dash_page/layout', ['url' => 'transaksi', 'transaksi' => Transaksi::select(), 'user' => $_SESSION['user']]);
    // }
}