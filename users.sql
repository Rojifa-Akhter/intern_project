-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 10:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` text NOT NULL,
  `postcode` int(11) NOT NULL,
  `address` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `date_of_birth`, `gender`, `postcode`, `address`, `username`, `password`) VALUES
(4, 'Nirjona', 'mstrojifaakhter@gmail.com', '2011-01-01', 'F', 1222, 'Rangpur', 'Akhter', '8724aa758c2f662d79952870ef486ea6'),
(6, 'Mst. Rojifa Akhter', '1001079@daffodil.ac', '2011-01-01', 'F', 1222, 'Rangpur', 'nila', '8f615a4eb159d44a363d41b103a7d683'),
(8, 'Rupa Akhter', '123@gmail.com', '0000-00-00', 'F', 432, 'Dhaka', 'rupa', 'a7971d94da14768b7c70dacc0c67ea20'),
(9, 'Abdus Salam', '1001081@daffodil.ac', '0000-00-00', 'M', 321, 'Feni', 'salam', '192404bede5083e4b75dfe508acf61d8'),
(10, 'Saiful Islam', '1001061@daffodil.ac', '2001-02-08', 'M', 1234, 'Barishal', 'saiful', '86284def97bf92eb889775c226624024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
