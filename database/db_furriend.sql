-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 06:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_furriend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'pelajarfisma', '123', 'Fisma Subani');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(5) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Fast', 30000),
(2, 'Semi-Fast', 15000),
(3, 'Standard', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'refila@furriend.io', 'refila', 'Refila Dyah Ghizanda Wardoyo', '085606242493', 'Jl. Kacangan'),
(2, 'shandy@furriend.io', 'shandy', 'Shandy Ilham Alamsyah', '083857224226', 'Jl. Asembagus'),
(3, 'alvin@furriend.io', 'alvin', 'Alvin Febrianto', '089666666666', 'Jl. Kandangan IIIA'),
(4, 'fisma@furriend.io', 'fisma', 'Fisma Subani', '081358961966', 'Jl. Anggur 4');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `bank` varchar(250) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti`) VALUES
(19, 29, 'Fisma Subani', 'Dana', 1851000, '2023-05-27', '20230527202553Bukti Pembayaran.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'Pending',
  `resi_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamat_pengiriman`, `status_pembelian`, `resi_pengiriman`) VALUES
(31, 1, 3, '2023-05-28', 307000, 'Standard', 10000, 'Jl. Anggur 2 (67423)', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(51, 32, 11, 1, 'Adult', 278000, 2000, 2000, 278000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(1, 'Cardiac', 505000, 2000, 'Cardiac_dog-removebg-preview.png', '                        Jenis : Kering, Anjing\r\n\r\nCardiac adalah diet lengkap untuk anjing, diformulasikan untuk mendukung fungsi jantung pada kasus gagal jantung kronis.Diet ini mengandung sodium rendah dan rasio K/Na tinggi.                ', 99),
(2, 'Anallergenic', 592000, 3000, 'Anallergenic_dog-removebg-preview.png', '            Jenis : Kering, Anjing\r\nMakanan diet lengkap untuk anjing dewasa.        ', 100),
(3, 'MOBILITY C2P+ ', 529000, 2000, 'MOBILITY_C2P+_dog-removebg-preview.png', '            Jenis : Kering, Anjing\r\nMakanan lengkap untuk anjing dewasa        ', 99),
(4, 'Renal Dry', 699000, 3500, 'Renal_Dry_dog-removebg-preview.png', '                        Jenis : Kering, Anjing\r\n\r\nSebaiknya konsultasikan pada dokter hewan sebelum penggunaan atau memperpanjang penggunaan. Pemberian awal RENAL selama 6 bulan pada kasus gagal ginjal kronis. Untuk kasus gagal ginjal temporer, direkomendasikan untuk diberikan selama 2-4 minggu.                        ', 99),
(11, 'Adult', 278000, 2000, 'Adult_dog-removebg-preview.png', '            Jenis : Kering, Anjing\r\n\r\nMakanan anjing lengkap - Untuk anjing dewasa ukuran medium (berat badan11 - 25 kg) dengan kulit atau pencernaan sensitif - Usia lebih dari 12 bulan        ', 98),
(12, 'Adult', 315000, 2000, 'Adult_cat-removebg-preview.png', '            Jenis : Kering, Kucing\r\nMakanan lengkap untuk kucing dewasa berusia di atas 12 bulan.        ', 99),
(13, 'Urinary S/O', 295000, 2000, 'Urinary_SO_cat-removebg-preview.png', '            Jenis : Kering, Kucing\r\nMakanan diet lengkap untuk kucing dewasa.        ', 100),
(14, 'Skin Hairball ', 227000, 1500, 'Skin_Hairball_cat-removebg-preview.png', '            Jenis : Kering, Kucing\r\nMakanan lengkap untuk kucing dewasa berusia di atas 12 bulan, rentan terhadap pembentukan hairball dan/atau memiliki kulit sensitif.        ', 100),
(15, 'Hepatic ', 641000, 2000, 'Hepatic_cat-removebg-preview.png', '            Jenis : Kering, Kucing\r\n\r\nSebaiknya konsultasikan pada dokter hewan sebelum penggunaan atau memperpanjang penggunaan. Pemberian awal Hepatic selama 6 bulan.        ', 100),
(16, 'SKIN & COAT', 279000, 1500, 'SKIN___COAT_cat-removebg-preview.png', '            Jenis : Basah, Kucing\r\nMakanan diet lengkap untuk kucing dewasa        ', 99),
(17, 'Shih Tzu Adult', 195000, 1500, 'Shih_Tzu_Adult_dog-removebg-preview.png', '            Jenis : Kering, Anjing\r\nMakanan lengkap untuk anjing - Khusus untuk Shih Tzu dewasa dan dewasa - Berusia di atas 10 bulan.        ', 100),
(18, 'Mini Exigent', 154000, 1000, 'Mini_Exigent_dog-removebg-preview.png', '            Jenis : Kering, Anjing\r\nMakanan lengkap untuk anjing - Untuk anjing ras kecil dewasa dan dewasa (dari 1 hingga 10 kg) - Berusia lebih dari 10 bulan - Anjing dengan nafsu makan yang rewel.        ', 100),
(19, 'Mini Adult ', 235000, 2000, 'Mini_Adult_dog-removebg-preview.png', '            Jenis : Basah, Anjing\r\nPakan lengkap untuk anjing - Untuk anjing ras kecil dewasa (dari 1 hingga 10 kg) - Dari usia 10 bulan hingga 12 tahun.        ', 100),
(20, 'Mini Starter ', 135000, 1000, 'Mini_Starter_dog-removebg-preview.png', '            Jenis : Kering, Anjing\r\nMakanan lengkap untuk anjing - Untuk anjing betina ras kecil (dari 1 hingga 10 kg) dan anak-anaknya: anjing betina di akhir masa kehamilan dan selama menyusui - Menyapih anak anjing hingga usia 2 bulan.        ', 100),
(21, 'Beagle Adult', 307000, 3000, 'Beagle_Adult_dog-removebg-preview.png', '            Jenis : Kering, Anjing\r\nMakanan lengkap untuk anjing - Khusus untuk anjing Beagle dewasa dan dewasa - Berusia di atas 12 bulan.        ', 100),
(22, 'Aroma Exigent ', 255000, 2000, 'Aroma_Exigent_cat-removebg-preview.png', '            Jenis : Kering, Kucing\r\nMakanan yang seimbang dan lengkap untuk kucing - Khusus untuk kucing dewasa yang sangat rewel di atas 1 tahun.        ', 100),
(23, 'Maine Coon', 297000, 2000, 'Maine_Coon_cat-removebg-preview.png', '            Jenis : Basah, Kucing\r\nMakanan lengkap untuk kucing - Khusus untuk kucing Maine Coon dewasa - Berusia lebih dari 15 bulan (irisan tipis dalam kuah).        ', 99),
(24, 'Protein Exigent  ', 262000, 2000, 'Protein_Exigent_cat-removebg-preview.png', '                        Jenis : Kering, Kucing\r\nMakanan yang seimbang dan lengkap untuk kucing - Khusus untuk kucing dewasa yang sangat rewel di atas 1 tahun.                ', 100),
(25, 'Persian Adult', 510000, 2000, 'Persian_Adult_cat-removebg-preview.png', '            Jenis : Kering, Kucing\r\nMakanan yang seimbang dan lengkap untuk kucing - Khusus untuk kucing Persia dewasa - Berusia di atas 12 bulan.        ', 100),
(26, 'Bengal Adult ', 350000, 2000, 'Bengal_Adult_cat-removebg-preview.png', '            Jenis : Kering, Kucing\r\nBalanced and complete feed for cats - Specially for adult Bengal cats - Over 12 months old.        ', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
