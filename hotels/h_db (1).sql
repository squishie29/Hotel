-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 08:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `h_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

CREATE TABLE IF NOT EXISTS `chambre` (
  `idCh` int(10) NOT NULL,
  `nbBed` int(1) NOT NULL,
  `idH` int(10) NOT NULL,
  `typeC` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`typeC`,`prix`),
  UNIQUE KEY `typeC` (`typeC`),
  UNIQUE KEY `idCh` (`idCh`),
  KEY `idH` (`idH`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chambre`
--

INSERT INTO `chambre` (`idCh`, `nbBed`, `idH`, `typeC`, `prix`) VALUES
(8484455, 51011, 1, 'àuikyjhiii11gtfdsq', 5681571),
(10, 100, 1, 'Family', 500),
(12, 52, 1, 'penthouse', 800),
(856, 865, 1, 'zasqxc', 852),
(5, 548, 1, 'zerfg', 785421);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `idH` int(10) NOT NULL AUTO_INCREMENT,
  `nomHotel` varchar(255) NOT NULL,
  `nbEtoils` int(1) NOT NULL,
  `nbChambre` int(11) NOT NULL,
  `photo` text NOT NULL,
  `description` text NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `note` int(1) NOT NULL,
  PRIMARY KEY (`idH`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=506 ;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`idH`, `nomHotel`, `nbEtoils`, `nbChambre`, `photo`, `description`, `adresse`, `note`) VALUES
(1, 'hotel beja', 7, 0, '3.png', 'hotel', 'Hotel La Maison Blanche, Avenue Mohamed V, Tunis', 10),
(2, 'hotel ariana', 3, 5000, '4.png', 'sqdfsfsfs ', 'qsd qsd qsd qsd ', 10),
(5, 'srsr', 5, 500, '4.png', 'sdfsd', 'etert', 12),
(34, 'hotel touzir', 5, 8000, '3.png', 'dsfsdfs', 'dfgdfgdf ', 10),
(505, 'hotel test55', 10, 9826, '6.png', 'fkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfgfkogjdfoigjdfg', 'dsf sdf sdf sdf', 5);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int(10) NOT NULL,
  `date_d` date NOT NULL,
  `date_f` date NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `pourcentage` int(2) NOT NULL,
  `idH` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idH_2` (`idH`),
  KEY `idH` (`idH`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `date_d`, `date_f`, `titre`, `description`, `pourcentage`, `idH`) VALUES
(1, '2019-12-04', '2019-12-18', 'PROMOTION D''HIVER', 'sqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqddddsqdddd', 10, 1),
(185, '2019-12-26', '2019-12-10', 'PROMOTION X-MAS', 'azeazeaze', 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(1, 'Ahmed', 'rim.douss@esprit.tn', '123'),
(2, 'Amina', 'amina@esprit.tn', 'bbb');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `relation3` FOREIGN KEY (`idH`) REFERENCES `hotel` (`idH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`idH`) REFERENCES `hotel` (`idH`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
