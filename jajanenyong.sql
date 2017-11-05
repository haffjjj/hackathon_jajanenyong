-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Nov 2017 pada 04.42
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jajanenyong`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) NOT NULL,
  `id_kuliner` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `id_kuliner`, `id_users`, `komentar`) VALUES
(1, 1, 3, 'Makananya sangat enak, rekomendasi :)'),
(2, 1, 2, 'komentar ke2'),
(3, 1, 2, 'komentar ke 3'),
(4, 7, 2, 'yooo'),
(5, 1, 2, 'omomom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
--

CREATE TABLE `kuliner` (
  `id` int(10) NOT NULL,
  `kategori` enum('makanan','minuman') NOT NULL,
  `gambar_kuliner` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `bahan` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_rata` int(100) NOT NULL,
  `rating` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuliner`
--

INSERT INTO `kuliner` (`id`, `kategori`, `gambar_kuliner`, `deskripsi`, `bahan`, `nama`, `harga_rata`, `rating`) VALUES
(1, 'makanan', 'mendoan.jpg', 'Kata mendoan dianggap berasal dari bahasa Banyumasan, mendo yang berarti setengah matang atau lembek. Mendoan berarti memasak dengan minyak panas yang banyak dengan cepat sehingga masakan tidak matang benar. Bahan makanan yang paling sering dibuat mendoan adalah tempe dan tahu.', 'tempe,daun bawang,daun beras, tepung terigu, air, minyak goreng, bawang putih, bawang merah, ketumbar, merica, garam', 'Mendoan', 1000, '4'),
(2, 'minuman', 'wedangronde.jpg', 'Wedang Ronde (atau sering disingkat hanya \"ronde\") merupakan minuman tradisional asli dari Jawa selain jamu dan dawet. \"Wedang\" dalam Bahasa Jawa berarti \"minuman\". Sedangkan Ronde adalah adonan khusu yang terdiri dari campuran tepung beras dan gula merah berbentuk bulatan-bulatan dan dibagian dalamnya berisi kacang yang dihancurkan. Untuk membentuk Wedang Ronde, adonan ronde ini dicelupkan ke dalam air jahe yang masih panas', 'bunga pohon kelapa,bunga pohon aren', 'Wedang Ronde', 6000, '3'),
(3, 'makanan', 'gethuksokaraja.jpg', 'Getuk goreng adalah penganan khas Sokaraja yang manis dan gurih, dibuat dari singkong dan dibumbui gula kelapa. Getuk goreng ditemukan secara tidak sengaja pada tahun 1918 oleh Sanpirngad, seorang penjual nasi keliling di daerah Sokaraja. Pada saat itu getuk yang dijual tidak laku, sehingga dia mencari akal agar getuk tersebut masih bisa dikonsumsi. Kemudian, getuk yang tidak habis dijual pada hari itu dia goreng dan dijual lagi. Ternyata, makanan baru tersebut digemari oleh para pembeli.[1]', 'singkong,gula merah,tepung beras,minyak goreng,garam', 'Gethuk Sokaraja', 3000, '5'),
(4, 'makanan', 'nopia.jpg', 'Nopia merupakan makanan yang terbuat dari adonan tepung terigu yang diisi dengan gula merah serta dipanggang dengan tungku khusus yang terbuat dari tanah liat dan menggunakan kayu bakar dari pelepah pohon kelapa. Memiliki tekstur kulit yang keras dan renyah berisi adonan gula merah dengan rasa bawang merah goreng. Banyak diproduksi di kota Purbalingga dan Banyumas (18 kilometer arah tenggara Kota Purwokerto). Selain Nopia, adapula Mino alias mini nopia atau nopia berukuran yang kecil.', 'gula pasir,terigu,air,minyak goreng, coklat bubu, susu kental manis,mentega', 'Nopia', 50000, '4'),
(5, 'makanan', 'cimplung.jpg', 'Makanan khas Banyumas yang satu ini berasal dari kata cemplung yang artinya masuk ke dalam air. Air disini yang dimaksud adalah air nira dalam pembuatan gula merah.', 'singkong,gula merah,air,vanili,garam', 'Cimplung', 7999, '5'),
(6, 'minuman', 'cau.jpg', 'Cau merupakan cincau yang dibuat dari daun cau. Cau mirip dengan cincau namun warna dan teksturnya sedikit berbeda. Cau selain enak juga mempunyai manfaat yang banyak untuk tubuh.', 'daun cincau,air hangat,gula merah,garam,santan,daun pandan', 'Cau', 5983, '4'),
(7, 'minuman', 'esduren.jpg', 'Di siang yang terik enaknya memang menyegarkan tenggorokan dengan minum es duren. Tekstur durian yang legit dan empuk dicampur dengan santan dan susu coklat menjadi olahan minuman khas yang pas.', 'durian segar,gula,susu cair,air panas,air matang', 'Es Duren', 15999, '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual_kuliner`
--

