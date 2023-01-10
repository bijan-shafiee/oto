-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 05:45 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oto`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `salesakht` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `karkerd` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `vazeiat` text COLLATE utf8mb4_persian_ci NOT NULL,
  `rang` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `emkanat` text COLLATE utf8mb4_persian_ci NOT NULL,
  `qeymat` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `company`, `salesakht`, `karkerd`, `vazeiat`, `rang`, `emkanat`, `qeymat`, `image`) VALUES
(1, 'pride', 'saipa', '90', '2500', 'salem', 'red', '12 month ', '156000000', 'download.jpg'),
(2, 'پراید', 'سایپا', '1389', '8000', 'رنگ شده', 'قرمز', '8ماه بیمه ', '142000000', 'download.jpg'),
(3, 'pride', 'saipa', '90', '2500', 'salem', 'red', '6 month ', '156000000', 'download.jpg'),
(4, 'pride', 'saipa', '90', '2500', 'salem', 'red', '6 month ', '156000000', 'download.jpg'),
(5, 'pride', 'saipa', '90', '2500', 'salem', 'red', '6 month ', '156000000', 'download.jpg'),
(6, 'pride', 'saipa', '90', '2500', 'salem', 'red', '6 month ', '156000000', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `message` text COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'بیژن', 'test@test.com', '09123456789', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.'),
(2, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `carsid` int(11) NOT NULL,
  `carsname` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `userid`, `username`, `carsid`, `carsname`) VALUES
(1, 1, '1', 1, '1'),
(2, 1, 'test', 5, 'pride'),
(3, 1, 'test', 5, 'pride'),
(4, 1, 'test', 8, 'pride'),
(5, 1, 'test', 8, 'pride'),
(6, 1, 'test', 8, 'pride'),
(7, 1, 'test', 8, 'pride'),
(8, 1, 'test', 6, 'pride'),
(9, 1, 'test', 5, 'pride'),
(10, 1, 'test', 5, 'pride');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `roll` tinyint(4) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `email`, `phone`, `roll`) VALUES
(1, 'test', '123', 'test@test.com', '09123456789', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
