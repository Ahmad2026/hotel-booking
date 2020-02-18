-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2020 at 06:21 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_hotel`
--

CREATE TABLE `booked_hotel` (
  `order_id` varchar(256) NOT NULL,
  `amount` float NOT NULL,
  `check_in` datetime DEFAULT NULL,
  `check_out` datetime DEFAULT NULL,
  `status1` varchar(20) NOT NULL,
  `room_no` int(11) NOT NULL,
  `hotel_id` int(6) NOT NULL,
  `u_id` int(6) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_hotel`
--

INSERT INTO `booked_hotel` (`order_id`, `amount`, `check_in`, `check_out`, `status1`, `room_no`, `hotel_id`, `u_id`, `email`) VALUES
('ORDS16639513', 20000, '2020-02-15 00:00:00', '2020-02-16 00:00:00', 'booked', 99, 14, 8, ''),
('ORDS43179657', 20000, '2020-02-15 00:00:00', '2020-02-16 00:00:00', 'booked', 98, 14, 1, 'ahmadazmi2026@gmail.com'),
('ORDS50340537', 100, '2020-02-15 00:00:00', '2020-02-16 00:00:00', 'booked', 186, 13, 1, 'ahmadazmi2026@gmail.com'),
('ORDS57640956', 20000, '2020-02-15 00:00:00', '2020-02-16 00:00:00', 'booked', 97, 14, 1, 'ahmadazmi2026@gmail.com'),
('ORDS66326426', 9000, '2020-02-15 00:00:00', '2020-02-16 00:00:00', 'booked', 185, 13, 1, 'ahmadazmi2026@gmail.com'),
('ORDS86099680', 100, '2020-02-14 00:00:00', '2020-02-15 00:00:00', 'booked', 188, 13, 1, 'ahmadazmi2026@gmail.com'),
('ORDS9925629', 20000, '2020-02-14 00:00:00', '2020-02-15 00:00:00', 'booked', 100, 14, 1, 'ahmadazmi2026@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booked_package`
--

CREATE TABLE `booked_package` (
  `order_id` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `status1` varchar(20) NOT NULL,
  `package_id` int(6) NOT NULL,
  `uid` int(6) NOT NULL,
  `email` varchar(256) NOT NULL,
  `starting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_package`
--

INSERT INTO `booked_package` (`order_id`, `amount`, `status1`, `package_id`, `uid`, `email`, `starting_date`) VALUES
('ORDS15835001', 10000, 'booked', 44, 1, 'ahmadazmi2026@gmail.com', '2020-02-29'),
('ORDS6235131', 9000, 'booked', 43, 1, 'ahmadazmi2026@gmail.com', '2020-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_details`
--

CREATE TABLE `hotel_details` (
  `hotel_id` int(6) NOT NULL,
  `hotel_name` text NOT NULL,
  `hotel_description` varchar(256) NOT NULL,
  `hotel_location` varchar(256) NOT NULL,
  `total_rooms` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `price` float NOT NULL,
  `hotel_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_details`
--

INSERT INTO `hotel_details` (`hotel_id`, `hotel_name`, `hotel_description`, `hotel_location`, `total_rooms`, `rating`, `price`, `hotel_image`) VALUES
(13, 'Trident Nariman Point ', 'decription 2', 'Mumbai', 184, 4, 100, 'trident.jpg'),
(14, 'Radisson Mumbai ', 'description3', 'mumbai', 96, 5, 20000, 'radisson.jpg'),
(15, 'Treebo', 'description4', 'mumbai', 150, 3, 0, 'treebo.jpg'),
(16, 'Novotel Mumbai Juhu Beach', 'decription 5\r\n', 'mumbai', 50, 5, 0, 'novotel.jpg'),
(17, 'Meluha - The Fern', 'decription 6', 'mumbai', 101, 4, 0, 'meluha.jpg'),
(18, 'Radisson Mumbai Goregaon ', 'description 7', 'mumbai', 103, 4, 0, 'rad.jpg'),
(19, 'Rodas An Ecotel Hotel ', 'description 8', 'mumbai', 127, 3, 0, 'Rodas.jpg'),
(20, 'Hotel Sunshine Airport', 'decription 9', 'mumbai\r\n', 105, 4, 0, 'Sunshine.jpg'),
(21, 'talha', 'awesome', 'mumbai', 127, 4, 1000, 'Rodas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_slider`
--

CREATE TABLE `hotel_slider` (
  `hotel_slider_id` int(6) NOT NULL,
  `hotel_slider_image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_slider`
--

INSERT INTO `hotel_slider` (`hotel_slider_id`, `hotel_slider_image`) VALUES
(13, 'Sunshine.jpg'),
(13, 'radisson.jpg'),
(13, 'novotel.jpg'),
(43, 'manali.jpeg'),
(43, 'Mysore.png'),
(43, 'kashmir.jpg'),
(43, 'Mysore.png'),
(44, 'kerla.jpeg'),
(44, 'kerla.jpeg'),
(44, 'kerla.jpeg'),
(43, 'goa.jpg'),
(43, 'taj2.jpeg'),
(43, 'taj3.jpg'),
(43, 'taj2.jpeg'),
(43, 'taj3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(6) NOT NULL,
  `package_name` varchar(256) NOT NULL,
  `package_price` float NOT NULL,
  `package_details` varchar(2000) NOT NULL,
  `package_location` varchar(1000) NOT NULL,
  `days` varchar(256) NOT NULL,
  `package_image` varchar(256) NOT NULL,
  `starting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `package_price`, `package_details`, `package_location`, `days`, `package_image`, `starting_date`) VALUES
(43, 'Agra', 9000, 'Enjoy the best cultural attractions of northern and central parts of India with this week-long holiday. In Agra, the Taj Mahal will be an unforgettable sight. Don’t miss the medieval fortified city, Fatehpur Sikri. In Gwalior, revel in the magnificent architecture of Gwalior Fort. In the quaint town of Orchha, seek blessings at the sacred Shri Ramraja Temple. You will also get a chance to see the Hindu and Jain temples of Khajuraho that have been declared as a UNESCO World Heritage Site', 'AGRA', '6N/5D', 'taj.jpeg', '2020-02-22'),
(44, 'Holiday in Manali & Shimla', 10000, 'Sightseeing in scenic Shimla | Visit to Solang Valley | Comfortable private transfers from and to Delhi (with pit stops for Maggi!) | Value Pack included in the package', 'Manali,Shimla', '5N/4D', 'manali.jpeg', '2020-02-29'),
(45, 'Mini Kerala - Value Added', 7000, 'Visit backwaters and tea gardens | See Eravikulam National Park | Car value pack - Snack box on arrival & extra 2 hours at disposal, once in each city', 'kerla', '3N/2D', 'kerla.jpeg', '2020-02-27'),
(46, 'Free Sightseeing - Goan Holiday with Family', 30000, 'Explore attractions of North & South Goa in an MUV (Upto 6 pax) | Private Airport transfers with a welcome kit | Plenty of free time to explore on your own\r\n', 'Goa', '7N/6D', 'goa.jpg', '2020-02-25'),
(47, 'Complete Rajasthan Holiday (9 days)', 25000, '2N Jaipur . 1N Bikaner . 2N Jaisalmer . 1N Jodhpur . 2N Udaipur', 'Rajasthan', '10N/9D', 'rajasthan.jpg', '2020-02-24'),
(48, 'Ooty & Mysore with Bangalore - Value Added', 12000, '1N Bangalore . 1N Mysore . 2N Ooty,\r\n\r\nSightseeing in scenic Mysore & Ooty | Visit to Co0noor | Comfortable private transfers from and to Bangalore!!', 'karnatka', '5N/4D', 'Mysore.png', '2020-02-29'),
(49, 'Best of Kashmir', 15000, '2N Srinagar . 2N Gulmarg', 'kashmir', '4N/4D', 'kashmir.jpg', '2020-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `package_slider`
--

CREATE TABLE `package_slider` (
  `package_slider_id` int(6) NOT NULL,
  `package_slider_image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_slider`
--

INSERT INTO `package_slider` (`package_slider_id`, `package_slider_image`) VALUES
(43, 'taj1.jpg'),
(43, 'taj2.jpeg'),
(43, 'taj3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `username` varchar(256) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `firstname`, `lastname`, `password`) VALUES
(1, '', '', '', ''),
(2, 'shaikhahmad', 'shaikh', 'ahmad', '2987b4fe493fac42c80232aed52e24cb'),
(3, 'shaikhahmad', 'shaikh', 'ahmad', '3f3233c831740a656154f8668b1c07d0'),
(4, 'shaikhahmad', 'shaikh', 'ahmad', '3f3233c831740a656154f8668b1c07d0'),
(5, '', 'h', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, '', 'ahmad', 'aoosos', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'azmi', 'shaikh', 'azmi', '2251df3b7a7c55657526155222d2743a'),
(8, 'talha', 'talha', 'khan', '7d2731ef68f1d34e02a42aedaaf68cad');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `user_id` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'ahmad2026', 'ahmadazmi2026@gmail.com', '$2y$10$cjiTU1JPoblsJGviay2pcOBeb6D02154MGdQOKB1/eRcz2MNilole');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_hotel`
--
ALTER TABLE `booked_hotel`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `booked_package`
--
ALTER TABLE `booked_package`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `hotel_details`
--
ALTER TABLE `hotel_details`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_details`
--
ALTER TABLE `hotel_details`
  MODIFY `hotel_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
