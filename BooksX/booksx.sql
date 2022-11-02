-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2022 at 06:29 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `email` varchar(45) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`email`, `password`) VALUES
('sam2000sy@gmail.com', '12345678'),
('AlexGeller@gmail.com', '87654321'),
('Trishaspir@gmail.com', '12341234');

-- --------------------------------------------------------

--
-- Table structure for table `bookscategories`
--

CREATE TABLE `bookscategories` (
  `bcID` int(11) NOT NULL,
  `categoryName` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `categoryDesc` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `bookscategories`
--

INSERT INTO `bookscategories` (`bcID`, `categoryName`, `categoryDesc`) VALUES
(1, 'History', 'Historical events, stories or novels that happened long time ago'),
(2, 'Cookbook', 'cooking book '),
(3, 'Political', 'political books'),
(4, 'Fantasy', 'fiction and imaginary book'),
(5, 'Science', 'Science books'),
(6, 'Horror', 'horror books or novels'),
(7, 'Poetry', 'poems'),
(8, 'Comedy', 'funny books'),
(9, 'Science-Fiction', 'scuencefiction');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `email` varchar(40) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`email`, `message`) VALUES
('Rachel99@gmailcom', 'I love your website'),
('pam@gmail.com', 'Good Job'),
('Johnwick@gmail.com', 'Good Job');

-- --------------------------------------------------------

--
-- Table structure for table `exchangebooks`
--

