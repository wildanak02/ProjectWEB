-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Des 2017 pada 17.19
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
  `image` varchar(255) NOT NULL,
  `slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`idEvent`, `eventName`, `type`, `organizer`, `date`, `location`, `description`, `image`, `slot`) VALUES
(10, 'CS:GO Events 1', 1, 'Valve', '2017-12-21', 'Bangkok', 'Tournament CS', 'event7.jpg', 0),
(11, 'CS:GO Events 2', 1, 'valve', '2017-12-23', 'Jakarta', 'Tournament CS 2', 'event6.jpg', 60),
(12, 'CS:GO Events 3', 1, 'valve', '2017-12-15', 'hamburg', 'Tournament CS 3', 'event5.jpg', 20),
(13, 'CS:GO Events 4', 1, 'Valve', '2017-12-12', 'Manila', 'Tournament CS 4', 'event1.png', 54),
(14, 'Dota 2 Event 1', 2, 'Major', '2017-12-16', 'Jember', 'Tournament dota Major', 'event7.jpg', 20),
(15, 'Dota 2 Event 2', 2, 'Minor', '2017-12-21', 'Solo', 'Dota 2 ', 'event11.jpg', 29),
(16, 'Major League', 2, 'Valve', '2017-12-23', 'kota', 'This is Major league', 'event12.png', 12);

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

--
-- Dumping data untuk tabel `ptcp`
--

INSERT INTO `ptcp` (`idPtcp`, `idTeam`, `idEvent`, `joinDate`) VALUES
(6, 4, 11, '2017-12-19'),
(7, 5, 11, '2017-12-19'),
(8, 10, 11, '2017-12-19'),
(9, 11, 15, '2017-12-19'),
(10, 10, 15, '2017-12-19');

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

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`idTeam`, `idUser`, `teamName`, `teamMember`) VALUES
(4, 10, 'Fnatic A', 'Beya\r\nWildan\r\nFeril\r\nThoriq'),
(5, 10, 'Fnatic B', 'Coba\r\nCoba2\r\nCoba3\r\nCoba4\r\nCoba5'),
(10, 9, 'Virtus Pro A', '1,2,3,4,5'),
(11, 9, 'Virtus Pro B', '6,7,8,9,10');

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
(9, 2, 'user@gmail.com', 'user', 'user', 'user', 'hehe', '2017-11-30', 'indonesia', 'boy-1.png', 'teamlogo6.png'),
(10, 2, 'coba@gmail.com', 'coba', 'coba', 'coba2', 'hehe3', '2017-12-26', 'indonesia', 'boy.png', 'teamlogo2.png');

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
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ptcp`
--
ALTER TABLE `ptcp`
  MODIFY `idPtcp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `idTeam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