CREATE TABLE `penjual_kuliner` (
  `id` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `id_kuliner` int(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `lain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjual_kuliner`
--

INSERT INTO `penjual_kuliner` (`id`, `id_users`, `id_kuliner`, `harga`, `lain`) VALUES
(2, 2, 3, 9777, 'Gehuk dari kami lebih enak dan dibuat dengan ketela piihan'),
(3, 2, 1, 123, 'Lebih enak'),
(4, 5, 1, 4545, '45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(10) NOT NULL,
  `users_pembeli` int(10) NOT NULL,
  `users_penjual` int(10) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(2, 'penjual', '$2y$10$GDWTHjDll/FSvq3uvIvn.u0Tm2.y4UsX7oRFpvIbYZjLf6LbaU4Pi', '2'),
(3, 'pengguna', '$2y$10$DbpIK/hnKRj89.HAktIepeTMUxBewe3ooQFUXEsuzIcM2S1Gi5ulS', '3'),
(4, 'jondes', '$2y$10$2KhWvNUut2UISMm6lsG8NudwV3vDkG67ihmY2cDexFsY1ke6jradi', '3'),
(5, 'kuda', 'kuda', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_spesifik`
--

CREATE TABLE `users_spesifik` (
  `id` int(10) NOT NULL,
  `id_users` int(10) NOT NULL,
  `gambar_users` varchar(255) NOT NULL,
  `toko` varchar(100) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `jenis_kelamin` enum('l','p') NOT NULL,
  `perkerjaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_spesifik`
--

INSERT INTO `users_spesifik` (`id`, `id_users`, `gambar_users`, `toko`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `perkerjaan`, `alamat`) VALUES
(1, 2, '', 'Toko A', 'Gethuk', 'Haji Slamet', 'l', 'penjual', 'Sokaraja'),
(2, 5, 'none', 'Warung Serba Ada', 'Lasmini', 'Sulastri', 'p', 'Toko', 'DI Panjaitan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_kuliner` (`id_kuliner`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjual_kuliner`
--
ALTER TABLE `penjual_kuliner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_kuliner` (`id_kuliner`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_spesifik`
--
ALTER TABLE `users_spesifik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_users` (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penjual_kuliner`
--
ALTER TABLE `penjual_kuliner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_spesifik`
--
ALTER TABLE `users_spesifik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_kuliner`) REFERENCES `kuliner` (`id`);

--
-- Ketidakleluasaan untuk tabel `penjual_kuliner`
--
ALTER TABLE `penjual_kuliner`
  ADD CONSTRAINT `penjual_kuliner_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `penjual_kuliner_ibfk_2` FOREIGN KEY (`id_kuliner`) REFERENCES `kuliner` (`id`);

--
-- Ketidakleluasaan untuk tabel `users_spesifik`
--
ALTER TABLE `users_spesifik`
  ADD CONSTRAINT `users_spesifik_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
