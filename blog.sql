-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2023 at 03:50 AM
-- Server version: 5.7.41-0ubuntu0.18.04.1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `thumb` text NOT NULL,
  `banner` text NOT NULL,
  `kreator` varchar(100) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `thumb`, `banner`, `kreator`, `waktu`) VALUES
(1, 'Tips Mempelajari Programming', '<p>Pekerjaan seorang programmer memang tidak lepas dari komputer, sebenernya adalah menuangkan isi pikirkan kedalam bahasan yang dimengerti oleh komputer, pada dasarnya menulis sebuah kode didalam program itu bebas saja, artinya seorang programmer bebas menulis bahasa pemograman dengan gaya apa saja, tetapi kode program yang tidak tertata akan mempengaruhi bug yang sulit diperbaiki, Berikut beberapa tips bagi kalian yang ingin mempelajari programming </p><p>1.&nbsp; &nbsp; &nbsp; &nbsp;Kamu harus mengenali diri kamu&nbsp; sendiri, kamu harus yakin bahwa coding adalah ketertarikanmu, </p><p>2.&nbsp; &nbsp; &nbsp; &nbsp;Haruslah mempunyai dasar yang kuat&nbsp; mulai belajar syntax dan melatih skill problem solving </p><p>3.&nbsp; &nbsp; &nbsp; &nbsp;Fundamental adalah bagian terpenting dalam dunia pemogramman dengan berlatih masalah yang kamu hadapi akan menjadi lebih mudah </p><p>Note :&nbsp; Kamu harus memiliki waktu yang cukup untuk berisitirahat agar siap untuk menghadapi masalah dan lebih bersemangat saat ada tekanan</p>', '1678245994_8dbc6d0f136afa0b1e8f.png', '1678245994_67a4e795249ad3c67320.png', 'arifin', '2023-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `level`) VALUES
(1, 'arifin', '@arifin', 'arifin123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
