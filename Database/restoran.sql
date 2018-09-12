-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 03:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `nama_karyawan` varchar(50) NOT NULL,
  `id_karyawan` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `gaji` varchar(11) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nama_karyawan`, `id_karyawan`, `password`, `ttl`, `jenis_kelamin`, `alamat`, `agama`, `no_telp`, `gaji`, `status`, `user`) VALUES
('Surti', 'ka0001', 'ka0001', '2018-02-28', 'Perempuan', 'jawa', 'Islam', '087876756449', '600000', 'Aktif', 'Pemilik'),
('bubun', 'ko003', 'ko003', '2018-03-04', 'Perempuan', 'Tiban ayu', 'Islam', '0998767676', '100000', 'Aktif', 'Kasir'),
('Nana', 'ko004', 'ko004', '2005-04-12', '0', 'sumedang', 'Islam', '081993444256', '1000000', 'Aktif', 'Pemilik'),
('kiki', 'pm006', 'pm006', '2018-03-04', 'Laki-laki', 'kapling lama', 'islam', '081993245353', '100000', 'Aktif', 'Koki');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` varchar(50) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `gambar` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`, `kategori`, `gambar`) VALUES
('MN0001', 'Sate Kambing', '15000', 'Makanan', 0x382e6a7067),
('MN0003', 'Es Jeruk Purut', '7000', 'Minuman', 0x323031382d30322d3036),
('MN0005', 'Sup Ceker', '18000', 'Makanan', 0x322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `no_struk` varchar(15) NOT NULL,
  `no_meja` varchar(15) NOT NULL,
  `id_pesanan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `tagihan` varchar(15) NOT NULL,
  `total` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penggajian`
--

CREATE TABLE IF NOT EXISTS `penggajian` (
  `id_karyawan` varchar(30) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `jumlah_jam` varchar(5) NOT NULL,
  `upah` varchar(15) NOT NULL,
  `overtime` varchar(15) NOT NULL,
  `upah_overtime` varchar(15) NOT NULL,
  `potongan` varchar(15) NOT NULL,
  `total_gaji` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggajian`
--

INSERT INTO `penggajian` (`id_karyawan`, `nama_karyawan`, `jabatan`, `jumlah_jam`, `upah`, `overtime`, `upah_overtime`, `potongan`, `total_gaji`) VALUES
('admin', 'admin', 'Apoteker', '300', '20000', '480', '15000', '132000', '13068000'),
('ka0001', 'Surti', 'Pemilik', '200', '60000', '50', '70000', '0', '15500000'),
('pr001', 'Shizuka', 'Perawat', '300', '15000', '30', '10000', '480000', '4320000');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesanan` varchar(10) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `id_menu` varchar(20) NOT NULL,
  `porsi` int(3) NOT NULL,
  `no_meja` varchar(3) NOT NULL,
  `total_bayar` varchar(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
 ADD PRIMARY KEY (`no_struk`);

--
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
 ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
 ADD PRIMARY KEY (`id_pesanan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
