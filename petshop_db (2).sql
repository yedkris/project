-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2018 at 01:07 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petshop_db`
--
CREATE DATABASE IF NOT EXISTS `petshop_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `petshop_db`;

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE IF NOT EXISTS `login_tb` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`id`, `user_name`, `password`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin'),
(9, 'user', 'user', 'user'),
(10, 'yedhu', 'yedhu', 'user'),
(11, 'hhh', 'hhh', 'user'),
(12, 'yks', 'yks', 'user'),
(14, 'ss', 'ss', 'user'),
(17, 'unni', 'unni', 'user'),
(19, 'abdul', 'abdul', 'user'),
(20, 'appu', 'appu', 'user'),
(21, 'vsk', 'vsk', 'user'),
(22, 'tottu', 'tottu', 'user'),
(23, 'abdu', 'abdu', 'user'),
(25, 'miji', 'miji', 'user'),
(27, 'yedhu', 'yedhu', 'user'),
(35, 'man', 'manu123', 'user'),
(36, 'minnu', 'minnu', 'user'),
(37, 'ajil', 'ajil', 'user'),
(38, 'aaaaaaa', 'sssssss', 'user'),
(39, 'qqq', 'qqq', 'user'),
(40, 'qwe', 'qwe', 'user'),
(41, 'abdul', 'abdul', 'user'),
(42, 'vsk', 'vsk', 'user'),
(43, 'vsk', 'vsk', 'user'),
(44, 'vsk', 'vsk', 'user'),
(45, 'vsk', 'vsk', 'user'),
(46, 'vsk', 'vsk', 'user'),
(47, 'vsk', 'vsk', 'user'),
(48, 'YKS', 'YKS', 'user'),
(49, 'qwe', 'qwe', 'user'),
(50, 'paul', 'paul', 'user'),
(51, 'sabin', 'sabin123', 'user'),
(52, 'ssss', 'ssss', 'user'),
(53, 'hari', 'hari123', 'user'),
(54, 'shil', 'shil', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `address`, `email`, `phone`, `user_name`, `passwd`) VALUES
(5, 'user', 'address             ', 'user@gmail.com', '9544787878', 'user', 'user'),
(6, 'user1', '     address', 'abin@gmail.com', '9961514665', 'user1', 'user1'),
(21, 'yedhukrishna', '    address         ', 'yedhukrishnas5@gmail.com', '9544046976', 'yedhu', 'yedhu'),
(22, 'appu', 'sfsfs', 'TWF@dn.com', '5555', 'hhh', 'hhh'),
(23, 'yedhu', 'sns', 'yks@gmail.com', '9595959595', 'yks', 'yks'),
(25, 'appu', 'ssssssssssss', 'ssssssssssssss@gm.com', '4545454545', 'ss', 'ss'),
(28, 'unni', 'sds', 'uni@g.com', '777', 'unni', 'unni'),
(30, 'abdul', 'qwerty', 'abdul@g.com', '7894561230', 'abdul', 'abdul'),
(31, 'appu', 'ddffgg', 'appu@g.com', '1245879563', 'appu', 'appu'),
(32, 'vsk', 'sadfg', 'vsk@gmail.com', '1234567891', 'vsk', 'vsk'),
(33, 'tottu', 'bnm', 'tottu@com', '1234567', 'tottu', 'tottu'),
(34, 'abdu', 'bnm', 'abdu@g.com', '8523464789', 'abdu', 'abdu'),
(36, 'miji', 'dffgsf', 'mini@g.com', '1234567891', 'miji', 'miji'),
(37, 'unni', 'address', '10@q', '', '', ''),
(38, 'yedhu', 'sns', 'yedhu@gmai', '6444444444', 'yedhu', 'yedhu'),
(46, 'manu', 'mackal', 'manumackf@hgcvj', '6845646456', 'man', 'manu123'),
(47, 'minnu', 'house', 'aa@g.com', '4444444444', 'minnu', 'minnu'),
(48, 'ajil', 'ajil', 'ajil@c', '5555555555', 'ajil', 'ajil'),
(49, 'abdu', 'address', 'aaa@f', '3333333333', 'aaaaaaa', 'sssssss'),
(50, 'qwe', 'qwe', 'qweQ2@d', '5555555555', 'qqq', 'qqq'),
(51, 'qwe', 'wqww', 'qw@gmail.com', '4564564564', 'qwe', 'qwe'),
(52, 'adbul', 'asddff', 'abdul@g.com', '8085555555', 'abdul', 'abdul'),
(53, 'vsk', 'ffghhj', 'vsk@g.com', '8529464253', 'vsk', 'vsk'),
(54, 'vsk', 'adffg', 'vsk@g.com', '1025484758', 'vsk', 'vsk'),
(55, 'vsk', 'ddfvcddfg', 'vsk@g.com', '2524345354', 'vsk', 'vsk'),
(56, 'vsk', 'shdhsdh', 'vsk@gmail.com', '5246425354', 'vsk', 'vsk'),
(57, 'vsk', 'dffgghh', 'vsk@gmail.com', '8542465235', 'vsk', 'vsk'),
(58, 'vsk', 'dffgghg', 'vsk@gmail.com', '4524535554', 'vsk', 'vsk'),
(59, 'YKS', 'YKS', 'YKS@F.CO', '8888888888', 'YKS', 'YKS'),
(60, 'qwerty', 'qwerty', 'qw@gmail.com', '4545454545', 'qwe', 'qwe'),
(61, 'paul', 'paul', 'paul@gmail.com', '7777777777', 'paul', 'paul'),
(62, 'sabin', 'sabi', 'sabin@g.com', '9999999999', 'sabin', 'sabin123'),
(63, 'sabin', 'sabi', 'sabin@g.com', '9999999999', 'ssss', 'ssss'),
(64, 'hari', 'sns', 'hari@gmail.com', '9596502575', 'hari', 'hari123'),
(65, 'shilvin', 'shssssssss', 'sh@g.com', '9898989898', 'shil', 'shil');

