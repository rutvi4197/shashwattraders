-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2018 at 08:05 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shashwattraders`
--

-- --------------------------------------------------------

--
-- Table structure for table `bathitype_tbl`
--

CREATE TABLE IF NOT EXISTS `bathitype_tbl` (
  `pk_bathitype_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(30) NOT NULL,
  PRIMARY KEY (`pk_bathitype_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bathitype_tbl`
--

INSERT INTO `bathitype_tbl` (`pk_bathitype_id`, `type_name`) VALUES
(1, 'Mix Bathi'),
(2, 'Masala bathi'),
(3, 'Scented Bathi'),
(4, 'Base Bathi');

-- --------------------------------------------------------

--
-- Table structure for table `brand_tbl`
--

CREATE TABLE IF NOT EXISTS `brand_tbl` (
  `pk_brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(100) NOT NULL,
  PRIMARY KEY (`pk_brand_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `brand_tbl`
--

INSERT INTO `brand_tbl` (`pk_brand_id`, `brand_name`) VALUES
(1, 'Cycle Agarbatti'),
(2, 'Ullas Agarbatti'),
(3, 'Shalimar Agarbatti'),
(4, 'Parimal Mandir'),
(5, 'Our Own Agarbatti');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE IF NOT EXISTS `category_tbl` (
  `pk_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`pk_cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`pk_cat_id`, `cat_name`, `active`) VALUES
(1, 'Agarbatti', 1),
(2, 'Dhoop', 1),
(3, 'Sambrani', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fragrance_product_tbl`
--

CREATE TABLE IF NOT EXISTS `fragrance_product_tbl` (
  `pk_fp_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_fragrance_id` int(11) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  PRIMARY KEY (`pk_fp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `fragrance_product_tbl`
--

INSERT INTO `fragrance_product_tbl` (`pk_fp_id`, `fk_fragrance_id`, `fk_product_id`) VALUES
(1, 3, 1),
(2, 4, 1),
(3, 7, 1),
(4, 10, 1),
(5, 1, 2),
(6, 2, 2),
(7, 2, 3),
(8, 5, 3),
(9, 2, 4),
(10, 8, 4),
(11, 3, 5),
(12, 3, 6),
(13, 5, 6),
(14, 7, 6),
(15, 10, 6),
(16, 12, 7),
(17, 15, 7),
(18, 17, 8);

-- --------------------------------------------------------

--
-- Table structure for table `fragrance_tbl`
--

CREATE TABLE IF NOT EXISTS `fragrance_tbl` (
  `fragrance_id` int(11) NOT NULL AUTO_INCREMENT,
  `fragrance_name` varchar(30) NOT NULL,
  PRIMARY KEY (`fragrance_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `fragrance_tbl`
--

INSERT INTO `fragrance_tbl` (`fragrance_id`, `fragrance_name`) VALUES
(1, 'Mogra'),
(2, 'Rose'),
(3, 'Woody'),
(4, 'Powedery'),
(5, 'Vanila'),
(6, 'Rainbow'),
(7, 'Perfumic'),
(8, 'Masala'),
(9, 'Lotus'),
(10, 'Lily'),
(11, 'Kewda'),
(12, 'Shashwat Gold'),
(13, 'Loban'),
(14, 'Shagun'),
(15, 'Firdosh'),
(16, 'Gugal'),
(17, 'Lavender');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE IF NOT EXISTS `order_tbl` (
  `pk_order_id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_email_id` varchar(50) NOT NULL,
  `order_date` varchar(10) NOT NULL,
  `fk_product_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`pk_order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`pk_order_id`, `fk_user_email_id`, `order_date`, `fk_product_id`, `type`, `qty`) VALUES
(1, 'shahritu2111@gmail.com', '09-01-2018', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `packing_type_tbl`
--

CREATE TABLE IF NOT EXISTS `packing_type_tbl` (
  `pk_pt_id` int(11) NOT NULL AUTO_INCREMENT,
  `pt_name` varchar(30) NOT NULL,
  PRIMARY KEY (`pk_pt_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `packing_type_tbl`
--

INSERT INTO `packing_type_tbl` (`pk_pt_id`, `pt_name`) VALUES
(1, 'Rectangular Packet'),
(2, 'Pouch'),
(3, 'Square Packet');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE IF NOT EXISTS `product_tbl` (
  `pk_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `Weight` varchar(11) DEFAULT NULL,
  `fk_catgory_id` int(11) NOT NULL,
  `fk_bathitype_id` int(11) NOT NULL,
  `fk_ptid` int(11) NOT NULL,
  `burning_time` varchar(20) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_photo` varchar(200) NOT NULL,
  `fk_brand_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`pk_product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`pk_product_id`, `product_name`, `Weight`, `fk_catgory_id`, `fk_bathitype_id`, `fk_ptid`, `burning_time`, `product_price`, `product_photo`, `fk_brand_id`, `qty`) VALUES
(1, 'Three In One Incense stick', '30g', 1, 3, 1, '40 Minutes', 30, 'agarbatti_photos/ThreeInOne.jpg', 1, 0),
(2, 'Lia Citric Tango Incense Stick', '122g', 1, 3, 1, '50 Minute', 20, 'agarbatti_photos/Lia-Citric-Tango.jpg', 1, 0),
(3, 'Bharath Vasi ', '30g', 1, 2, 3, '55 Minutes', 20, 'agarbatti_photos/bharatvasi.jpg', 4, 0),
(4, 'Oma Intense Stick', '55g', 1, 1, 1, '35 Minutes', 35, 'agarbatti_photos/Oma.jpg', 4, 0),
(5, 'Shalimar ', '100g', 1, 4, 3, '50Minutes', 40, 'agarbatti_photos/shalimar.jpg', 3, 0),
(6, 'Somnath', '50g', 1, 2, 2, '30Minutes', 50, 'agarbatti_photos/somnath.jpg', 3, 0),
(7, 'Ullas', '32g', 1, 3, 2, '20Minutes', 20, 'agarbatti_photos/ullas.jpg', 2, 0),
(8, 'VIVIDHA', '30gm', 1, 2, 2, '35Minutes', 30, 'agarbatti_photos/vividha.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `pk_user_email_id` varchar(50) NOT NULL DEFAULT '',
  `user_password` varchar(15) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_add1` varchar(100) NOT NULL,
  `user_add2` varchar(100) NOT NULL,
  `user_city` varchar(20) NOT NULL,
  `user_pincode` int(6) NOT NULL,
  `user_type` varchar(5) NOT NULL,
  `user_mobile_no` varchar(11) NOT NULL,
  PRIMARY KEY (`pk_user_email_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`pk_user_email_id`, `user_password`, `user_name`, `user_add1`, `user_add2`, `user_city`, `user_pincode`, `user_type`, `user_mobile_no`) VALUES
('shahritu2111@gmail.com', 'rutvi', 'Rutvi shah', '1299/2 sector 5a', '', 'Gandhinagar', 382006, 'admin', '9427711474'),
('shethpriyansh97@gmail.cpm', 'priyansh', 'Priyansh', 'b2 sonarika app.', 'nr,Vasantkunj', 'Ahmedabad', 380008, 'user', '0'),
('ritu@gmail.com', '12345', 'rutvi', '', 'null', 'null', 0, 'user', '0');
