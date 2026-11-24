# Project 5 – Sistem Akademik (PHP OOP + Composer + Bootstrap 5)

Aplikasi CRUD **Mahasiswa**, **Dosen**, dan **Matakuliah** menggunakan PHP OOP,
PDO (MySQL), autoload PSR-4 Composer, dan tampilan responsif Bootstrap 5 +
Bootstrap Icons (disertakan lokal, tanpa CDN). Dibuat untuk mata kuliah
Pemrograman Berbasis Web Lanjutan.

## Struktur Folder

```
├── app/                 # Kelas model (namespace App): Mahasiswa, Dosen, Matakuliah
├── inc/Koneksi.php      # Kelas koneksi PDO (namespace Inc), diwarisi oleh model
├── layouts/             # Bootstrap, Bootstrap Icons, CSS, gambar
├── mhsw*.php            # Halaman Mahasiswa (daftar, input, edit, proses)
├── dosen*.php           # Halaman Dosen
├── matkul*.php          # Halaman Matakuliah
├── index.php            # Template utama + router (?hal=...)
├── main.php             # Dashboard
└── database.sql         # Skema database + data contoh
```

## Cara Menjalankan

1. Letakkan folder project di `htdocs` (XAMPP) atau `www` (Laragon).
2. Nyalakan **Apache** dan **MySQL**.
3. Di phpMyAdmin, **import** `database.sql` (membuat database `dbakademik`; aman diimport ulang).
4. Sesuaikan koneksi di `inc/Koneksi.php` bila perlu (default: `localhost`, user `root`, tanpa password).
5. Jika folder `vendor/` tidak ada, jalankan `composer install`.
6. Buka `http://localhost/<nama-folder>/`.

## Fitur

| Modul      | Tabel           | Fitur                       |
|------------|-----------------|-----------------------------|
| Mahasiswa  | `tb_mhsw`       | Tampil, Tambah, Edit, Hapus |
| Dosen      | `tb_dosen`      | Tampil, Tambah, Edit, Hapus |
| Matakuliah | `tb_matakuliah` | Tampil, Tambah, Edit, Hapus |

## Penulis

Suendri – mr.suendri@gmail.com
