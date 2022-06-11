-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 02:49 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `headline` varchar(300) DEFAULT NULL,
  `message` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `headline`, `message`) VALUES
(3, 'News-Sektion', 'Mit unserer neuen News-Sektion könnt ihr ab heute immer auf dem neuestem Stand bleiben. '),
(6, 'RSS', 'Bleibe jetzt immer auf dem neuestem Stand mit unserem RSS feed. <a href=\"./rss.php\">Click me</a> . Yes, this is an XSS risk...'),
(7, 'Deneme', 'wasssuppp !!!');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `username_fk` varchar(32) NOT NULL,
  `pic_name` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `preis` text NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`username_fk`, `pic_name`, `name`, `preis`, `tags`) VALUES
('Legolas', '1593520727_53e90927-3f47-44b3-9208-d13acd8be617.jpg', 'Legolas', '250', '#lotr#legolas'),
('Lady', '1593520802_WhatsApp Image 2020-06-30 at 14.35.12.jpeg', 'Galadriel_Wallpaper', '350', '#lotr#wallpaper'),
('Lady', '1593520831_WhatsApp Image 2020-06-30 at 14.35.13.jpeg', 'Galadriel_Wallpaper2', '150', '#movie'),
('King', '1593520961_82765656-f543-4c3a-9dc5-2bbd659ea7c2.jpg', 'Wallpaper_aragorn', '170', '#king'),
('King', '1593521136_177ef365-e74c-4b27-a0b6-a31a2d7aae64.jpg', 'Aragorn_Wallpaper', '300', '#king');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(32) NOT NULL,
  `pwd` varchar(200) DEFAULT NULL,
  `vorname` varchar(32) DEFAULT NULL,
  `nachname` varchar(32) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `plz` varchar(8) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `ort` varchar(50) DEFAULT NULL,
  `anrede` varchar(50) DEFAULT NULL,
  `profileImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `pwd`, `vorname`, `nachname`, `email`, `is_admin`, `plz`, `adresse`, `ort`, `anrede`, `profileImage`) VALUES
('admin', '$2y$11$LLfEHoKk5WevIC0iF5z4YOFLnpNh8XEHjIGU8o.HfMbln7I1tvoSi', 'Admin', 'Admin', 'admin@admin.com', 1, 'a', 'a', 'a', 'Herr', '1592767746_WhatsApp Image 2020-06-21 at 21.16.01.jpeg'),
('King', '$2y$11$db0lg4PXR8stGlt2/JGJXexaxkJmsVeijAl3NKQe192bZajeypZm6', 'Aragorn', 'Dunedain', 'king.aragorn@gmail.com', 0, '1078', 'Gravel Street', 'Gondor', 'Herr', '1593110018_fQv070ug4u7yeXd9FTNyN6MMtuk3uJYXTHP5PT7MRuI.jpg'),
('Lady', '$2y$11$tfUL5i2MII2H8OU7x4.X4u6K9fObfdA4DxeJCFdl6uwHgDXXk0VUi', 'Galadriel ', 'Lorien ', 'lady-galadriel@gmail.com ', 0, '10800', 'Lothlorien', 'Middle-Earth', 'Frau', '1593111054_Galadriel.jpg'),
('Legolas', '$2y$11$wErVxEySw7iYAxdVDK5f7.euK.14IIqEpEuPnDCo/TtLGFLCQFhu.', 'Legolas', 'Prens', 'legolas@gmail.com', 0, '0001', 'Mirkwood', 'Middle-Earth', 'Herr', '1593111464_Legolas.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`pic_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
