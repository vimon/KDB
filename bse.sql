-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2015 at 03:59 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bse`
--
CREATE DATABASE IF NOT EXISTS `bse` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bse`;

-- --------------------------------------------------------

--
-- Table structure for table `isd`
--

CREATE TABLE IF NOT EXISTS `isd` (
  `seno` int(10) NOT NULL AUTO_INCREMENT,
  `sub` text NOT NULL,
  `subcategory` varchar(50) NOT NULL,
  `ename` varchar(15) NOT NULL,
  `edate` date NOT NULL,
  `des` text NOT NULL,
  `file` varchar(50) NOT NULL,
  PRIMARY KEY (`seno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `isd`
--

INSERT INTO `isd` (`seno`, `sub`, `subcategory`, `ename`, `edate`, `des`, `file`) VALUES
(1, 'Desktop', 'COMMAND FOR GETTING SERIAL NUMBER OF SYSTEM\r\n', 'VIMON PV', '2015-02-01', 'CMD RUN AS ADMINISTRATOR,\r\n THEN TYPE THIS COMMAND WMIC BIOS GET SERIALNUMBER \r\nTHEN ENTER (NOT APPLICABLE FOR ZENITH SYSTEMS)\r\n', 'upload/New Text Document.txt'),
(2, 'Desktop', 'INVENTARY 2015', 'VIMON PV', '2015-02-01', 'as on 30-01-2015', 'upload/Summary of Inventory till 30-01-2015.xls'),
(4, 'AD', 'WSUS server updation cmds from client side', 'BAHUL VISHNU', '2015-02-01', '1)wuauclt /detectnow\r\n2)netstat an|more\r\neg:netstat -an |find "8530"\r\nif getting bellow given output then its ok\r\nTCP    10.228.21.78:57003     192.168.246.248:8530   ESTABLISHED\r\n', 'upload/wifi paswd.txt'),
(7, 'AD', 'How to remove macfee agent in management mode\r\n', 'VIMON PV', '2015-02-02', 'run cmd as administrator. Then type " cd C:Program FilesMcAfeeCommon Framework" enter. Then type "frminst.exe /remove=agent" enter\r\n', 'upload/mcafee agent uninstall.txt'),
(8, 'Mcafee', 'How to remove macfee agent in management mode\r\n', 'VIMON PV', '2015-02-02', 'run cmd as administrator. Then type " cd C:Program FilesMcAfeeCommon Framework" enter. Then type "frminst.exe /remove=agent" enter\r\n', 'upload/mcafee agent uninstall.txt'),
(9, 'Softwares', 'MS SQL 2008 INSTALLATION', 'VIMON PV', '2015-02-05', 'sql 2008 installation guide url\r\n\r\nplease find attached file', 'upload/sql 2008 installation guide url.txt'),
(10, 'AD', 'shortcut to ad', 'ROANE SEBASTION', '2015-02-07', 'dsa.msc', 'upload/dsa.txt');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
