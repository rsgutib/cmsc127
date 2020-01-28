-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 09:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsc127`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab01`
--

CREATE TABLE `lab01` (
  `csID` varchar(10) DEFAULT NULL,
  `surname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `midname` varchar(30) DEFAULT NULL,
  `extraname` varchar(30) NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` varchar(30) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `civilStatus` varchar(10) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `bloodType` varchar(3) NOT NULL,
  `gsisID` varchar(30) DEFAULT NULL,
  `pagibigID` varchar(30) DEFAULT NULL,
  `philhealthID` varchar(30) DEFAULT NULL,
  `sssID` varchar(30) DEFAULT NULL,
  `tinID` varchar(30) DEFAULT NULL,
  `aeID` varchar(30) DEFAULT NULL,
  `citizenship` varchar(30) NOT NULL,
  `houseRes` varchar(30) DEFAULT NULL,
  `stRes` varchar(30) DEFAULT NULL,
  `subdRes` varchar(30) DEFAULT NULL,
  `barangayRes` varchar(30) DEFAULT NULL,
  `cityRes` varchar(30) DEFAULT NULL,
  `provinceRes` varchar(30) DEFAULT NULL,
  `zipRes` varchar(5) DEFAULT NULL,
  `housePerm` varchar(30) DEFAULT NULL,
  `stPerm` varchar(30) DEFAULT NULL,
  `subdPerm` varchar(30) DEFAULT NULL,
  `barangayPerm` varchar(30) DEFAULT NULL,
  `cityPerm` varchar(30) DEFAULT NULL,
  `provincePerm` varchar(30) DEFAULT NULL,
  `zipPerm` varchar(5) DEFAULT NULL,
  `telno` varchar(10) DEFAULT NULL,
  `celno` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `surSpouse` varchar(30) DEFAULT NULL,
  `firstSpouse` varchar(30) DEFAULT NULL,
  `midSpouse` varchar(30) DEFAULT NULL,
  `extraSpouse` varchar(30) DEFAULT NULL,
  `occSpouse` varchar(30) DEFAULT NULL,
  `employer` varchar(30) DEFAULT NULL,
  `busAddress` varchar(30) DEFAULT NULL,
  `busTelNo` varchar(10) DEFAULT NULL,
  `children1` varchar(30) DEFAULT NULL,
  `birth1` date DEFAULT NULL,
  `children2` varchar(30) DEFAULT NULL,
  `birth2` date DEFAULT NULL,
  `children3` varchar(30) DEFAULT NULL,
  `birth3` date DEFAULT NULL,
  `children4` varchar(30) DEFAULT NULL,
  `birth4` date DEFAULT NULL,
  `children5` varchar(30) DEFAULT NULL,
  `birth5` date DEFAULT NULL,
  `children6` varchar(30) DEFAULT NULL,
  `birth6` date DEFAULT NULL,
  `children7` varchar(30) DEFAULT NULL,
  `birth7` date DEFAULT NULL,
  `children8` varchar(30) DEFAULT NULL,
  `birth8` date DEFAULT NULL,
  `children9` varchar(30) DEFAULT NULL,
  `birth9` date DEFAULT NULL,
  `children10` varchar(30) DEFAULT NULL,
  `birth10` date DEFAULT NULL,
  `children11` varchar(30) DEFAULT NULL,
  `birth11` date DEFAULT NULL,
  `children12` varchar(30) DEFAULT NULL,
  `birth12` date DEFAULT NULL,
  `surDad` varchar(30) DEFAULT NULL,
  `firstDad` varchar(30) DEFAULT NULL,
  `midDad` varchar(30) DEFAULT NULL,
  `extraDad` varchar(30) DEFAULT NULL,
  `maidenMom` varchar(30) DEFAULT NULL,
  `surMom` varchar(30) DEFAULT NULL,
  `firstMom` varchar(30) DEFAULT NULL,
  `midMom` varchar(30) DEFAULT NULL,
  `extraMom` varchar(30) DEFAULT NULL,
  `elemName` varchar(30) DEFAULT NULL,
  `elemBasic` varchar(30) DEFAULT NULL,
  `elemFrom` date DEFAULT NULL,
  `elemTo` date DEFAULT NULL,
  `elemHighest` varchar(30) DEFAULT NULL,
  `elemGrad` varchar(30) DEFAULT NULL,
  `elemAward` varchar(30) DEFAULT NULL,
  `secName` varchar(30) DEFAULT NULL,
  `secBasic` varchar(30) DEFAULT NULL,
  `secFrom` date DEFAULT NULL,
  `secTo` date DEFAULT NULL,
  `secHighest` varchar(30) DEFAULT NULL,
  `secGrad` varchar(30) DEFAULT NULL,
  `secAward` varchar(30) DEFAULT NULL,
  `vocName` varchar(30) DEFAULT NULL,
  `vocBasic` varchar(30) DEFAULT NULL,
  `vocFrom` date DEFAULT NULL,
  `vocTo` date DEFAULT NULL,
  `vocHighest` varchar(30) DEFAULT NULL,
  `vocGrad` varchar(30) DEFAULT NULL,
  `vocAward` varchar(30) DEFAULT NULL,
  `colName` varchar(30) DEFAULT NULL,
  `colBasic` varchar(30) DEFAULT NULL,
  `colFrom` date DEFAULT NULL,
  `colTo` date DEFAULT NULL,
  `colHighest` varchar(30) DEFAULT NULL,
  `colGrad` varchar(30) DEFAULT NULL,
  `colAward` varchar(30) DEFAULT NULL,
  `gradName` varchar(30) DEFAULT NULL,
  `gradBasic` varchar(30) DEFAULT NULL,
  `gradFrom` date DEFAULT NULL,
  `gradTo` date DEFAULT NULL,
  `gradHighest` varchar(30) DEFAULT NULL,
  `gradGrad` varchar(30) DEFAULT NULL,
  `gradAward` varchar(30) DEFAULT NULL,
  `signature` varchar(1) DEFAULT NULL,
  `finalDate` date DEFAULT NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPRESSED;

--
-- Dumping data for table `lab01`
--

INSERT INTO `lab01` (`csID`, `surname`, `firstname`, `midname`, `extraname`, `birthdate`, `birthplace`, `sex`, `civilStatus`, `height`, `weight`, `bloodType`, `gsisID`, `pagibigID`, `philhealthID`, `sssID`, `tinID`, `aeID`, `citizenship`, `houseRes`, `stRes`, `subdRes`, `barangayRes`, `cityRes`, `provinceRes`, `zipRes`, `housePerm`, `stPerm`, `subdPerm`, `barangayPerm`, `cityPerm`, `provincePerm`, `zipPerm`, `telno`, `celno`, `email`, `surSpouse`, `firstSpouse`, `midSpouse`, `extraSpouse`, `occSpouse`, `employer`, `busAddress`, `busTelNo`, `children1`, `birth1`, `children2`, `birth2`, `children3`, `birth3`, `children4`, `birth4`, `children5`, `birth5`, `children6`, `birth6`, `children7`, `birth7`, `children8`, `birth8`, `children9`, `birth9`, `children10`, `birth10`, `children11`, `birth11`, `children12`, `birth12`, `surDad`, `firstDad`, `midDad`, `extraDad`, `maidenMom`, `surMom`, `firstMom`, `midMom`, `extraMom`, `elemName`, `elemBasic`, `elemFrom`, `elemTo`, `elemHighest`, `elemGrad`, `elemAward`, `secName`, `secBasic`, `secFrom`, `secTo`, `secHighest`, `secGrad`, `secAward`, `vocName`, `vocBasic`, `vocFrom`, `vocTo`, `vocHighest`, `vocGrad`, `vocAward`, `colName`, `colBasic`, `colFrom`, `colTo`, `colHighest`, `colGrad`, `colAward`, `gradName`, `gradBasic`, `gradFrom`, `gradTo`, `gradHighest`, `gradGrad`, `gradAward`, `signature`, `finalDate`) VALUES
('', 'Gutib', 'Rougin', 'Salvador', '', '2010-10-02', 'Davao City', 'Male', 'Single', 1.67, 72.15, 'O-', '', '', '', '', '', '', 'Filipino', 'Blk 22 Lot 12', '', 'NHA', 'Ma-a', 'Davao City', 'Davao del Sur', '8000', 'Blk 22 Lot 12', '', 'NHA', 'Ma-a', 'Davao CitMa-ay', 'Davao del Sur', '8000', '3218442', '0912345679', 'rsgutib@up.edu.ph', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00'),
('', 'Gutib', 'Roilo', 'Salvador', '', '2020-01-25', 'Davao City', 'Male', 'Single', 69.69, 420.42, 'O+', '', '', '', '', '', '', 'Dual Naturalized Germany', 'NHA', '', 'NHA', 'Ma-a', 'Davao City', 'Davao del Sur', '8000', 'NHA', 'Davao del Sur', 'NHA', 'Ma-a', 'Davao City', 'Davao del Sur', '8000', '3218442', '0912345679', 'rsgutib@up.edu.ph', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
