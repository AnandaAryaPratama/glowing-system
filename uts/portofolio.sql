-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2020 pada 05.22
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Master Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id_biodata`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `kewarganegaraan`, `kegiatan`) VALUES
(1, 'Ananda Arya Pratama', 'Jakarta', '08 Juli 2000', 'Laki - Laki', 'Villa Mutiara Serpong', 'Islam', 'Indonesia', 'Graphic Designer, Technology/IT, Web Developer, Bendahara HIMA, Programmer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `getintouch`
--

CREATE TABLE `getintouch` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `getintouch`
--

INSERT INTO `getintouch` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'hilman', 'n@gmail.com', ''),
(2, 'Test', 't@m.com', 'Test'),
(3, 'd', 'd@m.co', 'm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemampuan`
--

CREATE TABLE `kemampuan` (
  `id_biodata` int(10) NOT NULL,
  `id_kemampuan` int(10) NOT NULL,
  `nama_keahlianprof` varchar(100) NOT NULL,
  `nilai_keahlianprof` varchar(10) NOT NULL,
  `nama_keahlianpribadi` varchar(25) NOT NULL,
  `nilai_keahlianpribadi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kemampuan`
--

INSERT INTO `kemampuan` (`id_biodata`, `id_kemampuan`, `nama_keahlianprof`, `nilai_keahlianprof`, `nama_keahlianpribadi`, `nilai_keahlianpribadi`) VALUES
(1, 1, 'Ms. Office', '90%', 'Organisasi', '80%'),
(1, 2, 'Menguasai Photoshop', '70%', 'Kerja Tim', '90%'),
(1, 3, 'Menguasai CorelDraw', '70%', 'B. Indonesia', '90%'),
(1, 4, 'HTML/CSS', '50%', 'B. Inggris', '75%'),
(1, 5, 'Premiere Pro', '80%', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_biodata` int(10) NOT NULL,
  `id_pendidikan` int(10) NOT NULL,
  `tahun_sd` varchar(15) NOT NULL,
  `nama_sd` varchar(50) NOT NULL,
  `tahun_smp` varchar(15) NOT NULL,
  `nama_smp` varchar(50) NOT NULL,
  `tahun_sma` varchar(15) NOT NULL,
  `nama_sma` varchar(50) NOT NULL,
  `jurusan_sma` varchar(25) NOT NULL,
  `tahun_kuliah` varchar(15) NOT NULL,
  `nama_kuliah` varchar(50) NOT NULL,
  `jurusan_kuliah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_biodata`, `id_pendidikan`, `tahun_sd`, `nama_sd`, `tahun_smp`, `nama_smp`, `tahun_sma`, `nama_sma`, `jurusan_sma`, `tahun_kuliah`, `nama_kuliah`, `jurusan_kuliah`) VALUES
(1, 1, '2009 - 2012', 'SD Negeri Jelupang 01', '2012 - 2015', 'SMP Negeri 14 Tangsel', '2015 - 2018', 'SMK Swasta Fadilah', 'Multimedia', '2018 - Sekarang', 'Universitas Pembangunan Jaya', 'Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE `penelitian` (
  `id_biodata` int(10) NOT NULL,
  `id_penelitian` int(10) NOT NULL,
  `keterangan` text NOT NULL,
  `kode` varchar(25) NOT NULL,
  `tahun` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penelitian`
--

INSERT INTO `penelitian` (`id_biodata`, `id_penelitian`, `keterangan`, `kode`, `tahun`) VALUES
(1, 1, 'Pencatatan Ciptaan Kemenkumham Perancangan Desain Website Online Shop', 'EC00201940434', '16 Mei 2019'),
(1, 5, 'Pencatatan Ciptaan Kemenkumham Aplikasi JSDPKU 2.0', 'EC00202015943', '20 Mei 2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_biodata` int(10) NOT NULL,
  `id_pengalaman` int(10) NOT NULL,
  `foto_kerja` varchar(25) NOT NULL,
  `nama_kerja` varchar(100) NOT NULL,
  `tahun_kerja` varchar(100) NOT NULL,
  `deskripsi_kerja` text NOT NULL,
  `foto_panitia` varchar(25) NOT NULL,
  `nama_acara` varchar(50) NOT NULL,
  `deskripsi_panitia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengalaman`
--

INSERT INTO `pengalaman` (`id_biodata`, `id_pengalaman`, `foto_kerja`, `nama_kerja`, `tahun_kerja`, `deskripsi_kerja`, `foto_panitia`, `nama_acara`, `deskripsi_panitia`) VALUES
(1, 1, 'pizzahut.png', 'Magang Pizza Hut', 'July 2019 - September 2019', 'Bekerja di sebuah restoran Pizza Hut Alam Sutera sebagai Server', 'forka.jpg', 'Forka Fest 2019', 'Menjadi Panitia dalam acara Forka Fest 2019 sebagai Panitia Perlengkapan'),
(1, 3, 'upj.png', 'Magang Universitas Pembangunan Jaya', 'Januari 2019 - Desember 2019', 'Sebagai fasilitator JSDP Fakultas Teknologi dan Desain', 'SP.jpg', 'Sumpah Pemuda 2020', 'Menjadi Panitia dalam acara Sumpah Pemuda 2020 sebagai Bendahara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `id_biodata` int(11) NOT NULL,
  `id_sosmed` int(11) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id_biodata`, `id_sosmed`, `instagram`, `facebook`, `github`) VALUES
(1, 1, 'https://www.instagram.com/annda_arya/', 'https://www.facebook.com/Ananda.Arya.Pratama', 'https://github.com/AnandaAryaPratama');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indeks untuk tabel `getintouch`
--
ALTER TABLE `getintouch`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kemampuan`
--
ALTER TABLE `kemampuan`
  ADD PRIMARY KEY (`id_kemampuan`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- Indeks untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- Indeks untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- Indeks untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id_sosmed`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_biodata` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `getintouch`
--
ALTER TABLE `getintouch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kemampuan`
--
ALTER TABLE `kemampuan`
  MODIFY `id_kemampuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id_sosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kemampuan`
--
ALTER TABLE `kemampuan`
  ADD CONSTRAINT `kemampuan_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id_biodata`);

--
-- Ketidakleluasaan untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id_biodata`);

--
-- Ketidakleluasaan untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD CONSTRAINT `penelitian_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id_biodata`);

--
-- Ketidakleluasaan untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id_biodata`);

--
-- Ketidakleluasaan untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD CONSTRAINT `sosmed_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id_biodata`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
