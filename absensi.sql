-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 01, 2021 at 03:06 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `nit` varchar(125) NOT NULL,
  `jam_masuk` varchar(125) NOT NULL,
  `jam_keluar` varchar(125) NOT NULL,
  `tanggal` varchar(125) NOT NULL,
  `keterangan` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nama`, `nit`, `jam_masuk`, `jam_keluar`, `tanggal`, `keterangan`, `status`) VALUES
(19, 'Dumy', '321321', '18:00', '20:54', '2021-06-27', 'Jam Jaga 2', 'success'),
(20, 'Dumy2', '123123', '20:30', '20:57', '2021-06-27', 'Jam Jaga 3', 'success'),
(24, 'Dumy2', '123123', '09:59', '18:10', '2021-06-28', 'Jam Jaga 1', 'success'),
(25, 'Dumy', '321321', '10:00', '18:09', '2021-06-28', 'Jam Jaga 1', 'success'),
(26, 'Dumy4', '112233', '10:38', '18:08', '2021-06-28', 'Jam Jaga 1', 'success'),
(27, 'Dumy5', '123456', '11:05', '18:10', '2021-06-28', 'Jam Jaga 1', 'success'),
(28, 'Dumy3', '12341234', '18:09', '18:13', '2021-06-28', 'Jam Jaga 3', 'success'),
(29, 'Dumy', '321321', '17:44', '20:20', '2021-06-30', 'Jam Jaga 2', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`) VALUES
(1, 'Master'),
(2, 'Chief Officer'),
(3, 'Chief Enginner'),
(4, '2nd Officer'),
(5, '3nd Officer'),
(6, '2nd Engineer'),
(7, '3nd Engineer'),
(8, 'Electrician'),
(9, 'Bostwain'),
(10, 'AB'),
(11, 'Oiler'),
(12, 'Cadet Deck'),
(13, 'Cadet Engine'),
(14, 'Cadet Eto'),
(15, 'Cook');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `nit` varchar(125) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(125) NOT NULL,
  `role` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nit`, `tgl_lahir`, `jabatan`, `email`, `password`, `status`, `role`) VALUES
(3, 'Dumy', '321321', '2000-07-11', 'Chief Engineer', 'Dumy@dumy.com', '$2y$10$TLYlbC8pKoKI7wYpQXpjbuKyqHBME9ZGWPxGxu.dEs9mVB7a12CRe', 'active', 'user'),
(4, 'Dumy2', '123123', '2002-02-14', 'Master', 'dumy@gmail.com', '$2y$10$7LV3pfiJqaFFv5DmmOQGHuMHh.eZiT1q9g.fiyp6YWQ8eNvDf8g6q', 'active', 'user'),
(5, 'Dumy3', '12341234', '1999-01-07', 'AB', 'dumy3@gmail.com', '$2y$10$njBgTIYfIdr366W4yIlbaOkvnfK6K7Lqbg1Gj2qOutlymRGg3BfDa', 'active', 'user'),
(6, 'Dumy4', '112233', '2001-01-24', 'Electrician', 'dumy4@gmail.com', '$2y$10$h2N8.iZ2c7H07Y1Ink6VseT3P3796P0Ju9YhlwDq7PLuEhglZdeAK', 'active', 'user'),
(10, 'admin', 'admin', '2001-01-01', 'administrator', 'admin@admin.com', '$2y$10$vvoN6mWBGALl06XOCaksWuI0f1hL7jnG9pu7V1sAdKv0V0KUG6zY6', 'active', 'admin'),
(11, 'Dumy5', '123456', '2001-02-21', '2nd Officer', 'Dumy5@gmail.com', '$2y$10$FmzO4dYgqQT5/znJgJYM3eq/dI6u6f4ELc5jXAWlKiUsWn/NWXpAy', 'active', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
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
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;