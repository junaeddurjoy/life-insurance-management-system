-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 07:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lims`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` varchar(50) NOT NULL,
  `agent_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_password`, `name`, `branch`, `phone`) VALUES
('007', '123', 'Cypher', 'Bind', '01611122222'),
('008', '123', 'Killjoy', 'Ascent', '01611122223'),
('009', '123', 'Sage', 'Heaven', '01611122224'),
('010', '123', 'Reyna', 'Split', '01611122225'),
('admin', '12345', 'Master User', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `aprove`
--

CREATE TABLE `aprove` (
  `id` int(100) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aprove`
--

INSERT INTO `aprove` (`id`, `cid`, `msg`) VALUES
(5, '222', 'Your Request has been aproved');

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `Name` varchar(100) NOT NULL,
  `Client_id` varchar(100) NOT NULL,
  `Hname` varchar(100) NOT NULL,
  `Health` varchar(100) NOT NULL,
  `Camount` varchar(20) NOT NULL,
  `Cdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `claim`
--

INSERT INTO `claim` (`Name`, `Client_id`, `Hname`, `Health`, `Camount`, `Cdate`) VALUES
('Kayo', '111', 'Valorant ', 'Ult', '50000', '18-09-2022'),
('Viper', '333', 'Valorant ', 'GGEXZ', '10', '12-09-2022');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` varchar(200) NOT NULL,
  `client_password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `policy_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_password`, `name`, `sex`, `birth_date`, `marital_status`, `nid`, `phone`, `address`, `policy_id`) VALUES
('111', '123', 'Kayo', 'Robot', '10-11-2000', 'Confused', '98767654', '067893456', 'Fracture', '1'),
('222', '123', 'Raze', 'Female', '18-07-2000', 'Divorced', '1278650877', '019756987865', 'Breeze', '4'),
('333', '123', 'Viper', 'Female', '19-6-1995', 'Unmarried', '8675987678', '0867458765', 'Pearl', '5');

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `nominee_id` varchar(200) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`nominee_id`, `client_id`, `name`, `sex`, `birth_date`, `nid`, `relationship`, `priority`, `phone`) VALUES
('NN1670912037', '222', 'Sage', 'Female', '19-04-2001', '876598756978', 'Cousin', 'NT', '09876587659'),
('NN1670912260', '333', 'Chamber', 'Male', '06-01-1899', '98768976576', 'Killer', 'NT', '098687587999'),
('NN1670957392', '111', 'Astra', 'Female', '11-09-1998', '67894567', 'Confused', 'BAD', '0978613465');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `recipt_no` varchar(20) NOT NULL,
  `client_id` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `due` varchar(50) NOT NULL,
  `fine` varchar(50) NOT NULL,
  `agent_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`recipt_no`, `client_id`, `month`, `amount`, `due`, `fine`, `agent_id`) VALUES
('1671168875_10242349', '111', 'July', '500000', '0', '20000', '009'),
('1671169019_453200814', '333', 'January', '10000', '200', '400000', '009');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `health_status` varchar(50) NOT NULL,
  `system` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `coverage` varchar(50) NOT NULL,
  `age_limit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `term`, `health_status`, `system`, `payment_method`, `coverage`, `age_limit`) VALUES
('1', '5 years', '500000', '5000', 'Cash/Check', '60%', '30'),
('2', '10 Years', '1000000', '6500', 'Cash/Check', '100%', '50'),
('3', '10 Years', '2000000', '13000', 'Cash/Check', '100%', '50'),
('4', '15 years', '15000000', '15000', 'Cash/Check', '50%', '60'),
('5', '20 years', '20000000', '30000', 'Cash/Check', '100%', '70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `agent_id` (`agent_id`);

--
-- Indexes for table `aprove`
--
ALTER TABLE `aprove`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`Client_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_id` (`client_id`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`nominee_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`recipt_no`),
  ADD UNIQUE KEY `recipt_no` (`recipt_no`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`),
  ADD UNIQUE KEY `policy_id` (`policy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aprove`
--
ALTER TABLE `aprove`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
