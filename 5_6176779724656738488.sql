-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2020 pada 03.59
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipond`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bio_siswa`
--

CREATE TABLE `bio_siswa` (
  `no_induk` char(20) NOT NULL,
  `no_induk_temp` varchar(20) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` varchar(40) NOT NULL,
  `jk` varchar(40) NOT NULL,
  `k_agama` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `alamat_siswa` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(60) NOT NULL,
  `pekerjaan_ayah` varchar(60) NOT NULL,
  `pendidikan_ayah` varchar(20) NOT NULL,
  `no_hp_ayah` varchar(40) NOT NULL,
  `nama_ibu` varchar(60) NOT NULL,
  `pekerjaan_ibu` varchar(60) NOT NULL,
  `pendidikan_ibu` varchar(20) NOT NULL,
  `no_hp_ibu` varchar(40) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `no_telp_rmh` varchar(40) DEFAULT NULL,
  `nama_wali` varchar(60) DEFAULT NULL,
  `pekerjaan_wali` varchar(60) DEFAULT NULL,
  `alamat_wali` varchar(100) DEFAULT NULL,
  `hubungan_wali` varchar(40) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `nisn` varchar(100) DEFAULT NULL,
  `anak_ke` varchar(100) DEFAULT NULL,
  `diterima_dikelas` varchar(10) DEFAULT NULL,
  `diterima_tanggal` varchar(50) DEFAULT NULL,
  `status_dalam_keluarga` varchar(50) DEFAULT NULL,
  `no_telp_wali` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `bio_siswa` (`no_induk`, `no_induk_temp`, `nama_lengkap`, `nama_panggilan`, `tmp_lahir`, `tgl_lahir`, `jk`, `k_agama`, `foto`, `alamat_siswa`, `nama_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `no_hp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `no_hp_ibu`, `alamat_ortu`, `no_telp_rmh`, `nama_wali`, `pekerjaan_wali`, `alamat_wali`, `hubungan_wali`, `password`, `pendidikan_terakhir`, `nisn`, `anak_ke`, `diterima_dikelas`, `diterima_tanggal`, `status_dalam_keluarga`, `no_telp_wali`) VALUES
('1', '1', '1', '1', '1', '1', '1', 1, '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
('2', '2', '2', '2', '2', '2', '2', 2, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` char(5) NOT NULL,
  `gen_kelas` int(2) NOT NULL,
  `nm_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id_kelas` char(5) NOT NULL,
  `no_induk` char(20) NOT NULL,
  `k_jabatan_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id_kesehatan` int(11) NOT NULL,
  `no_induk` char(20) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `keluhan` varchar(70) NOT NULL,
  `obat` varchar(70) NOT NULL,
  `catatan` varchar(70) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran_detail`
--

CREATE TABLE `pelanggaran_detail` (
  `id_pelanggaran` int(11) NOT NULL,
  `no_induk` char(20) NOT NULL,
  `tindakan` varchar(70) NOT NULL,
  `catatan` varchar(70) NOT NULL,
  `poin` int(11) NOT NULL,
  `tgl_pelanggaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perizinan`
--

CREATE TABLE `perizinan` (
  `id_izin` bigint(20) NOT NULL,
  `no_induk` char(20) NOT NULL,
  `tgl_izin` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `penjemput` varchar(35) NOT NULL,
  `catatan` varchar(70) NOT NULL,
  `status_izin` char(13) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perizinan_kembali`
--

CREATE TABLE `perizinan_kembali` (
  `id_izin` bigint(20) NOT NULL,
  `no_induk` char(20) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status_kembali` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `no_induk` char(20) NOT NULL,
  `tgl_prestasi` date NOT NULL,
  `jenis_prestasi` varchar(70) NOT NULL,
  `catatan` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bio_siswa`
--
ALTER TABLE `bio_siswa`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD KEY `detail_kelas` (`id_kelas`),
  ADD KEY `detail_siswa` (`no_induk`);

--
-- Indeks untuk tabel `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id_kesehatan`),
  ADD KEY `kesehatan_siswa` (`no_induk`);

--
-- Indeks untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indeks untuk tabel `pelanggaran_detail`
--
ALTER TABLE `pelanggaran_detail`
  ADD KEY `pelanggaran_detail` (`id_pelanggaran`),
  ADD KEY `pelanggaran_siswa` (`no_induk`);

--
-- Indeks untuk tabel `perizinan`
--
ALTER TABLE `perizinan`
  ADD PRIMARY KEY (`id_izin`),
  ADD KEY `siswa_izin` (`no_induk`);

--
-- Indeks untuk tabel `perizinan_kembali`
--
ALTER TABLE `perizinan_kembali`
  ADD KEY `perizinan_kembali` (`id_izin`),
  ADD KEY `siswa_kembali` (`no_induk`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `prestasi_siswa` (`no_induk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kesehatan`
--
ALTER TABLE `kesehatan`
  MODIFY `id_kesehatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perizinan`
--
ALTER TABLE `perizinan`
  MODIFY `id_izin` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD CONSTRAINT `detail_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `detail_siswa` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`);

--
-- Ketidakleluasaan untuk tabel `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD CONSTRAINT `kesehatan_siswa` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`);

--
-- Ketidakleluasaan untuk tabel `pelanggaran_detail`
--
ALTER TABLE `pelanggaran_detail`
  ADD CONSTRAINT `pelanggaran_detail` FOREIGN KEY (`id_pelanggaran`) REFERENCES `pelanggaran` (`id_pelanggaran`),
  ADD CONSTRAINT `pelanggaran_siswa` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`);

--
-- Ketidakleluasaan untuk tabel `perizinan`
--
ALTER TABLE `perizinan`
  ADD CONSTRAINT `siswa_izin` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`);

--
-- Ketidakleluasaan untuk tabel `perizinan_kembali`
--
ALTER TABLE `perizinan_kembali`
  ADD CONSTRAINT `perizinan_kembali` FOREIGN KEY (`id_izin`) REFERENCES `perizinan` (`id_izin`),
  ADD CONSTRAINT `siswa_kembali` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`);

--
-- Ketidakleluasaan untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_siswa` FOREIGN KEY (`no_induk`) REFERENCES `bio_siswa` (`no_induk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
