-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 11:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `detaje` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `detaje`) VALUES
(15, '\r\nAll Movies is more than just a website; it is a community of movie lovers like you. We invite you to join our community, where you can connect to share your thoughts and recommendations.\r\n<br>\r\n<br>\r\nExplore our website, discover exciting movies, and embark on a cinematic journey with us. Visit our <a href=\"index.php\">home page</a> to continue exploring the latest movies. If you have any questions, suggestions, or just want to say hello, feel free to contact us.\r\n<br>\r\n<br>\r\nIn order not to miss the latest movies, you can <a href=\"signup.html\">sign up here</a> with your email and receive emails from us about the latest events about movies.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `Name`, `Email`, `Phone`, `Subject`, `Message`) VALUES
(5, 'elza', 'elza.maliqi@gmail.com', '+38345678788', 'elza', 'elza'),
(6, 'verda', 'verda.kryeziu@gmail.com', '+38345111111', 'verda', 'verda'),
(8, 'eriona', 'kaltrinadelija3@gmail.com', '+383123458', 'aab', 'elza'),
(9, 'kaltrina', 'kaltrinadelija3@gmail.com', '+383123458', 'elza', '12121'),
(11, 'elza', 'kaltrinadelija3@gmail.com', '+383123458', 'aab', 'verda');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `contact_infoID` int(11) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`contact_infoID`, `Phone`, `Email`) VALUES
(18, '+38349111111', 'kaltrinadelija3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `filmi_foto`
--

CREATE TABLE `filmi_foto` (
  `fotoID` int(11) NOT NULL,
  `emri_foto` varchar(200) NOT NULL,
  `rruga` varchar(100) NOT NULL,
  `zhanri` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filmi_foto`
--

INSERT INTO `filmi_foto` (`fotoID`, `emri_foto`, `rruga`, `zhanri`) VALUES
(1, 'photo1.jpg', 'upload_foto/photo1.jpg', 'action'),
(2, 'drama1.jpg', 'upload_foto/drama1.jpg', 'drama'),
(3, 'drama2.jpg', 'upload_foto/drama2.jpg', 'drama'),
(4, 'drama3.jpg', 'upload_foto/drama3.jpg', 'drama'),
(6, 'photo2.jpg', 'upload_foto/photo2.jpg', 'action'),
(7, 'photo3.jpg', 'upload_foto/photo3.jpg', 'action'),
(8, 'photo4.jpg', 'upload_foto/photo4.jpg', 'action'),
(9, 'photo5.jpg', 'upload_foto/photo5.jpg', 'action'),
(10, 'photo6.jpg', 'upload_foto/photo6.jpg', 'action'),
(11, 'photo7.jpg', 'upload_foto/photo7.jpg', 'action'),
(12, 'photo8.jpg', 'upload_foto/photo8.jpg', 'action'),
(13, 'photo9.jpg', 'upload_foto/photo9.jpg', 'action'),
(14, 'photo10.jpg', 'upload_foto/photo10.jpg', 'action'),
(15, 'drama4.jpg', 'upload_foto/drama4.jpg', 'drama'),
(16, 'drama5.jpg', 'upload_foto/drama5.jpg', 'drama'),
(17, 'drama6.jpg', 'upload_foto/drama6.jpg', 'drama'),
(18, 'drama7.jpg', 'upload_foto/drama7.jpg', 'drama'),
(19, 'drama8.jpg', 'upload_foto/drama8.jpg', 'drama'),
(20, 'drama9.jpg', 'upload_foto/drama9.jpg', 'drama'),
(21, 'drama10.jpg', 'upload_foto/drama10.jpg', 'drama'),
(22, 'comedy1.jpeg', 'upload_foto/comedy1.jpeg', 'comedy'),
(23, 'comedy2.jpeg', 'upload_foto/comedy2.jpeg', 'comedy'),
(24, 'comedy3.jpg', 'upload_foto/comedy3.jpg', 'comedy'),
(25, 'comedy4.jpg', 'upload_foto/comedy4.jpg', 'comedy'),
(26, 'comedy5.jpg', 'upload_foto/comedy5.jpg', 'comedy'),
(27, 'comedy6.jpg', 'upload_foto/comedy6.jpg', 'comedy'),
(28, 'comedy7.jpg', 'upload_foto/comedy7.jpg', 'comedy'),
(30, 'comedy8.jpg', 'upload_foto/comedy8.jpg', 'comedy'),
(31, 'comedy9.jpg', 'upload_foto/comedy9.jpg', 'comedy'),
(32, 'comedy10.jpg', 'upload_foto/comedy10.jpg', 'comedy'),
(34, 'adventure1.jpg', 'upload_foto/adventure1.jpg', 'adventure'),
(35, 'adventure2.jpg', 'upload_foto/adventure2.jpg', 'adventure'),
(36, 'adventure3.jpg', 'upload_foto/adventure3.jpg', 'adventure'),
(37, 'adventure4.jpg', 'upload_foto/adventure4.jpg', 'adventure'),
(38, 'adventure5.jpg', 'upload_foto/adventure5.jpg', 'adventure'),
(39, 'adventure6.jpg', 'upload_foto/adventure6.jpg', 'adventure'),
(40, 'adventure7.jpg', 'upload_foto/adventure7.jpg', 'adventure'),
(41, 'adventure8.jpg', 'upload_foto/adventure8.jpg', 'adventure'),
(42, 'adventure9.jpg', 'upload_foto/adventure9.jpg', 'adventure'),
(43, 'adventure10.jpg', 'upload_foto/adventure10.jpg', 'adventure'),
(44, 'fantasy1.jpg', 'upload_foto/fantasy1.jpg', 'fantasy'),
(45, 'fantasy2.jpg', 'upload_foto/fantasy2.jpg', 'fantasy'),
(46, 'fantasy3.jpg', 'upload_foto/fantasy3.jpg', 'fantasy'),
(47, 'fantasy4.jpg', 'upload_foto/fantasy4.jpg', 'fantasy'),
(48, 'fantasy5.jpg', 'upload_foto/fantasy5.jpg', 'fantasy'),
(49, 'fantasy6.jpg', 'upload_foto/fantasy6.jpg', 'fantasy'),
(50, 'fantasy7.jpg', 'upload_foto/fantasy7.jpg', 'fantasy'),
(51, 'fantasy8.jpg', 'upload_foto/fantasy8.jpg', 'fantasy'),
(52, 'fantasy9.jpg', 'upload_foto/fantasy9.jpg', 'fantasy'),
(53, 'fantasy10.jpg', 'upload_foto/fantasy10.jpg', 'fantasy'),
(54, 'sci-fi1.jpg', 'upload_foto/sci-fi1.jpg', 'science-fiction'),
(55, 'sci-fi2.jpg', 'upload_foto/sci-fi2.jpg', 'science-fiction'),
(56, 'sci-fi3.jpg', 'upload_foto/sci-fi3.jpg', 'science-fiction'),
(57, 'sci-fi4.jpg', 'upload_foto/sci-fi4.jpg', 'science-fiction'),
(58, 'sci-fi5.jpg', 'upload_foto/sci-fi5.jpg', 'science-fiction'),
(59, 'sci-fi6.jpg', 'upload_foto/sci-fi6.jpg', 'science-fiction'),
(60, 'sci-fi7.jpg', 'upload_foto/sci-fi7.jpg', 'science-fiction'),
(61, 'sci-fi8.jpg', 'upload_foto/sci-fi8.jpg', 'science-fiction'),
(62, 'sci-fi9.jpg', 'upload_foto/sci-fi9.jpg', 'science-fiction'),
(63, 'sci-fi10.jpg', 'upload_foto/sci-fi10.jpg', 'science-fiction');

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesit`
--

CREATE TABLE `perdoruesit` (
  `UserID` int(11) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perdoruesit`
--

INSERT INTO `perdoruesit` (`UserID`, `Firstname`, `Lastname`, `Username`, `Password`) VALUES
(1, 'Kaltrina', 'Delija', 'admin', 'admin123'),
(8, 'arbonita', 'sekiraqa', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'kaltrina', 'kaltrinadelija3@gmail.com', 'kaltrina'),
(3, 'eriona', 'eriona.bytyqi@gmail.com', 'eriona'),
(4, 'elza', 'elza.maliqi@gmail.com', 'elza'),
(5, 'arbonita', 'arbonita.sekiraqa@gmail.com', 'arbonita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`contact_infoID`);

--
-- Indexes for table `filmi_foto`
--
ALTER TABLE `filmi_foto`
  ADD PRIMARY KEY (`fotoID`);

--
-- Indexes for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `contact_infoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `filmi_foto`
--
ALTER TABLE `filmi_foto`
  MODIFY `fotoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
