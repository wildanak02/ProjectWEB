-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Des 2017 pada 12.52
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `idEvent` int(11) NOT NULL,
  `eventName` varchar(60) NOT NULL,
  `type` int(11) NOT NULL,
  `organizer` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`idEvent`, `eventName`, `type`, `organizer`, `date`, `location`, `description`, `image`) VALUES
(2, 'Major League', 2, 'Valve', '2017-12-28', 'Bangkok', 'Dota 2 Tournament', 'event2.png'),
(3, 'ESL One', 1, 'Valve', '2017-12-16', 'Manila', 'Tournament CS', 'event4.jpg'),
(4, 'ESL Two', 1, 'valve', '2017-12-21', 'johor', 'turnamen CS 2', 'event3.png'),
(5, 'ESL Three', 1, 'valve', '2017-12-22', 'jakarta', 'turnament ke tiga', 'event2.png'),
(6, 'ESL Four', 1, 'valve', '2017-12-06', 'banyuwangi', 'deskripsinya', 'event6.jpg'),
(7, 'ESL Five', 1, 'valve', '2017-12-02', 'jajal', 'deskripsi nya ini banyak sekali sehingga menghabiskan banyak text', 'event8.png'),
(8, 'CS', 1, 'cs', '2017-12-29', 'jember', 'tes', 'event4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ptcp`
--

CREATE TABLE `ptcp` (
  `idPtcp` int(11) NOT NULL,
  `idTeam` int(5) NOT NULL,
  `idEvent` int(5) NOT NULL,
  `joinDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `idTeam` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `teamName` varchar(60) NOT NULL,
  `teamMember` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `level` int(1) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `dateBirth` date NOT NULL,
  `location` varchar(60) NOT NULL,
  `picture` varchar(60) NOT NULL,
  `teamLogo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `level`, `email`, `username`, `password`, `firstName`, `lastName`, `dateBirth`, `location`, `picture`, `teamLogo`) VALUES
(1, 1, 'admin@evo.com', 'admin', 'admin', 'admin', 'admin', '2017-12-01', 'banyuwangi', '', ''),
(2, 2, 'user@gmail.com', 'user', 'user', 'user', '1', '2017-12-09', 'singapore', '2.png', '7.png'),
(3, 2, 'wildan@gmail.com', 'wildan', 'wildan', 'wildan', 'akbar', '2017-12-21', 'indonesia', 'boy.png', '2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idEvent`);

--
-- Indexes for table `ptcp`
--
ALTER TABLE `ptcp`
  ADD PRIMARY KEY (`idPtcp`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`idTeam`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ptcp`
--
ALTER TABLE `ptcp`
  MODIFY `idPtcp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `idTeam` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
