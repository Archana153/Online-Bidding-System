-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2016 at 06:53 PM
-- Server version: 5.5.41-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bid`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids_for`
--

CREATE TABLE IF NOT EXISTS `bids_for` (
  `Username` varchar(20) NOT NULL,
  `Item_ids` int(20) NOT NULL,
  `Price_offered` int(20) NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bids_for`
--

INSERT INTO `bids_for` (`Username`, `Item_ids`, `Price_offered`, `Time`) VALUES
('aman123', 7, 4500, '00:00:00'),
('appy', 1, 123, '20:43:00'),
('apurva', 2, 5000, '00:00:00'),
('archana', 1, 2000, '00:00:00'),
('chinki', 1, 3600, '20:43:00'),
('ginni', 6, 8000, '00:00:00'),
('lo', 10, 346563, '00:00:00'),
('mannu', 1, 3000, '00:00:00'),
('po', 5, 1500, '00:00:00'),
('poly', 9, 20000, '00:00:00'),
('prerna228', 1, 10008, '00:00:18'),
('prerna228', 2, 9000, '20:43:00'),
('prerna228', 6, 6000, '00:00:00'),
('prerna228', 7, 4600, '00:00:12'),
('prerna228', 17, 50, '00:00:00'),
('priyal', 2, 8000, '00:00:00'),
('ram143', 4, 2000, '00:00:00'),
('sam', 3, 2500, '00:00:00'),
('yukti', 5, 1000, '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
`Item_id` int(20) NOT NULL,
  `Item_name` varchar(40) NOT NULL,
  `Item_display` varchar(500) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL,
  `Details` varchar(200) NOT NULL,
  `Actual_price` int(20) NOT NULL,
  `Starting_price` int(10) NOT NULL,
  `starting_time` time NOT NULL,
  `End_time` time NOT NULL,
  `is_deleted` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_id`, `Item_name`, `Item_display`, `Category`, `Start_date`, `End_date`, `Details`, `Actual_price`, `Starting_price`, `starting_time`, `End_time`, `is_deleted`) VALUES
