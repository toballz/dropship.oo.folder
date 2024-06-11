-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 11, 2024 at 04:56 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u723978224_cocohairsig`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(11) NOT NULL,
  `namer` varchar(100) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '{}',
  `description2` varchar(152) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `namer`, `description`, `description2`) VALUES
(1, 'weekly', '{\"sunday\":\"\",\"monday\":\"0830, 1230\",\"tuesday\":\"0830, 1230\",\"wednesday\":\"0830, 1230\",\"thursday\":\"0830, 1230\",\"friday\":\"0830, 1230\",\"saturday\":\"0830, 1230\"}', NULL),
(2, 'account', '{\n\"fullname\":\"\",\n\"email\":\"\",\n\"phonenumber\":\"\",\n\"fullname\":\"\",\n}', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(3, 'override', '[{\"date\":\"20240611\",\"time\":\"1345,1450\"},{\"date\":\"20240625\",\"time\":\"1345,1450\"}]', NULL),
(4, 'message_notification', '{\"subject\":\"k qteryehgj dsfs f sf sf sfffffffff fs sd djfhjf\",\"message\":\"hgfhttps://fmoviesz.to/tv/rick-and-morty-x1zoz/3-5https:// fmoviesz.to/tvad.to/tv/zr k-and-mort -x1zoz/3-5https://fmoviesz.to/ 3-5https://fmoviesz.to/tv/rick-and-morty-x1zoz/3-5https://fmoviesz.tzmorty-x1zoz/3-5hdgffvaisreada1\"}', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedulee`
--

CREATE TABLE `schedulee` (
  `rida` varchar(9) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phonne` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(10) NOT NULL,
  `customername` varchar(39) NOT NULL,
  `image` varchar(21) NOT NULL,
  `price` varchar(50) NOT NULL,
  `timeRange` varchar(230) NOT NULL,
  `hairstyle` varchar(300) NOT NULL,
  `haspaid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedulee`
--

INSERT INTO `schedulee` (`rida`, `email`, `phonne`, `date`, `time`, `customername`, `image`, `price`, `timeRange`, `hairstyle`, `haspaid`) VALUES
('e0r9drc1w', 'atelisha@yahoo.com', '17123720991', '20240613', '0830', 'Sandra J. Elmore', '29', '- $380 butt', '3 hours', 'Goddess BoxBraids (Smedium) - For curls only, you can bring 2packs of wavy human hair of your choice, I only provide synthetic.', 14),
('lorhve017', 'atelisha@yahoo.com', '17123720991', '20240710', '0830', 'Sandra J. Elmore', '38', '- $300 waist (Hair not included)', '3 hours', 'Spring Twists ', 1),
('xk1umuzwc', 'atelisha@yahoo.com', '17123720991', '20240612', '1230', 'ELISHA O OLADEINDE', '29', '- $350 waist', '3 hours', 'Goddess BoxBraids (Smedium) - For curls only, you can bring 2packs of wavy human hair of your choice, I only provide synthetic.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedulee`
--
ALTER TABLE `schedulee`
  ADD PRIMARY KEY (`rida`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
