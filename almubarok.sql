-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 27, 2019 at 10:50 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `almubarok`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id` int(11) NOT NULL,
  `id_pasien` varchar(1000) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `subyektif_objectif` varchar(500) NOT NULL,
  `assesment` varchar(150) NOT NULL,
  `Pemeriksaan_penunjang` varchar(500) NOT NULL,
  `planning` varchar(500) NOT NULL,
  `paraf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id`, `id_pasien`, `tanggal`, `subyektif_objectif`, `assesment`, `Pemeriksaan_penunjang`, `planning`, `paraf`) VALUES
(17, '20', '06/04/2019', 'detail', 'jantung', 'sakit', 'minum obat', 'hampir mati');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `sip` text NOT NULL,
  `created_by` text,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` text,
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `sip`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'mbah ndul', '09284992', '10', '2019-05-11 10:17:40', NULL, NULL),
(2, 'Sad', '0482989192', '10', '2019-05-11 10:18:39', NULL, NULL),
(3, 'Haha', '92384922', '10', '2019-05-11 10:18:48', NULL, NULL),
(4, 'sinto', '0393382787382', '10', '2019-05-11 12:26:42', NULL, NULL),
(5, 'sinta', '497287833', '10', '2019-05-11 12:36:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `id_pasien` int(150) NOT NULL,
  `kode_obat` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `id_pasien`, `kode_obat`, `status`) VALUES
(20, 20, 'ABOC001', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kode_obat`
--

CREATE TABLE `kode_obat` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama_obat` varchar(250) NOT NULL,
  `zat_aktif` varchar(250) NOT NULL,
  `harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kode_obat`
--

INSERT INTO `kode_obat` (`id`, `kode`, `nama_obat`, `zat_aktif`, `harga`) VALUES
(1, 'ABOC001', 'ABOCATH 18 G INFLO', 'asd', 'Rp. 120.000'),
(2, 'ABC123', 'aku emon', 'test', 'Rp. 10.000'),
(3, 'ABOC003', 'asd', 'ad', 'Rp. 1.000');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `alergi` varchar(200) NOT NULL,
  `No_Rm` varchar(300) NOT NULL,
  `No_BPJS` varchar(300) NOT NULL,
  `No_KTP` varchar(100) NOT NULL,
  `No_HP` int(25) NOT NULL,
  `prolanis` varchar(200) NOT NULL,
  `Nama_pasien` varchar(100) NOT NULL,
  `Jenis_kelamin` varchar(50) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `umur` varchar(200) NOT NULL,
  `Bin_binti` varchar(150) NOT NULL,
  `Pekerjaan` varchar(150) NOT NULL,
  `Agama` varchar(50) NOT NULL,
  `Dusun` varchar(200) NOT NULL,
  `Rt` int(20) NOT NULL,
  `Rw` int(20) NOT NULL,
  `Desa` varchar(150) NOT NULL,
  `Kecamatan` varchar(150) NOT NULL,
  `Kabupaten` varchar(150) NOT NULL,
  `Provinsi` varchar(150) NOT NULL,
  `status_antrian` int(15) NOT NULL,
  `no_antrian` int(200) NOT NULL,
  `waktu_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `alergi`, `No_Rm`, `No_BPJS`, `No_KTP`, `No_HP`, `prolanis`, `Nama_pasien`, `Jenis_kelamin`, `Tanggal_lahir`, `umur`, `Bin_binti`, `Pekerjaan`, `Agama`, `Dusun`, `Rt`, `Rw`, `Desa`, `Kecamatan`, `Kabupaten`, `Provinsi`, `status_antrian`, `no_antrian`, `waktu_daftar`) VALUES
(20, 'kulit', '2706-1', '111111', '0834898191', 2147483647, 'pro lans', 'herlin sutamvan', 'Laki-laki', '1999-02-02', '20 tahun', 'Kora', 'pengangguran', 'Islam', 'bedoyo', 4, 4, 'bedoyo', 'ponjong', 'gunungkidul', 'yogyakarta', 2, 1, '2019-06-27 17:29:55'),
(21, 'lidah', '2706-1', '111111', '0834898191', 1383887, 'pro lans', 'budi daya', 'Laki-laki', '1994-10-11', '24 tahun', 'Kora', 'pengangguran', 'Islam', 'bedoyo', 2, 3, 'bedoyo', 'ponjong', 'gunungkidul', 'yogyakarta', 0, 1, '2019-06-27 17:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id` int(11) NOT NULL,
  `id_pasien` int(150) NOT NULL,
  `total` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`id`, `id_pasien`, `total`) VALUES
(23, 20, 'Rp 120.000');

-- --------------------------------------------------------

--
-- Table structure for table `resep_obat`
--

CREATE TABLE `resep_obat` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `pro` text,
  `id_obat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rujukan`
--

CREATE TABLE `rujukan` (
  `id` int(11) NOT NULL,
  `yth` text,
  `tempat` varchar(100) NOT NULL,
  `nama` text,
  `jenis_kelamin` text,
  `umur` text,
  `alamat` text,
  `diagnosa` text,
  `tindakan` text,
  `permohonan` text,
  `tambahan` text,
  `catatan` text,
  `validasi` date NOT NULL,
  `dokter_pemeriksa` text,
  `sip_dokter` text,
  `created_by` text,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` text,
  `updated_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rujukan`
--

INSERT INTO `rujukan` (`id`, `yth`, `tempat`, `nama`, `jenis_kelamin`, `umur`, `alamat`, `diagnosa`, `tindakan`, `permohonan`, `tambahan`, `catatan`, `validasi`, `dokter_pemeriksa`, `sip_dokter`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
(1, 'messi', 'argentina', 'messi', 'laki-laki', '80', 'argentina', 'sakit perut', 'pijat', 'Mohon konsultasi / penanganan lanjut / alih rawat', 'loro tenan', 'sek sehat bro', '2019-05-11', '', '294827482478', '10', '2019-05-11 09:53:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'eko', 'eko@gmail.com', 'ekoeki', 1),
(2, 'hayall ', 'adminku@gmail.com', 'admin', 1),
(3, 'admin', 'admin@gmail.com', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_obat`
--
ALTER TABLE `kode_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rujukan`
--
ALTER TABLE `rujukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kode_obat`
--
ALTER TABLE `kode_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `resep_obat`
--
ALTER TABLE `resep_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rujukan`
--
ALTER TABLE `rujukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
