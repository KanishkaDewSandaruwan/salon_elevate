-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 07:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saloon`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twiter` varchar(255) NOT NULL,
  `instragram` varchar(255) NOT NULL,
  `open` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`image`, `title`, `description`, `email`, `phone`, `address`, `facebook`, `twiter`, `instragram`, `open`) VALUES
('hendrik-cornelissen-jpTT_SAU034-unsplash.jpg', 'White Catchers Gift Wall decor', '<p>sssss</p>', 'kanishkadewsandaruwan@gmail.com', 713664071, 'Banwalgodalla, Kosmulla', 'https://www.facebook.com/kanishka.dew.sandaruwan/', 'https://www.facebook.com/kanishka.dew.sandaruwan/', 'https://www.facebook.com/kanishka.dew.sandaruwan/', 'Mon-Sun : 10am:07pm');

-- --------------------------------------------------------

--
-- Table structure for table `appinment`
--

CREATE TABLE `appinment` (
  `appoinment_id` int(11) NOT NULL,
  `eppinment_date` date NOT NULL,
  `eppinment_time` time NOT NULL,
  `eppinment_end_time` time NOT NULL,
  `trn_date` datetime NOT NULL,
  `service_id` int(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appinment`
--

INSERT INTO `appinment` (`appoinment_id`, `eppinment_date`, `eppinment_time`, `eppinment_end_time`, `trn_date`, `service_id`, `customer_id`, `status`, `payment`, `amount`) VALUES
(10, '2021-05-27', '04:34:00', '05:34:00', '2021-05-23 05:13:49', 5, 0, 'Canceled', 'Paid', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nic` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phone`, `email`, `address`, `password`, `nic`) VALUES
(5, 'Kanishka Sandaruwan', 783664071, 'kanishkadewsandaruwan@gmail.com', 'Galle Neluwa', 'e10adc3949ba59abbe56e057f20f883e', '91364578V'),
(7, 'Kanishka Dew Sandaruwan', 713664056, 'kanishkadewsandaruwan9@gmail.com', 'Banwalgodalla, Kosmulla', 'e10adc3949ba59abbe56e057f20f883e', '962670426G');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `header_image` varchar(255) NOT NULL,
  `header_title` varchar(255) NOT NULL,
  `header_desc` varchar(255) NOT NULL,
  `subpage_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`header_image`, `header_title`, `header_desc`, `subpage_image`) VALUES
('archie-fantom-lCe_aHkPxss-unsplash.jpg', 'White Catchers Gift Wall decor', 'Order your foods', 'gersey-vargas-ijuTwBjQZww-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `full_name`, `address`, `phone_number`, `email`, `nic`, `password`, `username`, `trndate`) VALUES
(2, '', '', 0, '', '', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '2020-11-22 11:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `galary`
--

CREATE TABLE `galary` (
  `image_id` int(11) NOT NULL,
  `galary_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galary`
--

INSERT INTO `galary` (`image_id`, `galary_image`) VALUES
(21, 'archie-fantom-lCe_aHkPxss-unsplash.jpg'),
(22, 'gersey-vargas-ijuTwBjQZww-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `m_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `trn_date` datetime NOT NULL,
  `msg_read` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `name`, `email`, `subject`, `message`, `trn_date`, `msg_read`) VALUES
(2, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'kk', 'tjgj', '2020-12-24 12:17:24', 'Reded'),
(8, 'Kanishka Dew Sandaruwan', 'kanishkadewsandaruwan@gmail.com', 'ssss', 'ssssss', '2021-05-13 05:19:02', 'Reded');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `hour` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `title`, `description`, `image`, `price`, `headline`, `hour`) VALUES
(3, 'Handmade Dream  Catchers  medium Gift Wall deco ', '<p>sssssss</p>', 'hendrik-cornelissen-jpTT_SAU034-unsplash.jpg', 850, 'ojsjasjnajs sdsdsdsd', 2),
(4, 'Logitec Keyboard', '<p>ssssss</p>', 'daniel-klein-Qx8_d5dGhrs-unsplash.jpg', 7500, 'sss', 1),
(5, 'Handmade Dream  Catchers  for vehicle', '<p>aaaaa</p>', 'daniel-klein-Qx8_d5dGhrs-unsplash.jpg', 2500, 'ojsjasjnajs', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appinment`
--
ALTER TABLE `appinment`
  ADD PRIMARY KEY (`appoinment_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `galary`
--
ALTER TABLE `galary`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appinment`
--
ALTER TABLE `appinment`
  MODIFY `appoinment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galary`
--
ALTER TABLE `galary`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
