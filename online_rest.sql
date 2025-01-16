-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 07:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com', '', '2021-04-07 08:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `title`, `description`, `image`, `date`) VALUES
(1, 'Signature', 'Taste our original fried chicken made special for fried chicken lover.', 'signature.jpg', '2024-07-01 15:30:28'),
(9, 'Side Dishes', 'At Murni we not only sell chicken we also provide side dishes for our beloved customers', '6682cf36ee24d.jpg', '2024-07-01 15:45:58'),
(10, 'Pasta', 'In Murni Fried Chicken we also cook pasta for our customers', '6682d5ac44057.jpg', '2024-07-01 16:13:32'),
(11, 'Beverages', 'When eating we encourage our customer to drink water', '6682de412c5fb.jpg', '2024-07-01 16:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `c_id`, `title`, `slogan`, `price`, `img`) VALUES
(1, 1, 'Murni Boneless Chicken', 'Chicken parts deep fried without bone and easy to eat', 15.00, '6682c805a638b.jpg'),
(2, 1, 'Murni Spicy Chicken', '7 pcs fried chicken coated with ghost pepper sauce made for spicy lovers', 20.00, '6682c919b3b34.jpg'),
(5, 10, 'Spaghetti Gamberoni', 'Spaghetti pasta, grilled shrimps, parmesan cheese, with homemade pasta sauce.', 17.00, '6682db6881ae5.jpg'),
(6, 9, 'Cheesy Eezy Mashed Potato', 'Covered with mozzarella cheese and cooked slowly.', 8.00, '6682d174a60b5.jpg'),
(8, 10, 'Grilled Chicken And Pasta', 'Marinated rosemary grilled chicken breast served with mashed potatoes.', 17.00, '6682dbaa71d49.jpg'),
(10, 9, 'Murni Prawns Cracker', '12 pieces deep-fried prawn crackers coated with flour ', 12.00, '6682d1ca442a9.jpg'),
(11, 9, 'Special Spring Rolls', 'Lightly seasoned shredded cabbage, onion and carrots, wrapped in house made spring roll wrappers.', 10.00, '6682d0bd0360f.jpg'),
(12, 1, 'Murni Manchurian Chicken', 'Chicken pieces slow cooked with spring onions in our house made manchurian sauce.', 32.00, '66810f5189ea7.jpg'),
(13, 1, ' Murni Buffalo Wings', '7 pcs fried chicken wings tossed in spicy Buffalo sauce served with crisp celery sticks and Blue cheese dip.', 20.00, '66810ed7cad73.jpg'),
(14, 9, 'Mac & Cheese Bites', 'Using imported Mozarella chees, served with our traditional spicy queso and marinara sauce.', 25.00, '6682d0604d911.jpg'),
(15, 9, 'Murni Potato Twisters', 'Made with spiral potatoes, serve with Italy white cheese and finish with onion topping', 16.00, '6682cffc404f2.jpg'),
(16, 10, 'Murni Meatballs Penne Pasta ', 'Garlic-herb beef meatballs tossed in our house-made marinara sauce and penne pasta.', 15.00, '6682d657f367d.jpg'),
(17, 1, 'Ayam Tempura', 'Ayam disalut tempura', 30.00, '6680ca24eed2a.jpg'),
(18, 11, 'Iced Americano', 'Cold brew americano with extra 2 shots', 5.00, '6682e1cb6ceed.jpg'),
(19, 11, 'Iced Capuccino', 'Cold brew cappuccino ', 6.00, '6682e2f04fc44.jpg'),
(20, 11, 'Iced Orange Juice', 'Fresh orange squeeze with machine', 5.00, '6682e5a67efd0.jpg'),
(21, 11, 'Iced Apple Juice', 'Fresh pick apple from Australia and serve directly to you', 4.00, '6682e61024eba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(1, 1, 'closed', 'sediakan balance', '2024-06-30 03:07:15'),
(2, 6, 'in process', 'Sabar ye', '2024-07-01 18:02:38'),
(3, 7, 'in process', '', '2024-07-01 18:57:12'),
(4, 9, 'in process', '', '2024-07-03 04:36:59'),
(5, 9, 'rejected', '', '2024-07-03 04:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(5, 'Caki', 'Ishraqi', 'Rizal', 'customerSetia@gmail.com', '01133947788', 'e10adc3949ba59abbe56e057f20f883e', 'Rumah hujung simpang lot corner, Taman Nilai Problem, Bangi, Selangor', 1, '2024-06-25 17:59:30'),
(6, 'Hel', 'Helmi', 'Osman', 'helmi@gmail.com', '1111111111', 'e10adc3949ba59abbe56e057f20f883e', 'Jalan Mega 666, Taman Sam Wukong, Selangor ', 1, '2024-07-01 18:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(9, 6, 'Murni Spicy Chicken', 1, 20.00, 'rejected', '2024-07-03 04:37:23'),
(11, 6, 'Ayam Tempura', 11, 30.00, NULL, '2024-07-02 09:43:16'),
(15, 6, 'Murni Boneless Chicken', 10, 15.00, NULL, '2024-07-03 04:34:12'),
(16, 6, 'Cheesy Eezy Mashed Potato', 1, 8.00, NULL, '2024-07-04 16:56:35'),
(17, 6, 'Murni Boneless Chicken', 1, 15.00, NULL, '2024-07-05 05:18:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