(1, 'Samsung Primo', 'images\\samsung_prime.jpg', 'Electronics', '2016-04-19', '2016-05-17', 'Provides all d facilities', 5990, 1000, '05:05:05', '10:10:00', 'N'),
(2, 'lenovo ideapad', 'images\\lenovo_ideapad.jpg\r\n', 'Electronics', '2016-04-04', '2016-05-22', '', 24, 1500, '00:00:00', '00:00:00', 'N'),
(3, 'dell speakers', 'images\\dell_speakers.jpg', 'Electronics', '2016-04-09', '2016-05-12', '', 3000, 0, '00:00:00', '00:00:00', 'N'),
(4, 'IFB', 'upload/321165samsung_prime.jpg', 'Electronics', '2016-04-09', '2016-06-10', '', 14900, 0, '00:00:00', '00:00:00', 'N'),
(5, 'logitech webcam', 'images\\webcam.jpg', 'Electronics', '2016-04-09', '2016-05-20', '', 2000, 0, '00:00:00', '00:00:00', 'N'),
(6, 'Samsung oven', 'images\\oven.jpg', '', '2013-04-08', '2013-05-16', '', 7800, 0, '00:00:00', '00:00:00', 'N'),
(7, 'sony headphones', 'images\\headphones.jpg', 'Electronics', '2013-04-01', '2013-04-17', '', 5600, 0, '00:00:00', '00:00:00', 'N'),
(8, 'potrait', 'images\\potrait.jpg', 'Antiques', '2013-04-22', '0000-00-00', '', 20000, 5000, '00:00:00', '00:00:00', 'N'),
(9, 'sony xperia Z', 'images\\xperia.jpg', 'Electronics', '2016-04-05', '2016-04-19', '', 36000, 0, '00:00:00', '00:00:00', 'N'),
(10, 'Hair dryer', 'images\\dryer.jpg', 'Electronics', '2013-04-03', '2013-04-07', '', 5436757, 0, '00:00:00', '00:00:00', 'N'),
(11, 'Angels and Demons', 'images\\angels.jpg', 'Books', '2013-04-20', '2013-04-26', 'Author: Dan Brown', 1500, 400, '00:00:00', '00:00:00', 'N'),
(12, 'Mona lisa', 'images\\mona.jpg', 'Antiques', '2016-04-02', '2016-04-30', 'Painter: Leonardo da Vinci', 250000, 100000, '00:00:00', '00:00:00', 'N'),
(13, 'Movie dvds', 'images\\dvd.jpg', 'Entertainment', '2016-05-04', '2016-05-18', '', 1000, 200, '00:00:00', '00:00:00', 'N'),
(14, 'phone', 'images\\phone.jpg', 'Electronics', '2016-04-01', '2016-04-30', 'details', 0, 0, '00:00:00', '00:00:00', 'N'),
(16, 'itemnamekjdshcjre', 'upload/76117IFB_washing.jpg', 'Electronics', '0000-00-00', '0000-00-00', 'details', 0, 0, '00:00:00', '00:00:00', 'N'),
(17, 'Star-wars', 'images/star-wars.jpg', 'Entertainment', '2016-04-12', '2016-04-26', '', 100, 0, '00:00:00', '00:00:00', 'N'),
(18, 'alchemist', 'images/alchemist.jpg', 'Books', '2016-04-12', '2016-05-26', 'Paulo Coelho', 30, 2, '00:00:00', '00:00:00', 'N'),
(19, 'Apple-ipad', 'images/ipad.jpg', 'Electronics', '2016-05-01', '2016-05-26', 'New Apple ipad', 200, 50, '00:00:00', '00:00:00', 'N'),
(20, 'The Fifth Mountain', 'images/fifth.jpg', 'Books', '2016-04-30', '2016-05-11', 'Paulo Coelho', 40, 10, '00:00:00', '00:00:00', 'N'),
(21, 'Iphone 6S', 'images/iphone.jpg', 'Electronics', '2016-04-30', '2016-05-12', 'Apple iphone 6S', 700, 100, '00:00:00', '00:00:00', 'N'),
(22, 'Pocket watch', 'images/pocket.jpg', 'Antiques', '2016-04-30', '2016-05-19', '', 300, 50, '00:00:00', '00:00:00', 'N'),
(23, 'Telephone', 'images/telephone.jpg', 'Antiques', '2016-04-30', '2016-05-28', '', 300, 100, '00:00:00', '00:00:00', 'N'),
(24, 'Vintage car', 'images/car.jpg', 'Antiques', '2016-04-30', '2016-05-19', '', 50000, 20000, '00:00:00', '00:00:00', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Username` varchar(20) NOT NULL,
  `Fname` varchar(10) NOT NULL,
  `Lname` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Phone_no` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `Type` varchar(10) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Fname`, `Lname`, `DOB`, `Phone_no`, `city`, `email`, `password`, `Type`) VALUES
('aman123', 'Aman', '', '0000-00-00', 0, '', 'archanasinha153@gmail.com', '34e7abbf202fc82c46de2d41d6a80ea5', 'User'),
('appy', 'apurva', 'singhai', '2013-04-01', 1234567890, 'sdjhc', 'appy@gmail.com', 'qwerty', 'User'),
('archana1111', 'archana', 'a', '0000-00-00', 2147483647, '', 'kdn@gmail.com', 'archana', 'User'),
('Archana153', 'archana', 'sinha', '2013-04-14', 0, 'anand', 'archanasinha153@gmail.com', '34e7abbf202fc82c46de2d41d6a80ea5', 'User'),
('ginni', 'Ganga', '', '0000-00-00', 0, '', '', '34e7abbf202fc82c46de2d41d6a80ea5', 'User'),
('lo', 'kol', '', '0000-00-00', 0, '', '', '34e7abbf202fc82c46de2d41d6a80ea5', 'User'),
('minu', 'meena', '', '0000-00-00', 0, '', '', '34e7abbf202fc82c46de2d41d6a80ea5', 'User'),
('po', 'aditya', '', '0000-00-00', 0, '', '', '34e7abbf202fc82c46de2d41d6a80ea5', 'User'),
('poly', 'surabhi', '', '0000-00-00', 0, '', '', '34e7abbf202fc82c46de2d41d6a80ea5', 'User'),
('prerna', 'prerna', 'garg', '2013-04-03', 1234567890, 'anand', 'prerna@gmail.com', '', 'User'),
('prerna228', 'Prerna', 'garg', '2013-04-01', 1234569877, 'gnagar', 'prerna@gmail.com', 'prerna', 'User'),
('priyal', 'jain', '', '0000-00-00', 0, '', '', '34e7abbf202fc82c46de2d41d6a80ea5', 'User'),
('ram143', 'ram', '', '0000-00-00', 0, '', '', '34e7abbf202fc82c46de2d41d6a80ea5', 'User'),
('sam', 'sameer', '', '0000-00-00', 0, '', '', '34e7abbf202fc82c46de2d41d6a80ea5', 'User'),
('superman', 'superman', 'marvel', '2013-04-01', 1230456789, 'cgsfcui', 'raa@gmail.com', 'superman', 'Admin'),
('yukti', 'yukti', '', '0000-00-00', 0, '', '', '34e7abbf202fc82c46de2d41d6a80ea5', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `username` varchar(50) NOT NULL,
  `item_ids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`username`, `item_ids`) VALUES
('prerna228', 7),
('prerna228', 13),
('prerna228', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids_for`
--
ALTER TABLE `bids_for`
 ADD PRIMARY KEY (`Username`,`Item_ids`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
 ADD PRIMARY KEY (`Item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
 ADD PRIMARY KEY (`username`,`item_ids`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
MODIFY `Item_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
