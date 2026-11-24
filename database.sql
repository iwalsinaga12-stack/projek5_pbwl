CREATE DATABASE IF NOT EXISTS dbakademik5;
USE dbakademik5;

CREATE TABLE IF NOT EXISTS tb_mhsw (
      mhsw_id INT(11) NOT NULL AUTO_INCREMENT,
      mhsw_nim VARCHAR(25) NOT NULL,
      mhsw_nama VARCHAR(100) NOT NULL,
      mhsw_alamat TEXT DEFAULT NULL,
      PRIMARY KEY(mhsw_id),
      UNIQUE KEY(mhsw_nim)
);

CREATE TABLE IF NOT EXISTS tb_dosen (
      dosen_id INT(11) NOT NULL AUTO_INCREMENT,
      dosen_nip VARCHAR(25) NOT NULL,
      dosen_nama VARCHAR(100) NOT NULL,
      dosen_golongan VARCHAR(100) DEFAULT NULL,
      PRIMARY KEY(dosen_id),
      UNIQUE KEY(dosen_nip)
);

CREATE TABLE IF NOT EXISTS tb_matakuliah (
      matkul_id INT(11) NOT NULL AUTO_INCREMENT,
      matkul_kode VARCHAR(25) NOT NULL,
      matkul_nama VARCHAR(100) NOT NULL,
      matkul_sks TINYINT(3) NOT NULL,
      matkul_semester TINYINT(3) NOT NULL,
      PRIMARY KEY(matkul_id),
      UNIQUE KEY(matkul_kode)
);

-- Data contoh (opsional)
INSERT IGNORE INTO tb_mhsw (mhsw_nim, mhsw_nama, mhsw_alamat) VALUES
('2021001', 'Andi Pratama', 'Jl. Merdeka No. 10, Medan'),
('2021002', 'Siti Aminah', 'Jl. Sudirman No. 25, Medan');

INSERT IGNORE INTO tb_dosen (dosen_nip, dosen_nama, dosen_golongan) VALUES
('198001012005011001', 'Dr. Budi Santoso, M.Kom', 'III/d'),
('198503152010122002', 'Rina Marlina, M.T', 'III/c');

INSERT IGNORE INTO tb_matakuliah (matkul_kode, matkul_nama, matkul_sks, matkul_semester) VALUES
('TIF101', 'Algoritma dan Pemrograman', 3, 1),
('TIF305', 'Pemrograman Berbasis Web Lanjutan', 3, 5);
