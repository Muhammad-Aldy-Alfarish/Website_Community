-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2021 pada 15.42
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(800) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `kegiatan`, `tgl`, `waktu`) VALUES
(1, 'Touring Harley Davidson Ke Bali', '2021-03-29', '08.00 WIB'),
(2, 'Harley Davidson Touring To Samosir', '2021-04-10', '08.00 WIB'),
(3, 'Harley Davidson Tourning To Banda Aceh', '2021-04-13', '08.00 WIB'),
(4, 'Santunan Ke Panti Asuhan', '2021-04-16', '08.00 WIB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `article` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `judul`, `image`, `article`) VALUES
(1, '3 Pengendara Moge Minta Maaf Gara-gara Melintas di Jalur Mobil Jembatan Suramadu', '../assets/news/a.jpg', 'Surabaya - Rombongan Harley Davidson yang melintasi Jembatan Suramadu dilaporkan oleh warga. Warga mempermasalahkan rombongan itu yang tidak melewati jalur motor, tetapi melewati jalur mobil.Polisi yang mendapatkan laporan segera menyelidiki dan menemukan rombongan yang terdiri dari 3 orang itu. Mereka akhirnya meminta maaf dan membuat surat pernyataan tak akan mengulangi lagi perbuatannya.'),
(2, 'Harley-Davidson Pan America Goda Para Pecinta Adventure', '../assets/news/b.jpg', 'Pan America akhirnya resmi dirilis. Hadir dalam dua tipe, yakni Standar dan Special, moge ini mengandalkan mesin Revolution Max V-twin berkekuatan 150 Tk.Inti dari Pan America yakni mesin Revolution Max 1.250 cc, liquid-cooled, 60-derajat V-twin. Meski tetap mengusung gaya khas HD, jantung mekanisnya lebih fresh dan modern. Bedanya sekarang sudah mengandalkan pendingin cairan.Revolution Max Harley ini tercatat dapat menghasilkan tenaga 150 Hp. '),
(3, 'Resmi Berusia Satu Abad, Indian Chief Hadirkan Sepeda Motor Terbaru', '../assets/news/c.jpg\r\n', 'Bagi para penggemar sepeda motor asal Amerika Serikat, mereka pasti sudah tidak asing lagi dengan brand Indian Chief. Sejak diperkenalkan pertama kali tahun 1921, motor ini terus mendapat respons positif dari para penggemar motor gede di seluruh dunia.Terlebih motor ini hadir dengan desain yang sangat maskulin, sehingga mampu menyihir para penyuka motor berdesain cruiser ini.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmhs`
--

CREATE TABLE `tmhs` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(9) NOT NULL DEFAULT '0000',
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `uang_pendaftaran` varchar(200) NOT NULL DEFAULT 'Rp. 500.000',
  `uang_kas` varchar(200) NOT NULL DEFAULT 'Rp 10.000/Bulan',
  `uang_sumbangan` varchar(200) NOT NULL DEFAULT 'Rp. 0',
  `detail` varchar(800) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmhs`
--

INSERT INTO `tmhs` (`id_mhs`, `nim`, `nama`, `alamat`, `uang_pendaftaran`, `uang_kas`, `uang_sumbangan`, `detail`, `img`) VALUES
(1, '15.50.001', 'Muhammad Hafid', 'Tarakan, Kalimantan Utara', 'Rp. 500.000', 'Rp 10.000/Bulan', 'Rp. 12.000', 'akajhfkjahfkajhkjdhfkjdkdhakakshlKASFHKAJHFKJAHKJFHLJKDHFEUUEYFIWUMNZXBCZMNBMAGFAGFagfjgfuagaghjagejhgafgyeakfhlewuewufelhwehueluefkuhkjdsfkjhchkzxhjc,zhdjjfhwuwhjzxhjfhkahfkjahfhueue', '../assets/face-2.jpg'),
(2, '15.51.002', 'Muhammad Uwais', 'Juata Laut, Tarakan', 'Rp. 500.000', 'Rp 10.000/Bulan', 'Rp. 10.000', 'ajakjfhajhfhajfhakjfhkajhsfjahfasfanambasnbafmhgmhegfjquqwigfiuqfiukmcnbmanbaabm bcmamabcmbwjhegjgeu jwhkjwhquwiquyqfiuyfiqumnanbmbcabcmbamannbamc ', '../assets/face-1.jpg'),
(3, '15.30.001', 'Indrianti bin Mansura', 'Lingkas Ujung, Tarakan', 'Rp. 500.000', 'Rp 10.000/Bulan', 'Rp. 15.000', 'akajhfkjahfkajhkjdhfkjdkdhakakshlKASFHKAJHFKJAHKJFHLJKDHFEUUEYFIWUMNZXBCZMNBMAGFAGFagfjgfuagaghjagejhgafgyeakfhlewuewufelhwehueluefkuhkjdsfkjhchkzxhjc,zhdjjfhwuwhjzxhjfhkahfkjahfhueuecjdshfkjh jahskajhakjhkajhakjdhuwqyciuywxcmcmcme', '../assets/face-2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `profileImage` varchar(255) DEFAULT NULL,
  `registerDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userID`, `firstName`, `lastName`, `email`, `password`, `profileImage`, `registerDate`) VALUES
(1, 'Muhammad', 'Alfarish', 'muhammadaldy@gmail.com', '$2y$10$VPNf.YQRdjquYpUnk8J3i.Brof.fUKourW7tDVsiZPYXnpCuV4uL.', './assets/profile/beard.png', '2021-02-26 09:51:33'),
(2, 'ghfjds', 'hfdjs', 'hgfjdskdjfhj@gmil.com', '$2y$10$D8rwDR0yiZkSX1fwsGyduunxc3Iun/.WmPGq6TfK4OyDlsB.hku5K', './assets/profile/beard.png', '2021-02-27 11:06:24'),
(3, 'gfhdjkfgbfdjfb', 'bgfhdjskdb', 'hgfdjsgb@gmaic.om', '$2y$10$TmKY4KDC2gHBa3eIMMe30.BGIOMsO6bHwnYTF6O.t4Mm/mjSycLN6', './assets/profile/beard.png', '2021-02-27 11:06:48'),
(4, 'bhfdshfj', 'fjdskdf', 'test819@gmail.com', '$2y$10$1IyqVwCGeSKPIs9cpKusAeqilEK3R1Kv6nnygIdYQhC0Zm/d54XOK', './assets/profile/beard.png', '2021-02-27 11:07:12'),
(5, 'sate', 'balado', 'saturnus@gmail.com', '$2y$10$DiOG4BG2EjR1zbUgcU9u1OAaTVNlFhhjU3Q84r6VGoN4LGio34w26', './assets/profile/beard.png', '2021-02-28 09:14:15'),
(6, 'udin', 'santoso', 'santoso@gmail.com', '$2y$10$BsgtG/JGngVlpbgk6jORyOa2PaFJUZwqu/E8Qx9MJqBSYmMV47.Ne', '', '2021-02-28 09:17:35'),
(7, 'Ridho', 'Hauzan', 'dotcomhomo@gmail.com', '$2y$10$h6wP4aQ9ehpK9pM3AiZPEeN20ZVe/HsdhFjYR.QZ6kSwMEDB6yFdW', './assets/profile/beard.png', '2021-02-28 20:14:59'),
(9, 'Arya', 'Rio', 'wer@gmail.com', '$2y$10$p2k9D88lfTRIaTxDGjRpqu39z3nE0pTvYxYMHw4aAyCal158mvDT6', './assets/profile/beard.png', '2021-03-24 08:42:43'),
(10, 'Arya', 'Rio', 'wer@gmail.com', '$2y$10$QhXLToeYB6VzSdoQyeGdhO.3TsWsI2UZoD6rpWzy6HeVPg2Y9IVUa', './assets/profile/beard.png', '2021-04-01 14:07:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tmhs`
--
ALTER TABLE `tmhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tmhs`
--
ALTER TABLE `tmhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
