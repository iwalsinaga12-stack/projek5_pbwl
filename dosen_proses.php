<?php

require_once "inc/Koneksi.php";
require_once "app/Dosen.php";

$dosen = new App\Dosen();

if (isset($_POST['btn_simpan'])) {
    $dosen->simpan();
    header("location:index.php?hal=dosen");
}

if (isset($_POST['btn_update'])) {
    $dosen->update();
    header("location:index.php?hal=dosen");
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $dosen->delete($_GET['id']);
    header("location:index.php?hal=dosen");
}
