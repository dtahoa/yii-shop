-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2014 at 03:32 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petitshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `created`, `updated`) VALUES
(1, 'News 1', 'News', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shop_address`
--

CREATE TABLE IF NOT EXISTS `shop_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `country` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `shop_address`
--

INSERT INTO `shop_address` (`id`, `firstname`, `lastname`, `email`, `state`, `street`, `zipcode`, `city`, `phone`, `country`) VALUES
(1, 'hoa', 'nguyen', '', '', '212', '213', '213123', 'viet nam', NULL),
(2, 'hoa', 'nguyen', '', '', '212', '213', '213123', 'viet nam', NULL),
(3, 'hoa', 'nguyen', '', '', '212', '213', '213123', 'viet nam', NULL),
(4, 'hoa', 'nguyen', '', '', '212', '213', '213123', 'viet nam', NULL),
(5, 'hoa', 'nguyen', '', '', '212', '213', '213123', 'viet nam', NULL),
(6, 'hoa', 'hoa', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(7, 'hoa', 'hoa', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(8, 'hoa', 'hoa', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(9, 'hoa', 'hoa', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(10, 'hoa', 'hoa', '', '', 'hoa', 'hoa', 'hoa', '', 'vn'),
(11, 'hoa', 'hoa', '', '', 'hoa', 'hoa', 'hoa', '', 'vn'),
(12, 'hoa', 'hoa', '', '', 'hoa', 'hoa', 'hoa', '', 'vn'),
(13, 'hoa', 'hoa', '', '', 'hoa', 'hoa', 'hoa', '', 'vn'),
(14, 'hoa', 'nguyen', '', '', '1', '1', '1', '', '1'),
(15, 'hoa', 'hoah', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(16, 'hoa', 'hoa', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(17, 'hoa', 'hoa', 'hoa01@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '13123213', NULL),
(18, 'hoa', 'hoa', 'hoa01@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '13123213', NULL),
(19, '', '', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_billing_address`
--

CREATE TABLE IF NOT EXISTS `shop_billing_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `country` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `shop_billing_address`
--

INSERT INTO `shop_billing_address` (`id`, `firstname`, `lastname`, `email`, `state`, `street`, `zipcode`, `city`, `phone`, `country`) VALUES
(1, 'hoa', 'nguyen', '', '', '212', '213', '213123', 'viet nam', NULL),
(2, 'hoa', 'nguyen', '', '', '212', '213', '213123', 'viet nam', NULL),
(3, 'hoa', 'nguyen', '', '', '212', '213', '213123', 'viet nam', NULL),
(4, 'hoa', 'nguyen', '', '', '212', '213', '213123', 'viet nam', NULL),
(5, 'hoa', 'nguyen', '', '', '212', '213', '213123', 'viet nam', NULL),
(6, 'hoa', 'hoa', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(7, 'hoa', 'hoa', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(8, 'hoa', 'hoa', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(9, 'hoa', 'hoa', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(10, 'hoa', 'hoa', '', '', 'hoa', 'hoa', 'hoa', '', 'vn'),
(11, 'hoa', 'hoa', '', '', 'hoa', 'hoa', 'hoa', '', 'vn'),
(12, 'hoa', 'hoa', '', '', 'hoa', 'hoa', 'hoa', '', 'vn'),
(13, 'hoa', 'hoa', '', '', 'hoa', 'hoa', 'hoa', '', 'vn'),
(14, 'hoa', 'nguyen', '', '', '1', '1', '1', '', '1'),
(15, 'hoa', 'hoah', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(16, 'hoa', 'hoa', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '1', NULL),
(17, 'hoa', 'hoa', 'hoa01@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '13123213', NULL),
(18, 'hoa', 'hoa', 'hoa01@a.com', 'hoa', 'hoa', 'hoa', 'hoa', '13123213', NULL),
(19, 'hoa', 'hoa', 'hoa@a.com', 'hoa', 'hoa', 'hoa', 'hoa@a.com', 'hoa', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_category`
--

CREATE TABLE IF NOT EXISTS `shop_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `language` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `shop_category`
--

INSERT INTO `shop_category` (`category_id`, `parent_id`, `title`, `description`, `language`) VALUES
(1, 0, 'Primary Articles', NULL, NULL),
(2, 0, 'Secondary Articles', NULL, NULL),
(3, 1, 'Red Primary Articles', NULL, NULL),
(4, 1, 'Green Primary Articles', NULL, NULL),
(5, 2, 'Red Secondary Articles', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_customer`
--

CREATE TABLE IF NOT EXISTS `shop_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shop_customer`
--

INSERT INTO `shop_customer` (`customer_id`, `user_id`, `address_id`, `delivery_address_id`, `billing_address_id`, `email`) VALUES
(1, NULL, 1, 0, 0, 'jnguyenhoa@a.com'),
(2, NULL, 11, 0, 0, 'hoa@gmail.com'),
(3, NULL, 14, 0, 0, 'nhoa@a.com');

-- --------------------------------------------------------

--
-- Table structure for table `shop_delivery_address`
--

CREATE TABLE IF NOT EXISTS `shop_delivery_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `country` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shop_delivery_address`
--

INSERT INTO `shop_delivery_address` (`id`, `firstname`, `lastname`, `email`, `state`, `street`, `zipcode`, `city`, `phone`, `country`) VALUES
(1, 'hoa', 'hoa', 'hoa@a.com', 'oaho', 'hoa', 'hoa', 'hoah', 'w13123213', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_image`
--

CREATE TABLE IF NOT EXISTS `shop_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `filename` varchar(45) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Image_Products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop_order`
--

CREATE TABLE IF NOT EXISTS `shop_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `ordering_date` int(11) NOT NULL,
  `ordering_done` tinyint(1) DEFAULT NULL,
  `ordering_confirmed` tinyint(1) DEFAULT NULL,
  `payment_method` int(11) NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `comment` text,
  PRIMARY KEY (`order_id`),
  KEY `fk_order_customer` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shop_order`
--

INSERT INTO `shop_order` (`order_id`, `customer_id`, `delivery_address_id`, `billing_address_id`, `ordering_date`, `ordering_done`, `ordering_confirmed`, `payment_method`, `shipping_method`, `comment`) VALUES
(1, 1, 2, 3, 1397688633, NULL, NULL, 5, 1, 'Test'),
(2, 1, 4, 5, 1397690353, NULL, NULL, 5, 1, ''),
(3, 2, 12, 13, 1399593668, NULL, NULL, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `shop_order_position`
--

CREATE TABLE IF NOT EXISTS `shop_order_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `specifications` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shop_order_position`
--

INSERT INTO `shop_order_position` (`id`, `order_id`, `product_id`, `amount`, `specifications`) VALUES
(1, 1, 1, 1, '{"5":["1"],"1":["1"]}'),
(2, 2, 1, 1, '{"5":["1"],"1":["1"]}'),
(3, 3, 1, 1, '{"1":["1"]}'),
(4, 3, 1, 2, '{"1":["1"]}');

-- --------------------------------------------------------

--
-- Table structure for table `shop_payment_method`
--

CREATE TABLE IF NOT EXISTS `shop_payment_method` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `tax_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `shop_payment_method`
--

INSERT INTO `shop_payment_method` (`id`, `title`, `description`, `tax_id`, `price`) VALUES
(1, 'cash', 'You pay cash', 1, 0),
(2, 'advance Payment', 'You pay in advance, we deliver', 1, 0),
(3, 'cash on delivery', 'You pay when we deliver', 1, 0),
(4, 'invoice', 'We deliver and send a invoice', 1, 0),
(5, 'paypal', 'You pay by paypal', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_products`
--

CREATE TABLE IF NOT EXISTS `shop_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `model` varchar(45) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `description` text,
  `price` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `new_price` varchar(45) DEFAULT NULL,
  `is_special` tinyint(2) DEFAULT NULL,
  `language` varchar(45) DEFAULT NULL,
  `specifications` text,
  `created_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`),
  KEY `fk_products_category` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `shop_products`
--

INSERT INTO `shop_products` (`product_id`, `category_id`, `tax_id`, `title`, `model`, `manufacturer`, `weight`, `description`, `price`, `size`, `new_price`, `is_special`, `language`, `specifications`, `created_time`) VALUES
(1, 1, 1, 'Demonstration of Article with variations 1', 'ab', 'Sony Xperia', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '19.99', '10x10', '', 1, NULL, NULL, '2014-05-05 17:00:00'),
(2, 1, 2, 'Another Demo Article with less Tax', 'ab', 'Sony Xperia', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '29.99', NULL, NULL, NULL, NULL, NULL, '2014-05-04 17:00:00'),
(3, 2, 1, 'Lorem Ipsum is simply dummy', 'ab', 'Sony Xperia', 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '20.23', NULL, NULL, NULL, NULL, NULL, '2014-05-03 17:00:00'),
(4, 4, 1, 'Demo Demonstration of Article with variations', 'ab', 'Sony Xperia', 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '7, 55', NULL, '2.04', NULL, NULL, NULL, '2014-05-05 17:00:00'),
(5, 1, 1, 'Demonstration of Article with variations 2', 'ab', 'Sony Xperia', 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '19.99', NULL, '15.06', 1, NULL, NULL, '2014-05-05 17:00:00'),
(6, 1, 1, 'Demonstration of Article with variations 3', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '19.99', '10x10', '15.06', 1, NULL, NULL, '2014-05-05 17:00:00'),
(7, 1, 1, 'Demonstration of Article with variations 4', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '19.99', '10x10', '15.06', 1, NULL, NULL, '2014-05-05 17:00:00'),
(8, 1, 1, 'Demonstration of Article with variations 5', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '19.99', '10x10', '15.06', 1, NULL, NULL, '2014-05-05 17:00:00'),
(9, 2, 1, 'Lorem Ipsum is simply dummy 1', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '20.23', '10x10', NULL, NULL, NULL, NULL, '2014-05-03 17:00:00'),
(10, 4, 1, 'Demo Demonstration of Article with variations', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '7, 55', '10x10', '2.04', NULL, NULL, NULL, '2014-05-05 17:00:00'),
(11, 4, 1, 'Demo4', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '7, 55', '10x10', '2.04', NULL, NULL, NULL, '2014-05-05 17:00:00'),
(12, 4, 1, 'Demo4', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '7, 55', '10x10', '2.04', NULL, NULL, NULL, '2014-05-05 17:00:00'),
(13, 4, 1, 'Demo4', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '7, 55', '10x10', '2.04', NULL, NULL, NULL, '2014-05-05 17:00:00'),
(14, 1, 1, 'Demonstration of Article with variations', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '19.99', '10x10', '15.06', 1, NULL, NULL, '2014-05-05 17:00:00'),
(15, 4, 1, 'Demo4', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '7, 55', '10x10', '2.04', NULL, NULL, NULL, '2014-05-05 17:00:00'),
(16, 1, 1, 'Demonstration of Article with variations', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '19.99', '10x10', '15.06', 1, NULL, NULL, '2014-05-05 17:00:00'),
(17, 1, 1, 'Demonstration of Article with variations', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '19.99', '10x10', '15.06', 1, NULL, NULL, '2014-05-05 17:00:00'),
(18, 1, 1, 'Demonstration of Article with variations', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '19.99', '10x10', '15.06', 1, NULL, NULL, '2014-05-05 17:00:00'),
(19, 1, 1, 'Demonstration of Article with variations', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '19.99', '10x10', '15.06', 1, NULL, NULL, '2014-05-05 17:00:00'),
(20, 4, 1, 'Demo4', 'ab', 'Sony Xperia', 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '7, 55', '10x10', '2.04', NULL, NULL, NULL, '2014-05-05 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_specification`
--

CREATE TABLE IF NOT EXISTS `shop_product_specification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `is_user_input` tinyint(1) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `shop_product_specification`
--

INSERT INTO `shop_product_specification` (`id`, `title`, `is_user_input`, `required`) VALUES
(1, 'Size', 0, 1),
(2, 'Color', 0, 0),
(3, 'Some random attribute', 0, 0),
(4, 'Material', 0, 1),
(5, 'Specific number', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_variation`
--

CREATE TABLE IF NOT EXISTS `shop_product_variation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `specification_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price_adjustion` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shop_product_variation`
--

INSERT INTO `shop_product_variation` (`id`, `product_id`, `specification_id`, `position`, `title`, `price_adjustion`) VALUES
(1, 1, 1, 2, 'frame 1', 3),
(2, 2, 1, 3, 'frame 2', 6),
(3, 3, 2, 4, 'frame 3', 9),
(4, 5, 5, 1, 'frame 4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_shipping_method`
--

CREATE TABLE IF NOT EXISTS `shop_shipping_method` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `tax_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shop_shipping_method`
--

INSERT INTO `shop_shipping_method` (`id`, `title`, `description`, `tax_id`, `price`) VALUES
(1, 'Delivery by postal Service', 'We deliver by Postal Service. 2.99 units of money are charged for that', 1, 2.99);

-- --------------------------------------------------------

--
-- Table structure for table `shop_tax`
--

CREATE TABLE IF NOT EXISTS `shop_tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `percent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `shop_tax`
--

INSERT INTO `shop_tax` (`id`, `title`, `percent`) VALUES
(1, '19%', 19),
(2, '7%', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gx_id` int(11) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `date_updated` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `gh_id` int(11) DEFAULT NULL,
  `current_level` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gx_id` (`gx_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gx_id`, `phone`, `email`, `address`, `photo`, `username`, `password`, `last_login`, `date_created`, `date_updated`, `gh_id`, `current_level`) VALUES
(1, 'Hoa 2', 'Nguyen', 5, '0907730305', 'nhoa@tmb.com.vn', 'cu chi', '', 'hoanguyen', '$2a$13$lRB0ShYb7oWqoDAnGug9TuYB3s0O7wySvfo.HeJosG1nbpLjVz142', '2014-03-31 08:00:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 9),
(2, 'Test', 'Vo', 4, '123', 'ab', 'ab', 'ab', 'testvo', '$2a$13$6id.kpzueyta.U7HnGUiDeOpW54D9qNmQmbM/9J6eLL2mb8bix0vO', '0000-00-00 00:00:00', '2014-03-11 17:00:00', '0000-00-00 00:00:00', 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shop_image`
--
ALTER TABLE `shop_image`
  ADD CONSTRAINT `fk_Image_Products` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shop_order`
--
ALTER TABLE `shop_order`
  ADD CONSTRAINT `fk_order_customer1` FOREIGN KEY (`customer_id`) REFERENCES `shop_customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shop_products`
--
ALTER TABLE `shop_products`
  ADD CONSTRAINT `fk_products_category` FOREIGN KEY (`category_id`) REFERENCES `shop_category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