-- --------------------------------------------------------

--
-- Table structure for table `reg1`
--

CREATE TABLE IF NOT EXISTS `reg1` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `Breed` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `Age` int(30) NOT NULL,
  `price` int(30) NOT NULL,
  `photo` varchar(6000) NOT NULL,
  `category` varchar(20) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `reg1`
--

INSERT INTO `reg1` (`id`, `Breed`, `color`, `Age`, `price`, `photo`, `category`, `status`) VALUES
(12, 'cat', 'black', 2, 100, 'carousel1_img5.jpg', 'Cat', 0),
(15, 'jermanshiperd', 'brown', 2, 540, 'img5.jpg', 'Dog', 0),
(16, 'German shepered', 'black', 3, 3500, 'carousel1_img3.jpg', 'Dog', 0),
(17, 'Parrot', 'Green', 0, 400, 'carousel1_img2.jpg', 'Bird', 0),
(18, 'Lab', 'Black', 1, 6000, 'page4_img4.jpg', 'Dog', 0),
(19, 'kitten', 'brown', 2, 750, 'page1_img5.jpg', 'Cat', 1),
(20, 'Lab', 'brown', 3, 3333, 'page2_img3.jpg', 'Dog', 0),
(21, 'parrot', 'green', 4, 6000, 'img1.jpg', 'Bird', 0),
(22, 'doberman', 'Black', 1, 900, 'carousel1_img3.jpg', 'Dog', 0),
(23, 'kitten', 'brown', 1, 3000, 'carousel1_img1.jpg', 'Cat', 0),
(24, 'Lab', 'brown', 1, 4500, 'img5.jpg', 'Dog', 0),
(25, 'doberman', 'Black', 1, 7000, 'page3_img3.jpg', 'Dog', 0),
(31, 'doberman', 'brown', 2, 9000, 'carousel1_img3.jpg', 'Dog', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg2`
--

CREATE TABLE IF NOT EXISTS `reg2` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `Breed` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `Age` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `reg2`
--

INSERT INTO `reg2` (`id`, `uid`, `Breed`, `color`, `Age`, `price`, `photo`, `category`, `status`) VALUES
(2, 9, 'kitten', 'brown', 5, 800, 'page3_img1.jpg', 'Cat', 1),
(3, 12, 'doberman', 'brown', 2, 3000, 'page2_img3.jpg', 'Dog', 1),
(4, 12, 'parrot', 'green', 6, 0, 'img1.jpg', 'Bird', 1),
(9, 12, 'kitten', 'brown', 23, 66666, '', 'Cat', 1),
(10, 12, 'doberman', 'brown', 1, 2000, 'dog.jpg', 'Dog', 1),
(11, 12, 'kitten', 'grey', 2, 500, 'carousel1_img5.jpg', 'Cat', 1),
(12, 40, 'doberman', 'Black', 2, 10000, 'page3_img2.jpg', 'Dog', 1),
(13, 50, 'kitten', 'Black', 2, 222, 'page1_img4.jpg', 'Cat', 1),
(14, 50, 'kitten', 'Black', 5, 500, 'carousel1_img5.jpg', 'Cat', 1),
(15, 12, 'kitten', 'Black', 2, 2000, 'page1_img1.png', 'Cat', 1),
(16, 52, 'doberman', 'brown', 3, 700, 'carousel1_img4.jpg', 'Dog', 1),
(17, 53, 'doberman', 'brown', 0, 0, 'page2_img3.jpg', 'Dog', 1),
(18, 53, 'parrot', 'green', 0, 0, 'img1.jpg', 'Bird', 1),
(19, 53, 'kitten', 'grey', 33, 0, 'carousel1_img1.jpg', 'Cat', 1),
(20, 53, 'doberman', 'brown', 11, 10000, 'page2_img3.jpg', 'Dog', 1),
(21, 53, 'kitten', 'brown', 1, 100, 'page1_img5.jpg', 'Cat', 1),
(22, 53, 'kitten', 'brown', 11, 0, 'page1_img1.png', 'Cat', 1),
(23, 53, 'kitten', 'Black', 11, 100, 'page1_img5.jpg', 'Cat', 1),
(24, 53, 'doberman', 'brown', 1, 1000, 'page3_img2.jpg', 'Dog', 1),
(25, 53, 'parrot', 'green', 2, 2000, 'img1.jpg', 'Bird', 1),
(26, 54, 'doberman', 'brown', 1, 100, 'page2_img3.jpg', 'Dog', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
