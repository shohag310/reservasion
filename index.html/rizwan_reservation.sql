-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 01, 2021 at 10:29 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rizwan_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `roomnong` varchar(250) DEFAULT NULL,
  `bookingstaff` varchar(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `bookingdate` varchar(250) DEFAULT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(250) DEFAULT NULL,
  `phonenumber` varchar(250) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL,
  `statas` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookingroom`
--

CREATE TABLE `bookingroom` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(250) DEFAULT NULL,
  `phonenumber` varchar(250) DEFAULT NULL,
  `bookingdate` varchar(250) DEFAULT NULL,
  `roomname` varchar(250) DEFAULT NULL,
  `roomeprice` varchar(250) DEFAULT NULL,
  `staffname` varchar(250) DEFAULT NULL,
  `message` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingroom`
--

INSERT INTO `bookingroom` (`id`, `firstname`, `lastname`, `phonenumber`, `bookingdate`, `roomname`, `roomeprice`, `staffname`, `message`) VALUES
(23, 'Rizwan', 'Manzoor', '0415685550', '20/10/2020', '18', '$900', 'evan', ''),
(24, 'Rizwan', 'Manzoor', '45000555', '20/10/2020', '8', '$900', 'evan', ''),
(25, 'Noman', 'Umar Manzoor', '0433730044', '20/10/2020', '17', '$900', 'evan', ''),
(27, 'Rizwan', 'Manzoor', '0415685550', '20/10/2020', '14', '$500', 'evan', ''),
(28, 'Rizwan', 'Manzoor', '0415685550', '20/10/2020', '21', '$1,000', 'evan', ''),
(29, 'Rizwan', 'Manzoor', '0415685550', '20/10/2020', '9', '$700', 'evan', ''),
(30, 'Tajbin', 'Khan', '+8801675249574', '19/10/2020', '4', '$500', 'evan', ''),
(31, 'Tajbin', 'Khan', '+8801675249574', '19/10/2020', '3', '$700', 'evan', ''),
(32, 'Rizwan', 'Manzoor', '0415685550', '19/10/2020', '8', '$900', 'evan', ''),
(42, 'Rizwan', 'Manzoor', '0415685550', '20/10/2020', '1', '$1,000', 'admin', ''),
(43, 'Rizwan', 'Manzoor', '0415685550', '20/10/2020', '2', '$1,000', 'admin', ''),
(44, 'Rizwan', 'Manzoor', '45000555', '20/10/2020', '7', '$500', 'evan', ''),
(46, 'Tajbin', 'Khan', '+8801675249574', '2020/10/20', '8', '$900', 'admin', ''),
(47, 'Zeeshan', 'Ahmed', '8329691268', '2020/10/20', '1', '$1,000', 'Zeeshan', 'Birthday'),
(48, 'Zeeshan', 'Ali', '8329691268', '2020/10/20', '9', '$700', 'Zeeshan', 'Party'),
(49, 'Rizwan', 'Manzoor', '0415685550', '2020/10/20', '2', '$1,000', 'Zeeshan', ''),
(50, 'Noman', 'Umar Manzoor', '0433730044', '2020/10/20', '7', '$500', 'Zeeshan', ''),
(51, 'Noman', 'Umar Manzoor', '0433730044', '2020/10/20', '15', '$500', 'Zeeshan', ''),
(53, 'Rizwan', 'Manzoor', '0415685550', '2020/10/21', '21', '$1,000', 'Zeeshan', ''),
(57, 'Chamito', 'Ali', '8329681268', '2020/10/21', '1', '$1,000', 'Zeeshan', 'Birthday'),
(58, 'Erode', 'Lily', '832969268', '2020/10/21', '7', '$500', 'Zeeshan', 'Birthday'),
(60, 'Amna', 'Jabbar', '0450005551', '10/21/2020', '7', '$500', 'Manager', ''),
(61, 'Rizwan1', 'Riz', '8312323233', '10/21/2020', '23', '$500', 'Booking', ''),
(62, 'Noman', 'U', '0433730044', '10/21/2020', '22', '$900', 'Booking', ''),
(64, 'Babar', 'Babar', '450006667', '10/21/2020', '21', '$1,000', 'Booking', 'Test'),
(65, 'ABC2', 'Ddd', '00000', '10/21/2020', '2', '$1,000', 'Manager', ''),
(66, 'Zee', 'Test', '832988274', '10/21/2020', '20', '$900', 'Booking', 'Testing'),
(67, 'Abc3', 'Ddd', '0000', '10/21/2020', '9', '$700', 'Manager', ''),
(68, 'Go go', 'To', '7883674864', '10/21/2020', '19', '$500', 'Booking', 'Test'),
(69, 'Abc4', 'Dddd', '0000', '10/21/2020', '11', '$700', 'Manager', ''),
(70, 'Abc5', 'Dddd', '0000', '10/21/2020', '12', '$700', 'Manager', ''),
(71, 'Abc6', 'Ddd', '0000', '10/21/2020', '13', '$500', 'Manager', ''),
(72, 'Abc7', 'Dddd', '0000', '10/21/2020', '10', '$500', 'Manager', ''),
(74, 'Tyuu', 'Ccvv', '0000', '10/21/2020', '3', '$700', 'Manager', ''),
(75, 'Tyuu', 'Cbhj', '00000', '10/21/2020', '17', '$900', 'Manager', ''),
(76, 'To To', 'Go Go', '87386467', '10/21/2020', '26', '$700', 'Booking', 'Go test'),
(77, 'Gj', 'Cucu', '0000', '10/21/2020', '18', '$900', 'Manager', ''),
(78, 'sfhdslf', 'hbsbdjkf', '989472387429', '10/21/2020', '24', '$900', 'Booking', ''),
(79, 'Yukjh', 'Cvhhh', '6789', '10/21/2020', '5', '$500', 'Manager', ''),
(80, 'sfs', 'sdbfjs', 'sjkdfs', '10/21/2020', '25', '$300', 'Booking', 'Checking error'),
(81, 'Ghjbvv', 'Ghjbb', '76543', '10/21/2020', '6', '$500', 'Manager', ''),
(82, 'Hjjvv', 'Dfgh', '6554', '10/21/2020', '14', '$500', 'Manager', ''),
(83, 'Test', 'again', '83409234028', '10/21/2020', '29', '$900', 'Booking', 'go test'),
(84, 'Fuhh', 'Bvc', '0888', '10/21/2020', '15', '$500', 'Manager', ''),
(85, 'Tere', 'naame', '8128330894', '10/21/2020', '30', '$300', 'Booking', 'Test again'),
(86, 'Cvbh', 'Guj', '678', '10/21/2020', '4', '$500', 'Manager', ''),
(87, 'Amna', 'Jabbar', '0450005551', '10/21/2020', '31', '$700', 'Booking', ''),
(88, 'G gg kjfg', 'Fgnbb', '0864', '10/21/2020', '38', '$300', 'Manager', ''),
(89, 'Rizwan', 'Manzoor', '0415685550', '10/21/2020', '28', '$500', 'Booking', ''),
(90, 'Fuahj', 'Ghsghs', '5754', '10/21/2020', '39', '$300', 'Manager', ''),
(91, 'Noman Umar', 'Manzoor', '415685550', '10/21/2020', '33', '$500', 'Booking', ''),
(92, 'Zeeshan', 'Mnzr', '18329691268', '10/21/2020', '32', '$500', 'Booking', ''),
(93, 'Gfxfv', 'Fthhh', 'Fghh', '10/21/2020', '40', '$300', 'Manager', ''),
(94, 'Rizwan', 'Manzoor', '0415685550', '10/21/2020', '35', '$500', 'Booking', ''),
(95, 'Ffdfhh', 'Fghhj', 'Dghj', '10/21/2020', '37', '$300', 'Manager', ''),
(96, 'Rhhhj', 'Fghh', 'Ffghj', '10/21/2020', '36', '$500', 'Manager', ''),
(103, 'Rizwan', 'Manzoor', '0415685550', '10/23/2020', '31', '$700', 'Manager', ''),
(104, 'Zeeshan', 'Mnzr', '18329691268', '10/26/2020', '31', '$700', 'Manager', ''),
(105, 'Amna', 'Jabbar', '0450005551', '10/21/2020', '1', '$1,000', 'Manager', ''),
(107, 'Zeeshan', 'Mnzr', '18329691268', '10/22/2020', '21', '$1,000', 'Manager', ''),
(109, 'Rizwan', 'Manzoor', '45000555', '10/22/2020', '1', '$1,000', 'Staff1', ''),
(110, 'Zeeshan', 'Mnzr', '18329691268', '10/22/2020', '2', '$1,000', 'Staff1', ''),
(111, 'Rizwan', 'Manzoor', '45000555', '10/22/2020', '20', '$900', 'Staff1', ''),
(115, 'Rizwan', 'Manzoor', '0415685550', '10/23/2020', '1', '$1,000', 'Staff1', ''),
(116, 'Zeeshan', 'Mnzr', '18329691268', '10/23/2020', '2', '$1,000', 'Staff1', ''),
(117, 'Zeeshan', 'Mnzr', '18329691268', '10/21/2020', '34', '$500', 'Staff1', ''),
(118, 'Rizwan', 'Manzoor', '0415685550', '11/15/2020', '1', '$1,000', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `roomprice`
--

CREATE TABLE `roomprice` (
  `id` int(11) NOT NULL,
  `roomnong` varchar(250) DEFAULT NULL,
  `roomprice` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `roll` varchar(250) DEFAULT NULL,
  `passwords` varchar(250) DEFAULT NULL,
  `createdate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `roll`, `passwords`, `createdate`) VALUES
(5, 'admin', 'admin', '$2y$10$ExQuk04UNy/QSlLDPALdSuAgwwcdMW2cMJWQz1MT05fDXaqAK7srO', NULL),
(9, 'Zeeshan', 'staff', '$2y$10$T9YSva5vZMc.PGDrfey2MO.1YCVMTEP2OTSUgmLMuM/W2sBVPvgeW', '20/10/2020'),
(13, 'Manager', 'staff', '$2y$10$inXUYNNJiB3IcNytBTF3iOzd49cJJtQO.xwK7AxzK4wsdm0PHOJZu', '10/21/2020'),
(22, 'Nye1', 'user', '$2y$10$OFAXTfdCSLjMrXItfYnOluyKMNlubVehhBGOeF4ViISd3UzAN4z5C', '12/17/2020'),
(23, 'Nye2', 'user', '$2y$10$IEOEchfKRP4qIBmPT940Z.Oj/YkpoXSw3ot4.VHbGCR9/CtZ1VpGK', '12/17/2020'),
(24, 'Nye3', 'user', '$2y$10$BDuFi8qSmX0DG.qfwGfi0efbK8DbuZVtl2bJeVHQ3kUtnJiroLPeO', '12/17/2020'),
(25, 'Mythnight', 'staff', '$2y$10$aPTagEIyAR4HEUf5SXzCG.Ql6WtUHYTkBV3D/WP21SlBK1fkffiXK', '12/17/2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookingroom`
--
ALTER TABLE `bookingroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomprice`
--
ALTER TABLE `roomprice`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookingroom`
--
ALTER TABLE `bookingroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `roomprice`
--
ALTER TABLE `roomprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
