<!DOCTYPE html>
<html lang="id">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Project 5 Pemrograman Berbasis Web Lanjutan</title>

      <link rel="shortcut icon" href="layouts/img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="layouts/bootstrap-icons/bootstrap-icons.css">
      <link rel="stylesheet" href="layouts/css/style.css">
</head>

<body class="bg-light">
      <div class="d-flex" id="wrapper">
            <aside class="text-dark" id="sidebar-wrapper">
                  <header class="sidebar-heading text-center position-relative">
                        <button class="btn btn-sm btn-outline-secondary d-md-none position-absolute top-0 end-0 m-2 menu-toggle" type="button" aria-label="Tutup menu">
                              <i class="bi bi-x-lg"></i>
                        </button>
                        <img src="layouts/img/delitekno.png" class="brand" alt="Logo">
                        <div class="fw-bold mt-2">Sistem Akademik</div>
                  </header>

                  <nav class="list-group list-group-flush p-3 gap-1">
                        <a href="index.php" class="list-group-item list-group-item-action rounded">
                              <i class="bi bi-house-door me-2"></i> Home
                        </a>
                        <a href="index.php?hal=mhsw" class="list-group-item list-group-item-action rounded">
                              <i class="bi bi-people me-2"></i> Mahasiswa
                        </a>
                        <a href="index.php?hal=dosen" class="list-group-item list-group-item-action rounded">
                              <i class="bi bi-person-badge me-2"></i> Dosen
                        </a>
                        <a href="index.php?hal=matkul" class="list-group-item list-group-item-action rounded">
                              <i class="bi bi-journal-bookmark me-2"></i> Matakuliah
                        </a>
                  </nav>
            </aside>

            <div class="sidebar-overlay menu-toggle"></div>

            <div id="page-content-wrapper">
                  <nav class="navbar bg-white border-bottom shadow-sm px-3 sticky-top">
                        <button class="btn btn-outline-primary menu-toggle" type="button" aria-label="Tampilkan atau sembunyikan menu">
                              <i class="bi bi-list fs-5"></i>
                        </button>
                        <span class="navbar-brand ms-3 mb-0 h1">Akademik</span>
                  </nav>

                  <main class="container-fluid p-3 p-md-4">
                        <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  $halaman = [
                        "mhsw", "mhsw_input", "mhsw_edit",
                        "dosen", "dosen_input", "dosen_edit",
                        "matkul", "matkul_input", "matkul_edit",
                  ];

                  if (isset($_GET['hal']) && in_array($_GET['hal'], $halaman, true)) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
                  </main>

                  <footer class="bg-white border-top text-secondary px-4 py-3">
                        Project 5 Pemrograman Berbasis Web
                  </footer>
            </div>
      </div>

      <script src="layouts/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script>
            document.querySelectorAll('.menu-toggle').forEach(function (button) {
                  button.addEventListener('click', function () {
                        document.getElementById('wrapper').classList.toggle('toggled');
                  });
            });
      </script>
</body>

</html>