CREATE TABLE `exchangebooks` (
  `id` int(11) NOT NULL,
  `bookName` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `authorName` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bookCategory` int(11) NOT NULL,
  `date` date NOT NULL,
  `bookDescreption` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Demo` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='by the user who wants to sale books';

--
-- Dumping data for table `exchangebooks`
--

INSERT INTO `exchangebooks` (`id`, `bookName`, `authorName`, `bookCategory`, `date`, `bookDescreption`, `Demo`, `img`) VALUES
(1, 'The old Traveller', 'Yunus Al-Hajjaj', 1, '1983-10-11', 'get to know the story of the most successful traveller', 'uploads/file-62a54aa4245d32.20290186.pdf', 'uploads/IMG-62a54aa42444f5.48212531.jpg'),
(2, 'Cook with Monica', 'Monica Geller', 2, '2010-02-09', 'Cook with Monica the most famous chef all around the world', 'uploads/file-62a54b69d9dfd8.57928854.pdf', 'uploads/IMG-62a54b69d9c645.17891211.jpg'),
(3, 'Beyond that', 'Dr.Qasem Talal', 3, '2009-06-09', 'a political book about the great nation', 'uploads/file-62a54bb12c2d93.58690457.pdf', 'uploads/IMG-62a54bb12c08b9.16888171.jpg'),
(5, 'Are we alone', 'Miles Cosmo', 5, '2017-06-07', 'Are we alone in this big wide universe?', 'uploads/file-62a54c42cffef7.64879279.pdf', 'uploads/IMG-62a54c42cfec33.15516786.jpg'),
(6, 'aljazar', 'Hasan aljoundi', 6, '2011-06-07', 'the revenge can make people make very horrible things', 'uploads/file-62a54c8079ade0.66768033.pdf', 'uploads/IMG-62a54c80799b56.07787944.jpg'),
(7, 'Lahn Al-haya', 'Al-Mouqtader', 7, '1986-06-17', 'the most famous poems are here in this book', 'uploads/file-62a54cc91cb654.21156620.pdf', 'uploads/IMG-62a54cc91ca1c5.47196014.jpg'),
(8, 'Red nose', 'Larry Lorem', 8, '2014-06-10', 'Very funny book.. no spoilers', 'uploads/file-62a54da42f82c0.02181746.pdf', 'uploads/IMG-62a54da42f5b31.06668664.jpg'),
(9, 'Cyborg.Z', 'Hannah Jims', 9, '2020-03-04', 'can robots reach humanity?', 'uploads/file-62a54dffd3a609.70967650.pdf', 'uploads/IMG-62a54dffd39049.93076333.jpg'),
(10, 'kalila wa domna', 'author', 1, '2020-02-04', 'Kalila wa domna', 'uploads/file-62a573cb3d5e15.95820675.pdf', 'uploads/IMG-62a573cb3d28b0.20177262.jpg'),
(11, 'Book2 updated', 'Author2 updated', 2, '2022-06-15', 'descr...', 'uploads/file-62a57fb27ed447.06330048.pdf', 'uploads/IMG-62a57fb27e9d14.61962193.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sellbuybooks`
--

CREATE TABLE `sellbuybooks` (
  `id` int(11) NOT NULL,
  `bookName` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `authorName` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bookCategory` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` double NOT NULL,
  `bookDescreption` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Demo` text COLLATE utf8_bin NOT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='by the user who wants to sale books';

--
-- Dumping data for table `sellbuybooks`
--

INSERT INTO `sellbuybooks` (`id`, `bookName`, `authorName`, `bookCategory`, `date`, `price`, `bookDescreption`, `Demo`, `img`) VALUES
(1, 'Makhtootat bin ishaaq', 'Hasan aljoundi', 6, '2012-06-05', 15, 'an adventure full of horror and demons', 'uploads/file-62a544839ed3f2.90270308.pdf', 'uploads/IMG-62a544839ebe69.33370876.jpg'),
(2, 'betty crockers cookbook', 'Betty Crocker', 2, '2003-06-11', 35, 'you will enjoy cooking with this book', 'uploads/file-62a546f7dcf119.10183083.pdf', 'uploads/IMG-62a546f7dcdc72.85732341.jpg'),
(3, 'The other side', 'Abdullah Alhussini', 3, '2018-05-07', 13, 'get inside the most political and powerful man in the world and get to know his secrets', 'uploads/file-62a54784178804.92547092.pdf', 'uploads/IMG-62a54784176970.22616837.jpg'),
(4, 'Ancient Egypt', 'Lama Al-Sadi', 1, '2000-06-14', 7, 'this book might be helpful if you wanna know more about ancient Egypt', 'uploads/file-62a547f69dfec6.03959292.pdf', 'uploads/IMG-62a547f69dec15.40816918.jpg'),
(5, 'The lord of the ring', 'JK toklin', 4, '1999-06-09', 12, 'a small Hobbit against the big world', 'uploads/file-62a54852036c79.46531535.pdf', 'uploads/IMG-62a54852034234.54913596.jpg'),
(7, 'Al-Moutanbi Life', 'Ismail Ahmad', 7, '1992-06-09', 24, 'the one and only Al-Moutanabi', 'uploads/file-62a548fa7bdf43.05462692.pdf', 'uploads/IMG-62a548fa7bc423.98985027.jpg'),
(8, 'Black dots', 'Harley queen', 8, '2012-06-12', 5, 'cheer up and read this book', 'uploads/file-62a5494465a799.57356902.pdf', 'uploads/IMG-62a54944659442.56043694.jpg'),
(9, 'Travel time', 'Suzan leo', 9, '2019-02-06', 20, 'a book with very rich information and events, learn and have fun together.', 'uploads/file-62a549a5356536.85774243.pdf', 'uploads/IMG-62a549a5354632.85194252.jpg'),
(10, 'alkhalab fe fan tasmeem alal3ab', 'faouzi mismar', 5, '2017-02-07', 15, 'a book for games development', 'uploads/file-62a572ddd2e3a1.83312720.pdf', 'uploads/IMG-62a572ddd2aca3.29412281.jpg'),
(11, 'Book1 updated', 'Author1 updated', 6, '2022-06-08', 50, 'descr...', 'uploads/file-62a57e62346bb2.23937199.pdf', 'uploads/IMG-62a57e62343637.36467159.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userregisteration`
--

CREATE TABLE `userregisteration` (
  `id` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(18) NOT NULL,
  `country` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userregisteration`
--

INSERT INTO `userregisteration` (`id`, `userName`, `email`, `password`, `country`, `gender`) VALUES
(20220001, 'Rachel99', 'Rachel99@gmailcom', 'emma123456', 'Jordan', 'female'),
(20220002, 'Pam_1000', 'pam@gmail.com', 'ilovejim666', 'United States', 'female'),
(20220003, 'Johnwick2022', 'Johnwick@gmail.com', 'john123456', 'Angola', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookscategories`
--
ALTER TABLE `bookscategories`
  ADD PRIMARY KEY (`bcID`);

--
-- Indexes for table `exchangebooks`
--
ALTER TABLE `exchangebooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookCategory` (`bookCategory`);

--
-- Indexes for table `sellbuybooks`
--
ALTER TABLE `sellbuybooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookCategory` (`bookCategory`);

--
-- Indexes for table `userregisteration`
--
ALTER TABLE `userregisteration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookscategories`
--
ALTER TABLE `bookscategories`
  MODIFY `bcID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exchangebooks`
--
ALTER TABLE `exchangebooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sellbuybooks`
--
ALTER TABLE `sellbuybooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userregisteration`
--
ALTER TABLE `userregisteration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20220005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
