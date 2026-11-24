<?php

require_once "inc/Koneksi.php";
require_once "app/Mahasiswa.php";

$mhsw = new App\Mahasiswa();

if (isset($_POST['btn_simpan'])) {
    $mhsw->simpan();
    header("location:index.php?hal=mhsw");
}

if (isset($_POST['btn_update'])) {
    $mhsw->update();
    header("location:index.php?hal=mhsw");
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $mhsw->delete($_GET['id']);
    header("location:index.php?hal=mhsw");
}
