-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 02:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `performa1`
--
CREATE DATABASE IF NOT EXISTS `performa1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `performa1`;

-- --------------------------------------------------------

--
-- Table structure for table `class_pr`
--

CREATE TABLE `class_pr` (
  `roll_no` decimal(16,0) NOT NULL,
  `se` decimal(1,0) DEFAULT NULL,
  `cc` decimal(1,0) DEFAULT NULL,
  `py` decimal(1,0) DEFAULT NULL,
  `cn` decimal(1,0) DEFAULT NULL,
  `php` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_th`
--

CREATE TABLE `class_th` (
  `roll_no` decimal(16,0) NOT NULL,
  `se` decimal(1,0) DEFAULT NULL,
  `cc` decimal(1,0) DEFAULT NULL,
  `py` decimal(1,0) DEFAULT NULL,
  `cn` decimal(1,0) DEFAULT NULL,
  `php` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co1`
--

CREATE TABLE `co1` (
  `roll_no` decimal(16,0) NOT NULL,
  `ser` decimal(1,0) DEFAULT NULL,
  `sea` decimal(1,0) DEFAULT NULL,
  `seu` decimal(1,0) DEFAULT NULL,
  `ccr` decimal(1,0) DEFAULT NULL,
  `cca` decimal(1,0) DEFAULT NULL,
  `ccu` decimal(1,0) DEFAULT NULL,
  `pyr` decimal(1,0) DEFAULT NULL,
  `pya` decimal(1,0) DEFAULT NULL,
  `pyu` decimal(1,0) DEFAULT NULL,
  `cnr` decimal(1,0) DEFAULT NULL,
  `cna` decimal(1,0) DEFAULT NULL,
  `cnu` decimal(1,0) DEFAULT NULL,
  `phpr` decimal(1,0) DEFAULT NULL,
  `phpa` decimal(1,0) DEFAULT NULL,
  `phpu` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co2`
--

CREATE TABLE `co2` (
  `roll_no` decimal(16,0) NOT NULL,
  `ser` decimal(1,0) DEFAULT NULL,
  `sea` decimal(1,0) DEFAULT NULL,
  `seu` decimal(1,0) DEFAULT NULL,
  `ccr` decimal(1,0) DEFAULT NULL,
  `cca` decimal(1,0) DEFAULT NULL,
  `ccu` decimal(1,0) DEFAULT NULL,
  `pyr` decimal(1,0) DEFAULT NULL,
  `pya` decimal(1,0) DEFAULT NULL,
  `pyu` decimal(1,0) DEFAULT NULL,
  `cnr` decimal(1,0) DEFAULT NULL,
  `cna` decimal(1,0) DEFAULT NULL,
  `cnu` decimal(1,0) DEFAULT NULL,
  `phpr` decimal(1,0) DEFAULT NULL,
  `phpa` decimal(1,0) DEFAULT NULL,
  `phpu` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co3`
--

CREATE TABLE `co3` (
  `roll_no` decimal(16,0) NOT NULL,
  `ser` decimal(1,0) DEFAULT NULL,
  `sea` decimal(1,0) DEFAULT NULL,
  `seu` decimal(1,0) DEFAULT NULL,
  `ccr` decimal(1,0) DEFAULT NULL,
  `cca` decimal(1,0) DEFAULT NULL,
  `ccu` decimal(1,0) DEFAULT NULL,
  `pyr` decimal(1,0) DEFAULT NULL,
  `pya` decimal(1,0) DEFAULT NULL,
  `pyu` decimal(1,0) DEFAULT NULL,
  `cnr` decimal(1,0) DEFAULT NULL,
  `cna` decimal(1,0) DEFAULT NULL,
  `cnu` decimal(1,0) DEFAULT NULL,
  `phpr` decimal(1,0) DEFAULT NULL,
  `phpa` decimal(1,0) DEFAULT NULL,
  `phpu` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co4`
--

CREATE TABLE `co4` (
  `roll_no` decimal(16,0) NOT NULL,
  `ser` decimal(1,0) DEFAULT NULL,
  `sea` decimal(1,0) DEFAULT NULL,
  `seu` decimal(1,0) DEFAULT NULL,
  `ccr` decimal(1,0) DEFAULT NULL,
  `cca` decimal(1,0) DEFAULT NULL,
  `ccu` decimal(1,0) DEFAULT NULL,
  `pyr` decimal(1,0) DEFAULT NULL,
  `pya` decimal(1,0) DEFAULT NULL,
  `pyu` decimal(1,0) DEFAULT NULL,
  `cnr` decimal(1,0) DEFAULT NULL,
  `cna` decimal(1,0) DEFAULT NULL,
  `cnu` decimal(1,0) DEFAULT NULL,
  `phpr` decimal(1,0) DEFAULT NULL,
  `phpa` decimal(1,0) DEFAULT NULL,
  `phpu` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co5`
--

CREATE TABLE `co5` (
  `roll_no` decimal(16,0) NOT NULL,
  `ser` decimal(1,0) DEFAULT NULL,
  `sea` decimal(1,0) DEFAULT NULL,
  `seu` decimal(1,0) DEFAULT NULL,
  `ccr` decimal(1,0) DEFAULT NULL,
  `cca` decimal(1,0) DEFAULT NULL,
  `ccu` decimal(1,0) DEFAULT NULL,
  `pyr` decimal(1,0) DEFAULT NULL,
  `pya` decimal(1,0) DEFAULT NULL,
  `pyu` decimal(1,0) DEFAULT NULL,
  `cnr` decimal(1,0) DEFAULT NULL,
  `cna` decimal(1,0) DEFAULT NULL,
  `cnu` decimal(1,0) DEFAULT NULL,
  `phpr` decimal(1,0) DEFAULT NULL,
  `phpa` decimal(1,0) DEFAULT NULL,
  `phpu` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co6`
--

CREATE TABLE `co6` (
  `roll_no` decimal(16,0) NOT NULL,
  `ser` decimal(1,0) DEFAULT NULL,
  `sea` decimal(1,0) DEFAULT NULL,
  `seu` decimal(1,0) DEFAULT NULL,
  `ccr` decimal(1,0) DEFAULT NULL,
  `cca` decimal(1,0) DEFAULT NULL,
  `ccu` decimal(1,0) DEFAULT NULL,
  `pyr` decimal(1,0) DEFAULT NULL,
  `pya` decimal(1,0) DEFAULT NULL,
  `pyu` decimal(1,0) DEFAULT NULL,
  `cnr` decimal(1,0) DEFAULT NULL,
  `cna` decimal(1,0) DEFAULT NULL,
  `cnu` decimal(1,0) DEFAULT NULL,
  `phpr` decimal(1,0) DEFAULT NULL,
  `phpa` decimal(1,0) DEFAULT NULL,
  `phpu` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co7`
--

CREATE TABLE `co7` (
  `roll_no` decimal(16,0) NOT NULL,
  `ser` decimal(1,0) DEFAULT NULL,
  `sea` decimal(1,0) DEFAULT NULL,
  `seu` decimal(1,0) DEFAULT NULL,
  `ccr` decimal(1,0) DEFAULT NULL,
  `cca` decimal(1,0) DEFAULT NULL,
  `ccu` decimal(1,0) DEFAULT NULL,
  `pyr` decimal(1,0) DEFAULT NULL,
  `pya` decimal(1,0) DEFAULT NULL,
  `pyu` decimal(1,0) DEFAULT NULL,
  `cnr` decimal(1,0) DEFAULT NULL,
  `cna` decimal(1,0) DEFAULT NULL,
  `cnu` decimal(1,0) DEFAULT NULL,
  `phpr` decimal(1,0) DEFAULT NULL,
  `phpa` decimal(1,0) DEFAULT NULL,
  `phpu` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co8`
--

CREATE TABLE `co8` (
  `roll_no` decimal(16,0) NOT NULL,
  `ser` decimal(1,0) DEFAULT NULL,
  `sea` decimal(1,0) DEFAULT NULL,
  `seu` decimal(1,0) DEFAULT NULL,
  `ccr` decimal(1,0) DEFAULT NULL,
  `cca` decimal(1,0) DEFAULT NULL,
  `ccu` decimal(1,0) DEFAULT NULL,
  `pyr` decimal(1,0) DEFAULT NULL,
  `pya` decimal(1,0) DEFAULT NULL,
  `pyu` decimal(1,0) DEFAULT NULL,
  `cnr` decimal(1,0) DEFAULT NULL,
  `cna` decimal(1,0) DEFAULT NULL,
  `cnu` decimal(1,0) DEFAULT NULL,
  `phpr` decimal(1,0) DEFAULT NULL,
  `phpa` decimal(1,0) DEFAULT NULL,
  `phpu` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co9`
--

CREATE TABLE `co9` (
  `roll_no` decimal(16,0) NOT NULL,
  `ser` decimal(1,0) DEFAULT NULL,
  `sea` decimal(1,0) DEFAULT NULL,
  `seu` decimal(1,0) DEFAULT NULL,
  `ccr` decimal(1,0) DEFAULT NULL,
  `cca` decimal(1,0) DEFAULT NULL,
  `ccu` decimal(1,0) DEFAULT NULL,
  `pyr` decimal(1,0) DEFAULT NULL,
  `pya` decimal(1,0) DEFAULT NULL,
  `pyu` decimal(1,0) DEFAULT NULL,
  `cnr` decimal(1,0) DEFAULT NULL,
  `cna` decimal(1,0) DEFAULT NULL,
  `cnu` decimal(1,0) DEFAULT NULL,
  `phpr` decimal(1,0) DEFAULT NULL,
  `phpa` decimal(1,0) DEFAULT NULL,
  `phpu` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `co10`
--

CREATE TABLE `co10` (
  `roll_no` decimal(16,0) NOT NULL,
  `ser` decimal(1,0) DEFAULT NULL,
  `sea` decimal(1,0) DEFAULT NULL,
  `seu` decimal(1,0) DEFAULT NULL,
  `ccr` decimal(1,0) DEFAULT NULL,
  `cca` decimal(1,0) DEFAULT NULL,
  `ccu` decimal(1,0) DEFAULT NULL,
  `pyr` decimal(1,0) DEFAULT NULL,
  `pya` decimal(1,0) DEFAULT NULL,
  `pyu` decimal(1,0) DEFAULT NULL,
  `cnr` decimal(1,0) DEFAULT NULL,
  `cna` decimal(1,0) DEFAULT NULL,
  `cnu` decimal(1,0) DEFAULT NULL,
  `phpr` decimal(1,0) DEFAULT NULL,
  `phpa` decimal(1,0) DEFAULT NULL,
  `phpu` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `roll_no` decimal(16,0) NOT NULL,
  `comment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `curr`
--

CREATE TABLE `curr` (
  `roll_no` decimal(16,0) NOT NULL,
  `ser` decimal(1,0) DEFAULT NULL,
  `sea` decimal(1,0) DEFAULT NULL,
  `seu` decimal(1,0) DEFAULT NULL,
  `ccr` decimal(1,0) DEFAULT NULL,
  `cca` decimal(1,0) DEFAULT NULL,
  `ccu` decimal(1,0) DEFAULT NULL,
  `pyr` decimal(1,0) DEFAULT NULL,
  `pya` decimal(1,0) DEFAULT NULL,
  `pyu` decimal(1,0) DEFAULT NULL,
  `cnr` decimal(1,0) DEFAULT NULL,
  `cna` decimal(1,0) DEFAULT NULL,
  `cnu` decimal(1,0) DEFAULT NULL,
  `phpr` decimal(1,0) DEFAULT NULL,
  `phpa` decimal(1,0) DEFAULT NULL,
  `phpu` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eva`
--

CREATE TABLE `eva` (
  `roll_no` decimal(16,0) NOT NULL,
  `se` decimal(1,0) DEFAULT NULL,
  `cc` decimal(1,0) DEFAULT NULL,
  `py` decimal(1,0) DEFAULT NULL,
  `cn` decimal(1,0) DEFAULT NULL,
  `php` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fac`
--

CREATE TABLE `fac` (
  `roll_no` decimal(16,0) NOT NULL,
  `se` decimal(1,0) DEFAULT NULL,
  `cc` decimal(1,0) DEFAULT NULL,
  `py` decimal(1,0) DEFAULT NULL,
  `cn` decimal(1,0) DEFAULT NULL,
  `php` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ins`
--

CREATE TABLE `ins` (
  `roll_no` decimal(16,0) NOT NULL,
  `se` decimal(1,0) DEFAULT NULL,
  `cc` decimal(1,0) DEFAULT NULL,
  `py` decimal(1,0) DEFAULT NULL,
  `cn` decimal(1,0) DEFAULT NULL,
  `php` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `syll_pr`
--

CREATE TABLE `syll_pr` (
  `roll_no` decimal(16,0) NOT NULL,
  `se` decimal(1,0) DEFAULT NULL,
  `cc` decimal(1,0) DEFAULT NULL,
  `py` decimal(1,0) DEFAULT NULL,
  `cn` decimal(1,0) DEFAULT NULL,
  `php` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `syll_th`
--

CREATE TABLE `syll_th` (
  `roll_no` decimal(16,0) NOT NULL,
  `se` decimal(1,0) DEFAULT NULL,
  `cc` decimal(1,0) DEFAULT NULL,
  `py` decimal(1,0) DEFAULT NULL,
  `cn` decimal(1,0) DEFAULT NULL,
  `php` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_pr`
--
ALTER TABLE `class_pr`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `class_th`
--
ALTER TABLE `class_th`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `co1`
--
ALTER TABLE `co1`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `co2`
--
ALTER TABLE `co2`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `co3`
--
ALTER TABLE `co3`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `co4`
--
ALTER TABLE `co4`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `co5`
--
ALTER TABLE `co5`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `co6`
--
ALTER TABLE `co6`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `co7`
--
ALTER TABLE `co7`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `co8`
--
ALTER TABLE `co8`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `co9`
--
ALTER TABLE `co9`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `co10`
--
ALTER TABLE `co10`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `curr`
--
ALTER TABLE `curr`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `eva`
--
ALTER TABLE `eva`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `fac`
--
ALTER TABLE `fac`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `ins`
--
ALTER TABLE `ins`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `syll_pr`
--
ALTER TABLE `syll_pr`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `syll_th`
--
ALTER TABLE `syll_th`
  ADD PRIMARY KEY (`roll_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
