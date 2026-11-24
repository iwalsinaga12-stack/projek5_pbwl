<?php

require_once "inc/Koneksi.php";
require_once "app/Matakuliah.php";

$matkul = new App\Matakuliah();

if (isset($_POST['btn_simpan'])) {
    $matkul->simpan();
    header("location:index.php?hal=matkul");
}

if (isset($_POST['btn_update'])) {
    $matkul->update();
    header("location:index.php?hal=matkul");
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $matkul->delete($_GET['id']);
    header("location:index.php?hal=matkul");
}
