-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 12:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_contact`
--

CREATE TABLE `admin_contact` (
  `id` int(3) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_contact`
--

INSERT INTO `admin_contact` (`id`, `mobile`, `phone`, `email`, `address`) VALUES
(1, '9766449791', '9766449791', 'sumitsakpal02@gmail.com', 'Near Zeal College Narhe, Pune');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin'),
(3, 'sumit', 'admin'),
(8, 'sumit', 'atish');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_address`
--

CREATE TABLE `checkout_address` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `contactno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout_address`
--

INSERT INTO `checkout_address` (`id`, `firstname`, `lastname`, `email`, `address`, `city`, `pincode`, `contactno`) VALUES
(1, 'Sumit', 'Sakpal', 'sumitsakpal02@gmail.com', 'Pune', 'Pune', '410504', '9405264157'),
(2, 'Sumit', 'Sakpal', 'sumitsakpal02@gmail.com', 'Pune', 'Pune', '410504', '0940526415'),
(3, 'Sumit', 'Sakpal', 'sumitsakpal02@gmail.com', 'Pune', 'Pune', '410504', '094052'),
(4, 'Pankaj', 'Kokate', 'pankaj@gmail.com', 'Pune', 'Pune', '411014', '1234567890'),
(5, 'Sumit', 'Sakpal', 'sumitsakpal02@gmail.com', 'Pune', 'Pune', '410504', '094052'),
(6, 'Pankaj', 'Kokate', 'sumitsakpal02@gmail.com', 'Pune', 'Pune', '410504', '094052456'),
(7, 'Pankaj', 'Kokate', 'sumitsakpal02@gmail.com', 'Pune', 'Pune', '410504', '094052456'),
(8, 'Sumit', 'Sakpal', 'sumitsakpal02@gmail.com', 'Pune', 'Pune', '410504', '9766449791'),
(9, '', '', '', '', '', '', ''),
(10, 'sds', 'sdf', 'asfawd@gmail.com', 'ssdf', 'efsef', '454545', '4798465123'),
(11, 'Sumit', 'Sakpal', 'sumitsakpal02@gmail.com', 'Pune', 'Pune', '410504', '094052'),
(12, 'jbkj', 'hjbjh', 'jhbj@jhbjh.com', 'klnkn', 'klmnlkn', '566665', '1234567890'),
(13, 'Sumit', 'Sakpal', 'sumitsakpal02@gmail.com', 'Pune', 'Pune', '410504', '9405264157'),
(14, 'Sumit', 'Sakpal', 'sumitsakpal02@gmail.com', 'Pune', 'Pune', '410504', '9405264157'),
(15, 'Sumit', 'Sakpal', 'sumitsakpal02@gmail.com', 'Pune', 'Pune', '410504', '9405264157'),
(16, 'Sumit', 'Sakpal', 'sumitsakpal02@gmail.com', 'Devgad', 'Devgad', '416613', '9405264157');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order_address`
--

CREATE TABLE `confirm_order_address` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `contactno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confirm_order_product`
--

CREATE TABLE `confirm_order_product` (
  `id` int(5) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` int(5) NOT NULL,
  `product_qty` int(5) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` int(5) NOT NULL,
  `product_c_price` int(5) NOT NULL,
  `product_qty` int(10) UNSIGNED NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_main_category` varchar(50) NOT NULL,
  `product_primary_category` varchar(50) NOT NULL,
  `product_secondary_category` varchar(50) NOT NULL,
  `product_type` varchar(150) NOT NULL,
  `product_brand` varchar(150) NOT NULL,
  `tag` varchar(150) NOT NULL,
  `latest` varchar(50) NOT NULL,
  `bestseller` varchar(50) NOT NULL,
  `special` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_c_price`, `product_qty`, `product_desc`, `product_image`, `product_main_category`, `product_primary_category`, `product_secondary_category`, `product_type`, `product_brand`, `tag`, `latest`, `bestseller`, `special`) VALUES
