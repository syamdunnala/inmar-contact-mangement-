-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 03:42 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inmar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(15) NOT NULL,
  `ph.no` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `aadhar` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `ph.no`, `email`, `aadhar`, `password`, `cpassword`) VALUES
('', 0, '', '', '', ''),
('ahmed khaja has', 1234567890, 'ahmed@inmar.com', '87654345678', 'aA12345678', 'aA12345678'),
('dunnala12', 2147483647, 'dunnala@inmar.com', '789456123654', 'dunnala123S', 'dunnala123S'),
('gai@1234', 2147483647, 'gai@inmar.com', '7896541236', 'gai123GAI', 'gai123GAI'),
('deekshith', 2147483647, 'namjsh@inmar.com', '7815115154', 'aGss123@', 'aGss123@'),
('raidu1234', 2147483647, 'raidu@inmar.com', '78965412365', 'raidu123AUTO', 'raidu123AUTO'),
('ram12345', 2147483647, 'ram@inmar.com', '789654123654', 'ram123ASD', 'ram123ASD'),
('sandeep1', 2147483647, 'ravi@inmar.com', '789654123654', 'raviQ123', 'raviQ123'),
('sai12345', 2147483647, 'sand@inmar.com', '789654123', 'pvpSIT123', 'pvpSIT123'),
('saym1234', 2147483647, 'saym@inmar.com', '789654123', '123qweQWE', '123qweQWE'),
('syam1234', 2147483647, 'syam@inmar.com', '123654789', '123qweQWE', '123qweQWE');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `owner` varchar(30) NOT NULL,
  `group_id` varchar(30) NOT NULL,
  `contact_name` varchar(30) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `contact_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`owner`, `group_id`, `contact_name`, `phonenumber`, `contact_email`) VALUES
('ahmed@inmar.com', '123', 'ram', '1234567890', '0'),
('ahmed@inmar.com', '123', 'sandeep', '7896541235', '0'),
('ahmed@inmar.com', '123', 'mine', '1234456789', 'erme@inmar.com'),
('ahmed@inmar.com', '123', 'sandeep', 'jbfejwfbrjkm', 'jbdjkfrejkd'),
('ahmed@inmar.com', '123', 'raj', '7896541235', 'raj@inmar.com'),
('saym@inmar.com', '12345', 'nsbvhadn', 'mmbdwjs', 'bdjcx mjd');

-- --------------------------------------------------------

--
-- Table structure for table `group_inf`
--

CREATE TABLE `group_inf` (
  `owner_email` varchar(30) NOT NULL,
  `group_id` varchar(30) NOT NULL,
  `group_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_inf`
--

INSERT INTO `group_inf` (`owner_email`, `group_id`, `group_name`) VALUES
('ram@inmar.com', '1205', 'inmar'),
('ram@inmar.com', '1206', 'microsoft'),
('syam@inmar.com', '12099', 'pvr'),
('ahmed@inmar.com', '123', 'college'),
('ram@inmar.com', '1230', 'IBM'),
('email', '1233', 'msd'),
('', '1234', 'ms'),
('saym@inmar.com', '12345', 'sand'),
('saym@inmar.com', '2334', 'sandeep'),
('syam@inmar.com', '543', 'inox'),
('namjsh@inmar.com', '6547', 'agss'),
('dunnala@inmar.com', 'qwer', 'anna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `group_inf`
--
ALTER TABLE `group_inf`
  ADD PRIMARY KEY (`group_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
