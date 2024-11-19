-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2023 pada 09.14
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kapalstar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bph`
--

CREATE TABLE `bph` (
  `id` int(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bph`
--

INSERT INTO `bph` (`id`, `foto`) VALUES
(1, '7349Poster Bagan Struktur Organisasi Kelas Estetik Lucu Krem Oranye.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataanggota`
--

CREATE TABLE `dataanggota` (
  `no` int(11) NOT NULL,
  `angkatan` varchar(30) NOT NULL,
  `nia` varchar(50) NOT NULL,
  `nama` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dataanggota`
--

INSERT INTO `dataanggota` (`no`, `angkatan`, `nia`, `nama`) VALUES
(1, '15', '15250403006', 'David Aldi Royhan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(20) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `google_form` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `whatsapp`, `instagram`, `google_form`) VALUES
(1, '085608629588', 'kapalstar_stieaa', 'forms.gle/PPvSL1pVsasn328n9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(30) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nomer` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `nim`, `nomer`, `deskripsi`) VALUES
(14, 'David', '32423', '24235', '352534');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `nama_kegiatan`, `deskripsi`, `tanggal`, `foto`) VALUES
(9, 'Latihan rutin Panjat Wall', 'Disini kami latihan manjat wall untuk melatih fisik kita, latihan ini biasanya diadakan sebulan sekali', '2023-08-16', '28860WhatsApp Image 2023-07-12 at 14.30.35.jpeg'),
(10, 'Upacara 17 Agustus 2022', 'Disini Kapal Star bersama mapala dan sispala lain mengadakan acara upacara bersama di bukit krapyak', '2022-08-17', '83769WhatsApp Image 2023-07-12 at 13.50.35.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `no` int(50) NOT NULL,
  `nama_kegiatan` varchar(20) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `sasaran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`no`, `nama_kegiatan`, `tujuan`, `sasaran`) VALUES
(1, 'Orientasi', 'Perkenalan organisasi dan Pengakraban sesama anggota dan calon anggota', 'Anggota dan Calon Anggota'),
(2, 'Diklatsar', 'Memberi wawasan dan ilmu kepecinta alam', 'Calon Anggota'),
(3, 'Anniversary', 'Peringatan Hari Jadi Organisasi', 'Seluruh Mahasiswa Pecinta Alam, Siswa Pecinta Alam, Organisasi Pecinta Alam daerah Lamongan, Jombang, Mojokerto, dan Surabaya'),
(4, 'Dikljut', 'Memberi wawasan dan ilmu pecinta alam lanjutan', 'Anggota'),
(5, 'Penghijauan Bersama ', 'Pengakraban Anggota Kapalstar dengan Sispala Mojokerto dan penghijauan bersama Sispala Mojokerto', 'Anggota dan Siswa Pecinta Alam Mojokerto'),
(6, 'Penghijauan Bersama ', 'Menjadikan Kampus Stie Al-Anwar tempat belajar yang nyaman', '	Anggota Kapalstar dan Anggota Himaka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nia` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `nia`, `password`) VALUES
(1, 'David Aldi Royhan', '15250403006', '9be661053116257b2d44ec81b9b502e9'),
(2, 'rania cantik', 'rania', 'd6bd4288dbcf5d2ae2053a35389e8c56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bph`
--
ALTER TABLE `bph`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dataanggota`
--
ALTER TABLE `dataanggota`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bph`
--
ALTER TABLE `bph`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dataanggota`
--
ALTER TABLE `dataanggota`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `proker`
--
ALTER TABLE `proker`
  MODIFY `no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2225;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