(2, 'Lamp', 899, 1599, 8, 'This is testing', 'product_image/1c0f636b6b06d8343988dc2bb8f0ff07product-7.png', 'Home Decor', 'othershome', 'lampslightning', 'Bajaj', 'urban', 'Natural Lamp, light', 'Latest', '', ''),
(6, 'Chair', 599, 899, 10, 'This is testing', 'product_image/02ee07272e0e473bf3ebd9d445d42fafproduct-2.png', 'Furniture', 'livingroom', 'chairs', 'woodchair', 'Bajaj', 'Designning Chair', '', 'BestSeller', ''),
(7, 'Lamp', 499, 899, 8, 'This is testing', 'product_image/1a38e3aa6d4c10f3ba661d39bc7f05f5product-1.png', 'Home Decor', 'othershome', 'lampslightning', 'Simple lamp', 'apolo', 'Lamp', 'Latest', '', 'special'),
(9, 'Chair', 499, 899, 10, 'This is Testing', 'product_image/4b545b54281a3575925255bfa50f52d0product8.png', 'Furniture', 'livingroom', 'chairs', 'Chair', 'Apolo', 'Chair', '', '', ''),
(10, 'Exclusive Lamp', 1499, 2999, 8, 'This is Testing', 'product_image/23b7b424c670315d248ce0d05eea2561product-7.png', 'Home Decor', 'othershome', 'lampslightning', 'Lamp', 'Apolo', 'Exclusive Lamp', '', '', ''),
(11, 'Soft Sofa', 799, 1299, 12, 'This is Testing', 'product_image/d141a88f8ee0e58d9da5dd092757040eproduct-4.png', 'Furniture', 'livingroom', 'chairs', 'Seating Sofa', 'Apolo', 'Soft Sofa, Seating chair', '', '', ''),
(12, 'Green Lamp', 1499, 1999, 8, 'This is Testing', 'product_image/5b0abf32835fcc4311d9fbb22be6d22fproduct-5.png', 'Home Decor', 'othershome', 'lampslightning', 'Lamp', 'Bajaj', 'Green Lamp', 'Latest', 'BestSeller', ''),
(13, 'Red Chair', 1599, 1799, 10, 'This is Testing', 'product_image/2bf39ce07c4a3879646a3e0486c011e8product8.png', 'Furniture', 'livingroom', 'chairs', 'Seating Chair', 'Apolo', 'Seating Chair, Red Chair', '', '', ''),
(14, 'Lamp', 599, 799, 8, 'This is Testing ', 'product_image/dd630450cb57294006370f61b9594154product-1.png', 'Home Decor', 'othershome', 'lampslightning', 'Simple Lamp', 'Apolo', 'Simple lamp, brightness', '', '', ''),
(15, 'Chair', 499, 599, 10, 'This is Testing', 'product_image/02c50037d905f33b96e756bff192e640product-3.png', 'Furniture', 'livingroom', 'chairs', 'Seating Chair', 'Apolo', 'Seating Chair, Gray Chair', '', '', ''),
(16, 'Dove', 400, 500, 10, 'this is testing', 'product_image/4cc9abf3f0c266d18e1cc274be003be7dove.png', 'Home Furnishings', 'bedsheets', 'allbedsheets', 'beuty', 'Dove', 'Shampoo', '', 'BestSeller', 'special'),
(17, 'Sofa', 499, 599, 10, 'this is testing', 'product_image/2b1ef112a2ca25ec0bf4f4abeb288aecproduct-4.png', 'Furniture', 'livingroom', 'chairs', 'Sofas', 'Bajaj', 'sofa', '', '', ''),
(18, 'Sofa', 899, 999, 10, 'This is testing', 'product_image/0db756ed6818473efa01a0a84ab48fd0product-4.png', 'Furniture', 'livingroom', 'sofasets', 'Sofa', 'Bajaj', 'Sofa', '', '', ''),
(19, 'Sofa cum Beds', 1299, 1599, 10, 'This is testing ', 'product_image/0276a2404f795be2080b602fbea381d3product-4.png', 'Furniture', 'livingroom', 'sofacumbeds', 'Sofa', 'Apolo', 'Sofa', '', '', ''),
(20, 'Sofa', 799, 899, 15, 'This is testing', 'product_image/d332c5f2fd4c22a4581bba52c3b640d5product-3.png', 'Furniture', 'livingroom', 'seating', 'Seating', 'Apolo', 'Seating Chair, Gray Chair', '', '', ''),
(21, 'Table', 1499, 1899, 18, 'This is testing', 'product_image/0e9a2bb92122c82096a16a40d6c2cb41product-2.png', 'Furniture', 'livingroom', 'tables', 'Table', 'Apolo', 'Table', '', '', ''),
(22, 'Bed', 5800, 6999, 12, 'This is testing', 'product_image/29ba992b56e2b5f1a8c088ac27a02e03product8.png', 'Furniture', 'bedroom', 'allbeds', 'Bed', 'Bajaj', 'bed', '', '', ''),
(23, 'Bed', 5000, 8000, 2, 'this is testing', 'product_image/355373054a421766485fe538845bea3dproduct-2.png', 'Furniture', 'bedroom', 'singlesizebeds', 'sofas', 'Apolo', 'Lamp', '', '', ''),
(24, 'Bed', 5000, 8000, 15, 'this is testing', 'product_image/5004ba42a3055810bf1d77cd3e9bc62fproduct-3.png', 'Furniture', 'bedroom', 'doublesizebeds', 'sofas', 'Bajaj', 'sofa', '', '', ''),
(25, 'Bed', 7555, 8555, 15, 'this is testing', 'product_image/6c4ce4d8d3d6e4fde7ef7e25f7db4d75product-5.png', 'Furniture', 'bedroom', 'kingsizebeds', 'Bajaj', 'bajaj', 'soft chair', '', '', ''),
(26, 'Beds with storage', 799, 999, 10, 'this is testing', 'product_image/84b00c3f297dbf64e2cd62a930b62686product-1.png', 'Furniture', 'bedroom', 'bedswithstorage', 'zigzag', 'apolo', 'soft chair', '', '', ''),
(27, 'Kids bEd', 599, 899, 12, 'Tthis is testing', 'product_image/b4b0250566a5ea7f3f8c44c095b4a8d0product8.png', 'Furniture', 'bedroom', 'kidsbeds', 'Lamp', 'Bajaj', 'soft chair', '', '', ''),
(28, 'Bed', 899, 1599, 10, 'this is testing', 'product_image/56b9ad6b26ede0a65cb71de2989bedefproduct-3.png', 'Furniture', 'bedroom', 'mattresses', 'sofas', 'Apolo', 'Lamp', '', '', ''),
(29, 'dressingTables', 5000, 17977, 2, 'This is testing', 'product_image/2f581b34d4586ae33a545d3484e82e7eproduct-2.png', 'Furniture', 'bedroom', 'dressingtable', 'sofas', 'Apolo', 'Lamp', '', '', ''),
(30, 'bed side', 5000, 8000, 11, 'this is testing', 'product_image/3268a2d3be187e809da4e40f996d0fe9product-7.png', 'Furniture', 'bedroom', 'bedsidetables', 'Lamp', 'Bajaj', 'soft chair', '', '', ''),
(32, '4seater', 899, 1299, 150, 'this is testing', 'product_image/2835cd21ed12d270144e20d0005b3033product-2.png', 'Furniture', 'diningroom', '4seater', 'sofas', 'werwe', 'Sofa', '', '', ''),
(33, '6seater', 499, 599, 10, 'This is testing', 'product_image/63c7369c8d0ee026107dc95b02293bc6product-7.png', 'Furniture', 'diningroom', '6seater', 'zigzag', 'werwe', 'cotton sofa', '', '', ''),
(34, '8seater', 899, 1599, 17, 'This is testing', 'product_image/165e0636ca617b750618ca86dbc9aecdproduct-1.png', 'Furniture', 'diningroom', '8seater', 'lamp', 'bajaj', 'soft chair', '', '', ''),
(35, 'Dining Table', 4888, 5999, 15, 'this is testing', 'product_image/c6e1c7f3a2727e4fbe3e3ad491fcb494product-4.png', 'Furniture', 'diningroom', 'diningtables', 'lamp', 'werwe', 'cotton sofa', '', '', ''),
(36, 'Dining Chair', 4588, 7599, 16, 'this is testing', 'product_image/c9be04c28bd2d1181fb7efbeb7775d19product-2.png', 'Furniture', 'diningroom', 'diningchairs', 'Bajaj', 'werwe', 'Sofa', '', '', ''),
(37, 'Bench', 899, 1999, 15, 'this is testing', 'product_image/311b4b2768f941af7eec9e3a4aa2d93dproduct-2.png', 'Furniture', 'diningroom', 'diningbenches', 'Lamp', 'werwe', 'soft chair', '', '', ''),
(38, 'Storage', 489, 984, 456, 'this is testing', 'product_image/7f08790753470bc6158b293917bb7210product-2.png', 'Furniture', 'diningroom', 'storage', 'Sofa', 'bajaj', 'chairs', '', '', ''),
(39, 'Book shelves', 456, 987, 10, 'This is testing', 'product_image/50ba57f800fb768d474381cf80eea7cdproduct-2.png', 'Furniture', 'studyoffice', 'bookshelves', 'lamp', 'apolo', 'soft chair', '', '', ''),
(40, 'magazine', 152, 159, 10, 'This is testing', 'product_image/3743753f5a7ad813e3b76fca0ad27cf2product-3.png', 'Furniture', 'studyoffice', 'magazinefileracks', 'Sofa', 'bajaj', 'lamp', '', '', ''),
(41, 'Study Tables', 599, 999, 15, 'This is testing', 'product_image/7c93264821a07b02d0f5b6e46a574743product8.png', 'Furniture', 'studyoffice', 'studytables', 'Lamp', 'Apolo', 'soft chair', '', '', ''),
(42, 'Chair', 599, 899, 2, 'This is testing', 'product_image/84e47c745e5571f34c68f5abff669116product-7.png', 'Furniture', 'studyoffice', 'officeTables', 'Bajaj', 'apolo', 'soft chair', '', '', ''),
(43, 'Chair', 899, 1799, 15, 'This is testing', 'product_image/6c0f50990323dfe6ca45a9e32be3dbdaproduct-4.png', 'Furniture', 'studyoffice', 'officechairs', 'Lamp', 'Bajaj', 'lamp', '', '', ''),
(44, 'Chair', 799, 899, 12, 'This is testing', 'product_image/32b1f0a0858c82198746a205641e6a6bproduct-3.png', 'Furniture', 'studyoffice', 'studychairs', 'Sofa', 'werwe', 'Lamp', '', '', ''),
(45, 'Chair', 5000, 8000, 11, 'This is testing', 'product_image/5c5c2375a4e57b0a72dba49d908df010product-7.png', 'Furniture', 'outdoor', 'swings', 'sofas', 'bajaj', 'soft chair', '', '', ''),
(46, 'Chair', 799, 899, 2, 'This is testing', 'product_image/8a6a622e1f4e1d741aa92fe974d076feproduct-5.png', 'Furniture', 'outdoor', 'outdoorchairs', 'sofas', 'Apolo', 'soft chair', '', '', ''),
(47, 'Chair', 5000, 8000, 11, 'This is testing', 'product_image/6264c845705627934fea85bf6ce1db09product-2.png', 'Furniture', 'outdoor', 'outdoortables', 'sofas', 'Bajaj', 'sofa', '', '', ''),
(48, 'Lamp', 599, 999, 12, 'This is testing', 'product_image/0bf667c8b7b0b0d5a16ab564ec1305d8product-5.png', 'Furniture', 'wardrobes', 'allwardrobes', 'Lamp', 'Apolo', 'Lamp', '', '', ''),
(49, 'Bed', 899, 999, 15, 'This is testing', 'product_image/2964876d90b799a2d235d8c1048c08c5product-1.png', 'Furniture', 'wardrobes', '2doorw', 'Lamp', 'Bajaj', 'Lamp', '', '', ''),
(50, '3door', 5000, 8000, 12, 'This is testing', 'product_image/350fdc2dc91ec04d55c67dcc0be799edproduct-2.png', 'Furniture', 'wardrobes', '3doorw', 'Lamp', 'Bajaj', 'soft chair', '', '', ''),
(51, '4door', 5000, 8000, 11, 'This is testing', 'product_image/0b070c345a33dddcc9958c56c05ad2f0product-2.png', 'Furniture', 'wardrobes', '4doorw', 'sofas', 'bajaj', 'soft chair', '', '', ''),
(52, 'Chair', 499, 999, 15, 'This is testing', 'product_image/e5f1699be8d30cd1f6c12664ff3a4aa1product8.png', 'Furniture', 'wardrobes', 'slidingdoorw', 'lamp', 'urban', 'Lamp', '', '', ''),
(53, 'Bed', 799, 999, 15, 'This is testing', 'product_image/9ba708382b2b0674db9cf3c753d62d8dproduct-2.png', 'Home Furnishings', 'bedsheets', 'allbedsheets', 'sofas', 'werwe', 'soft chair', '', '', ''),
(54, 'Bed', 599, 1599, 11, 'This is testing', 'product_image/f1155782fdc49c9de01605fd74483e59product-3.png', 'Home Furnishings', 'bedsheets', 'kingsizebedsheets', 'Bajaj', 'Apolo', 'soft chair', '', '', ''),
(55, 'Bed', 799, 5999, 12, 'This is testing', 'product_image/26e54ece241cbe70e6835c803c4eec7fproduct8.png', 'Home Furnishings', 'bedsheets', 'singlebedsheets', 'zigzag', 'bajaj', 'soft chair', '', '', ''),
(56, 'Bed', 499, 599, 11, 'This is testing', 'product_image/03fd1a52d65dc262ae7405f3dface1afproduct-2.png', 'Home Furnishings', 'bedsheets', 'fittedbedsheets', 'Sofa', 'urban', 'Lamp', '', '', ''),
(57, 'Sofa', 899, 999, 10, 'This is testing', 'product_image/6fd3940d52d0c6ff8b5503878f99a0caproduct-2.png', 'Home Furnishings', 'bedsheets', 'doublebedsheets', 'Bajaj', 'werwe', 'cotton sofa', '', '', ''),
(58, 'Chair', 899, 1799, 15, 'This is testing', 'product_image/955f07ce102cee63c42bf136dfd8d1fbproduct-5.png', 'Home Furnishings', 'bedding', 'bedcovers', 'zigzag', 'bajaj', 'soft chair', '', '', ''),
(59, 'Bed', 599, 899, 11, 'This is testing', 'product_image/3a71c5e7b13987ef67f919b17076822cproduct-1.png', 'Home Furnishings', 'bedding', 'conforters', 'Sofa', 'urban', 'soft chair', '', '', ''),
(60, 'Lamp', 5000, 8000, 15, 'This is testing', 'product_image/fcd63a2cb5385b40348339d2343aff2aproduct-7.png', 'Home Furnishings', 'bedding', 'a/c_quiltsblankets', 'sofas', 'Apolo', 'soft chair', '', '', ''),
(61, 'Bed', 799, 8000, 10, 'This is testing', 'product_image/088ebb449d19a2dd7438d5cd635cee95product-2.png', 'Home Furnishings', 'bedding', 'quilts&blankets', 'lamp', 'urban', 'Sofa', '', '', ''),
(62, 'Chair', 5000, 8000, 10, 'This is testing', 'product_image/a3b1b93247c1c4acb3155719bc8ebc3cproduct-1.png', 'Home Furnishings', 'pillowscovers', 'bedpillows', 'lamp', 'apolo', 'soft chair', '', '', ''),
(63, 'Chair', 5000, 8000, 11, 'This is testing', 'product_image/fa8c6b576e4719cbf5728ace988ca35eproduct-2.png', 'Home Furnishings', 'pillowscovers', 'pillowcovers', 'Bajaj', 'apolo', 'soft chair', '', '', ''),
(64, 'Bed', 599, 899, 10, 'This is testing', 'product_image/e445a2cfafd259e449b774f48b1b6915product-4.png', 'Home Furnishings', 'pillowscovers', 'covers&inserts', 'zigzag', 'bajaj', 'cotton sofa', '', '', ''),
(65, 'towels', 899, 999, 12, 'This is testing', 'product_image/8211c80a921b53f78811f669efa8b230product-3.png', 'Home Furnishings', 'bathessentails', 'towels', 'sofas', 'werwe', 'sofa', '', '', ''),
(66, 'Chair', 5000, 8000, 15, 'This is testing', 'product_image/f4be5a8bfab91a5e5e3dbdca3b9117deproduct8.png', 'Home Furnishings', 'bathessentails', 'bathmats&rugs', 'lamp', 'werwe', 'soft chair', '', '', ''),
(67, 'Chair', 499, 899, 11, 'This is testing', 'product_image/b4e0504950be2635481f563a10e218b2product-3.png', 'Home Furnishings', 'bathessentails', 'bathrobes', 'Bajaj', 'werwe', 'soft chair', '', '', ''),
(69, 'Bed', 799, 899, 12, 'This is testing', 'product_image/98eb1d898e26de7c457043433e7b162dproduct-2.png', 'Home Decor', 'walldecor', 'paintings', 'zigzag', 'Apolo', 'soft chair', '', '', ''),
(70, 'Bed', 899, 999, 12, 'This is testing', 'product_image/326f27d53f17e55957774ae2376722a8product-7.png', 'Home Decor', 'walldecor', 'wallart', 'Bajaj', 'Bajaj', 'lamp', '', '', ''),
(71, 'Bed', 799, 999, 10, 'This is testing', 'product_image/8dc9b83f66694db0fcd7c3c67d9ebae7product-7.png', 'Home Decor', 'walldecor', 'wallaccents', 'lamp', 'werwe', 'Sofa', '', '', ''),
(72, 'Sofa', 599, 999, 12, 'This is testing', 'product_image/f19e05fe4d79e211f9fe9db76a1e0677product-4.png', 'Home Decor', 'candlesfragrances', 'candles', 'candles', 'apolo', 'sofa', '', '', ''),
(73, 'Sofa', 599, 899, 10, 'This is testing', 'product_image/03486688aae6930544934aaf115b61d4product-5.png', 'Home Decor', 'candlesfragrances', 'candleholders', 'lamp', 'bajaj', 'lamp', '', '', ''),
(74, 'Bed', 149, 599, 23, 'This is testing', 'product_image/abe1ee4b1124d124c75b99e7fe025df6product-3.png', 'Home Decor', 'candlesfragrances', 'homefragrances', 'Bajaj', 'urban', 'Lamp', '', '', ''),
(75, 'Chair', 899, 1299, 12, 'This is testing', 'product_image/9ba65a07b70456e41f6d7a3a7215cbebproduct-2.png', 'Home Decor', 'othershome', 'potsplanters', 'zigzag', 'apolo', 'Lamp', '', '', ''),
(76, 'Lamp', 899, 1799, 11, 'This is testing', 'product_image/426748e96049691a676cd22a3aaa8da6product-7.png', 'Home Decor', 'othershome', 'lampslightning', 'Lamp', 'werwe', 'Lamp', '', '', ''),
(77, 'Chair', 1499, 899, 15, 'This is testing', 'product_image/2c745e23ff8dda0f27d1cb699a17b991product-2.png', 'Home Decor', 'othershome', 'showpieces', 'zigzag', 'Bajaj', 'soft chair', '', '', ''),
(78, 'Chair', 599, 999, 15, 'This is testing', 'product_image/77336d9a2391c7c04d89ff0c69cf318fproduct-5.png', 'Home Decor', 'othershome', 'clocks', 'clocks', 'urban', 'Lamp', '', '', ''),
(79, 'Lamp', 1499, 1799, 11, 'This is testing', 'product_image/8ae4898b9176d92950b1b8824038c6c8product-1.png', 'TableWare', 'cofeetea', 'cofeeteaacc', 'Sofa', 'Apolo', 'Lamp', '', '', ''),
(80, 'Chair', 799, 899, 11, 'This is testing', 'product_image/df4fef87460fe9120cbdd97f2a30fd56product-2.png', 'TableWare', 'cofeetea', 'mugscups', 'sofas', 'werwe', 'soft chair', '', '', ''),
(81, 'Chair', 499, 999, 15, 'This is testing', 'product_image/4ed4b633b0f7c2b058b9c0197e113afeproduct-2.png', 'TableWare', 'cofeetea', 'cofeeteasets', 'Bajaj', 'apolo', 'Lamp', '', '', ''),
(82, 'Chair', 5000, 8000, 150, 'This is testing', 'product_image/de0f1ff76f1a406579e4ee68357948adproduct-2.png', 'TableWare', 'cofeetea', 'saucers', 'Sofa', 'werwe', 'soft chair', '', '', ''),
(83, 'Lamp', 599, 8000, 2, 'This is testing', 'product_image/f44f7a25c0f3a2eb2bdeea8144d1d6b3product-2.png', 'TableWare', 'serving', 'candles', 'zigzag', 'urban', 'soft chair', '', '', ''),
(84, 'Chair', 1499, 1799, 12, 'This is testing', 'product_image/1fe0506b852ee167ebbe43082a3d0924product-2.png', 'TableWare', 'serving', 'candleholders', 'lamp', 'bajaj', 'soft chair', '', '', ''),
(85, 'Chair', 1499, 1599, 11, 'This is testing', 'product_image/99a1d5c97fe34daa36a8c1b507cd33e9product-3.png', 'TableWare', 'serving', 'homefragrances', 'Sofa', 'apolo', 'soft chair', '', '', ''),
(86, 'Chair', 899, 999, 15, 'This is testing', 'product_image/7601b1959a35cddbee68ca7fe6f1d2daproduct-4.png', 'TableWare', 'tableessentials', 'tablecloths', 'Sofa', 'urban', 'sofa', '', '', ''),
(87, 'Sofa', 499, 1799, 15, 'This is testing', 'product_image/f280addebc0191aff141b33ff03218a7product-4.png', 'TableWare', 'tableessentials', 'napkinsholders', 'Sofa', 'bajaj', 'Lamp', '', '', ''),
(88, 'Bed', 599, 1799, 2, 'This is testing', 'product_image/cd70c31a6702e3c4661ed2a0d365b69bproduct-3.png', 'TableWare', 'otherstables', 'dinnerssets', 'Bajaj', 'apolo', 'soft chair', '', '', ''),
(89, 'Chair', 599, 899, 11, 'This is testing', 'product_image/3ff6e1bafbb5d3f025b700cff408c9e6product8.png', 'TableWare', 'otherstables', 'trays', 'Lamp', 'apolo', 'Lamp', '', '', ''),
(90, 'Chair', 499, 899, 12, 'This is testing', 'product_image/67574a0530c2b4b19b83e40dce52443aproduct-4.png', 'TableWare', 'otherstables', 'plates', 'zigzag', 'urban', 'soft chair', '', '', ''),
(91, 'Chair', 5000, 8000, 15, 'This is testing', 'product_image/2ee53c4c9a6225242367896a8084b156product-5.png', 'TableWare', 'otherstables', 'bowls', 'Sofa', 'urban', 'soft chair', '', '', ''),
(92, 'Chair', 1499, 1599, 10, 'This is testing', 'product_image/ee297ca84467511c2bb941fe86abae77product-3.png', 'KitchenWare', 'kitchen', 'foodstorage', 'lamp', 'Apolo', 'soft chair', '', '', ''),
(93, 'Chair', 1499, 1599, 11, 'This is testing', 'product_image/1cf85cef703ebcaf4dab46dc254667f0product-3.png', 'KitchenWare', 'kitchen', 'kitchenorganizers', 'Lamp', 'Apolo', 'Lamp', '', '', ''),
(94, 'Chair', 899, 999, 15, 'This is testing', 'product_image/6665e7132d2dba685ca41fa473e931cdproduct8.png', 'KitchenWare', 'kitchen', 'containers', 'Bajaj', 'Apolo', 'soft chair', '', '', ''),
(95, 'Bed', 799, 899, 11, 'This is testing', 'product_image/64e0d046c73e72c2ced7ee8269e185adproduct8.png', 'KitchenWare', 'kitchen', 'thermoware', 'zigzag', 'Apolo', 'Lamp', '', '', ''),
(96, 'Chair', 799, 999, 11, 'This is testing', 'product_image/225339a76556511d208a106aa92de54aproduct-3.png', 'KitchenWare', 'kitchentoollinen', 'ctools', 'Sofa', 'Bajaj', 'soft chair', '', '', ''),
(97, 'Lamp', 899, 999, 23, 'This is testing', 'product_image/82f889840c5cace43aa85aa240bdba1bproduct-4.png', 'KitchenWare', 'kitchentoollinen', 'ptools', 'lamp', 'bajaj', 'soft chair', '', '', ''),
(98, 'Bed', 599, 899, 11, 'This is testing', 'product_image/20553334736e1aeddb78de6383389aeaproduct-3.png', 'KitchenWare', 'kitchentoollinen', 'kgears', 'Lamp', 'Apolo', 'soft chair', '', '', ''),
(99, 'Sofa', 799, 899, 12, 'This is testing', 'product_image/f4ea398ae5364908fd7127b035921e17product-3.png', 'KitchenWare', 'kitchentoollinen', 'Kitchenlinen', 'Bajaj', 'Apolo', 'soft chair', '', '', ''),
(100, 'Bed', 899, 999, 11, 'This is testing', 'product_image/4a66cafbd6cf0505b6b2c1726d7d3329product-3.png', 'KitchenWare', 'appliances', 'chimney', 'zigzag', 'urban', 'soft chair', '', '', ''),
(101, 'Lamp', 799, 899, 12, 'This is testing', 'product_image/f4f1aec433a422817d0c68d656a4c535product8.png', 'KitchenWare', 'appliances', 'oven', 'Sofa', 'Bajaj', 'Lamp', '', '', ''),
(102, 'Red Chair', 499, 999, 12, 'This is testing', 'product_image/f195651a69619eb4f4f4c5f31a31c9c2product-3.png', 'KitchenWare', 'appliances', 'ctopsburners', 'sofas', 'Apolo', 'soft chair', '', '', ''),
(103, 'Chair', 899, 999, 12, 'This is testing', 'product_image/a3da41f4b66ee2d4be42a99ecccfe47cproduct-3.png', 'KitchenWare', 'appliances', 'cooking', 'lamp', 'Apolo', 'soft chair', '', '', ''),
(104, 'Chair', 499, 899, 10, 'This is testing', 'product_image/4f8bac9e60abd97d880cd0b524ca43f7product-3.png', 'KitchenWare', 'otherskitchen', 'cleaning', 'sofas', 'Apolo', 'soft chair', '', '', ''),
(105, 'Chair', 599, 1799, 12, 'This is testing', 'product_image/54a00f8f366e579142cfd64527ee3cdeproduct8.png', 'KitchenWare', 'otherskitchen', 'laundry', 'Lamp', 'bajaj', 'soft chair', '', '', ''),
(106, 'Chair', 499, 899, 11, 'This is testing', 'product_image/0b56654e3707975e391f169e41a1cbd3product-3.png', 'KitchenWare', 'otherskitchen', 'dustbins', 'Lamp', 'Apolo', 'Lamp', '', '', ''),
(107, 'Lamp', 499, 599, 2, 'This is testing', 'product_image/9c17ec2752673b0d22c78d675682a0d4product-4.png', 'KitchenWare', 'otherskitchen', 'showercurtains', 'Bajaj', 'Bajaj', 'soft chair', '', '', ''),
(108, 'Chair', 1499, 1799, 12, 'This is testing', 'product_image/df70bff9048cefd4fa97d93cc2361345product-2.png', 'Home Furnishings', 'bathessentails', 'showercurtains', 'zigzag', 'apolo', 'soft chair', '', '', ''),
(109, 'Chair', 899, 1099, 10, 'this is testing', 'product_image/5f3e3838645cb880da817f8dc85b3d22product8.png', 'Furniture', 'livingroom', 'chairs', 'sofas', 'Apolo', 'soft chair', '', '', ''),
(110, 'Chairside', 799, 899, 2, 'this is tesrglk', 'product_image/1e2c8d3d2d66422636f4c73000f0dc4bproduct-2.png', 'Furniture', 'livingroom', 'chairs', 'sofas', 'Apolo', 'Sofa', '', '', ''),
(111, 'Chairside2', 799, 999, 12, 'sfbdfhbcgh', 'product_image/749d9189cb2dc98134c1de3dd91dd224product-3.png', 'Furniture', 'livingroom', 'chairs', 'lamp', 'werwe', 'Sofa', 'Latest', '', ''),
(112, 'sumit', 1499, 1599, 150, 'xftjhfgh', 'product_image/4493cea8eeb098c8c41016509f8dfac3product-4.png', 'Furniture', 'livingroom', 'chairs', 'sofas', 'Bajaj', 'Sofa', 'Latest', 'BestSeller', ''),
(113, 'Favourite', 500, 800, 5, 'this is testing ', 'product_image/deb6dbc7bbedf1e66cab09d0a9e065bddamro.jpg', 'Furniture', 'livingroom', 'sofasets', 'fg', 'ff', 'ff', 'Latest', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_contact`
--
ALTER TABLE `admin_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_address`
--
ALTER TABLE `checkout_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_order_address`
--
ALTER TABLE `confirm_order_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_order_product`
--
ALTER TABLE `confirm_order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_contact`
--
ALTER TABLE `admin_contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `checkout_address`
--
ALTER TABLE `checkout_address`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `confirm_order_address`
--
ALTER TABLE `confirm_order_address`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `confirm_order_product`
--
ALTER TABLE `confirm_order_product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
