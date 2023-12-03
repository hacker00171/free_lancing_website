-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 10:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_register`
--

CREATE TABLE `employee_register` (
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_register`
--

INSERT INTO `employee_register` (`email_id`, `password`, `name`, `country`, `dob`) VALUES
('srinivasan00017@gmail.com', '123456789', 'srinivasan ss', 'india', '2000-11-17'),
('shree146vatchan@gmail.com', '123456789', 'srinivasan ss', 'india', '2000-11-17'),
('gk1@gmail.com', '123456gk', 'gowtham', 'india', '0000-00-00'),
('prakash@gmail.com', 'asdf123', 'prakash', 'india', '2023-11-11'),
('selvan@gmail.com', 'asdf123', 'selvan', 'india', '2001-01-01'),
('work@gmail.com', 'asdf123', 'work', 'india', '2003-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `employer_register`
--

CREATE TABLE `employer_register` (
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employer_register`
--

INSERT INTO `employer_register` (`email_id`, `password`, `name`, `country`) VALUES
('srinivasan00017@gmail.com', '123456789', 'srinivasan ss', 'india'),
('gk@gmail.com', 'asdfg1234', 'Gowthamkumar M', 'india'),
('surya@gmail.com', '12345asdf', 'surya', 'india'),
('arut@gmail.com', 'asdf123', 'arut', 'india'),
('hire@gmail.com', 'asdf123', 'hire', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` varchar(100) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_description` varchar(100) NOT NULL,
  `proj_price` int(100) NOT NULL,
  `timesubmit` varchar(100) NOT NULL,
  `employer_name` varchar(100) NOT NULL,
  `employer_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_description`, `proj_price`, `timesubmit`, `employer_name`, `employer_email`) VALUES
('', 'Image classification using deep learning', 'find the particular object form the given image', 5000, '0000-00-00 00:00:00', 'srinivasan ss', 'srinivasan00017@gmail.com'),
('50563', 'Image classification using deep learning', 'find the particular object form the given image', 5000, '0000-00-00 00:00:00', 'srinivasan ss', 'srinivasan00017@gmail.com'),
('123456', 'python face id', 'object detection', 5000, '23/21/2001', 'Gowthamkumar M', 'gk@gmail.com'),
('159357', 'powerbi', 'visual representation of data', 10000, '11/11/2023', 'surya', 'surya@gmail.com'),
('159357', 'powerbi', 'visual representation of data', 10000, '11/11/2023', 'surya', 'surya@gmail.com'),
('24680', 'web development', 'login page validation', 5000, '30/11/2023', 'arut', 'arut@gmail.com'),
('13579', 'web development', 'registration form', 7000, '30/12/2023', 'hire', 'hire@gmail.com'),
('1234', 'web development', 'home page creation', 7000, '28/11/2023', 'hire', 'hire@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `project_price`
--

CREATE TABLE `project_price` (
  `pp_id` varchar(100) NOT NULL,
  `proj_id` varchar(100) NOT NULL,
  `proj_amount` int(100) NOT NULL,
  `submit_time` varchar(100) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_email` varchar(100) NOT NULL,
  `employer_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_price`
--

INSERT INTO `project_price` (`pp_id`, `proj_id`, `proj_amount`, `submit_time`, `employee_name`, `employee_email`, `employer_email`) VALUES
('', '123456', 5000, '0000-00-00', 'gowtham', 'gk1@gmail.com', 'gk@gmail.com'),
('', '123456', 5000, '23/21/2001', 'gowtham', 'gk1@gmail.com', 'gk@gmail.com'),
('', '159357', 8000, '10/11/2023', 'prakash', 'prakash@gmail.com', 'surya@gmail.com'),
('', '24680', 5000, '28/11/2023', 'selvan', 'selvan@gmail.com', 'arut@gmail.com'),
('', '1234', 6000, '26/11/2023', 'work', 'work@gmail.com', 'hire@gmail.com'),
('', '13579', 6500, '28/12/2023', 'prakash', 'prakash@gmail.com', 'hire@gmail.com'),
('', '159357', 5000, '28/11/2023', 'work', 'work@gmail.com', 'surya@gmail.com'),
('', '13579', 5000, '25/12/2023', 'work', 'work@gmail.com', 'hire@gmail.com'),
('', '1234', 5500, '19/12/2023', 'prakash', 'prakash@gmail.com', 'hire@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
