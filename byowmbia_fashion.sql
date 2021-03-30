-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2021 at 06:17 AM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `byowmbia_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_table`
--

CREATE TABLE `address_table` (
  `pk_id` int(11) NOT NULL,
  `user_id` int(55) DEFAULT NULL,
  `fname` varchar(35) DEFAULT NULL,
  `lname` varchar(35) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(55) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `zip` varchar(55) DEFAULT NULL,
  `country` varchar(155) DEFAULT NULL,
  `state` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_table`
--

INSERT INTO `address_table` (`pk_id`, `user_id`, `fname`, `lname`, `address`, `city`, `phone`, `zip`, `country`, `state`) VALUES
(7, 57, 'ibrahim', 'anwar', 'CC-380, Phase 4, DHA', 'Lahore', '03244244934', '54180', 'Pakistan', 'Punjab'),
(19, 54, 'Nabeel', 'Ahmed', 'Z-44 Phase 3 D.H.A. Lahore', 'Lahore', '03233222243', '54810', 'Pakistan', 'Punjab'),
(20, 76, 'Momin', 'MEHBOOB', '364-CC phase 4, DHa, lahore', 'Lahore', '03217012222', '54000', 'Pakistan', 'Punjab'),
(21, 79, 'Ibrahim', 'Anwar', 'CC-380, DHA, Phase 4,', 'Lahore', '03244244934', '54180', 'Pakistan', 'Punjab'),
(22, 80, 'haad', 'mehboob', '364 CC, phase 4, DHA.', 'Lahore', '03444444022', '54000', 'Pakistan', 'Punjab'),
(24, 83, 'Fatima', 'Awais', '151-W, Phase III, DHA, Lahore', 'Lahore', '03004018285', '54792', 'Pakistan', 'Punjab'),
(29, 86, 'Muhammad', 'Ashfaq', 'FAIR LINE SILK FACTORY', 'Lahore', '03347408688', '53998', 'Pakistan', 'Punjab'),
(33, 98, 'Naheed', 'Faisal', 'CC-364, DHA, phase 4, Lahore', 'Lahore', '03004160856', '54180', 'Pakistan', 'Punjab'),
(34, 99, 'Faizan', 'Rasool', 'lahore wapda', 'Duki', '03046821313', '32222', 'Pakistan', 'Balochistan'),
(35, 100, 'shamir', 'manakat', 'B-4-8, Green Avenue Condo', 'Kuala Lumpur', '60182221639', '57000', 'Malaysia', 'Kuala Lumpur'),
(36, 101, 'Faizan', 'Rasool', 'lahore wapda', 'Ondjiva', '123123123', '3242', 'Angola', 'Cunene'),
(37, 102, 'John', 'Doe', 'gulberg street 2 near wapda town laore', 'Basti Dosa', '03046821313', '32222', 'Pakistan', 'Punjab'),
(38, 108, 'Faizan', 'Rasool', 'lahore wapda', 'Dera Ismail Khan', '03001234567', '3242', 'Pakistan', 'Khyber Pakhtunkhwa'),
(39, 108, 'Faizan', 'Rasool', 'lahore wapda', 'Dera Ismail Khan', '03001234567', '3242', 'Pakistan', 'Khyber Pakhtunkhwa'),
(40, 108, 'Faizan', 'Rasool', 'lahore wapda', 'Dera Ismail Khan', '03001234567', '3242', 'Pakistan', 'Khyber Pakhtunkhwa'),
(41, 108, 'Faizan', 'Rasool', 'lahore wapda', 'Dera Ismail Khan', '03001234567', '3242', 'Pakistan', 'Khyber Pakhtunkhwa'),
(42, 108, 'Faizan', 'Rasool', 'lahore wapda', 'Dera Ismail Khan', '03001234567', '3242', 'Pakistan', 'Khyber Pakhtunkhwa'),
(43, 109, 'fahad', 'maqsood', 'Lahore', 'Lahore', '34642007334', '54810', 'Pakistan', 'Punjab'),
(44, 110, 'Nabeel', 'Ahmed', 'Block Z DHA', 'Lala Musa', '03233222243', '54810', 'Pakistan', 'Punjab'),
(45, 111, 'Ali', 'Nawazish', 'Nabeel', 'Lahore', '0323-3222243', '54810', 'Pakistan', 'Punjab'),
(46, 107, 'Daniyal', 'Akbar', '23 west block Gunj shakar colony Sahiwal Muhammad pur Road near city marbles', 'Sahiwal', '0311 6630675', '57000', 'Pakistan', 'Punjab'),
(47, 107, 'Daniyal', 'Akbar', '23 west block Gunj shakar colony Sahiwal Muhammad pur Road near city marbles', 'Sahiwal', '0311 6630675', '57000', 'Pakistan', 'Punjab'),
(48, 113, 'Awais', 'Piracha', 'House#18, block X, 50 feet wide road, New Satelite Town, Sargodha city', 'Sargodha', '03206023549', '40100', 'Pakistan', 'Punjab'),
(49, 114, 'Nabeel', 'Ahmed', 'Block Z DHA', 'Lahore', '03233222243', '54810', 'Pakistan', 'Punjab'),
(50, 108, 'John', 'Doe', 'gulberg street 2 near wapda town laore', 'Lahore', '121212', NULL, 'Pakistan', 'Punjab'),
(51, 108, 'John', 'Doe', 'batti chowkk', 'Bakhri Ahmad Khan', '121212', NULL, 'Pakistan', 'Punjab'),
(52, 108, 'faizannnnnnn', 'Doe', 'rerrr', 'Basti Dosa', '12122', NULL, 'Pakistan', 'Punjab'),
(53, 103, 'John', 'Doe', 'gulberg street 2 near wapda town laore', 'Bhawana', '54000', NULL, 'Pakistan', 'Punjab'),
(54, 117, 'Sana', 'Mughal', '34/11 ferozpur road near ICMA institute lahore', 'Lahore', '54600', NULL, 'Pakistan', 'Punjab'),
(55, 118, 'Ahmed', 'Butt', 'National Handi Craft Shah Faisal, Gujrat', 'Gujrat', '50700', NULL, 'Pakistan', 'Punjab'),
(56, 118, 'Ahmed', 'Butt', 'National Handi Craft Shah Faisal, Gujrat', 'Gujrat', '50700', NULL, 'Pakistan', 'Punjab'),
(57, 103, 'Abdullah', 'guest', 'gulberg street 2 near wapda town laore', 'Lahore', '1234', NULL, 'Pakistan', 'Punjab'),
(58, 103, 'Abdullah', 'Farooqi', 'gulberg street 2 near wapda town laore', 'lahore', '03046821313', NULL, 'Pakistan', 'Punjab'),
(59, 124, 'Arif', 'Shah', 'G-24 block 3 Metroville site area', 'Karachi', 'ARIFSHAHFREE', NULL, 'Pakistan', 'Sindh'),
(60, 125, 'John', 'Doe', 'gulberg street 2 near wapda town laore', 'Ahmadpur Sial', '43312', NULL, 'Pakistan', 'Punjab'),
(61, 112, 'Sana', 'Mughal', '34/11 ferozpur Road near ICMA institute Lahore', 'Lahore', '54810', NULL, 'Pakistan', 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `pk_id` int(11) NOT NULL,
  `username` varchar(55) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `fname` varchar(55) DEFAULT NULL,
  `lname` varchar(55) DEFAULT NULL,
  `admin_management` int(11) DEFAULT NULL,
  `product_management` int(11) DEFAULT NULL,
  `category_management` int(11) DEFAULT NULL,
  `brand_management` int(11) DEFAULT NULL,
  `order_management` int(11) DEFAULT NULL,
  `reporting` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `promocode` int(11) DEFAULT NULL,
  `vendor_management` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`pk_id`, `username`, `password`, `fname`, `lname`, `admin_management`, `product_management`, `category_management`, `brand_management`, `order_management`, `reporting`, `discount`, `promocode`, `vendor_management`) VALUES
(1, 'admin@gmail.com', '8c33beea6b7470f8ddb14ab59b2db723', 'fashion', 'factory', 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_reset_password`
--

CREATE TABLE `admin_reset_password` (
  `pk_id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `verification_code` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reset_password`
--

INSERT INTO `admin_reset_password` (`pk_id`, `username`, `verification_code`, `created_at`) VALUES
(7, 'admin@gmail.com', '600173938f8da', '2021-01-15 10:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `pk_id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `balance` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `SKU` int(11) NOT NULL,
  `brand_name` varchar(500) DEFAULT NULL,
  `thumbnail` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

CREATE TABLE `client_details` (
  `pk_id` int(11) NOT NULL,
  `fname` varchar(55) DEFAULT NULL,
  `lname` varchar(55) DEFAULT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(120) NOT NULL,
  `promostatus` int(55) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_details`
--

INSERT INTO `client_details` (`pk_id`, `fname`, `lname`, `username`, `password`, `promostatus`) VALUES
(49, 'Focusrpo', 'Focusrpo', 'david@maroochyfs.com.au', 'defb69dd289f7cdaf67eaa0b298835e5', 0),
(50, 'Sanderrrz', 'Sanderrrz', 'lalinanut@yahoo.com', 'defb69dd289f7cdaf67eaa0b298835e5', 0),
(51, 'Batterytyn', 'Batterytyn', 'presditejew@mail.com', 'defb69dd289f7cdaf67eaa0b298835e5', 0),
(53, 'kamran', 'anwar', 'kamran@kingfabrics.com', 'f9e7928cd439390f6fd3f7c936fe5b29', 0),
(54, 'Nabeel', 'Ahmed', 'nabtan60@gmail.com', 'f276fb3e7be15fbf2e3d6c67e013c7f6', 5),
(71, 'Ramsha', 'Mustafa', 'ramsha_kamran@hotmail.com', 'a5ab12aaf694906eddf63f6d42d1219b', 0),
(72, 'Kamran', 'Aqeel', 'sales@decharol.com', '408b8193bdcb4e1bc4fe286e864b3baf', 0),
(74, 'Waheeb', 'Ahmed', 'waheebahmed87@yahoo.com', 'caf234f8c7b5932d4f9e6c56ef945ea9', 0),
(75, 'Alicia', 'Roberts', 'aliciaroberts73@gmail.com', '950cc0a32cc0e39fc31882d97e220e33', 0),
(76, 'Momin', 'MEHBOOB', 'mominmehboob@gmail.com', 'bef5b4e26e70b85a450ade1e4f2cd2f4', 0),
(80, 'haad', 'mehboob', 'haad0344@gmail.com', '8ae85806b1023a02e07b1e5628b2793b', 0),
(81, 'Mary', 'Tully', 'conantully@hotmail.com', '7fc84ebb3dcce413a5f81a1a7f541fcf', 0),
(83, 'Fatima', 'Awais', 'fatima612@gmail.com', '4ce4b35e9e990f7522a71c623018db51', 0),
(90, 'faizan', 'aslam', 'sqa.644@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0),
(91, 'Shaikh Naveed', 'Aftab', 'MUHAY@NAVSONS.COM.PK', '2a11b2bf6a2099d9471efd212020f2ce', 0),
(92, 'Afreen Shaikh', NULL, '29shaikhafreen94@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(97, 'danish', 'siddiqui', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0),
(98, 'Naheed', 'Faisal', 'naheed@gmail.com', '905f0ea4abf21b34eb9beb1cdfc6ddcb', 0),
(99, 'Johnson', 'Doe', 'john@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 1),
(100, 'shamir', 'manakat', 'shamirmanakat@gmail.com', '7061b570645ea7bd2f808666cf70fea6', 0),
(101, 'Faizannn', 'Rasool', 'fazii@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 0),
(102, 'John', 'Rasool', 'johnjohn@gmail.com', 'b5e42f49ab3acf8f6c2ccf99f604a17f', 0),
(103, 'Abdullah Farooqi', NULL, 'abdullahfarooqi26@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(104, 'Danish Siddiqui', NULL, 'infogreengrapez@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(105, 'Gull Ali', NULL, 'gali82209@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(106, 'riya', 'patel', 'ashwarya1730@gmail.com', '4af4ecbf45c6e49261fd1e53717fadf9', 0),
(107, 'Daniyal', 'Akbar', 'daniyalakbar19@gmail.com', '9e1f923b1ec90a36556d36618b1894ac', 0),
(108, 'Faizan', 'Rasool', 'faizanclient@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 2),
(109, 'fahad', 'maqsood', 'fahad@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 0),
(110, 'taimoor', 'salu', 'taimoor@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0),
(111, 'Ali', 'Nawazish', 'alinawazish@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0),
(112, 'Nabeel Ahmed', NULL, 'nabeel_tanvir@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 4),
(113, 'Awais', 'Piracha', 'Awaispiracha16@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', 0),
(114, 'Murtaza', 'Wahab', 'wahabforu@gmail.com', '25d55ad283aa400af464c76d713c07ad', 0),
(115, 'dominoss https://wikipedia.org 3320498', 'dominoss https://wikipedia.org 3320498', 'bartashnaason@yandex.ru', 'eef0de0ab182614feb3a9b5a8571d88b', 0),
(116, 'Burhan', 'Ul Abidin', 'burhanulabidin1@gmail.com', '62b8ac10963eb79b94445a84c7e7d876', 0),
(117, 'Sana', 'Mughal', 'sanaimtiaz144@gmail.com', 'f2bdc18850b3e15e9528d4c01718a6d5', 1),
(118, 'Ahmed', 'Butt', 'ahmedbuttofficial55@gmail.com', '1c44a016bd34074a9e9ef0c09d92d69d', 0),
(119, 'Jackson', 'Akthar', 'jackson86252@gmail.com', '3faa6590ff1bcfbc255a8b30ee2283f7', 0),
(120, 'Waqid', 'Farooq', 'waqidfarooq223@gmail.com', '3d51f0a70c42dacfd5cf2309d45ac314', 0),
(121, 'Tarique', 'Abbasi', 'tariqueahmed1236@gmail.com', 'cd604ff4f42e185aed5ff1281e16db62', 0),
(122, 'Aaqib Khawaja', 'Shaukat', 'aaqibk@hotmail.com', '93ea5a42a2defa3692f917c1bf7a5c23', 0),
(123, 'unpNkuqvhgqsAxe https://www.google.com/', 'unpNkuqvhgqsAxe https://www.google.com/', 'valeriivorobushkin@yandex.ru', 'eebdaf3d1c3833f000e4766448501d0b', 0),
(124, 'Arif', 'Shah', 'arifshah4914@gmail.com', '422d124f3670c8eeade6ce6a56c0a520', 1),
(125, 'new', 'fortest', 'fortest@gmail.com', '00a1f187721c63501356bf791e69382c', 0),
(126, 'Moiz', 'Akhter', 'moizakhter1@gmail.com', 'a81e29f55787cc3bef70ebf3fb86d291', 1),
(127, 'Haziq', 'Malik', 'haziqmalik125@gmail.com', 'f943cae5653e90f02a0770a2d09b2410', 0),
(128, 'Syed', 'Babar', 'Babarshah94@gmail.com', '735b5b651ae7cc45c142896382f7f7f1', 1),
(129, 'Alfonsozof', 'Alfonsozof', 'aleksandra.626@mail.com', '542a76a97e8ff6455d4af82583320fec', 0),
(130, 'Muhammad Umer', 'Khan', 'shaziaasifsiddique@gmail.com', 'df6408b83c7c5b7f4c34ee03104ada39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_table`
--

CREATE TABLE `detail_table` (
  `pk_id` int(11) NOT NULL,
  `product_id` int(55) NOT NULL,
  `order_id` int(11) NOT NULL,
  `sku` varchar(55) DEFAULT NULL,
  `product_name` varchar(155) NOT NULL,
  `quantity` int(55) NOT NULL,
  `price` int(55) NOT NULL,
  `discount_price` int(55) DEFAULT NULL,
  `percentage` int(55) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `vendor_id` varchar(155) DEFAULT NULL,
  `v_order_status` int(11) DEFAULT NULL,
  `v_payment_status` int(11) DEFAULT NULL COMMENT '0 for unpaid, 1 for paid',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_table`
--

INSERT INTO `detail_table` (`pk_id`, `product_id`, `order_id`, `sku`, `product_name`, `quantity`, `price`, `discount_price`, `percentage`, `size`, `vendor_id`, `v_order_status`, `v_payment_status`, `created_at`) VALUES
(1, 195, 1, 'GBC08', 'Girl\'s Full Sleeves Sweater shirt with Little Barbie Motif', 1, 600, NULL, NULL, '5-6 Years', NULL, 2, 0, '2020-02-06 07:13:52'),
(2, 191, 2, 'BBC04', 'Boy\'s Long Sleeves Sweatshirt', 1, 650, NULL, NULL, '9-10 Months', NULL, 2, 0, '2020-02-11 08:36:50'),
(3, 189, 3, 'BBC02', 'Babies & Toys', 1, 850, NULL, NULL, '12-18 Months', NULL, 4, 0, '2020-02-11 14:05:18'),
(4, 195, 4, 'GBC08', 'Girl\'s Full Sleeves Sweater shirt with Little Barbie Motif', 1, 600, NULL, NULL, '5-6 Years', NULL, 4, 0, '2020-02-12 06:38:50'),
(5, 225, 5, 'MMP18', 'mens Black Polo', 1, 600, NULL, NULL, 'Medium', NULL, 4, 0, '2020-04-22 09:06:58'),
(6, 226, 6, 'MMP19', 'Men\'s Fashion', 1, 600, NULL, NULL, 'Large', NULL, 4, 0, '2020-04-22 09:22:55'),
(7, 231, 7, 'MMP23', 'mens Sky Blue white Stripper', 1, 600, NULL, NULL, 'Large', NULL, 4, 0, '2020-04-28 09:13:17'),
(8, 235, 7, 'BBC27', 'boys Incredible Hulk T-shirt', 1, 500, NULL, NULL, '2-3 years', NULL, 4, 0, '2020-04-28 09:13:17'),
(9, 236, 7, 'BBC28', 'boys Throw The Hammer T-shirt', 1, 500, NULL, NULL, '5-6 years', NULL, 4, 0, '2020-04-28 09:13:17'),
(10, 190, 8, 'BBC03', 'Boy\'s Zipper with Small Little Pony Motif', 1, 850, NULL, NULL, '12-18 Months', NULL, 2, 0, '2020-04-29 08:01:51'),
(13, 190, 11, 'BBC03', 'Boy\'s Zipper with Small Little Pony Motif', 1, 850, NULL, NULL, '12-18 Months', NULL, 2, 0, '2020-04-30 16:18:25'),
(14, 193, 12, 'GBC06', 'Girls Printed Long Sleeves Sweatshirt', 1, 600, NULL, NULL, '3-4 Years', NULL, 2, 0, '2020-04-30 16:20:40'),
(15, 195, 13, 'GBC08', 'Girl\'s Full Sleeves Sweater shirt with Little Barbie Motif', 1, 600, NULL, NULL, '3-4 Years', NULL, 2, 0, '2020-04-30 16:21:37'),
(16, 193, 14, 'GBC06', 'Girls Printed Long Sleeves Sweatshirt', 1, 600, NULL, NULL, '5-6 Years', NULL, 4, 0, '2020-04-30 16:23:24'),
(17, 225, 15, 'MMP18', 'mens Black Polo', 1, 600, NULL, NULL, 'Medium', NULL, 4, 0, '2020-04-30 16:29:01'),
(18, 227, 15, 'MMP20', 'mens  Blue Polo', 1, 600, NULL, NULL, 'Small', NULL, 4, 0, '2020-04-30 16:29:01'),
(19, 227, 15, 'MMP20', 'mens  Blue Polo', 1, 600, NULL, NULL, 'Medium', NULL, 4, 0, '2020-04-30 16:29:01'),
(20, 225, 16, 'MMP18', 'mens Black Polo', 1, 600, NULL, NULL, 'Large', NULL, 4, 0, '2020-05-01 09:51:34'),
(21, 218, 17, 'GBC12', 'girls Fly Away Butterfly T-shirt', 1, 500, NULL, NULL, '5-6 years', NULL, 4, 0, '2020-05-01 17:09:21'),
(22, 233, 17, 'BBC25', 'boys Dark Shadow T-Shirt', 1, 500, NULL, NULL, '9-12 months', NULL, 4, 0, '2020-05-01 17:09:21'),
(23, 223, 18, 'MMP17', 'Men\'s Fashion', 1, 600, NULL, NULL, 'Medium', NULL, 4, 0, '2020-05-03 15:28:50'),
(24, 183, 19, 'cB-512-R', 'genuine Leather Belt For Mens In 3 Colore CB-512-R', 1, 900, NULL, NULL, 'ALL', 'asifikram77@gmail.com', 0, 0, '2020-05-08 06:23:27'),
(25, 189, 20, 'BBC02', 'Boy\'s Mandarin Collar Zipper', 1, 850, NULL, NULL, '9-12 Months', NULL, 0, 0, '2020-05-08 23:45:07'),
(26, 183, 21, 'cB-512-R', 'genuine Leather Belt For Mens In 3 Colore CB-512-R', 1, 900, NULL, NULL, 'ALL', 'asifikram77@gmail.com', 0, 0, '2020-05-09 00:34:37'),
(27, 189, 22, 'BBC02', 'Boy\'s Mandarin Collar Zipper', 1, 850, NULL, NULL, '12-18 Months', NULL, 0, 0, '2020-05-09 01:27:30'),
(28, 223, 23, 'MMP17', 'mens Multi Colored Stripper Polo', 1, 600, NULL, NULL, 'Extra Large', NULL, 0, 0, '2020-05-12 07:19:39'),
(29, 225, 24, 'MMP18', 'mens Black Polo', 1, 899, NULL, NULL, 'Extra Large', NULL, 4, 0, '2020-05-14 10:07:50'),
(30, 189, 25, 'BBC02', 'Boy\'s Mandarin Collar Zipper', 1, 850, NULL, NULL, '6-9 Months', NULL, 2, 0, '2020-05-15 01:46:54'),
(31, 225, 26, 'MMP18', 'mens Black Polo', 1, 899, NULL, NULL, 'Medium', NULL, 2, 0, '2020-05-15 01:57:00'),
(32, 225, 27, 'MMP18', 'mens Black Polo', 1, 899, NULL, NULL, 'Medium', NULL, 2, 0, '2020-05-15 02:06:54'),
(33, 221, 28, 'BBC15', 'Babies & Toys', 1, 500, NULL, NULL, '5-6 years', NULL, 4, 0, '2020-05-16 10:57:02'),
(34, 219, 28, 'BBC13', 'Babies & Toys', 1, 500, NULL, NULL, '5-6 years', NULL, 4, 0, '2020-05-16 10:57:02'),
(35, 230, 29, 'MMP22', 'Mens Red Polo', 1, 899, NULL, NULL, 'Medium', NULL, 4, 0, '2020-05-30 06:46:45'),
(36, 225, 30, 'MMP18', 'mens Black Polo', 1, 899, NULL, NULL, 'Medium', NULL, 2, 0, '2020-06-04 11:34:32'),
(37, 217, 30, 'gBC11', 'girls Bee Happy T-shirt', 1, 500, NULL, NULL, '12-18 months', NULL, 2, 0, '2020-06-04 11:34:32'),
(38, 194, 31, 'BBC07', 'Boy\'s Solid Camel Hoodie', 1, 850, NULL, NULL, '2-3 Years', NULL, 2, 0, '2020-06-04 11:40:24'),
(39, 223, 32, 'MMP17', 'mens Multi Colored Stripper Polo', 1, 899, NULL, NULL, 'Large', NULL, 4, 0, '2020-06-18 12:24:58'),
(40, 220, 33, 'GBC14', 'girls Hello Kittie Sleevless Shirt', 1, 500, NULL, NULL, '18-24 months', NULL, 2, 0, '2020-06-23 15:16:10'),
(41, 219, 33, 'BBC13', 'Unisex happy Cycling T-shirt', 1, 500, NULL, NULL, '18-24 Months', NULL, 2, 0, '2020-06-23 15:16:10'),
(42, 238, 34, '121212', 'Bags', 1, 1000, NULL, NULL, '9-12 Months', NULL, 3, 0, '2020-06-26 11:45:00'),
(43, 230, 35, 'MMP22', 'Mens Red Polo', 1, 899, NULL, NULL, 'Large', NULL, 4, 0, '2020-07-04 12:52:22'),
(44, 229, 38, 'MMP21', 'mens Maroon Polo', 1, 899, NULL, NULL, 'Large', NULL, 4, 0, '2020-07-13 06:17:21'),
(45, 216, 39, 'BBC10', 'Boys Back To  The Future T-shirt', 1, 500, NULL, NULL, '9-12 months', NULL, 2, 0, '2020-07-13 06:29:42'),
(46, 218, 40, 'GBC12', 'girls Fly Away Butterfly T-shirt', 1, 500, NULL, NULL, '18-24 months', NULL, 2, 0, '2020-07-13 06:32:32'),
(47, 226, 41, 'MMP19', 'mens Dark Blue And White Stripper Polo', 1, 899, NULL, NULL, 'Medium', NULL, 2, 0, '2020-07-13 06:33:23'),
(48, 227, 42, 'MMP20', 'mens  Blue Polo', 1, 899, NULL, NULL, 'Small', NULL, 4, 0, '2020-07-19 11:59:01'),
(50, 225, 44, 'MMP18', 'mens Black Polo', 1, 899, NULL, NULL, 'Large', NULL, 4, 0, '2020-08-04 11:54:49'),
(52, 226, 48, 'MMP19', 'mens Dark Blue And White Stripper Polo', 1, 899, NULL, NULL, 'Large', NULL, 4, 0, '2020-08-06 09:57:12'),
(54, 216, 50, 'BBC10', 'Boys Back To  The Future T-shirt', 1, 500, NULL, NULL, '9-12 months', NULL, 2, 0, '2020-08-10 11:32:16'),
(55, 220, 51, 'GBC14', 'girls Hello Kittie Sleevless Shirt', 1, 500, NULL, NULL, '9-12 months', NULL, 2, 0, '2020-08-10 11:45:24'),
(56, 217, 52, 'gBC11', 'girls Bee Happy T-shirt', 1, 500, NULL, NULL, '12-18 months', NULL, 2, 0, '2020-08-10 11:53:57'),
(57, 218, 53, 'GBC12', 'girls Fly Away Butterfly T-shirt', 1, 500, NULL, NULL, '9-12 Months', NULL, 2, 0, '2020-08-10 12:04:52'),
(58, 216, 54, 'BBC10', 'Boys Back To  The Future T-shirt', 1, 500, NULL, NULL, '9-12 months', NULL, 0, 0, '2020-08-24 07:50:08'),
(59, 217, 55, 'gBC11', 'girls Bee Happy T-shirt', 1, 500, NULL, NULL, '18-24 months', NULL, 0, 0, '2020-08-24 07:53:22'),
(60, 190, 56, 'BBC03', 'Boy\'s Zipper with Small Little Pony Motif', 1, 850, NULL, NULL, '6-9 Months', NULL, 1, 0, '2020-09-17 10:06:36'),
(62, 3, 58, 'MMP18', 'mens Black Polo', 1, 899, 809, 10, 'Extra Large', NULL, 4, 0, '2020-09-17 10:40:20'),
(63, 5, 59, 'MMP20', 'mens  Blue Polo', 1, 899, 809, 10, 'Small', NULL, 0, 0, '2020-09-17 11:01:22'),
(64, 3, 60, 'MMP18', 'mens Black Polo', 1, 899, 809, 10, 'Medium', NULL, 0, 0, '2020-09-17 11:19:37'),
(65, 3, 61, 'MMP18', 'mens Black Polo', 1, 899, 809, 10, 'Large', NULL, 0, 0, '2020-09-17 12:03:16'),
(66, 8, 61, 'MMP23', 'mens Sky Blue white Stripper', 1, 899, 809, 10, 'Medium', NULL, 0, 0, '2020-09-17 12:03:16'),
(67, 3, 62, 'MMP18', 'mens Black Polo', 1, 899, 809, 10, 'Small', NULL, 0, 0, '2020-09-17 12:08:24'),
(68, 2, 63, 'MMP17', 'mens Multi Colored Stripper Polo', 1, 899, 809, 10, 'Small', NULL, 0, 0, '2020-09-18 05:56:08'),
(69, 3, 64, 'MMP18', 'mens Black Polo', 1, 899, 809, 10, 'Medium', NULL, 0, 0, '2020-09-18 06:18:19'),
(70, 217, 64, 'gBC11', 'girls Bee Happy T-shirt', 1, 500, NULL, NULL, '18-24 months', NULL, 0, 0, '2020-09-18 06:18:19'),
(71, 8, 65, 'MMP23', 'mens Sky Blue white Stripper', 2, 899, 1618, 10, 'Small', NULL, 0, 0, '2020-09-18 06:19:50'),
(72, 3, 66, 'MMP18', 'mens Black Polo', 1, 899, 809, 10, 'Medium', NULL, 0, 0, '2020-09-18 06:23:43'),
(73, 3, 67, 'MMP18', 'mens Black Polo', 1, 899, 809, 10, 'Medium', NULL, 0, 0, '2020-09-18 06:23:52'),
(74, 5, 68, 'MMP20', 'mens  Blue Polo', 1, 899, 809, 10, 'Medium', NULL, 0, 0, '2020-09-18 06:26:20'),
(75, 5, 69, 'MMP20', 'mens  Blue Polo', 1, 899, 809, 10, 'Medium', NULL, 0, 0, '2020-09-18 06:26:24'),
(76, 3, 70, 'MMP18', 'mens Black Polo', 3, 899, 2427, 10, 'Extra Large', NULL, 0, 0, '2020-09-18 06:36:34'),
(77, 5, 71, 'MMP20', 'mens  Blue Polo', 2, 899, 1618, 10, 'Medium', NULL, 0, 0, '2020-09-18 06:51:01'),
(78, 6, 72, 'MMP21', 'mens Maroon Polo', 12, 899, 9709, 10, 'Medium', NULL, 0, 0, '2020-09-18 07:24:27'),
(79, 5, 73, 'MMP20', 'mens  Blue Polo', 3, 899, 2427, 10, 'Small', NULL, 0, 0, '2020-09-18 07:26:19'),
(80, 6, 74, 'MMP21', 'mens Maroon Polo', 5, 899, 4046, 10, 'Large', NULL, 0, 0, '2020-09-18 07:31:40'),
(81, 189, 75, 'BBC02', 'Boy\'s Mandarin Collar Zipper', 1, 850, NULL, NULL, '9-12 Months', NULL, 0, 0, '2020-09-18 07:43:32'),
(82, 5, 76, 'MMP20', 'mens  Blue Polo', 1, 899, 809, 10, 'Large', NULL, 4, 0, '2020-09-18 12:20:13'),
(83, 14, 77, 'MMP19', 'mens Dark Blue And White Stripper Polo', 1, 899, 809, 10, 'Small', NULL, 4, 0, '2020-09-21 06:59:19'),
(84, 235, 78, 'BBC27', 'boys Incredible Hulk T-shirt', 1, 500, NULL, NULL, '12-18 months', NULL, 4, 0, '2020-09-23 12:27:40'),
(86, 233, 80, 'BBC25', 'boys Dark Shadow T-Shirt', 1, 500, NULL, NULL, '5-6 years', NULL, 4, 0, '2020-09-25 06:47:55'),
(87, 188, 81, 'BBC01', 'Babies & Toys', 1, 850, NULL, NULL, '12-18 Months', NULL, 4, 0, '2020-10-10 18:26:22'),
(88, 194, 81, 'BBC07', 'Babies & Toys', 1, 850, NULL, NULL, '3-4 Years', NULL, 4, 0, '2020-10-10 18:26:22'),
(89, 195, 81, 'GBC08', 'Babies & Toys', 1, 600, NULL, NULL, '4-5 Years', NULL, 4, 0, '2020-10-10 18:26:22'),
(90, 3, 82, 'MMP18', 'mens Black Polo', 1, 899, 809, 10, 'Medium', NULL, 0, 0, '2020-10-11 13:16:19'),
(91, 194, 83, 'BBC07', 'Boy\'s Solid Camel Hoodie', 3, 850, NULL, NULL, '5-6 Years', NULL, 0, 0, '2020-10-17 07:54:39'),
(92, 194, 84, 'BBC07', 'Boy\'s Solid Camel Hoodie', 3, 850, NULL, NULL, '5-6 Years', NULL, 0, 0, '2020-10-17 07:56:38'),
(93, 218, 85, 'GBC12', 'girls Fly Away Butterfly T-shirt', 1, 500, NULL, NULL, '9-12 Months', NULL, 0, 0, '2020-10-17 08:09:06'),
(94, 218, 86, 'GBC12', 'girls Fly Away Butterfly T-shirt', 1, 500, NULL, NULL, '9-12 Months', NULL, 0, 0, '2020-10-17 08:10:51'),
(96, 225, 88, 'MMP18', 'Men\'s Fashion', 1, 899, NULL, NULL, 'Small', NULL, 2, 0, '2020-11-06 11:58:32'),
(97, 190, 89, 'BBC03', 'Boy\'s Zipper with Small Little Pony Motif', 1, 850, NULL, NULL, '6-9 Months', NULL, 0, 0, '2020-11-07 10:01:41'),
(98, 226, 90, 'MMP19', 'mens Dark Blue And White Stripper Polo', 1, 899, NULL, NULL, 'Small', NULL, 1, 0, '2020-11-09 11:43:49'),
(99, 226, 91, 'MMP19', 'mens Dark Blue And White Stripper Polo', 1, 899, NULL, NULL, 'Small', NULL, 0, 0, '2020-11-09 12:29:41'),
(101, 20, 93, 'MMC34', 'Mens bordeaux Runners', 1, 999, 799, NULL, 'Large', NULL, 4, 0, '2020-11-15 14:19:45'),
(102, 21, 94, 'MMC35', 'Mens Gris Teint Runners', 1, 999, 799, NULL, 'Medium', NULL, 0, 0, '2020-11-16 13:02:32'),
(103, 18, 95, 'mMC32', 'Mens Bleu Runners', 1, 999, 799, NULL, 'Medium', NULL, 0, 0, '2020-11-16 13:05:47'),
(104, 17, 96, 'MMC31', 'Mens Ceinture Noire Bleu Runners', 1, 999, 799, NULL, 'medium', NULL, 0, 0, '2020-11-17 12:54:03'),
(105, 192, 97, 'GBC05', 'Girls Sky Blue Barbie Outfit shirt', 1, 600, NULL, NULL, '2-3 Years', NULL, 4, 0, '2020-11-23 06:47:10'),
(106, 193, 97, 'GBC06', 'Girls Printed Long Sleeves Sweatshirt', 1, 600, NULL, NULL, '2-3 Years', NULL, 4, 0, '2020-11-23 06:47:10'),
(107, 195, 97, 'GBC08', 'Girl\'s Full Sleeves Sweater shirt with Little Barbie Motif', 1, 600, NULL, NULL, '2-3 Years', NULL, 4, 0, '2020-11-23 06:47:10'),
(108, 21, 98, 'MMC35', 'Mens Gris Teint Runners', 1, 999, 799, NULL, 'Medium', NULL, 0, 0, '2020-11-23 10:11:48'),
(109, 17, 99, 'MMC31', 'Mens Ceinture Noire Bleu Runners', 1, 999, 799, NULL, 'Small', NULL, 0, 0, '2020-11-23 10:15:07'),
(110, 21, 100, 'MMC35', 'Mens Gris Teint Runners', 2, 999, 1598, NULL, 'Medium', NULL, 0, 0, '2020-11-23 10:21:21'),
(111, 191, 101, 'BBC04', 'Boy\'s Long Sleeves Sweatshirt', 1, 650, NULL, NULL, '7-8 Months', NULL, 0, 0, '2020-11-23 10:24:05'),
(112, 16, 102, 'MMC30', 'Mens Gris Runners', 1, 999, 799, NULL, 'medium', NULL, 4, 0, '2020-12-05 13:50:48'),
(117, 189, 105, 'BBC02', 'Boy\'s Mandarin Collar Zipper', 1, 850, NULL, NULL, '12-18 Months', NULL, 0, 0, '2020-12-08 06:21:38'),
(133, 248, 121, 'MMC30', 'Mens Gris Runners', 1, 999, NULL, NULL, 'Small', NULL, 4, 0, '2021-01-01 12:24:18'),
(135, 248, 123, 'MMC30', 'Mens Gris Runners', 1, 999, NULL, NULL, 'Small', NULL, 4, 0, '2021-01-01 15:17:03'),
(137, 251, 125, 'MMC33', 'Mens Bleu foncé Runners', 1, 999, NULL, NULL, 'Small', NULL, 4, 0, '2021-01-02 09:17:55'),
(140, 253, 128, 'MMC35', 'Mens Gris Teint Runners', 1, 999, NULL, NULL, 'Medium', NULL, 4, 0, '2021-01-04 08:45:09'),
(141, 248, 129, 'MMC30', 'Mens Gris Runners', 1, 999, NULL, NULL, 'Small', NULL, 4, 0, '2021-01-05 10:06:33'),
(175, 248, 163, 'MMC30', 'Mens Gris Runners', 1, 999, NULL, NULL, 'medium', NULL, 4, 0, '2021-01-15 12:29:50'),
(176, 249, 163, 'MMC31', 'Mens Ceinture Noire Bleu Runners', 1, 999, NULL, NULL, 'medium', NULL, 4, 0, '2021-01-15 12:29:50'),
(177, 251, 163, 'MMC33', 'Mens Bleu foncé Runners', 1, 999, NULL, NULL, 'Medium', NULL, 4, 0, '2021-01-15 12:29:50'),
(178, 248, 164, 'MMC30', 'Mens Gris Runners', 1, 999, NULL, NULL, 'medium', NULL, 2, 0, '2021-02-11 14:29:50'),
(179, 254, 165, 'MMC36', 'Mens Army Pantalon Trousers', 1, 999, NULL, NULL, 'medium', NULL, 2, 0, '2021-02-13 08:18:04'),
(180, 248, 167, 'MMC30', 'Mens Gris Runners', 1, 999, NULL, NULL, 'medium', NULL, 2, 0, '2021-02-14 08:01:24'),
(181, 35, 168, 'cBC39', 'Charcoaled Colered Hoodie', 1, 949, 854, 10, '3-4 years', NULL, 2, 0, '2021-02-16 08:52:40'),
(182, 283, 168, '8 color aPK 03', '8 Color A.P.K Beautiful Blush Palette', 1, 675, NULL, NULL, '20x20x10', 'mansoor.smt@gmail.com', 2, 0, '2021-02-16 08:52:40'),
(183, 31, 169, NULL, 'Mens bordeaux Runners', 1, 999, 899, 10, 'Small', NULL, 2, 0, '2021-02-22 10:46:39'),
(184, 31, 170, NULL, 'Mens Gris Teint Runners', 1, 999, 899, 10, 'Large', NULL, 2, 0, '2021-02-22 11:06:29'),
(185, 31, 171, NULL, 'Mens Gris Teint Runners', 1, 999, 899, 10, 'Small', NULL, 2, 0, '2021-02-22 11:09:20'),
(186, 31, 172, NULL, 'Mens Gris Teint Runners', 1, 999, 899, 10, 'Small', NULL, 2, 0, '2021-02-22 11:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `discount_table`
--

CREATE TABLE `discount_table` (
  `pk_id` int(11) NOT NULL,
  `sku` varchar(55) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `percentage` int(55) DEFAULT NULL,
  `fixed_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount_table`
--

INSERT INTO `discount_table` (`pk_id`, `sku`, `category`, `start_date`, `end_date`, `percentage`, `fixed_amount`) VALUES
(31, NULL, 'Trousers', '2021-02-05', '2021-03-10', 10, NULL),
(34, 'BBC40', NULL, '2021-02-05', '2021-03-10', 10, NULL),
(35, 'cBC39', NULL, '2021-02-05', '2021-03-10', 10, NULL),
(36, 'BBC38', NULL, '2021-02-05', '2021-03-10', 10, NULL),
(38, 'sBC09', NULL, '2021-02-05', '2021-03-10', NULL, NULL),
(41, 'GBC06', NULL, '2021-02-05', '2021-03-10', 10, NULL),
(42, 'GBC05', NULL, '2021-02-05', '2021-03-10', 10, NULL),
(43, 'BBC04', NULL, '2021-02-05', '2021-03-10', 10, NULL),
(44, 'BBC03', NULL, '2021-02-05', '2021-03-10', 10, NULL),
(45, 'BBC02', NULL, '2021-02-05', '2021-03-10', 10, NULL),
(48, 'GBC08', NULL, '2021-02-05', '2021-03-10', 10, NULL),
(50, 'BBC01', NULL, '2021-02-05', '2021-03-10', 10, NULL),
(51, 'GBC37', NULL, '2021-02-05', '2021-03-10', 10, NULL),
(52, 'BBC07', NULL, '2021-02-05', '2021-03-10', 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `SKU` int(11) NOT NULL,
  `main_category` varchar(500) DEFAULT NULL,
  `username` varchar(55) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`SKU`, `main_category`, `username`, `created_at`) VALUES
(38, 'Electronics Devices', 'admin', '2018-12-07 10:41:00'),
(39, 'Electronics Accessories', 'admin', '2018-12-07 10:41:35'),
(40, 'TV and Home Appliances', 'admin', '2018-12-07 10:42:15'),
(41, 'Health & Beauty', 'admin', '2018-12-07 10:42:53'),
(42, 'Babies & Toys', 'admin', '2018-12-07 10:43:11'),
(43, 'Home & Lifestyle', 'admin', '2018-12-07 10:45:50'),
(44, 'Women\'s Fashion', 'admin', '2018-12-07 10:46:19'),
(45, 'Men\'s Fashion', 'admin', '2018-12-07 10:46:34'),
(46, 'Watches & Accessories', 'admin', '2018-12-07 10:58:55'),
(47, 'Sports & Outdoor', 'admin', '2018-12-07 10:59:21'),
(48, 'Automotive & Motorbike', 'admin', '2018-12-07 11:01:13'),
(49, 'Groceries & Pets', 'admin', '2018-12-07 11:36:19'),
(57, 'Food & Drink', 'admin', '2019-01-21 10:50:06'),
(58, 'Formal Shoes', 'info@hybridsole.com', '2020-12-10 09:04:44'),
(59, 'Kitchen and Dining', 'fahad.appiteck@gmail.com', '2021-01-18 12:38:58'),
(60, 'Packing Material', 'admin', '2021-02-01 06:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_27_072727_create_vendors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `pk_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`pk_id`, `vendor_id`, `product_id`, `type`, `status`, `created_at`) VALUES
(13, 61, NULL, 'new vendor created', 'unread', '2019-11-14 13:46:17'),
(14, 59, NULL, 'BASIC', 'unread', '2019-11-14 13:48:57'),
(15, 61, NULL, 'COMMISSION', 'unread', '2019-11-14 13:51:31'),
(16, 62, NULL, 'new vendor created', 'unread', '2019-11-14 13:57:33'),
(17, 62, NULL, 'PLANTINUM', 'unread', '2019-11-14 14:18:32'),
(18, 59, NULL, 'new product created', 'unread', '2019-11-14 14:24:57'),
(19, 61, NULL, 'new product created', 'unread', '2019-11-14 14:28:51'),
(20, 62, NULL, 'new product created', 'unread', '2019-11-14 14:31:13'),
(21, 59, NULL, 'new product created', 'unread', '2019-11-14 15:00:48'),
(22, 59, NULL, 'new product created', 'unread', '2019-11-14 15:01:55'),
(23, 61, NULL, 'new product created', 'unread', '2019-11-14 15:03:41'),
(24, 61, NULL, 'new product created', 'unread', '2019-11-14 15:04:50'),
(25, 62, NULL, 'new product created', 'unread', '2019-11-14 15:13:22'),
(26, 62, NULL, 'new product created', 'unread', '2019-11-14 15:16:48'),
(27, 61, NULL, 'BASIC', 'unread', '2019-11-22 01:11:12'),
(28, 64, NULL, 'new realtor created', 'unread', '2019-11-29 18:25:32'),
(29, 66, NULL, 'new vendor created', 'unread', '2019-12-04 04:13:21'),
(30, 66, NULL, 'COMMISSION', 'unread', '2019-12-04 04:21:34'),
(31, 66, NULL, 'new product created', 'unread', '2019-12-04 04:23:51'),
(32, 70, NULL, 'new realtor created', 'unread', '2019-12-06 12:49:03'),
(33, 71, NULL, 'new realtor created', 'unread', '2019-12-06 14:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `pk_id` int(11) NOT NULL,
  `user_id` int(55) DEFAULT NULL,
  `promo_amount` int(55) DEFAULT NULL,
  `amount` int(55) NOT NULL,
  `shipment_address_id` varchar(255) DEFAULT NULL,
  `placed_at` datetime NOT NULL DEFAULT current_timestamp(),
  `expire_at` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `wallet_status` varchar(255) DEFAULT NULL,
  `username` varchar(55) DEFAULT NULL,
  `fname` varchar(35) DEFAULT NULL,
  `lname` varchar(35) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(55) DEFAULT NULL,
  `phone` varchar(155) DEFAULT NULL,
  `zipcode` varchar(55) DEFAULT NULL,
  `country` varchar(155) DEFAULT NULL,
  `state` varchar(155) DEFAULT NULL,
  `note` varchar(5000) DEFAULT NULL,
  `shippment_id` varchar(112) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`pk_id`, `user_id`, `promo_amount`, `amount`, `shipment_address_id`, `placed_at`, `expire_at`, `status`, `wallet_status`, `username`, `fname`, `lname`, `address`, `city`, `phone`, `zipcode`, `country`, `state`, `note`, `shippment_id`) VALUES
(4, NULL, NULL, 600, NULL, '2020-02-12 01:38:50', NULL, 4, NULL, 'nabtan60@gmail.com', 'Ayesha', 'Luqman', 'Z-44 Phase 3 D.H.A. Lahore', 'Lahore', '03233222243', '54810', 'Pakistan', 'Punjab', 'actual order no:1', NULL),
(5, NULL, NULL, 600, NULL, '2020-04-22 05:06:58', NULL, 4, NULL, 'talham09@gmail.com', 'Talha', 'Mehboob', 'Cc 364 dha phase 4', 'Lahore', '03054005587', NULL, 'Pakistan', 'Punjab', NULL, NULL),
(6, 79, NULL, 600, '21', '2020-04-22 05:22:55', NULL, 4, NULL, 'izawn123@gmail.com', 'Ibrahim', 'Anwar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, 1800, NULL, '2020-04-30 12:29:01', NULL, 4, NULL, 'haad0344@gmail.com', 'haad', 'mehboob', '364 CC, phase 4, DHA.', 'Lahore', '03444444022', '54000', 'Pakistan', 'Punjab', NULL, NULL),
(16, NULL, NULL, 600, NULL, '2020-05-01 05:51:34', NULL, 4, NULL, 'razaanwar@kingfabrics.com', 'Raza', 'Anwar', 'Katar Bund Road King Fabrics', 'Lahore', '03008225464', NULL, 'Pakistan', 'Punjab', 'gift item', NULL),
(17, NULL, NULL, 1000, NULL, '2020-05-01 13:09:21', NULL, 4, NULL, 'haad0344@gmail.com', 'haad', 'mehboob', '364 CC, phase 4, DHA.', 'Lahore', '03444444022', '54000', 'Pakistan', 'Punjab', NULL, NULL),
(18, 83, NULL, 600, '24', '2020-05-03 11:28:50', NULL, 4, NULL, 'fatima612@gmail.com', 'Fatima', 'Awais', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, 600, NULL, '2020-05-12 03:19:39', NULL, 4, NULL, 'nabtan60@gmail.com', 'Mohsin', 'Sb', 'Z-44 Phase 3 D.H.A. Lahore', 'Lahore', '03233222243', '54810', 'Pakistan', 'Punjab', 'this order is being sent as a gift', NULL),
(24, NULL, NULL, 899, NULL, '2020-05-14 06:07:50', NULL, 4, NULL, 'nabtan60@gmail.com', 'Nabeel', 'Ahmed', 'Z-44 Phase 3 D.H.A. Lahore', 'Lahore', '03233222243', '54810', 'Pakistan', 'Punjab', NULL, NULL),
(28, 86, NULL, 1000, '29', '2020-05-16 06:57:02', NULL, 4, NULL, 'ashfaqmzg@gmail.com', 'Muhammad', 'Ashfaq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, 899, NULL, '2020-05-30 02:46:45', NULL, 4, NULL, 'nabtan60@gmail.com', 'Ayesha', 'Luqman', 'Z-44 Phase 3 D.H.A. Lahore', 'Lahore', '03233222243', '54810', 'Pakistan', 'Punjab', NULL, NULL),
(32, 57, NULL, 899, '7', '2020-06-18 08:24:58', NULL, 4, NULL, 'ibrahim1@greengrapez.com', 'ibrahim', 'anwar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, 1000, NULL, '2020-06-23 11:16:10', NULL, 4, NULL, 'adeel.moheet@gmail.com', 'Adeel', 'Khan', 'house no. 254 street no.9 new cavalry ground ext lahore cantt', 'Lahore', '03004839051', '54000', 'Pakistan', 'Punjab', NULL, NULL),
(35, 57, NULL, 899, '7', '2020-07-04 08:52:22', NULL, 4, NULL, 'ibrahim1@greengrapez.com', 'ibrahim', 'anwar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, 1500, NULL, '2020-07-11 06:08:51', NULL, 4, NULL, NULL, 'Abdul', 'Basit', 'Self Delivery from Factory', 'Lahore', '03218251372', '54810', 'Pakistan', 'Punjab', 'Self delivery, guest of Kamran Anwar.', NULL),
(38, NULL, NULL, 899, NULL, '2020-07-13 02:17:21', NULL, 4, NULL, 'nabtan60@gmail.com', 'Abdul', 'Basit', 'Self Delivery from Factory', 'Lahore', '0321-8251372', '54810', 'Pakistan', 'Punjab', 'Gift from Kamran Sb', NULL),
(44, NULL, NULL, 899, NULL, '2020-08-04 07:54:49', NULL, 4, NULL, 'qasimsalam@gmail.com', 'Qasim', 'Salam', '260 S, Street 13, Phase 2, DHA', 'Lahore', '03004224646', '54810', 'Pakistan', 'Punjab', 'self delivery', NULL),
(46, NULL, NULL, 899, NULL, '2020-08-06 05:48:46', NULL, 4, NULL, NULL, 'Taj', 'Muhammad', 'House No: 30-D Street No: 22, Sector G-6/2 Near Imam Bargah Road Islamabad', 'Islamabad', NULL, '45710', 'Pakistan', 'Islamabad', NULL, NULL),
(48, NULL, NULL, 899, NULL, '2020-08-06 05:57:12', NULL, 4, NULL, 'nabtan60@gmail.com', 'Tanvir', NULL, 'House No: 225 Street No; 100 I-8/4', 'Islamabad', '03235540408', '45710', 'Pakistan', 'Islamabad', NULL, NULL),
(58, NULL, NULL, 1059, NULL, '2020-09-17 06:40:20', NULL, 4, NULL, 'nas74444@yahoo.com', 'Anas', 'Arif', 'C13 W3 Gulshan-e-Maymar', 'Karachi', '03323323411', '74200', 'Pakistan', 'Sindh', NULL, NULL),
(76, NULL, NULL, 1009, NULL, '2020-09-18 08:20:13', NULL, 4, NULL, 'nabtan60@gmail.com', 'Faisal', 'Mehboob', 'Self Delivery from Factory', 'Lahore', '03008481177', '54810', 'Pakistan', 'Punjab', NULL, NULL),
(77, NULL, NULL, 1009, NULL, '2020-09-21 02:59:19', NULL, 4, NULL, 'haad@gmail.com', 'Haad', 'Mehboob', '364-cc Phase 4 Dha', 'Lahore', '03444444022', '54810', 'Pakistan', 'Punjab', 'self delivery from factory', NULL),
(78, NULL, NULL, 700, NULL, '2020-09-23 08:27:40', NULL, 4, NULL, 'fakihamomin@gmail.com', 'Fakiha', 'Momin', 'Self Delivery', 'Lahore', '03333064181', '54810', 'Pakistan', 'Punjab', NULL, NULL),
(80, NULL, NULL, 750, NULL, '2020-09-25 02:47:55', NULL, 4, NULL, 'kamran.gkingfabrics@gmail.com', 'taj ref kamran', 'taj mohmmad', 'house no 30 /d/79/d st no 22  sector g-g/2 near imam bargha road islamabad', 'Islamabad', '03213150568', NULL, 'Pakistan', 'Islamabad', NULL, NULL),
(81, 98, NULL, 2300, '33', '2020-10-10 14:26:22', NULL, 4, NULL, 'naheed@gmail.com', 'Naheed', 'Faisal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, NULL, NULL, 799, NULL, '2020-11-15 19:19:45', NULL, 4, NULL, 'mbattique@gmail.com', 'M Bilal', 'Attique', 'MCB BANK LTD FFC CHOWK BRANCH 0823 SADIQ ABAD DIST RAHIM YAR KHAN', 'Sadiqabad', '03337417710', '64250', 'Pakistan', 'Punjab', 'Need oder deliver till 27 Nov', '120007013'),
(97, NULL, NULL, 1800, NULL, '2020-11-23 11:47:10', '2020-12-02', 4, NULL, 'adeel.moheet@gmail.com', 'Adeel', 'Khan', 'House 254 Street 9 New Cavalry Ground (Ext) Lahore Cantt', 'Lahore', '03004839051', '54810', 'Pakistan', 'Punjab', NULL, '120007506'),
(102, NULL, NULL, 799, NULL, '2020-12-05 18:50:48', '2021-02-05', 4, NULL, 'daniyalakbar19@gmail.com', 'Daniyal', 'Akbar', '23 west block Gunj shakar colony Sahiwal Muhammad pur Road near city marbles', 'Sahiwal', '0311 6630675', '57000', 'Pakistan', 'Punjab', NULL, '120009554'),
(121, 118, 0, 999, '55', '2021-01-01 17:24:18', '2021-01-18', 4, 'cod', 'ahmedbuttofficial55@gmail.com', 'Ahmed', 'Butt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120012864'),
(123, 118, NULL, 999, '55', '2021-01-01 20:17:03', '2021-02-05', 4, 'cod', 'ahmedbuttofficial55@gmail.com', 'Ahmed', 'Butt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, NULL, NULL, 999, NULL, '2021-01-02 14:17:55', '2021-02-05', 4, NULL, 'jawed@mianwaris.com', 'Jawed', 'Waris', '485GG phase 4 defence Lahore', 'Lahore', '00923008475815', '74600', 'Pakistan', 'Punjab', NULL, '120012978'),
(128, NULL, NULL, 999, NULL, '2021-01-04 13:45:09', '2021-02-05', 4, NULL, 'uahmed09@hotmail.com', 'Umar', 'Ahmed', 'House No.3, Street 18, Jinnah Garden, Islamabad', 'Islamabad', '03365248259', '45751', 'Pakistan', 'Islamabad', NULL, '120013105'),
(129, 118, 0, 999, '56', '2021-01-05 15:06:33', '2021-01-18', 4, 'paid', 'ahmedbuttofficial55@gmail.com', 'Ahmed', 'Butt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120013386'),
(163, NULL, NULL, 2997, NULL, '2021-01-15 17:29:50', '2021-01-25', 4, NULL, 'uahmed09@hotmail.com', 'Umar', 'Ahmed', 'House No.3, Street 18, Jinnah Garden, Islamabad', 'Islamabad', '03365248259', '45751', 'Pakistan', 'Islamabad', NULL, '120014720'),
(164, 124, NULL, 999, '59', '2021-02-11 19:29:50', '2021-02-23', 2, 'cod', 'arifshah4914@gmail.com', 'Arif', 'Shah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120018893'),
(165, 124, NULL, 999, '59', '2021-02-13 13:18:04', '2021-02-23', 2, 'cod', 'arifshah4914@gmail.com', 'Arif', 'Shah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120019086'),
(167, 124, NULL, 999, '59', '2021-02-14 13:01:24', '2021-02-23', 2, 'cod', 'arifshah4914@gmail.com', 'Arif', 'Shah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120019183'),
(168, 125, NULL, 1529, '60', '2021-02-16 13:52:40', '2021-02-23', 2, 'cod', 'fortest@gmail.com', 'John', 'Doe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 112, 0, 899, '61', '2021-02-22 15:46:39', '2021-03-01', 2, 'cod', 'nabeel_tanvir@yahoo.com', 'Sana', 'Mughal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 103, NULL, 899, '53', '2021-02-22 16:06:29', '2021-03-01', 2, 'cod', 'abdullahfarooqi26@gmail.com', 'John', 'Doe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120020147'),
(171, 103, 699, 899, '58', '2021-02-22 16:09:20', '2021-03-01', 2, 'cod', 'abdullahfarooqi26@gmail.com', 'Abdullah', 'Farooqi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120020148'),
(172, 112, 0, 899, '61', '2021-02-22 16:12:30', '2021-03-01', 2, 'cod', 'nabeel_tanvir@yahoo.com', 'Sana', 'Mughal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120020151');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pk_id` int(11) NOT NULL,
  `sku` varchar(250) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `color` varchar(250) DEFAULT NULL,
  `category` varchar(500) DEFAULT NULL,
  `sub_category` varchar(500) DEFAULT NULL,
  `brand_name` varchar(500) DEFAULT NULL,
  `product_type` varchar(500) DEFAULT NULL,
  `thumbnail` varchar(150) DEFAULT NULL,
  `thumbnail2` varchar(150) DEFAULT NULL,
  `thumbnail3` varchar(150) DEFAULT NULL,
  `thumbnail4` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1 for active, 0 for inactive',
  `size` varchar(255) DEFAULT NULL,
  `unit` varchar(55) DEFAULT NULL,
  `quantity_on_hand` int(11) DEFAULT NULL,
  `v_product_status` varchar(55) DEFAULT NULL COMMENT '1 for pending, 2 for approved, 3 for cancel',
  `vendor_id` varchar(155) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `discount_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pk_id`, `sku`, `name`, `price`, `color`, `category`, `sub_category`, `brand_name`, `product_type`, `thumbnail`, `thumbnail2`, `thumbnail3`, `thumbnail4`, `description`, `status`, `size`, `unit`, `quantity_on_hand`, `v_product_status`, `vendor_id`, `created_at`, `discount_status`) VALUES
(182, 'CB-529-R', 'genuine Leather Belt For Mens', '650', 'NONE', 'Men\'s Fashion', 'accessories', NULL, 'Belts', '5df79137b2966CB-529-R 2.jpg.jpg', '5df79137b6601CB-529-R 3.jpg.jpg', '5df79137b6717CB-529-R.jpg.jpg', '', 'Color: Brown and Black\r\nStylish elegant men\'s belt in two colors', 0, '', 'feet', NULL, '2', 'asifikram77@gmail.com', '2019-12-16 14:14:15', 0),
(183, 'cB-512-R', 'genuine Leather Belt For Mens In 3 Colore CB-512-R', '900', 'NONE', 'Men\'s Fashion', 'accessories', NULL, 'Belt', '5df7946e8f70bCB-512-R 2.jpg.jpg', '5df7946e91646CB-512-R 3.jpg.jpg', '5df7946e91786CB-512-R 4.jpg.jpg', '5df7946e918d8CB-512-R.jpg.jpg', 'Color: Brown\r\nSimple yet classic men\'s belt  with excellent quality.', 0, '', 'feet', NULL, '2', 'asifikram77@gmail.com', '2019-12-16 14:27:58', 0),
(184, 'cB-501-R', 'Leather Belt For Men CB-501-r', '750', 'NONE', 'Men\'s Fashion', 'accessories', NULL, 'Mens Accessories', '5df9c151e7865CB-501-R 2.jpg.jpg', '5df9c151e9487CB-501-R.jpg.jpg', '', '', 'Color: Brown\r\nMen\'s belt with very fine quality and at a very budget friendly price', 0, '', 'feet', NULL, '2', 'asifikram77@gmail.com', '2019-12-18 06:04:01', 0),
(185, 'cB-789-r', 'pure Leather long wallet for men cb-789-r', '1050', 'Brown', 'Men\'s Fashion', 'accessories', NULL, 'Wallets', '5df9c328bde73CB-789-R.jpg.jpg', '5df9c328bfa38CB-789-R 2.jpg.jpg', '', '', 'Pure Leather Long Stylish Wallet For Men \r\nCOLOR: BROWN', 0, '', 'feet', NULL, '2', 'asifikram77@gmail.com', '2019-12-18 06:11:52', 0),
(188, 'BBC01', 'Boy\'s Zipper with Long Sleeves and Patch Pocket', '850', 'Yellow', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5fd47a2b182215fd36066676f65f607ad500d8e1_BACK.jpg.jpg.jpg.jpg', '5fd47a2b186415fd3606667a315f607ad5010de1_FRONT.jpg.jpg.jpg.jpg', '5dfdfe9f2e5cb1F.jpg.jpg', '5dfdfe9f2e69fSize Chart.png.png', 'Color: Camel,\r\n Fabric: Fleece,\r\n Best for Winters. Here comes Snoopy.. Kids love Snoopy and that why we have designed this zipper. Stay Warm and adore the dog.', 1, '', 'Pieces', NULL, '0', NULL, '2019-12-21 11:14:39', 0),
(189, 'BBC02', 'Boy\'s Mandarin Collar Zipper', '850', 'TEAL', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5fd47997c4c6d5fd3602f242da5f607abbbf0334_FRONT.jpg.jpg.jpg.jpg', '5fd47997c4fb75fd3602f246125f607abbbf3794_BACK.jpg.jpg.jpg.jpg', '5dfe006e1fce52F.jpg.jpg', '5dfe006e1fdb3Size Chart.png.png', 'Color: Solid Aqua,\r\n Fabric: Fleece,\r\n Best for Winters. Who doesn\'t like Mickey Mouse. Well kids love him and there is no reason not to wear the stylish Mickey Mouse Zipper in the winters.', 1, '', 'Pieces', NULL, '0', NULL, '2019-12-21 11:22:22', 0),
(190, 'BBC03', 'Boy\'s Zipper with Small Little Pony Motif', '850', 'TEAL', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5fd46e211d6ad5fd35e3e115a15f607a96d60845_FRONT.jpg.jpg.jpg.jpg', '5fd46e211f8d65fd35ffe695da5f607abbbf3794_BACK.jpg.jpg.jpg.jpg', '5dfe01ad837bf3F.jpg.jpg', '5dfe01ad838b3Size Chart.png.png', 'Color: Sea Green,\r\n Fabric: Fleece,\r\n Best for Winters. A sweatshirt for all pony lovers. Girls will love the pony print.', 1, '', 'Pieces', NULL, '0', NULL, '2019-12-21 11:27:41', 0),
(191, 'BBC04', 'Boy\'s Long Sleeves Sweatshirt', '650', 'Orange', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5f607a44a58ab3_FRONT.jpg.jpg', '5f607a44a5bd03_BACK.jpg.jpg', '5dfe031a986164F.jpg.jpg', '5dfe031a986dfSize Chart.png.png', 'Color: Orange,\r\n Fabric: Fleece,\r\n Best for Winters. Full sleeves sweatshirt with a   cool captains logo on the top to make your kids feel like a captain for a day.', 1, '', 'Pieces', NULL, '0', NULL, '2019-12-21 11:33:46', 0),
(192, 'GBC05', 'Girls Sky Blue Barbie Outfit shirt', '600', 'Blue', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Girls\' Clothing', '5f6079c2577416_FRONT.jpg.jpg', '5dfe0498de95c5B.jpg.jpg', '5f6079c257a906_BACK.jpg.jpg', '5dfe0498deb9cSize Chart.png.png', 'Color: Sky Blue,\r\n Fabric: Fleece,\r\n Best for Winters. A barbie print that all the girls want.', 1, '', 'Pieces', NULL, '0', NULL, '2019-12-21 11:40:08', 0),
(193, 'GBC06', 'Girls Printed Long Sleeves Sweatshirt', '600', 'Green', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Girls\' Clothing', '5f6079638decc2_FRONT.jpg.jpg', '5f6079638e1f52_BACK.jpg.jpg', '5dfe0626aabd06F.jpg.jpg', '5dfe0626aacb0Size Chart.png.png', 'Color: Sage Green,\r\n Fabric: Fleece,\r\n Best for Winters. A soft fabric with a great print that girls will love.', 1, '', 'Pieces', NULL, '0', NULL, '2019-12-21 11:46:46', 0),
(194, 'BBC07', 'Boy\'s Solid Camel Hoodie', '850', 'Yellow', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5f607a1f462fb10_FRONT.jpg.jpg', '5dfe07c3722547.png.png', '5dfe07c3728d47.png.png', '5dfe07c372edeSize Chart.png.png', 'Color: Camel ,\r\n Fabric: Fleece,\r\n Best for Winters. A perfect wear for kids in the winter. The fabric is soft to ensure kids are comfortable yet stylish.', 1, '', 'Pieces', NULL, '0', NULL, '2019-12-21 11:53:39', 0),
(195, 'GBC08', 'Girl\'s Full Sleeves Sweater shirt with Little Barbie Motif', '600', 'Pink', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Girls\' Clothing', '5f6078cfeff289_FRONT.jpg.jpg', '5dfe08d8d9d178.png.png', '5dfe08d8da4098.png.png', '5dfe08d8daae9Size Chart.png.png', 'Color: Pink ,\r\n Fabric: Fleece,\r\n Best for Winters. A very stylish yet elegant print for girls to wear.', 1, '', 'Pieces', NULL, '0', NULL, '2019-12-21 11:58:16', 0),
(214, 'P8/M1-A', 'Chain Bucket', '11499', 'Silver', 'Women\'s Fashion', 'Women\'s Bags', NULL, 'Cross-body & Shoulder Bags', '5e3148dd7725d1.jpg.jpg', '5e3148dd7ba592.jpg.jpg', '5e3148dd7bb993.jpg.jpg', '5e3148dd7bc8b4.jpg.jpg', 'A medium size Bucket bag with long carrying chain. Spacious and easy to carry .  \r\nDetails:\r\nMilled Antique Genuine Leather \r\nPlain synthetic micro fiber lining\r\nMetal eyelets for drawstring closure\r\nPlain synthetic micro fiber lining\r\nMeasurements:\r\nWidth (cm): 20.5 cm\r\nDepth (cm): 9.5 cm\r\nHeight (cm): 28.5 cm', 0, '', 'pieces', NULL, '2', 'sales@decharol.com', '2020-01-29 08:57:01', 0),
(215, 'P8/M1-B', 'Chain Bucket', '11499', 'Brown', 'Women\'s Fashion', 'Women\'s Bags', NULL, 'Cross-body & Shoulder Bags', '5e314b35045afBrown 1.jpg.jpg', '5e314b3506464Brown 2.jpg.jpg', '5e314b3506534Brown 3.jpg.jpg', '5e314b35065f1Brown 4.jpg.jpg', 'A medium size Bucket bag with long carrying chain. Spacious and easy to carry .  \r\nDetails:\r\nMilled Antique Genuine Leather \r\nPlain synthetic micro fiber lining\r\nMetal eyelets for drawstring closure\r\nPlain synthetic micro fiber lining\r\nMeasurements:\r\nWidth (cm): 20.5 cm\r\nDepth (cm): 9.5 cm\r\nHeight (cm): 28.5 cm', 0, '', 'pieces', NULL, '2', 'sales@decharol.com', '2020-01-29 09:07:01', 0),
(216, 'BBC10', 'Boys Back To  The Future T-shirt', '500', 'WHITE', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5f4c9e70c39657.jpg.jpg', '5f4c9e70c3cb37.1.jpg.jpg', '', '', 'Boys light weight t-shirt, perfect for summers.. Stylish and elegant print...', 1, '', 'feet', NULL, '0', NULL, '2020-03-17 12:23:26', 0),
(217, 'gBC11', 'girls Bee Happy T-shirt', '500', 'WHITE', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Girls\' Clothing', '5f4c9d404cca06.jpg.jpg', '5f4c9d404d0016.1.jpg.jpg', '', '', 'Girls summer t-shirt with a bee print that all girls will love.', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 06:54:57', 0),
(218, 'GBC12', 'girls Fly Away Butterfly T-shirt', '500', 'WHITE', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Girls\' Clothing', '5f4c9d24ec2fd3.jpg.jpg', '5f4c9d24ec5734.1.jpg.jpg', '', '', 'Girls in love with butterflies will love this butterfly print. Simple yet stylish shirt. Perfect for summers.', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 07:11:07', 0),
(219, 'BBC13', 'Unisex happy Cycling T-shirt', '500', 'Yellow', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5f4c9e57600599.jpg.jpg', '5f4c9e576038e9.1.jpg.jpg', '', '', 'Stylish Mustard color t-shirt with cycle graphics to glamour up your kids wardrobe, for summers.', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 07:17:54', 0),
(220, 'GBC14', 'girls Hello Kittie Sleevless Shirt', '500', 'Pink', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Girls\' Clothing', '5f4c9cf17f68512.jpg.jpg', '5f4c9cf17f9a112.1.jpg.jpg', '', '', 'Sleeveless shirt for your children to keep warm and smart with  cute cat picture.', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 07:46:16', 0),
(221, 'BBC15', 'Boys Hello Mickey T-shirt', '500', 'WHITE', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5f4c9e3a79d401.jpg.jpg', '5f4c9e3a7bc311.1.jpg.jpg', '', '', 'White boys t-shirt with everyone\'s favorite Mickey cartoon. Boys must wear collection for summers.', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 07:50:20', 0),
(222, 'GBC16', 'Girl Im The Queen T-shirt', '500', 'WHITE', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Girls\' Clothing', '5f4c9cab75d3f4.jpg.jpg', '5f4c9cab7607c4.1.jpg.jpg', '', '', 'All girls want to become the queen so why not try this elegant queen print summer t-shirt.', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 07:54:02', 0),
(223, 'MMP17', 'mens Multi Colored Stripper Polo', '899', 'WHITE', 'Men\'s Fashion', 'Polo', NULL, NULL, '5fd478e49a5955fd35f9fe16555f4c9c73eba1418.jpg.jpg.jpg.jpg', '5fd478e49c7c55fd35f9fe197e5f4c9c73ebd6718.1.jpg.jpg (1).jpg.jpg', '', '', 'A classic multi-colored polo shirt to revamp your summer wardrobe.', 1, '', 'Pieces', NULL, '0', NULL, '2020-03-18 08:03:53', 0),
(225, 'MMP18', 'mens Black Polo', '899', 'BLACK', 'Men\'s Fashion', 'Polo', NULL, NULL, '5fd46f3e5f7845fd35f1dc83d15f4c9c06c2c5d19.jpg.jpg.jpg.jpg', '5fd35f1dc86fd5f4c9c06c2f8919.1.jpg.jpg.jpg', '', '', 'Why not go plain black for a change. This summer shirt will definitely lift your spirits and really change your wardrobe.', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 08:08:38', 1),
(226, 'MMP19', 'mens Dark Blue And White Stripper Polo', '899', 'NAVY', 'Men\'s Fashion', 'Polo', NULL, NULL, '5fd4792a812035fd35f68b60e45f4c9bcf4a1f717.jpg.jpg.jpg.jpg', '5fd4792a8157e5fd35f68b642b5f4c9bcf4a54417.1.jpg.jpg.jpg.jpg', '', '', 'Men\'s Navy Blue and white stripper polo shirt. Perfect color combination for this summer.', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 08:18:21', 0),
(227, 'MMP20', 'mens  Blue Polo', '899', 'Blue', 'Men\'s Fashion', 'Polo', NULL, NULL, '5f4c9ba56a99616.jpg.jpg', '5f4c9ba56accd16.1.jpg.jpg', '', '', 'Plain blue polo for summers. Decent color yet a classic.', 1, '', 'Pieces', NULL, '0', NULL, '2020-03-18 08:22:34', 0),
(229, 'MMP21', 'mens Maroon Polo', '899', 'Brown', 'Men\'s Fashion', 'Polo', NULL, NULL, '5f4c9b8f5c74c14.jpg.jpg', '5f4c9b8f5ca7214.1.jpg.jpg', '', '', 'Mens Maroon Polo Shirt. Soft stylish fabric for the summers', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 09:05:12', 0),
(230, 'MMP22', 'Mens Red Polo', '899', 'Red', 'Men\'s Fashion', 'Polo', NULL, NULL, '5f4c9b711edc613.jpg.jpg', '5f4c9b711f1a613.1.jpg.jpg', '', '', 'Stylish White And Red Collar with plain red polo for the summers. The brand says it all', 1, '', 'Pieces', NULL, '0', NULL, '2020-03-18 09:08:37', 0),
(231, 'MMP23', 'mens Sky Blue white Stripper', '899', 'Blue', 'Men\'s Fashion', 'Polo', NULL, NULL, '5f4c9b2d09c0315.jpg.jpg', '5f4c9b2d0bb9215.1.jpg.jpg', '', '', 'Black collar with blue and white strips. A very classy yet charming shirt for the summers.', 1, '', 'Pieces', NULL, '0', NULL, '2020-03-18 09:11:53', 0),
(232, 'GBC24', 'girls Pretty Butterfly T-shirt', '500', 'WHITE', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Girls\' Clothing', '5f4c9c8dcc1292.jpg.jpg', '5f4c9c8dcc46d2.1.jpg.jpg', '', '', 'Girls like butterflies and this shirt has the best butterfly print for girls to adore in the summers.', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 09:25:58', 0),
(233, 'BBC25', 'boys Dark Shadow T-Shirt', '500', 'Red', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5f4c9d931d0378.1.jpg.jpg', '5f4c9d931d38e8.jpg.jpg', '', '', 'Boys love a graphic t-shirt and this dark graphic does just that.', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 09:36:29', 0),
(234, 'TBC26', 'Girls Glaases Girl T-shirt', '500', 'Pink', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Girls\' Clothing', '5f58b191e53572.jpg.jpg', '5f58b191e911a2.1.jpg.jpg', '', '', 'Stylish, elegant and classic girl print for the summers..  A must wear for girls', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 09:39:53', 0),
(235, 'BBC27', 'boys Incredible Hulk T-shirt', '500', 'BLACK', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5f4c9d755af2410.jpg.jpg', '5f4c9d755b29e11.1.jpg.jpg', '', '', 'Boys love the Hulk and thats why this Hulk Shirt is a must buy for you kids wardrobe this summer', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 09:43:36', 0),
(236, 'BBC28', 'boys Throw The Hammer T-shirt', '500', 'BLACK', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5f4c9d5d30f1711.jpg.jpg', '5f4c9d5d3126311.1.jpg.jpg', '', '', 'A black summer shirt with a hammer picture. Simple yet unique for your boys to try out in the hot summers', 1, '', 'feet', NULL, '0', NULL, '2020-03-18 09:46:59', 0),
(237, '321', 'Boxing Gloves', '200', 'Green', 'Sports & Outdoor', 'Boxing & Martial Arts', NULL, 'Boxing Gloves', '5eb8ae5e8a0513ft, 7.png.png', '', '', '', 'High Quality bag\r\nreliable', 0, '', 'Meter', NULL, '2', 'zeesha@gmail.com', '2020-05-11 01:46:06', 0),
(240, 'sBC09', 'Boys Spider Man Full Sleeves Shirt', '600', 'Orange', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5f607c616567411_FRONT.jpg.jpg', '5f607c61675423_BACK.jpg.jpg', '', '', 'Winter Fleece Material with a soft finishing. \r\nAll time favorite Boys Spider Man Shirt.', 1, '', 'feet', NULL, '0', NULL, '2020-09-15 08:33:37', 0),
(247, 'MMC29', 'Mens Gris Clair Runners', '999', 'Silver', 'Men\'s Fashion', 'Trousers', NULL, NULL, '5fb7848693956Lighttt-Gray--trouser.jpg.jpg', '5fb784869401cLighttt-Gray--trouser-side-pose.jpg.jpg', '5fc892ab68b24size chart for trousers (1).jpg.jpg', '5fd736ec8214fsize chart for trousers (1).jpg.jpg', 'Light grey terry fabric trouser. Very light weight so you can feel comfortable and stay stylish. Can be worn as loungewear or gym wear.', 1, '', 'feet', NULL, '0', NULL, '2020-11-14 06:35:13', 0),
(248, 'MMC30', 'Mens Gris Runners', '999', 'Silver', 'Men\'s Fashion', 'Trousers', NULL, NULL, '5fb784590b3f0Gray--trouser.jpg.jpg', '5fb784590b76aGray--trouser-side-pose.jpg.jpg', '5fc8928eaca5csize chart for trousers (1).jpg.jpg', '5fd736b7e6de0size chart for trousers (1).jpg.jpg', 'Trouser made from terry fabric in dark grey color. Very stylish to make your evenings bright.', 1, '', 'feet', NULL, '0', NULL, '2020-11-14 06:40:30', 0),
(249, 'MMC31', 'Mens Ceinture Noire Bleu Runners', '999', 'NAVY', 'Men\'s Fashion', 'Trousers', NULL, NULL, '5fb7843a5950cC-green-BLACK-STRIP-trouser.jpg.jpg', '5fb7843a5985fC-green-BLACK-STRIP-trouser-side-pose.jpg.jpg', '5fc8926f34cacsize chart for trousers (1).jpg.jpg', '5fd7369db2870size chart for trousers (1).jpg.jpg', 'Very warm trouser in blue color to keep your winters up and running. Can be worn as loungewear', 1, '', 'Meter', NULL, '0', NULL, '2020-11-14 06:53:03', 0),
(250, 'mMC32', 'Mens Bleu Runners', '999', 'Blue', 'Men\'s Fashion', 'Trousers', NULL, NULL, '5fb7841f0b778C-green-trouser.jpg.jpg', '5fb7841f0bac8C-green-trouser-SIDE-POSE.jpg.jpg', '5fc892553ef80size chart for trousers (1).jpg.jpg', '5fd73680a9894size chart for trousers (1).jpg.jpg', 'Fleece fabric trouser with matching belt in blue color. Perfect for winters to keep your body warm without compromising on your looks.', 1, '', 'feet', NULL, '0', NULL, '2020-11-14 07:06:01', 0),
(251, 'MMC33', 'Mens Bleu foncé Runners', '999', 'Blue', 'Men\'s Fashion', 'Trousers', NULL, NULL, '5fb783eea0b82blue--trouser.jpg.jpg', '5fb783eea0eebblue--trouser-side-pose.jpg.jpg', '5fc8923b02301size chart for trousers (1).jpg.jpg', '5fd73667cc3dasize chart for trousers (1).jpg.jpg', 'Lightweight terry fabric trousers with side pocket zippers to keep your valuables safe. A classy and stylish trouser.', 1, '', 'feet', NULL, '0', NULL, '2020-11-14 07:12:26', 0),
(252, 'MMC34', 'Mens bordeaux Runners', '999', 'Red', 'Men\'s Fashion', 'Trousers', NULL, NULL, '5fb783ae6b1acred-trouser.jpg.jpg', '5fb783ae6b515red-trouser-side-pose.jpg.jpg', '5fc8921dcc2f1size chart for trousers (1).jpg.jpg', '5fd73648bdcdesize chart for trousers (1).jpg.jpg', 'Stylish trouser with side strippers for a flashy look. Fabric is fleece, perfect for winters to keep you comfortable in those cold winter nights.', 1, '', 'feet', NULL, '0', NULL, '2020-11-14 07:20:49', 0),
(253, 'MMC35', 'Mens Gris Teint Runners', '999', 'Silver', 'Men\'s Fashion', 'Trousers', NULL, NULL, '5fb7838a0324dLight-Gray--trouser.jpg.jpg', '5fb7838a07015Light-Gray--trouser-side-pose.jpg.jpg', '5fc8918779a8bsize chart for trousers (1).jpg.jpg', '5fd7362c7d955size chart for trousers (1).jpg.jpg', 'Dyed grey fabric trouser in lightweight terry fabric. You can use it as gym wear or use it as loungewear to wind up after a long tiring day. Classy and elegant to make you stand out.', 1, '', 'feet', NULL, '0', NULL, '2020-11-14 07:28:32', 0),
(254, 'MMC36', 'Mens Army Pantalon Trousers', '999', 'Green', 'Men\'s Fashion', 'Trousers', NULL, NULL, '5fcdd35c316c2ARTICLE 3 ANGLE 1.jpg.jpg', '5fcdd35c47de1ARTICLE 3 ANGLE 2.jpg.jpg', '5fcdd35c56296size chart for trousers (1).jpg.jpg', '5fd735f9400f1size chart for trousers (1).jpg.jpg', 'Camouflaged trouser just like the ones worn in the army. Will definitely make u feel like a commando ready to fight. Really will bring out the style in you..', 1, '', 'feet', NULL, '0', NULL, '2020-12-07 07:01:48', 0),
(257, 'GBC37', 'Girls Flower Butterfly Full Sleeves Shirt', '699', 'Pink', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Girls\' Clothing', '5ff6bb7003923front_2 360 700.jpg.jpg', '', '', '', 'Pink think shirt for your girl to get through this winter.  A simple yet elegant flower and butterfly design that will make you child look classy and feel warm at the same time.', 1, '', 'pieces', NULL, '0', NULL, '2021-01-07 07:42:40', 0),
(258, 'BBC38', 'Blue Fur Hoodie', '949', 'Blue', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5ff6bdf01328cfront_3 950.jpg.jpg', '', '', '', 'Blue Fur Hoodies will definitely make your child stand out. This hoodie comes with a cap to keep your childs face warm as well.. The fur look is a unique design but also to keep your child protected from winters.', 1, '', 'pieces', NULL, '0', NULL, '2021-01-07 07:53:20', 0),
(259, 'cBC39', 'Charcoaled Colered Hoodie', '949', 'Silver', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5ff6beffa9eb8front_1 400 950.jpg.jpg', '', '', '', 'This dual colored hoodie for your kids will look classy and isnt heavy on your wallet. The hoodie comes with a cap to keep your child warm in the harsh winters.', 1, '', 'pieces', NULL, '0', NULL, '2021-01-07 07:57:51', 0),
(260, 'BBC40', 'Black Paw Sleeveless Hoodie', '849', 'BLACK', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '5ff6bfba187b3baby jacket front 850.jpg.jpg', '5ff6bfba1a743baby jacket back.jpg.jpg', '', '', 'Black paw print sleeveless hoodie will make your child look stylish and also warm. This hoodie comes with a cap as well.', 1, '', 'pieces', NULL, '0', NULL, '2021-01-07 08:00:58', 0),
(264, 'fa14', 'LumiSource Durango Counter Stool Set of 2 Grey', '2500', 'Green', 'Women\'s Fashion', 'Accessories', NULL, 'Gloves', '', '', '', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '', 'Meter', NULL, '3', 'fahad.appiteck@gmail.com', '2021-01-19 07:43:11', 0),
(266, '204050478_PK-1404528237', 'A to Z Multivitamins 20soft', '390', 'Green', 'Health & Beauty', 'Food Supplements', NULL, 'Multivitamins', '600c2ad412e5aIMG-1560.jpg.jpg', '600c2ad413c06IMG-1559.jpg.jpg', '600c2ad41d5e9IMG-1561.jpg.jpg', '', '.Be beneficial for overall health\r\n.Enhance the energy level and concentration\r\n.Improve digestion and help in bodily processes\r\n.Improve immunity\r\n.Help to maintain a healthy heart, liver and circulatory system and functionality\r\n.Provide extra support whilst on diet programmes or for people with a hectic lifestyle', 1, '', 'Centimeter', NULL, '2', 'duwaimart@gmail.com', '2021-01-23 13:55:32', 0),
(267, '204048565_PK-1404526395', 'Boan-D3 best vitamin for bones', '400', 'Blue', 'Health & Beauty', 'Food Supplements', NULL, 'Multivitamins', '600c2dcbe3375IMG-1562.jpg.jpg', '600c2dcbe5ca7IMG-1563.jpg.jpg', '', '600c2dcbe6685IMG-1564.jpg.jpg', '.lower risk of developing conditions involving high blood pressure during pregnancy\r\n.lower blood pressure in young people\r\n.lower blood pressure in those whose mothers who consumed enough calcium during pregnancy\r\n.improved cholesterol values\r\n.lower risk of colorectal adenomas, a type of non-cancerous\r\n.1x30 softgel', 1, '', 'pieces', NULL, '2', 'duwaimart@gmail.com', '2021-01-23 14:08:12', 0),
(268, '203704855_PK-1403906184', 'Pregnafix', '700', 'Red', 'Health & Beauty', 'Personal Care', NULL, 'Sexual Wellness', '600c30ad0762aIMG-1422.jpg.jpg', '600c30ad0a24cIMG-1421.jpg.jpg', '', '600c30ad0b0b6IMG-1423.jpg.jpg', '.pregnafix help in Anemia\r\n.best forfemale only\r\n.pregnafix help in Fatigue\r\n.pregnafix help in pregnancy stabilizing\r\n.pregnafix help in lactation\r\n.pregnafix help in heavy mest\r\n.100% natural and effective', 1, '', 'packs', NULL, '2', 'duwaimart@gmail.com', '2021-01-23 14:20:29', 0),
(269, '203726122_PK-1403904136', 'Arimax-T Extra Stamina best for male', '475', 'Orange', 'Health & Beauty', 'Food Supplements', NULL, 'Sports Nutrition', '600c34387495bIMG-1415.jpg.jpg', '600c3438774feIMG-1418.jpg.jpg', '600c343878461IMG-1417.jpg.jpg', '600c34388bc08IMG-1415.jpg.jpg', '.ARIMAX is best for immune system\r\n.ARIMAX Help in inner nourishment\r\n.ARIMAX help in improving all activities\r\n.ARIMAX help in control prematured aging\r\n.ARIMAX help in abling dimension\r\n.ARIMAX help in reducing Stress\r\n.ARIMAX help in decreasing fatigue\r\n.ginsing+tribulas best for male sexdysfunction\r\n.ARIMAX is in soft gel form 2x10 (20)', 1, '', 'packs', NULL, '2', 'duwaimart@gmail.com', '2021-01-23 14:35:36', 0),
(270, '203612556_PK-1403712695', 'Calcium 1200 with D3 best vitamin for pregnant women', '595', 'Pink', 'Health & Beauty', 'Food Supplements', NULL, 'Beauty Supplements', '600c35a5b098cCalcium1200-1-308x600.jpg.jpg', '600c35a5b2d01Calcium-1200-300x300.png.png', '', '', '.Pack of 30tbs Total (Packed as 1 x 30 Count)\r\n.Calcium is known for its ability to promote bone health and strength\r\n.Vitamin D aids in the absorption of Calcium, and supports bone density\r\n.100% Pure and Natural Farmula 30t\'bs\r\nSealed Pack\r\n.Calcium Carbonate ext ..... ..............1200mg\r\n.D3 Cholecalciferol ext ......................800mg', 1, '', 'packs', NULL, '2', 'duwaimart@gmail.com', '2021-01-23 14:41:41', 0),
(271, '203560619_PK-1403660112', 'arthromax Best Vitamins and nutrient', '595', 'OLIVE', 'Health & Beauty', 'Food Supplements', NULL, 'Multivitamins', '600c37857e117Arthromax.jpg.jpg', '600c3785800d7IMG-1407.jpg.jpg', '600c378580a1f818f9db77b61828696dd78b297e70941.jpg.jpg', '', '.Arthromax Helps inhibit inflammatory factors to support joint health\r\n.Arthromax Supports joint comfort & mobility\r\n.Arthromax Helps support & maintain healthy cartilage levels\r\n.Arthromax Promotes joint & connective tissue health\r\n.Arthromax is 100% Pure and Natural Farmula 20t\'bs\r\nSealed Pack of 20', 1, '', 'packs', NULL, '2', 'duwaimart@gmail.com', '2021-01-23 14:49:41', 0),
(272, '203306186_PK-1403040781', 'Mega3 Fish-Oil', '700', 'Orange', 'Health & Beauty', 'Food Supplements', NULL, 'Multivitamins', '600c3948d9fa8Mega3-3-300x600.jpg.jpg', '600c3948dbf17maxresdefault (2).jpg.jpg', '600c3948dc07bfd022c113493b585367572ba357c0923.jpg.jpg', '', '.Healthy and beneficial Formula Soft GEL\r\n.Lower blood pressure.\r\n.Reduce triglycerides.\r\n.Slow the development of plaque in the arteries.\r\n.Reduce the chance of abnormal heart rhythm.\r\n.Reduce the likelihood of heart and stroke.\r\n.Lessen the chance of sudden cardiac in people with heart disease\r\n.Increased Fat Cell LIPOLYSIS\r\nSupercharged Metabilis\r\n.100% Pure and Natural Farmula 30t\'bs\r\nSealed Pack\r\n.Eicosapentaenoic Acid ext ..... 180mg\r\n.Docosahexaenoic Acid ext ...........120mg\r\n.Fish Oil ext........100mglu', 1, '', 'packs', NULL, '2', 'duwaimart@gmail.com', '2021-01-23 14:57:12', 0),
(273, '203102212_PK-1402608956', 'Ginxseng Care', '990', 'Brown', 'Health & Beauty', 'Food Supplements', NULL, 'Multivitamins', '600c3b0201e0cdownload.jpg.jpg', '600c3b0203d1bginseng-prepared-multiple-ways.jpg.jpg', '600c3b0203e81ginseng uses-1024x379.jpg.jpg', '', '.help in boost Energy\r\n.help in Lower Blood Sugar\r\n.help in to maintain cholesterol level\r\n.help in reduce Stress\r\n.help in Promote Relaxation\r\n.help in Treat Diabetes\r\n.ginseng help in Manage dysfunction\r\n.100% Herbal and Natural Sealed Pack\r\n.best supplement for men\r\n1x30 tbs', 1, '', 'packs', NULL, '2', 'duwaimart@gmail.com', '2021-01-23 15:04:34', 0),
(274, '202782491_PK-1402180064', 'Metadetox - Super weight loss farmula', '2500', 'Green', 'Health & Beauty', 'Food Supplements', NULL, 'Beauty Supplements', '600c3d6ee7794WhatsApp-Image-2020-03-20-at-2.30.36-PM-1.jpeg.jpeg', '600c3d6ee97d4maxresdefault (3).jpg.jpg', '600c3d6ee9910weight loss.jpg.jpg', '', 'Healthy Weight Loss Formula\r\nIncreased Fat Cell LIPOLYSIS\r\nSupercharged Metabolism\r\nExtreme Fat burn with diet that double the diet result\r\n100% Pure and Natural Formula 60t\'bs\r\nSealed Pack\r\nRaspberry Ketones ext ..... 50mg\r\nAfrican Mango ext ...........200mg\r\nGreen coffee bean ext........200mg\r\nGarcinia combogia ext.......100mg', 1, '', 'packs', NULL, '2', 'duwaimart@gmail.com', '2021-01-23 15:14:54', 0),
(275, '200422779_PK-1398460510', 'Best Vitamin C For Face beauty', '750', 'Orange', 'Health & Beauty', 'Skin Care', NULL, 'Serum & Essence', '600c40c2a9acd117237178_225771005537460_8612781071029670774_o.jpg.jpg', '600c40c2aba56maxresdefault (1).jpg.jpg', '', '600ebc6d47036edit pic for onlin upload.jpg.jpg', 'Support Healthy Immune System\r\nEnhance cardiovascular\r\nEssential for Bone health\r\nprotect your face and reduce signs of aging\r\nCitrus Bioflavonoids are powerful antioxidants that reverse damage\r\nBeShiny Vitamin C Maximum Skin Brightening is like no other\r\ndark spots\r\nredness\r\nwrinkles\r\nrough patches\r\nexcessive dryness', 1, '', 'packs', NULL, '2', 'duwaimart@gmail.com', '2021-01-23 15:29:06', 0),
(276, '100', 'HAYAT MAQVI KHAS SYRUP', '700', 'Red', 'Health & Beauty', 'Personal Care', NULL, 'Sexual Wellness', '600f5f6ce6395Maqvi Khas.jpg.jpg', '600f5f6ce83c3Maqvi Khas.jpg.jpg', '', '', 'Best Energy Syrup for Men Performance', 0, '', 'Mililitre', NULL, '2', 'microdessign2014@gmail.com', '2021-01-26 00:16:44', 0),
(277, '100', 'HAYAT MAQVI KHAS AMBAR KASTURI', '2050', 'Red', 'Health & Beauty', 'Personal Care', NULL, 'Sexual Wellness', '600f60579456bAMBAR KASTURI.jpg.jpg', '', '', '', 'VERY GOOD aphrodisiac Tonic for Men. \r\nNatural Ingredients 100% Herbal', 1, '', 'Mililitre', NULL, '2', 'microdessign2014@gmail.com', '2021-01-26 00:20:39', 0),
(278, '100', 'HAYAT JAWARISH MAQVI MAIDA', '650', 'Brown', 'Health & Beauty', 'Food Supplements', NULL, 'Well Being', '600f62e701066JAWARISH MAIDA.jpg.jpg', '', '', '', 'Helps to regulate the digestive system.\r\nIncreases appetite.\r\nEffective in flow of saliva and foul smell of mouth.\r\nSuggested Use\r\nChildren: 2.5gm (1/4 teaspoon) three times a day after meals\r\nAdults: 5gm (1/2 teaspoon) three times a day after meals', 1, '', 'Gram', NULL, '2', 'microdessign2014@gmail.com', '2021-01-26 00:31:35', 0),
(279, 'JAWBREAKER PALETTE 01', 'JAWBREAKER PALETTE', '600', 'WHITE', 'Health & Beauty', 'Makeup', NULL, 'Eyes', '60144d0740988s-l1600 (6).jpg.jpg', '60144d0744ac2s-l1600 (1).jpg.jpg', '60144d0744bd5s-l1600 (2).jpg.jpg', '', 'JAWBREAKER PALETTE\r\nSay hello to our BIGGEST palette we\'ve ever released! The Jawbreaker Palette is our take on a rainbow color story, including 24 bright and iconic eyeshadows and pressed pigments. With the same intensely pigmented formulation as our previous palettes, Jawbreaker is filled with blendable mattes, blinding shimmers and silky metallics!\r\n\r\nVEGAN. CRUELTY-FREE.', 1, '', 'Gram', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-29 17:59:35', 0),
(280, 'JACLYN HILL PALETTE', 'JACLYN HILL EYESHADOW PALETTE', '675', 'Green', 'Health & Beauty', 'Makeup', NULL, 'Eyes', '60145365d6fa4541_Global_Nov_JH_Eyeshadow_Palette_PDP_closed2.jpg.jpg', '60145365d8edc541_Global_Nov_JH_Eyeshadow_Palette_PDP_open2.jpg.jpg', '', '', 'JACLYN HILL EYESHADOW PALETTE\r\nThis is not your average palette. That’d be boring. We (and most importantly, Jaclyn Hill) don’t do boring. This palette is a 2-year love affair. 35 OMG eyeshadows that Jaclyn whipped up, formulated, tested, re-tested, and perfected. They were created to deliver not only the best colour payoff but also amazing application. Mattes, shimmers, satins, foils, and glitter: all pressed to perfection...just the way Jaclyn wanted. Her dreamy colours are now your reality. So whether you’re pressed for time or have time to play, this palette is your bestie. Because a girl (and guy) needs to have options.\r\n\r\n(Finish: matte and shimmer)\r\n\r\n \r\n\r\nSHADE NAMES\r\n\r\nROW 1:\r\n\r\nEnlight / satin oat milk\r\nBeam / satin freshwater pearl\r\nSilk Crème / matte coconut sugar\r\nM.F.E.O. / matte ripe papaya\r\nFaint / shimmering pink lemonade\r\nSissy / shimmering rosy blush\r\nLittle Lady / shimmering peach sorbet\r\n \r\n\r\nROW 2:\r\n\r\nCreamsicle / matte passionfruit\r\nButter / matte apricot jam\r\nPooter / matte cinnamon stick\r\nPukey / matte masala chai\r\nHunts / matte paprika\r\nFirework / shimmering burnished copper\r\nQueen / shimmering butterscotch\r\n \r\n\r\nROW 3:\r\n\r\nObsessed / shimmering pink champagne\r\nS.B.N. / shimmering copper rose\r\nHillster / satin walnut\r\nRoxanne / matte roasted nutmeg\r\nJacz / matte zinfandel\r\nBuns / matte honey roasted peanut\r\nCranapple / shimmering blood orange mimosa\r\n \r\n\r\nROW 4:\r\n\r\nRoyalty / shimmering grape\r\nTwerk / shimmering electric indigo\r\nHustle / shimmering taupey beige\r\nMeeks / shimmering bronze\r\n24/7 / shimmering pecan pie\r\nChip / matte chocolate chip\r\nMocha / matte baking chocolate\r\n \r\n\r\nROW 5:\r\n\r\nPool Party / shimmering turquoise\r\nJada / matte teal\r\nDiva / shimmering emerald\r\nEnchanted / matte forest green\r\nCentral Park / matte cocoa bean\r\nSoda Pop / matte espresso\r\nAbyss / matte obsidian\r\n \r\n\r\nSame 35 dream colours on the inside, a shiny new makeover on the outside.', 1, '', 'Gram', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-29 18:26:45', 0),
(281, 'Petal Metal Prismatic Highlighter', 'Smashbox + Vlada Petal Metal Prismatic Highlighter', '540', 'Green', 'Health & Beauty', '', NULL, NULL, '60145b26aa35eIMG-20210129-WA0042.jpg.jpg', '', '', '', 'Smashbox + Vlada Petal Metal Prismatic Highlighter\r\nCreate a head turning, prismatic glow with this gel-powder highlighter, creating a glistening, pure reflection of light with the unique clear based formula.\r\nDetails\r\nThis rose gold gel-powder highlighter creates a rose-gold duo-chrome effect, flushing your cheeks with a spectrum of high-shine sparkle with every turn of the head\r\nCo-created with makeup artist and Instagram star Vlada Haggerty (@vladamua), the Rose Gold collection can be layered together for a supercharged rosey look!\r\nPro tip: try highlighter with a slightly damp brush or sponge the ultimate glow\r\nUsage\r\nLightly swirl a dense brush over embossed rose to activate pigment. For sheer application, use a precise highlighting brush and sweep product over brow bone, bridge of nose & cupid’s bow. For more targeted application and an amplified highlight, apply with fingertips.', 1, '', 'Gram', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-29 18:59:50', 0),
(282, 'SPLASHY CANDIES', 'Geaimei – SPLASHY CANDIES', '1200', 'Green', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6014616f59040IMG-20201228-WA0038.jpg.jpg', '6014616f5aff1IMG-20201228-WA0028.jpg.jpg', '', '', 'Geaimei – Luxury Fashion Eyeshadow Palette – Original\r\n\r\nType: Eye Shadow\r\n\r\nBenefit :Long-lasting, Easy to Wear, Waterproof / Water-Resistant, Natural\r\n\r\nQuantity: 1\r\n\r\nSize: Full Size\r\n\r\nIngredient: Talc, Mica, Mineral,Oil, etc\r\n\r\nNET WT: 63g\r\n\r\nWaterproof / Water-Resistant: Yes\r\n\r\nSingle color/multi-color: Above 35 colors\r\n\r\nProperty: High pigment, Long asting, Waterproof\r\n\r\nType of color: Matte & Shiny', 1, '', 'Gram', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-29 19:26:39', 0),
(283, '8 color aPK 03', '8 Color A.P.K Beautiful Blush Palette', '675', 'NONE', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '601462c6e391aIMG-20201217-WA0010.jpg.jpg', '', '', '', 'Smooth Application\r\nPerfect Finish\r\nLong-Lasting\r\nExcellent Pigment', 1, '', 'Gram', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-29 19:32:22', 0),
(284, '8 Color A.P.K 02', '8 Color A.P.K Beautiful Blush Palette', '675', 'NONE', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6014634acc1dfIMG-20201217-WA0016.jpg.jpg', '', '', '', '8 Color A.P.K Beautiful Blush Palette\r\nSmooth Application\r\nPerfect Finish\r\nLong-Lasting\r\nExcellent Pigment', 1, '', 'Gram', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-29 19:34:34', 0),
(285, '8 Color A.P.K 03-A', '8 Color A.P.K Beautiful Blush Palette', '675', 'NONE', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '601463be4cef3IMG-20201217-WA0010.jpg.jpg', '', '', '', '8 Color A.P.K Beautiful Blush Palette\r\nSmooth Application\r\nPerfect Finish\r\nLong-Lasting\r\nExcellent Pigment', 1, '', 'Gram', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-29 19:36:30', 0),
(286, 'Cosmetic Deal', 'Cosmetic Deal (Blusher + Eye Shadow + Foundation + Face Powder + Contour + Shimer)', '2250', 'Pink', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6014652b64282IMG-20201125-WA0023.jpg.jpg', '', '', '', 'Cosmetic Deal \r\n\r\nBlusher / Bronzer Duo\r\n12 Colors Mokhmoli Eyeshadow\r\nLiquide Foundation\r\nFace Powder\r\nBlusher and Contour Palette\r\nShimer and Matte Powder', 1, '', 'Gram', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-29 19:42:35', 0),
(287, 'HUDA BEAUTY  Set A', 'HUDA BEAUTY Deal Face and Eye Makeup Set A', '1050', 'NONE', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '601465b4d7570IMG-20201220-WA0024.jpg.jpg', '', '', '', 'HUDA BEAUTY LEGIT LASHES\r\nHUDA FOUNDATION\r\nGLITTER EYESHADOW\r\nMIAOOU MAKE-UP STYLE BAKED POWDER EYE SHADOW', 1, '', 'Gram', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-29 19:44:52', 0),
(288, 'DR.RASHEL  Cream', 'DR.RASHEL Hair Removal Cream', '630', 'WHITE', 'Health & Beauty', 'Bath & Body', NULL, 'Hair Removal', '60159cf815593IMG-20201216-WA0030.jpg.jpg', '', '', '', 'DR.RASHEL Hair Removal Cream\r\n\r\nLegs & Body, 5 Mint fast acting\r\n\r\nAloe Vera & Vitamin E & Essence Oil', 1, '', 'Gram', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 17:52:56', 0),
(289, 'Charm Vogue 04', 'Charm Vogue Beauty Pack', '1725', 'Blue', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '60159f40b4c9eIMG-20201220-WA0016.jpg.jpg', '', '', '', 'PRO.conceal High-Definition Concealer\r\n2 IN 1 SET MASCARA & EYELINER\r\nLUSTRE SHIMMER BRICK\r\n2 EYESHADOW BAKED\r\nLiquid Chrome.', 1, '', 'Gram', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:02:40', 0),
(290, 'Charm Vogue Beauty Deal Pack 2', 'Charm Vogue Beauty Deal Pack Foundation Eyeliner Bronzer', '1680', 'Blue', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '60159fc11fa3dIMG-20201220-WA0019.jpg.jpg', '', '', '', 'HIGH DEFINITION FOUNDATION OIL-FREE LONG LASTING\r\nLONG WEAR GEL EYELINER (BLACK & BROWN 2 IN 1)\r\nTEINT MATT FOUNDATION PRESSED POWDER\r\nBRONZING PALETTE.', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:04:49', 0),
(291, 'Mutual Love Perfume', 'Mutual Love Perfume (Pack Of 3)', '1125', 'Pink', 'Health & Beauty', 'Fragrances', NULL, 'Women Fragrances', '6015a06f37070134664937_440392037338629_8085255349270679543_n.jpg.jpg', '', '', '', 'Brand: Mutual Love\r\nVolume: 50ml each\r\nPack of 3 Perfumes\r\nExotic scent\r\nVaporization Natural Spray\r\nIrresistible Perfume\r\nLong-Lasting Fragrance\r\nSafe on Skin\r\nEau de Perfume\r\nPerfect Gift for Her\r\nNice Packing\r\nCompact Sized\r\nAffordable', 1, '', 'Litre', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:07:43', 0),
(292, 'DR·RASHEL  50 ml', 'DR·RASHEL Vitamin C Face Serum 50 ml', '645', 'Orange', 'Health & Beauty', 'Skin Care', NULL, 'Serum & Essence', '6015a1314585aDR-RASHEL-Brightening-Anti-Aging-Hyaluronic-Acid-1.jpg.jpg', '6015a13145b9fDR-RASHEL-Brightening-Anti-Aging-Hyaluronic-Acid-3-555x555.jpg.jpg', '6015a13145c75DR-RASHEL-Brightening-Anti-Aging-Hyaluronic-Acid-4.jpg.jpg', '', 'Function Whitening, Moisturizing, Anti Wrinkle\r\n\r\nSkin type All Skin Types\r\n\r\nCapacity 50 ml\r\n\r\nFeatures\r\n\r\nWith our new improved formula, DR·RASHEL Vitamin C Face Serum is thin and highly effective. It will help fade sun spots & discoloration, refine skin texture, reduce wrinkle formation, and minimize existing wrinkles. It also has a highly concentrated base of pure vegan hyaluronic acid to plump skin cells and protects and restore. Brightens and smoothes skin for a more radiant and youthful complexion. Powerful antioxidants neutralize free radicals to prevent and reverse sun damage and fade sun spots and discoloration.\r\n\r\nHow to use\r\n\r\n1. Apply evenly to face and neck in the morning and evening, after cleansing\r\n\r\n2. Massage in circular motions for better absorption.', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:10:57', 0),
(293, 'ICONIC  Original', 'ICONIC LONDON ILLUMIATOR (PACK OF 3) Original', '990', 'NONE', 'Health & Beauty', 'Makeup', NULL, 'Foundation', '6015a1bc3838334161-254cb1.jpeg.jpeg', '6015a1bc386dficonic3.jpg.jpg', '6015a1bc387a4iconic4.jpg.jpg', '', 'ICONIC LONDON ILLUMINATOR\r\n\r\nDESCRIPTION\r\n\r\nDROP EVERYTHING\r\n\r\nIt’s the must have product everyone is raving about – from Khloe Kardashian to Jourdan Dunn – get your glow on with our incredible vegan Illuminator drops.\r\n\r\nThis concentrated liquid shimmer can be added to your foundation, primer or moisturiser, or simply used on its own for a super highlighted glow. Available in 4 shades, it can also be used to contour. (13.5ml)\r\n\r\nEvery drop of this super-concentrated shimmer elixir glides on smoothly to bestow ultra-blendable glow.\r\n\r\n100% Vegan & Cruelty Free.\r\n\r\nHOW TO USE\r\n\r\nWhether worn alone as an enhancer, or mixed with your foundation, primer or moisturiser to create a “soft focus” effect, this lends light to dulled, lacklustre complexions, and looks stunning when blended along cheek and brow bones to accentuate the “high points” of your face Prep your skin with our Pigment Foundation Sticks Add drops of your Illuminator to cheekbones, tip of nose, collarbones and cupids bow.\r\n\r\nUse your fingers to tap the product in, gently blending it for a beautiful high gloss look.\r\n\r\nThis super-versatile product can be added to many products in your makeup bag for a touch of luxe.', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:13:16', 0),
(294, 'Fa.Jean Keratin Hair Mask', 'Fa.Jean Keratin Hair Mask For Damaged Hair', '1125', 'Orange', 'Health & Beauty', 'Hair Care', NULL, 'Shampoo', '6015a26051900IMG-20210105-WA0033.jpg.jpg', '', '', '', 'Fa.Jean Keratin Hair Mask\r\n\r\n2.Hair tend to be healthier near the roots and damaged towards the ends, Use generous quantities of hair mask on your damp hair and concentrate on these areas while applying. It helps nourish and protect the hair cuticles from further damage such as split-ends.\r\n\r\n3. Massage your scalp and hair with your fingertips, or you can brush hair with a wide-toothed comb after applying the mask to ensure converge. Make sure leave the hair mask on your hair for a minimum duration of 10 to 20 minutes (Recommended duration is an hour). Then rinse out with clean water.\r\n\r\n4. For better results, you can wrap hair post-application in a plastic wrap or a warm towel, Steaming your hair or blowing your hair with a hair dryer.(Recommended duration is 20minutes)\r\n\r\n \r\n\r\nFa.Jean Keratin Hair Mask', 1, '', 'Litre', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:16:00', 0),
(295, 'SUN', 'Geaimei – Luxury Fashion Eyeshadow Palette – Original', '1650', 'Green', 'Health & Beauty', 'Makeup', NULL, NULL, '6015a310e9c36IMG-20210105-WA0038.jpg.jpg', '', '', '', 'Waterproof / Water-Resistant: Yes\r\nSingle color/multi-color: Above 35 colors\r\nProperty: High pigment, Long asting, Waterproof\r\nType of color: Matte and Glossy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:18:56', 0),
(296, 'Mellon', 'Geaimei – Mellon Fashion Eyeshadow Palette', '1125', 'Green', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015a3a517976IMG-20210105-WA0036.jpg.jpg', '', '', '', 'Benefit :Long-lasting, Easy to Wear, Waterproof / Water-Resistant, Natural\r\nWaterproof / Water-Resistant: Yes\r\nSingle color/multi-color: Above 35 colors\r\nProperty: High pigment, Long asting, Waterproof\r\nType of color: Matte & Glossy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:21:25', 0),
(297, 'Wooden Mobile Stand 01', 'Wooden Mobile Stand', '1950', 'Brown', 'Home & Lifestyle', 'Stationery & Craft', NULL, 'Gifts & Wrapping', '6015a4ced64ecIMG-20210104-WA0032.jpg.jpg', '', '', '', 'Wooden Mobile Stand\r\n100% Solid Pure Sheesham Wooden\r\n100% Hand Made\r\nWood Original Color With Polish', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:26:22', 0),
(298, 'KARITE LIQUID BLUSH', 'KARITE LIQUID BLUSH (Pack Of 6)', '1800', 'Pink', 'Health & Beauty', 'Skin Care', NULL, 'Face Scrubs', '6015a61eb9881H2a05a79e18a8453b9a288f1e8232515c1.jpg.jpg', '6015a61ebbda5H3020b59d974644fc8cc0c8aecbfcd194L.jpg.jpg', '6015a61ebbedfHc959251e6e554bbd8a1a4f6333d488d9B.jpg.jpg', '', '100% brand new and high quality products.\r\nThe powder is fine and smooth, easy to color, and the color is uniform.\r\nThe color is full, the color is rich, and the color is high.\r\nThe makeup is natural, the color is natural, does not stick to dust, does not fly powder, easily creates a bright face makeup and improves complexion.\r\nIt can be adjusted for a long time, it is not easy to lose powder, and it is not easy to remove makeup.\r\nIt can effectively brighten the skin tone.\r\nSix Colors available.\r\n\r\nSpecification:\r\n\r\nApplicable to people: general\r\n\r\nSkin Type: General\r\n\r\nNet content: 12ml\r\n\r\nShelf life: 3 years\r\n\r\nProduct color number: 6 colors\r\n\r\nSpecs:\r\n\r\nThe powder is fine and smooth, easy to color, and the color is uniform.\r\nThe color is full, the color is rich, and the color is high.\r\nIt can effectively brighten the skin tone.\r\nThe makeup is natural, the color is natural, does not stick to dust, does not fly powder, easily creates a bright face makeup and improves complexion.\r\nIt can be adjusted for a long time, it is not easy to lose powder, and it is not easy to remove makeup.\r\nSmall and light, easy to carry.\r\nSuitable for various occasions.\r\nPackage Included: Metal Melting Torch Mini Gold Furnace Graphite:\r\n\r\n1 * liquid blush\r\n\r\nNotes:\r\n\r\nDue to the difference between different monitors, the pictures may not reflect the actual color of the item.\r\nCompare the detail sizes with yours, there may be a 1-3cm error due to manual measurement.\r\nPlease leave a message before leaving bad feedback, if the products have any problem.\r\nThanks for your understanding.', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:31:58', 0),
(299, 'BH Cosmetics 12 Piece Brush Set', 'BH Cosmetics Studded Couture – 12 Piece Brush Set', '1425', 'WHITE', 'Health & Beauty', 'Makeup', NULL, 'Brushes & Sets', '6015a6b29dc47IMG-20201226-WA0064.jpg.jpg', '', '', '', 'The high-style selection of super-soft synthetic face and eye brushes in a gold-studded ivory cylindrical case is perfect for professionals as well as consumers. The protective hard case snaps closed for travel and adds a chic accent to any makeup table', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:34:26', 0),
(300, 'MP Make-Up', 'MP Make-Up Pro Brushes', '1125', 'Pink', 'Health & Beauty', 'Makeup', NULL, 'Brushes & Sets', '6015a724c2441IMG-20201220-WA0014.jpg.jpg', '6015a724c286fIMG-20201220-WA0017.jpg.jpg', '', '', '1. Powder Brush\r\n2. Tapered Contour Brush\r\n3. Classic Foundation Brush\r\n4. Large Angled Contour Brush\r\n5. Tapered Blending Brush\r\n6. Domed Blending Brush\r\n7. Flat Shadow Brush\r\n8. Flutt Shadow Brush\r\n9. Small Smudge Brush\r\n10. Angle Liner & Brow Brush.', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:36:20', 0),
(301, '(Pretty Doll)', 'Geaimei FRIDA Shadow- Original (Pretty Doll)', '1200', 'Green', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015a79766a43IMG-20201228-WA0044.jpg.jpg', '6015a79766e2eIMG-20201228-WA0043.jpg.jpg', '', '', '30 TONES:\r\n3 GLITTER\r\n7 SHIMER\r\n20 MATTE\r\nMEASUREMENTS:\r\n29 * 16.2CM', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:38:15', 0),
(302, 'unicorn', 'Geaimei – Luxury Fashion Eyeshadow Palett Unicorn', '1200', 'Blue', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015a822131cfIMG-20201228-WA0031.jpg.jpg', '6015a8221369aIMG-20201228-WA0033.jpg.jpg', '6015a82213803IMG-20201228-WA0027.jpg.jpg', '', 'Benefit :Long-lasting, Easy to Wear, Waterproof / Water-Resistant, Natural\r\nWaterproof / Water-Resistant: Yes\r\nSingle color/multi-color: Above 35 colors\r\nProperty: High pigment, Long asting, Waterproof', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:40:34', 0),
(303, 'COCO URBAN', 'COCO URBAN Eyeshadow Palette – Original', '1650', 'Silver', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015a8e0dccd533801-7b7cac.jpeg.jpeg', '', '', '', 'Benefit :Long-lasting, Easy to Wear, Waterproof / Water-Resistant, Natural\r\nWaterproof / Water-Resistant: Yes\r\nItem: 35 color eyeshadow\r\nProperty: High pigment, Long asting, Waterproof\r\nType of color: Matte', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:43:44', 0),
(304, 'APK GALAXY MAKE UP KIT Eyeshadow', 'APK GALAXY MAKE UP KIT Eyeshadow Palette – Original', '1650', 'PURPLE', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015a97446f13IMG-20201228-WA0042.jpg.jpg', '6015a974472b1IMG-20201228-WA0034.jpg.jpg', '', '', 'Benefit :Long-lasting, Easy to Wear, Waterproof / Water-Resistant, Natural\r\nWaterproof / Water-Resistant: Yes\r\nSingle color/multi-color: Above 35 colors\r\nProperty: High pigment, Long asting, Waterproof\r\nType of color: Matte', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:46:12', 0),
(305, 'BAKED EYE SHADE', 'BAKED EYE SHADE (PACK OF 3)', '585', 'NONE', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015aabbd8dd2IMG-20201220-WA0023.jpg.jpg', '', '', '', 'BAKED EYE SHADE', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:51:39', 0),
(306, 'Bobbi brown 32 piece Leather Pouch', 'Bobbi brown 32 piece brush With Leather Pouch', '1475', 'Brown', 'Health & Beauty', 'Makeup', NULL, 'Brushes & Sets', '6015ab241a9354-500x500.jpg.jpg', '6015ab241ae213-500x500.jpg.jpg', '', '', 'Bobbi brown 32 piece brush set is travel friendly with very easy to carry.\r\nAll the brushes are made of Persian and synthetic fiber.\r\nBobbi brown brush set has everything to tackle your makeup needs', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:53:24', 0),
(307, 'NAKED5 SHIMMER EYESHADOW', 'NAKED5 SHIMMER AND MATTE CLASSY PROFESSIONAL EYESHADOW', '2025', 'Blue', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015aba90f028IMG-20201225-WA0052.jpg.jpg', '', '', '', 'Fair Cosmetics SHIMMER AND MATTE CLASSY PROFESSIONAL EYESHADOW PALETTE\r\nPackage includes 1 x Eyeshadow Palette\r\nHighly pigmented\r\nSmooth application\r\nLong-lasting\r\nBright colors\r\nMatte, Creamy & Shimmer shades', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:55:37', 0),
(308, 'NAKED7', 'NAKED7 Eye Shadow Palette', '2025', 'Blue', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015ac5aa78fbIMG-20201225-WA0051.jpg.jpg', '', '', '', 'NKD 7 Palette\r\nGood quality\r\neasy to use\r\nPigmented\r\nLong-lasting\r\nVariety of shades\r\nThe palette has a variety of shades to pick from. You can do a Glam and Simple look with it both. The shades are really pigmented and easy to blend.', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 18:58:34', 0);
INSERT INTO `product` (`pk_id`, `sku`, `name`, `price`, `color`, `category`, `sub_category`, `brand_name`, `product_type`, `thumbnail`, `thumbnail2`, `thumbnail3`, `thumbnail4`, `description`, `status`, `size`, `unit`, `quantity_on_hand`, `v_product_status`, `vendor_id`, `created_at`, `discount_status`) VALUES
(309, 'bambo brushes', '11PCS Makeup Cosmetic Brushes Tool Set with Bamboo', '825', 'Brown', 'Health & Beauty', 'Makeup', NULL, 'Brushes & Sets', '6015acb46e13bIMG-20201226-WA0068.jpg.jpg', '', '', '', '11PCS Makeup Cosmetic Brushes Tool Set with Bamboo Handle\r\nSmooth Foundation Eyeshadow Eyeliner Powder Blush Brushes', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 19:00:04', 0),
(310, 'Charm Vogue Deal 1', 'Charm Vogue Beauty Deal 1', '1725', 'Blue', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015ad366e77bIMG-20201220-WA0013.jpg.jpg', '', '', '', '24k Gold Beauty Serum\r\nHD Primer Oil Free\r\nHIGH Definition Foundation Oil-Free Long-Lasting\r\nTEINT MATT Foundation Pressed Powder', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 19:02:14', 0),
(311, 'DR.RASHEL  (Combo)', 'DR.RASHEL Perfume Hydration Body Lotion (Combo)', '1200', 'WHITE', 'Health & Beauty', 'Skin Care', NULL, 'Sun Screen & After Sun', '6015ae56c1144IMG-20201216-WA0031.jpg.jpg', '', '', '', 'Perfume Lotion\r\n24 Hours of Hydration\r\nKisses Skin With Lasting Frangrance\r\nIncredibly Smooth And Silky For a Soft Touch.', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 19:07:02', 0),
(312, 'Charm Vogue Beauty Deal  Make-up', 'Charm Vogue Beauty Deal Pack LipColor EyeShadow Make-up', '1575', 'Blue', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015aedbbeeaaIMG-20201220-WA0018.jpg.jpg', '', '', '', 'NUDE’IT LIPCOLOR\r\n9 COLOR MOUSSE EYESHADOW\r\nMATTE PORELESS NORMAL TO OILY SKIN\r\nLIP & EYE MAKE-UP REMOVER', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 19:09:15', 0),
(313, 'Dr Rashel Vitamin C Pack', 'Dr Rashel Vitamin C Pack Face Cleanser Face Serum Face', '2350', 'Orange', 'Health & Beauty', 'Skin Care', NULL, 'Serum & Essence', '6015af5e6b3fdIMG-20201217-WA0020.jpg.jpg', '', '', '', 'DR.RASHEL Vitamin C Facial Cleanser\r\n\r\nBrightening & Anti-Aging\r\nFacial Cleanser\r\nContains Hyaluronic Acid\r\nRefreshing Lather Lift-away Duling\r\nImpurities for fresh, bright skin.\r\nDR.RASHEL Vitamin C Face Serum\r\n\r\nBrightening & Anti-Aging\r\nFace Serum\r\nContains Hyaluronic Acid\r\nAnti-aging,brighten\r\nFirming, repair, protecting\r\nImproves skin elasticity\r\nDR.RASHEL Vitamin C Eye Serum\r\n\r\nHyaluronic Acid, Collagen\r\n24hour hydration\r\nBrightens Dark Circles\r\nPlumps & Removes Putting\r\nReduce appearance & Wrinkles\r\nDR.RASHEL Vitamin C Face Cream\r\n\r\nContains Hyaluronic Acid\r\nDeeply moisturizes\r\nImprove fine lines, dull skin', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 19:11:26', 0),
(314, 'Romantic Color Makeup', 'Romantic Color Makeup Kit (3 In 1)', '1575', 'NONE', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015afc57a71cIMG-20201216-WA0039.jpg.jpg', '', '', '', 'Romantic Color Makeup Kit (3 in 1 Box)\r\nSuper pigmented\r\nIt has matte, metallic, and glitter eyeshades\r\nIt has blush, highlighters, eyebrow shades, and many others.\r\nNo fallout', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 19:13:09', 0),
(315, 'Perfect Makeup', 'Perfect Makeup Palette Kit', '975', 'Green', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015b010c0c9bIMG-20201216-WA0034.jpg.jpg', '', '', '', NULL, 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 19:14:24', 0),
(316, 'DR.RASHEL White Skin Pack', 'DR.RASHEL White Skin Pack Day Night Whitening Cream', '2350', 'WHITE', 'Health & Beauty', 'Skin Care', NULL, 'Serum & Essence', '6015b083ec181IMG-20201217-WA0019.jpg.jpg', '', '', '', 'DR.RASHEL Whitening Fade Cleanser\r\n\r\nArbutin, Niacinamide\r\nMakeup Remover\r\nFase Dark Spots\r\nWhiten & Purify Skin\r\nDR.RASHEL Whitening Fade Spots Serum\r\n\r\nArbutin, Niacinamide\r\nReduces Pigmentation\r\nFades Dark Spots\r\nSmoother & Whiter Skin\r\nDR.RASHEL Fade Spots Night Cream\r\n\r\nArbutin, Niacinamide\r\nEven Skin Tone\r\nReduce Dark Spots\r\nNourishes And Repairs\r\nDR.RASHEL Fairness Cream\r\n\r\nWhitening Day Cream\r\nArbutin, Niacinamide\r\nReduce Pigmentation\r\n24h Moisturising\r\nEven Skin Tone', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 19:16:19', 0),
(317, 'Pink BH Brush', 'Pink BH Brush With Leather Coated Cup', '1575', 'Pink', 'Health & Beauty', 'Makeup', NULL, 'Brushes & Sets', '6015b0e065a21IMG-20201027-WA0019.jpg.jpg', '', '', '', 'Powder Brush\r\nTapered Contour Brush\r\nClassic Foundation Brush\r\nLarge Angled Contour Brush\r\nTapered Blending Brush\r\nDomed Blending Brush\r\nFlat Shadow Brush\r\nFlutt Shadow Brush\r\nSmall Smudge Brush\r\nAngle Liner & Brow Brush.', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 19:17:52', 0),
(318, 'Zoeva 15 Pieces Makeup Brushes', 'Zoeva 15 Pieces Makeup Brushes With Leather Pouch', '975', 'Pink', 'Health & Beauty', 'Makeup', NULL, 'Brushes & Sets', '6015b144f2298IMG-20201204-WA0083.jpg.jpg', '6015b144f2667IMG-20201204-WA0084.jpg.jpg', '', '', 'Zoeva 15 Pieces Makeup Brushes With Leather Pouch\r\nSoft and comfortable for use,\r\nPerfect for both Studio and Personal use\r\nComes with a handy and portable roll up leather case\r\nWith proper care, your brushes can be enjoyed for years\r\nPlease clean the brushes before the first usage', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 19:19:32', 0),
(319, 'Bridal Makeup CVB', 'Bridal Makeup Collection Charm Vogue Beauty CVB', '5775', 'Blue', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '6015b19fb2d39IMG-20201217-WA0000.jpg.jpg', '', '', '', 'Bridal Makeup Kit                       Contour Palette\r\nFacePowder                                   Blushon\r\nFoundation                                    Fixer & Primer\r\nLipstick & Gloss                            Liner & Mascara\r\nMakeup Cleanser                          EyeShade\r\nHighlighter                                     Loose Powder\r\nConcealer', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-30 19:21:03', 0),
(322, '204050478_PK-14045', 'Lumbo Sacral Support - free size', '700', 'NONE', 'Health & Beauty', 'Medical Supplies', NULL, 'Health Monitors & Test', '6016d467c2524a3b22437d8be323dec2bc1422b067401.jpg.jpg', '6016d467c28deIMG-1628.jpg.jpg', '6016d467c2ac5IMG-1629.jpg.jpg', '6016d467c2d2bIMG-1630.jpg.jpg', '.free size (universal)\r\n.help relieve lower back pain and discomfort\r\n.supports and stabilizes the lumbar and abdominal region\r\n.addional abdominal support belt\r\n.tapered for a comfortable fit\r\n.easy comfortable and inconspicuous to wear\r\n.adjust for a comfortable and easy fit', 1, '', 'pieces', NULL, '2', 'duwaimart@gmail.com', '2021-01-31 16:01:43', 0),
(323, '20450478_PK-140452823', 'On Call Plus 50 strips , Blood gluco strips use with only on call Plus Meter and On call Ez II Meter', '700', 'Blue', 'Health & Beauty', 'Medical Supplies', NULL, 'Health Monitors & Test', '6016d7b00f89971c24d3b4d1a4c80433ed47fbfae2435.jpg.jpg', '6016d7b011caboncallplus-300x292.jpg.jpg', '6016d7b011d3bon_call_plus_glucometer_strips_-_50_strips.jpg.jpg', '6016d7b011e54Movie1-000001.png.png', '.No coding needed, making the testing process quicker and easier\r\n.Tiny blood sample: only 0.6µL of blood required\r\n.On Call Plus 50 Strips , Blood Gluco Strips Use With Only On Call Plus Meter And On Call Ez II Meter\r\n.1x50 strips', 1, '', 'pieces', NULL, '2', 'duwaimart@gmail.com', '2021-01-31 16:15:44', 0),
(324, 'Beautiful Cusion elsa', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)', '350', 'Blue', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016d8261000dIMG-20201121-WA0048.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:17:42', 0),
(325, 'Beautiful Cusion Car', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) Car', '350', 'Red', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016d98a081bbIMG-20201121-WA0049.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:23:38', 0),
(326, 'Beautiful Cusion Ben 10', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) Ben 10', '350', 'Green', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016d9d332a63IMG-20201121-WA0050.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:24:51', 0),
(327, 'Beautiful Cusion  Frozen Family', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) Frozen Family', '350', 'Blue', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016da13bf5dfIMG-20201121-WA0051.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:25:55', 0),
(328, 'Beautiful Cusion  Spiderman', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) Spiderman', '350', 'Red', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016da533535fIMG-20201121-WA0052.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:26:59', 0),
(329, 'Beautiful Cusion Barbie', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) Barbie', '350', 'Pink', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016daa0957e5IMG-20201121-WA0053.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:28:16', 0),
(330, 'Beautiful Cusion  unicorn', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) unicorn', '350', 'Blue', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016dad8f284cIMG-20201121-WA0054.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:29:12', 0),
(331, '204050478_ocp-1404528237', 'On Call Extra 50 strips', '675', 'Green', 'Health & Beauty', 'Medical Supplies', NULL, 'Health Monitors & Test', '6016daf4d79da462382aab12100d1b42be1af172cef69.jpg.jpg', '6016daf4d7f4ccover4_f861b097-a2cc-4fc2-aeb4-5c4370f94f0c_580x.jpg.jpg', '6016daf4d800dMovie1-000001.jpg.jpg', '', '.No coding needed, making the testing process quicker and easier\r\n.Tiny blood sample: only 0.6µL of blood required\r\n.Fast results in 5 seconds\r\n.only work with on call extra meter \r\n.pack of 1x50strips', 1, '', 'pieces', NULL, '2', 'duwaimart@gmail.com', '2021-01-31 16:29:40', 0),
(332, 'Beautiful Cusion Mickeymouse', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) MickeyMouse', '350', 'Blue', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016db307a49fIMG-20201121-WA0055.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:30:40', 0),
(333, 'Beautiful Cusion Rupenzil', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) Rupenzil', '350', 'Blue', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016dfc5b3177IMG-20201121-WA0056.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:50:13', 0),
(334, 'Beautiful Cusion  Ben10-1', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) Ben10-1', '350', 'Green', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e01200c60IMG-20201121-WA0057.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:51:30', 0),
(335, 'Beautiful Cusion BAT+SUPERMAN', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) BAT+SUPERMAN', '350', 'Blue', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e0ba2e3c4IMG-20201121-WA0058.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:54:18', 0),
(336, 'Beautiful Cusion  PRINCES', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) PRINCES', '350', 'Pink', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e116b7625IMG-20201121-WA0059.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:55:50', 0),
(337, 'Beautiful Cusion ANGRYBIRD', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) ANGRYBIRD', '350', 'Red', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e159256dbIMG-20201121-WA0060.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:56:57', 0),
(338, 'Beautiful Cusion  PUBG', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) PUBG', '350', 'Green', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e1ac9fcedIMG-20201121-WA0061.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:58:20', 0),
(339, 'Beautiful Cusion ANGRYBIRD FRIENDS', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) ANGRYBIRD fRIENDS', '350', 'Blue', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e20926345IMG-20201121-WA0062.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 16:59:53', 0),
(340, 'Beautiful Cusion  LITTLEPONY', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) LITTLEPONY', '350', 'Pink', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e273022b9IMG-20201121-WA0063.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 17:01:39', 0),
(341, 'Beautiful Cusion  PRINCES-1', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) PRINCES-1', '350', 'Pink', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e2c7351bdIMG-20201121-WA0064.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 17:03:03', 0),
(342, 'Beautiful Cusion  MINI', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) MINI', '350', 'Yellow', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e39d32e0dIMG-20201121-WA0065.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 17:06:37', 0),
(343, 'Beautiful Cusion  ELSA+ANNA', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) ELSA+ANNA', '350', 'Pink', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e4b7dd8cdIMG-20201121-WA0066.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 17:11:19', 0),
(344, 'Beautiful Cusion  PUBG-1', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) PUBG-1', '350', 'Yellow', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e51054c0eIMG-20201121-WA0067.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 17:12:48', 0),
(345, 'Beautiful Cusion CAR-1', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) CAR-1', '350', 'Red', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e56abedafIMG-20201121-WA0068.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 17:14:18', 0),
(346, 'Beautiful Cusion  TOMJERRY', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) TOMJERRY', '350', 'Green', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e5baeaf7eIMG-20201121-WA0069.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 17:15:38', 0),
(347, 'Beautiful Cusion  CINDERLLA', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) CINDERLLA', '350', 'Red', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e61f775cbIMG-20201121-WA0070.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 17:17:19', 0),
(348, 'Beautiful Cusion  AVENGERS', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) AVENGERS', '350', 'Blue', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e666f009cIMG-20201121-WA0071.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 17:18:30', 0),
(349, 'Beautiful Cusion SPIDERMAN-1', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches) SPIDERMAN-1', '350', 'Red', 'Home & Lifestyle', 'Bedding', NULL, 'Pillow Cases', '6016e704a9dabIMG-20201121-WA0072.jpg.jpg', '', '', '', 'Beautiful Cusion Covers With Filling 1 PCS (16 X 16 Inches)\r\nBrillent Quality\r\nEasy To Use\r\nTrendy', 1, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-01-31 17:21:08', 0),
(350, 'PM01', 'YOC Packing Flyers', '170', 'WHITE', 'Packing Material', 'packing Flyers', NULL, NULL, '6017a7773c937rapper.jpg.jpg', '', '', '', 'YOC Flyer with proper seal to pack your items and deliver them safely to your customers. Minimum qty is 10 pcs per pack for ordering and size is 14*16. Weight is 120 microon with address and details on back side.', 1, '', 'packs', NULL, '0', NULL, '2021-02-01 07:02:15', 0),
(351, '204050478_fab-1404528237', 'First Aid Box With Medicine', '3700', 'Orange', 'Health & Beauty', 'Medical Supplies', NULL, 'First Aid Supplies', '60181af88a73e859ac9fa-a2ca-4ce3-88fa-7fba571ca6e4.jpg.jpg', '60181af89117eIMG-2127.jpg.jpg', '60181af8913dcIMG-2128.jpg.jpg', '60181af8916f8Photo_1612164197514.png.png', 'first aid box with medicine \r\neach medicine contain 20 tables and some 10 tabs\r\n\r\npanadol \r\npanadol extra \r\npanadol cf \r\ngravinate \r\nflagyl \r\ncalpol \r\ncoldrex \r\nloratadine (anti elergic)\r\nnimsulide \r\nentox p\r\nimodium\r\nlaxoberan\r\nmefnac\r\nerethromycine\r\nwelgesic\r\nbrufen 400\r\nvermox\r\nmotillium\r\nlasix\r\nomeprozole\r\nvibramycine\r\npayodine\r\npolyfex\r\nbuscopan\r\narinac\r\nposnston\r\nseptran\r\ndisprine\r\nklick\r\nventolin\r\nvicks\r\niodex \r\ngloves\r\n\r\nfind us on youtube channel name mkb knowledge', 1, '', 'packs', NULL, '2', 'duwaimart@gmail.com', '2021-02-01 15:15:04', 0),
(352, 'Dr Rashel Pack of 5', 'Dr Rashel Vitamin C Pack of 5', '3000', 'Orange', 'Health & Beauty', 'Skin Care', NULL, 'Serum & Essence', '60184d10613d8IMG-20210201-WA0005.jpg.jpg', '', '', '', 'DR.RASHEL VITAMIN C BRIGHTENING AND ANTI AGING CLEANSING MILK\r\nDR.RASHEL Vitamin C Face Serum\r\nDR.RASHEL Vitamin C Eye Serum\r\nDR.RASHEL Vitamin C Face Cream\r\nDR.RASHEL Vitamin C Facial Cleanser\r\n\r\nBrightening & Anti-Aging\r\nFacial Cleanser\r\nContains Hyaluronic Acid\r\nRefreshing Lather Lift-away Duling\r\nImpurities for fresh, bright skin.\r\nDR.RASHEL Vitamin C Face Serum\r\n\r\nBrightening & Anti-Aging\r\nFace Serum\r\nContains Hyaluronic Acid\r\nAnti-aging,brighten\r\nFirming, repair, protecting\r\nImproves skin elasticity\r\n\r\nDR.RASHEL Vitamin C Eye Serum\r\nHyaluronic Acid, Collagen\r\n24hour hydration\r\nBrightens Dark Circles\r\nPlumps & Removes Putting\r\nReduce appearance & Wrinkles\r\n\r\nDR.RASHEL Vitamin C Face Cream\r\nContains Hyaluronic Acid\r\nDeeply moisturizes\r\nImprove fine lines, dull skin\r\n\r\nDR.RASHEL VITAMIN C BRIGHTENING AND ANTI AGING CLEANSING MILK\r\nFormulation Cream\r\nSkin Concerns Anti-Aging + Brightening\r\nSkin Type All Types\r\nType: Makeup Remover, Face skin care product', 0, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-02-01 18:48:48', 0),
(353, 'mORPHE 35X0', 'MORPHE – Natural Flirt Artistry Palette – 35XO LIMITED EDITION', '900', 'Pink', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '601850bc4974dIMG-20210201-WA0007.jpg.jpg', '', '', '', 'MORPHE – Natural Flirt Artistry Palette – 35XO\r\nLIMITED EDITION\r\n\r\nShow off that flirty side all season long with this playful palette. Shimmering nudes mix and mingle with blushing berries for a glam good time. So, come a little closer and don’t be shy. Take full advantage of these sultry shades and show everyone that less can truly mean more.\r\n\r\n(Finish: matte and shimmer)\r\n\r\n \r\n\r\nSHADE NAMES\r\n\r\nRow 1: Single Life, Across the Room, Come Here Often, Your Move, Hair Flip, Get the Digits, Eye Contact\r\n\r\nRow 2: U Up?, Message Read, Major Seduction, Touchy Feely, Hard to Get, Body Language, Just Friends\r\n\r\nRow 3: Met Online, Matchmaker, Double Tap, The Chase, Talk Feelings, Too Swoon, Slay the Field\r\n\r\nRow 4: Charmer, Dating History, Kiss Me, Crushin’ Hard, Second Date, Show Some Skin, Let’s Snuggle\r\n\r\nRow 5: Love Story, Over the Moon, Meet the Rents, Happy Ever After, Plus One, With this Bling, Make It Official', 0, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-02-01 19:04:28', 0),
(354, 'MSYAHO Blush Baking Powder', 'MSYAHO Blush Baking Powder Set 7 in 1 in Pakistan', '540', 'NONE', 'Health & Beauty', 'Makeup', NULL, 'Makeup Accessories', '60198b3ad65feIMG-20210202-WA0026.jpg.jpg', '60198c418e218IMG-20210202-WA0025.jpg.jpg', '60198c4190498IMG-20210202-WA0024.jpg.jpg', '', 'MSYAHO Blush Baking Powder Set 7 in 1 in Pakistan\r\nProduct Details\r\nImported and Latest.\r\nBeautiful shades 7 in 1\r\nQuality is Premium\r\nProfessional series makeup combines 7 Blush in one\r\nThis makeup 7 Colours Face Blush Powder makes the skin soft and fresh with the natural, healthy glow.\r\nDuring one likes juicy Blush highlights brushed over with a new design to be used,feel light and soft\r\nEasily create clear and brilliant eye makeup finish', 0, '', 'pieces', NULL, '2', 'mansoor.smt@gmail.com', '2021-02-02 17:26:18', 0),
(355, '204050478_cndm-1404528237', 'Rough Rider Imported Condom', '260', 'Brown', 'Health & Beauty', 'Personal Care', NULL, 'Sexual Wellness', '601aa5bf526cdIMG-2155.jpg.jpg', '601aa5bf56963IMG-2154.jpg.jpg', '601aa5bf56ad6IMG-2156.jpg.jpg', '', 'imported condom rough rider \r\npack of 3 (1x3)\r\ntotal 9 condom', 1, '', 'pieces', NULL, '3', 'duwaimart@gmail.com', '2021-02-03 13:31:43', 0),
(356, 'GBC41', 'Green Full Sleeves Shirt', '799', 'Green', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '60263a2d8b9f5sweat_1.jpg.jpg', '', '', '', 'Feel the warmth inside your body with this warm shirt and make your kid look stylish. Warm winter fleece is not only comfy but looks good as well..', 1, '', 'pieces', NULL, '0', NULL, '2021-02-12 08:19:57', 0),
(357, 'RBC42', 'Red White Full Sleeves Shirt', '799', 'Red', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '60264290d3701sweat_4.jpg.jpg', '', '', '', 'A unisex shirt to beat Monday Blue. This shirt will definitely make your kids feel warm. Red blue strips really make your kids stand out', 1, '', 'pieces', NULL, '0', NULL, '2021-02-12 08:55:44', 0),
(358, 'NBC43', 'navy Blue Full Sleeves Shirt with Blue Rib', '799', 'NAVY', 'Babies & Toys', 'Clothing & Accessories', NULL, 'Boys\' Clothing', '60264846d04b3sweat_2.jpg.jpg', '', '', '', 'Navy Blue Shirt, Perfect For the Winters. Warm fleece inside so your kids can stay comfy and also warm at the same time', 1, '', 'pieces', NULL, '0', NULL, '2021-02-12 09:20:06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `pk_id` int(11) NOT NULL,
  `product_type` varchar(500) DEFAULT NULL,
  `main_category` varchar(500) DEFAULT NULL,
  `sub_category` varchar(500) DEFAULT NULL,
  `username` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pk_id`, `product_type`, `main_category`, `sub_category`, `username`) VALUES
(2, 'tshirt', 'garments', 'garments category', 'admin'),
(3, 'hoodies', 'garments', 'garments category', 'admin'),
(4, 'trouser', 'garments', 'garments category', 'admin'),
(5, 'abaya', 'garments', 'garments category', 'admin'),
(6, 'scarfs', 'garments', 'garments category', 'admin'),
(7, 'printed lawn', 'garments', 'garments category', 'admin'),
(8, 'embroidery fabrics', 'garments', 'garments category', 'admin'),
(9, 'children', 'garments', 'kids category', 'admin'),
(10, 'leather garments', 'garments', 'leather category', 'admin'),
(11, 'car accessories', 'accessories', 'accessories', 'admin'),
(12, 'general accessories', 'accessories', 'accessories', 'admin'),
(13, 'bags and wallets', 'accessories', 'accessories', 'admin'),
(14, 'fitted bedsheets', 'home textile', 'bed sheets', 'admin'),
(15, 'knitted bedsheets', 'home textile', 'bed sheets', 'admin'),
(17, 'pret', 'garments', 'garments category', 'admin'),
(19, 'Formal Shirt', 'garments', 'garments category', 'admin'),
(22, 'Towels', 'TOWELS', 'garments category', 'MUHAY@NAVSONS.COM.PK'),
(23, 'Shirt Formal', 'garments', 'garments category', 'vendor@gmail.com'),
(24, 'Kurta', 'garments', 'garments category', 'vendor@gmail.com'),
(25, 'Shoes Formal', 'shoes', 'Casual Shoes', 'vendor@gmail.com'),
(26, 'pencil', 'Stationary', 'Stationary items', 'vendor@gmail.com'),
(27, 'pencil', 'Stationary', 'Stationary items', 'admin'),
(28, 'dairy', 'Milk', 'whitener', 'admin'),
(29, 'Laptop & Notebook', 'Electronics Devices', 'Laptops', 'admin'),
(30, 'Gaming Laptops', 'Electronics Devices', 'Laptops', 'admin'),
(31, 'Macbooks', 'Electronics Devices', 'Laptops', 'admin'),
(32, 'All in One', 'Electronics Devices', 'Desktops', 'admin'),
(33, 'Gaming Desktops', 'Electronics Devices', 'Desktops', 'admin'),
(34, 'DIY', 'Electronics Devices', 'Desktops', 'admin'),
(35, 'Play Station Consoles', 'Electronics Devices', 'Gaming Consoles', 'admin'),
(36, 'Play Station Games', 'Electronics Devices', 'Gaming Consoles', 'admin'),
(37, 'Play Station Controllers', 'Electronics Devices', 'Gaming Consoles', 'admin'),
(38, 'Xbox Games', 'Electronics Devices', 'Gaming Consoles', 'admin'),
(39, 'Video Cameras', 'Electronics Devices', 'Action/Video Cameras', 'admin'),
(40, 'IP Security Cameras', 'Electronics Devices', 'Security Cameras', 'admin'),
(41, 'DSLR', 'Electronics Devices', 'Digital Cameras', 'admin'),
(42, 'Point & Shoot', 'Electronics Devices', 'Digital Cameras', 'admin'),
(43, 'Instant Camera', 'Electronics Devices', 'Digital Cameras', 'admin'),
(44, 'Phone Cases', 'Electronics Accessories', 'Mobile Accessories', 'admin'),
(45, 'Power Banks', 'Electronics Accessories', 'Mobile Accessories', 'admin'),
(46, 'Cables & Converters', 'Electronics Accessories', 'Mobile Accessories', 'admin'),
(47, 'Wall Charger', 'Electronics Accessories', 'Mobile Accessories', 'admin'),
(48, 'Wireless Charger', 'Electronics Accessories', 'Mobile Accessories', 'admin'),
(49, 'Tablet Accessories', 'Electronics Accessories', 'Mobile Accessories', 'admin'),
(50, 'Parts & Tools', 'Electronics Accessories', 'Mobile Accessories', 'admin'),
(51, 'Headphones & Headset', 'Electronics Accessories', 'Audio', 'admin'),
(52, 'Home Entertainment', 'Electronics Accessories', 'Audio', 'admin'),
(53, 'Live Sound', 'Electronics Accessories', 'Audio', 'admin'),
(54, 'Portable Player', 'Electronics Accessories', 'Audio', 'admin'),
(55, 'Smart Watches', 'Electronics Accessories', 'Wearable', 'admin'),
(56, 'Fitness & Activity Tracker', 'Electronics Accessories', 'Wearable', 'admin'),
(57, 'Fitness Tracker Accessories', 'Electronics Accessories', 'Wearable', 'admin'),
(58, 'Virtual Reality', 'Electronics Accessories', 'Wearable', 'admin'),
(59, 'Play Station Controllers', 'Electronics Accessories', 'Consoles Accessories', 'admin'),
(60, 'Play Station Audio & Accessories', 'Electronics Accessories', 'Consoles Accessories', 'admin'),
(61, 'Memory Cards', 'Electronics Accessories', 'Camera Accessories', 'admin'),
(62, 'Lenses', 'Electronics Accessories', 'Camera Accessories', 'admin'),
(63, 'Tri pod & Mono pod', 'Electronics Accessories', 'Camera Accessories', 'admin'),
(64, 'Camera Cases', 'Electronics Accessories', 'Camera Accessories', 'admin'),
(65, 'Action Camera Accessories', 'Electronics Accessories', 'Camera Accessories', 'admin'),
(66, 'Lighting & Studio Equipment', 'Electronics Accessories', 'Camera Accessories', 'admin'),
(67, 'Batteries', 'Electronics Accessories', 'Camera Accessories', 'admin'),
(68, 'Monitors', 'Electronics Accessories', 'Computer Accessories', 'admin'),
(69, 'Keyboard', 'Electronics Accessories', 'Computer Accessories', 'admin'),
(70, 'Mice', 'Electronics Accessories', 'Computer Accessories', 'admin'),
(71, 'Adapter & cables', 'Electronics Accessories', 'Computer Accessories', 'admin'),
(72, 'PC Audio', 'Electronics Accessories', 'Computer Accessories', 'admin'),
(73, 'Extrernal HardDrive', 'Electronics Accessories', 'Storage', 'admin'),
(74, 'Internal Hard Drive', 'Electronics Accessories', 'Storage', 'admin'),
(75, 'Flash drive', 'Electronics Accessories', 'Storage', 'admin'),
(76, 'OTG Drive', 'Electronics Accessories', 'Storage', 'admin'),
(77, 'Storage for Mac', 'Electronics Accessories', 'Storage', 'admin'),
(78, 'Printers', 'Electronics Accessories', 'Printers', 'admin'),
(79, 'Ink & Tooners', 'Electronics Accessories', 'Printers', 'admin'),
(80, 'Fax Machine', 'Electronics Accessories', 'Printers', 'admin'),
(81, 'Graphics Cards', 'Electronics Accessories', 'Computer Components', 'admin'),
(82, 'Desktop Casings', 'Electronics Accessories', 'Computer Components', 'admin'),
(83, 'Motherboards', 'Electronics Accessories', 'Computer Components', 'admin'),
(84, 'Fan & Heat Sink', 'Electronics Accessories', 'Computer Components', 'admin'),
(85, 'Processors', 'Electronics Accessories', 'Computer Components', 'admin'),
(86, 'Access point', 'Electronics Accessories', 'Network Components', 'admin'),
(87, 'Projectors', 'TV & Home Appliances', 'TV & Video Devices', 'admin'),
(88, 'LED Television', 'TV & Home Appliances', 'TV & Video Devices', 'admin'),
(89, 'Smart Television', 'TV & Home Appliances', 'TV & Video Devices', 'admin'),
(90, 'OLED Television', 'TV & Home Appliances', 'TV & Video Devices', 'admin'),
(91, 'QLED Television', 'TV & Home Appliances', 'TV & Video Devices', 'admin'),
(92, 'Other Televisions', 'TV & Home Appliances', 'TV & Video Devices', 'admin'),
(93, 'Blu-Ray/DVD Player', 'TV & Home Appliances', 'TV & Video Devices', 'admin'),
(94, 'Soundbars', 'TV & Home Appliances', 'Home Audio', 'admin'),
(95, 'Home Entertainment', 'TV & Home Appliances', 'Home Audio', 'admin'),
(96, 'Portable Player', 'TV & Home Appliances', 'Home Audio', 'admin'),
(97, 'Live Sound', 'TV & Home Appliances', 'Home Audio', 'admin'),
(98, 'TV Receivers', 'TV & Home Appliances', 'TV Accessories', 'admin'),
(99, 'Wall Mounts', 'TV & Home Appliances', 'TV Accessories', 'admin'),
(100, 'Washing Machines', 'TV & Home Appliances', 'Large Appliances', 'admin'),
(101, 'Refrigerators', 'TV & Home Appliances', 'Large Appliances', 'admin'),
(102, 'Microwave', 'TV & Home Appliances', 'Large Appliances', 'admin'),
(103, 'Oven', 'TV & Home Appliances', 'Large Appliances', 'admin'),
(104, 'Freezer', 'TV & Home Appliances', 'Large Appliances', 'admin'),
(105, 'Cooktop & Range', 'TV & Home Appliances', 'Large Appliances', 'admin'),
(106, 'Water Heater', 'TV & Home Appliances', 'Large Appliances', 'admin'),
(107, 'Rice Cooker', 'TV & Home Appliances', 'Small Kitchen Appliances', 'admin'),
(108, 'Blender,Mixer & Grinder', 'TV & Home Appliances', 'Small Kitchen Appliances', 'admin'),
(109, 'Electric Kettle', 'TV & Home Appliances', 'Small Kitchen Appliances', 'admin'),
(110, 'Juicer & Fruit Extraction', 'TV & Home Appliances', 'Small Kitchen Appliances', 'admin'),
(111, 'Fryer', 'TV & Home Appliances', 'Small Kitchen Appliances', 'admin'),
(112, 'Water Purifier', 'TV & Home Appliances', 'Small Kitchen Appliances', 'admin'),
(113, 'Pressure Cookers', 'TV & Home Appliances', 'Small Kitchen Appliances', 'admin'),
(114, 'Specialty Cookware', 'TV & Home Appliances', 'Small Kitchen Appliances', 'admin'),
(115, 'Fan', 'TV & Home Appliances', 'Cooling & Air Treatment', 'admin'),
(116, 'Air Conditioner', 'TV & Home Appliances', 'Cooling & Air Treatment', 'admin'),
(117, 'Air Cooler', 'TV & Home Appliances', 'Cooling & Air Treatment', 'admin'),
(118, 'Air Purifier', 'TV & Home Appliances', 'Cooling & Air Treatment', 'admin'),
(119, 'Dehumidifier', 'TV & Home Appliances', 'Cooling & Air Treatment', 'admin'),
(120, 'Humidifier', 'TV & Home Appliances', 'Cooling & Air Treatment', 'admin'),
(121, 'Vacuum Cleaner', 'TV & Home Appliances', 'Vacuums & Floor Care', 'admin'),
(122, 'Floor Polisher', 'TV & Home Appliances', 'Vacuums & Floor Care', 'admin'),
(123, 'Vacuum Cleaner Parts', 'TV & Home Appliances', 'Vacuums & Floor Care', 'admin'),
(124, 'Irons', 'TV & Home Appliances', 'Irons & Garments Care', 'admin'),
(125, 'Garments Steamer', 'TV & Home Appliances', 'Irons & Garments Care', 'admin'),
(126, 'Sewing Machines', 'TV & Home Appliances', 'Irons & Garments Care', 'admin'),
(127, 'Hair Dryer & Styling', 'TV & Home Appliances', 'Personal Care Appliances', 'admin'),
(128, 'Grooming Appliances', 'TV & Home Appliances', 'Personal Care Appliances', 'admin'),
(129, 'Air Purifier', 'TV & Home Appliances', 'Personal Care Appliances', 'admin'),
(130, 'Body & Massage Oils', 'Health & Beauty', 'Bath & Body', 'admin'),
(131, 'Body Soap & Shower Gel', 'Health & Beauty', 'Bath & Body', 'admin'),
(132, 'Foot Care', 'Health & Beauty', 'Bath & Body', 'admin'),
(133, 'Hair Removal', 'Health & Beauty', 'Bath & Body', 'admin'),
(134, 'Hand Care', 'Health & Beauty', 'Bath & Body', 'admin'),
(135, 'Curling Iron & Wands', 'Health & Beauty', 'Beauty Tools', 'admin'),
(136, 'Flat Irons', 'Health & Beauty', 'Beauty Tools', 'admin'),
(137, 'Multi Styler', 'Health & Beauty', 'Beauty Tools', 'admin'),
(138, 'Hair Dryer', 'Health & Beauty', 'Beauty Tools', 'admin'),
(139, 'Hair Removal Appliances', 'Health & Beauty', 'Beauty Tools', 'admin'),
(140, 'Men Fragrances', 'Health & Beauty', 'Fragrances', 'admin'),
(141, 'Women Fragrances', 'Health & Beauty', 'Fragrances', 'admin'),
(142, 'Shampoo', 'Health & Beauty', 'Hair Care', 'admin'),
(143, 'Hair Treatment', 'Health & Beauty', 'Hair Care', 'admin'),
(144, 'Hair Accessories', 'Health & Beauty', 'Hair Care', 'admin'),
(145, 'Hair Care Accessories', 'Health & Beauty', 'Hair Care', 'admin'),
(146, 'Hair Brushes and Combs', 'Health & Beauty', 'Hair Care', 'admin'),
(147, 'Hair Coloring', 'Health & Beauty', 'Hair Care', 'admin'),
(148, 'Hair Conditioner', 'Health & Beauty', 'Hair Care', 'admin'),
(149, 'Hair Styling', 'Health & Beauty', 'Hair Care', 'admin'),
(150, 'Wig & Hair Extensions & Pads', 'Health & Beauty', 'Hair Care', 'admin'),
(151, 'Bath & Body', 'Health & Beauty', 'Men\'s Care', 'admin'),
(152, 'Condoms', 'Health & Beauty', 'Men\'s Care', 'admin'),
(153, 'Hair Care', 'Health & Beauty', 'Men\'s Care', 'admin'),
(154, 'Hair Dryer', 'Health & Beauty', 'Men\'s Care', 'admin'),
(155, 'Shaving & Grooming', 'Health & Beauty', 'Men\'s Care', 'admin'),
(156, 'Sports Nutrition', 'Health & Beauty', 'Men\'s Care', 'admin'),
(157, 'Foundation', 'Health & Beauty', 'Makeup', 'admin'),
(158, 'Lips', 'Health & Beauty', 'Makeup', 'admin'),
(159, 'Eyes', 'Health & Beauty', 'Makeup', 'admin'),
(160, 'Nails', 'Health & Beauty', 'Makeup', 'admin'),
(161, 'Brushes & Sets', 'Health & Beauty', 'Makeup', 'admin'),
(162, 'Makeup Accessories', 'Health & Beauty', 'Makeup', 'admin'),
(163, 'Makeup Removers', 'Health & Beauty', 'Makeup', 'admin'),
(164, 'Oral Care', 'Health & Beauty', 'Personal Care', 'admin'),
(165, 'Sexual Wellness', 'Health & Beauty', 'Personal Care', 'admin'),
(166, 'Serum & Essence', 'Health & Beauty', 'Skin Care', 'admin'),
(167, 'Dermacare', 'Health & Beauty', 'Skin Care', 'admin'),
(168, 'Face Scrubs', 'Health & Beauty', 'Skin Care', 'admin'),
(169, 'Facial Cleanser', 'Health & Beauty', 'Skin Care', 'admin'),
(170, 'Sun Screen & After Sun', 'Health & Beauty', 'Skin Care', 'admin'),
(171, 'Beauty Supplements', 'Health & Beauty', 'Food Supplements', 'admin'),
(172, 'Multivitamins', 'Health & Beauty', 'Food Supplements', 'admin'),
(173, 'Sports Nutrition', 'Health & Beauty', 'Food Supplements', 'admin'),
(174, 'Weight Management', 'Health & Beauty', 'Food Supplements', 'admin'),
(175, 'Well Being', 'Health & Beauty', 'Food Supplements', 'admin'),
(176, 'First Aid Supplies', 'Health & Beauty', 'Medical Supplies', 'admin'),
(177, 'Health Monitors & Test', 'Health & Beauty', 'Medical Supplies', 'admin'),
(178, 'Baby Walkers', 'Babies & Toys', 'Baby Gear', 'admin'),
(179, 'backpacks & Carriers', 'Babies & Toys', 'Baby Gear', 'admin'),
(180, 'Car Seats', 'Babies & Toys', 'Baby Gear', 'admin'),
(181, 'Kids Bag', 'Babies & Toys', 'Baby Gear', 'admin'),
(182, 'Strollers', 'Babies & Toys', 'Baby Gear', 'admin'),
(183, 'Swings,Jumpers & Bouncers', 'Babies & Toys', 'Baby Gear', 'admin'),
(184, 'Baby Bath', 'Babies & Toys', 'Baby Personal Care', 'admin'),
(185, 'Bathing Tubs & Seats', 'Babies & Toys', 'Baby Personal Care', 'admin'),
(186, 'Soaps, Cleansers & Bodywash', 'Babies & Toys', 'Baby Personal Care', 'admin'),
(187, 'Girls\' Clothing', 'Babies & Toys', 'Clothing & Accessories', 'admin'),
(188, 'Girls\' Dresses', 'Babies & Toys', 'Clothing & Accessories', 'admin'),
(189, 'Girls\' Shoes', 'Babies & Toys', 'Clothing & Accessories', 'admin'),
(190, 'Boys\' Clothing', 'Babies & Toys', 'Clothing & Accessories', 'admin'),
(191, 'New Born Unisex (0 - 6 mnths)', 'Babies & Toys', 'Clothing & Accessories', 'admin'),
(192, 'New Born Sets & Packs', 'Babies & Toys', 'Clothing & Accessories', 'admin'),
(193, 'Cloth Diapers & Accessories', 'Babies & Toys', 'Diapering & Potty', 'admin'),
(194, 'Diaper Bags', 'Babies & Toys', 'Diapering & Potty', 'admin'),
(195, 'Diaper Creams & Ointments', 'Babies & Toys', 'Diapering & Potty', 'admin'),
(196, 'Diapering Care', 'Babies & Toys', 'Diapering & Potty', 'admin'),
(197, 'Disposable Diapers', 'Babies & Toys', 'Diapering & Potty', 'admin'),
(198, 'Potty Chair', 'Babies & Toys', 'Diapering & Potty', 'admin'),
(199, 'Wipes & Holders', 'Babies & Toys', 'Diapering & Potty', 'admin'),
(200, 'Baby & Toodler Foods', 'Babies & Toys', 'Feeding', 'admin'),
(201, 'Milk Formula', 'Babies & Toys', 'Feeding', 'admin'),
(202, 'Utensils', 'Babies & Toys', 'Feeding', 'admin'),
(203, 'Baby Furniture', 'Babies & Toys', 'Nursery', 'admin'),
(204, 'Mattresses & Bedding', 'Babies & Toys', 'Nursery', 'admin'),
(205, 'Sanitizers', 'Babies & Toys', 'Nursery', 'admin'),
(206, 'Activity Gym & Playmats', 'Babies & Toys', 'Baby & Toddler Toys', 'admin'),
(207, 'Basic & Life Skill Toys', 'Babies & Toys', 'Baby & Toddler Toys', 'admin'),
(208, 'Bath Toys', 'Babies & Toys', 'Baby & Toddler Toys', 'admin'),
(209, 'Building Block Toys', 'Babies & Toys', 'Baby & Toddler Toys', 'admin'),
(210, 'Crib Toys & Attachments', 'Babies & Toys', 'Baby & Toddler Toys', 'admin'),
(211, 'Early Development Toys', 'Babies & Toys', 'Baby & Toddler Toys', 'admin'),
(212, 'Reading & Writing', 'Babies & Toys', 'Baby & Toddler Toys', 'admin'),
(214, 'Bath Mats', 'Home & Lifestyle', 'Bath', 'admin'),
(215, 'Bath Towels', 'Home & Lifestyle', 'Bath', 'admin'),
(216, 'Bathrobes', 'Home & Lifestyle', 'Bath', 'admin'),
(217, 'Bath Scales', 'Home & Lifestyle', 'Bath', 'admin'),
(218, 'Bath Shelving', 'Home & Lifestyle', 'Bath', 'admin'),
(219, 'Shower Caddies & Hangers', 'Home & Lifestyle', 'Bath', 'admin'),
(220, 'Shower Curtains', 'Home & Lifestyle', 'Bath', 'admin'),
(221, 'Towel Rails & Warmers', 'Home & Lifestyle', 'Bath', 'admin'),
(222, 'Bed Sheets', 'Home & Lifestyle', 'Bedding', 'admin'),
(223, 'Bedding Accessories', 'Home & Lifestyle', 'Bedding', 'admin'),
(224, 'Blankets & Throws', 'Home & Lifestyle', 'Bedding', 'admin'),
(225, 'Comforters, Quilts & Duvets', 'Home & Lifestyle', 'Bedding', 'admin'),
(226, 'Mattress Protectors', 'Home & Lifestyle', 'Bedding', 'admin'),
(227, 'Pillow Cases', 'Home & Lifestyle', 'Bedding', 'admin'),
(228, 'Pillows & Bolsters', 'Home & Lifestyle', 'Bedding', 'admin'),
(229, 'Artificial Flowers & Plants', 'Home & Lifestyle', 'Decor', 'admin'),
(230, 'Candles & Candleholders', 'Home & Lifestyle', 'Decor', 'admin'),
(231, 'Clocks', 'Home & Lifestyle', 'Decor', 'admin'),
(232, 'Curtains', 'Home & Lifestyle', 'Decor', 'admin'),
(233, 'Cushions & Covers', 'Home & Lifestyle', 'Decor', 'admin'),
(234, 'Mirrors', 'Home & Lifestyle', 'Decor', 'admin'),
(235, 'Picture Frames', 'Home & Lifestyle', 'Decor', 'admin'),
(236, 'Rugs & Carpets', 'Home & Lifestyle', 'Decor', 'admin'),
(237, 'Vases & Vessels', 'Home & Lifestyle', 'Decor', 'admin'),
(238, 'Wall Stickers & Decals', 'Home & Lifestyle', 'Decor', 'admin'),
(239, 'Bedroom', 'Home & Lifestyle', 'Furniture', 'admin'),
(240, 'Gaming Furniture', 'Home & Lifestyle', 'Furniture', 'admin'),
(241, 'Home Office', 'Home & Lifestyle', 'Furniture', 'admin'),
(242, 'Kitchen Dinning', 'Home & Lifestyle', 'Furniture', 'admin'),
(243, 'Living Room', 'Home & Lifestyle', 'Furniture', 'admin'),
(244, 'Bakeware', 'Home & Lifestyle', 'Kitchen & Dining', 'admin'),
(245, 'Coffee & Tea', 'Home & Lifestyle', 'Kitchen & Dining', 'admin'),
(246, 'Cookware', 'Home & Lifestyle', 'Kitchen & Dining', 'admin'),
(247, 'Dinnerware', 'Home & Lifestyle', 'Kitchen & Dining', 'admin'),
(248, 'Drinkware', 'Home & Lifestyle', 'Kitchen & Dining', 'admin'),
(249, 'Kitchen & Table Linen', 'Home & Lifestyle', 'Kitchen & Dining', 'admin'),
(250, 'Kitchen Storage & Accessories', 'Home & Lifestyle', 'Kitchen & Dining', 'admin'),
(251, 'Kitchen Utensils', 'Home & Lifestyle', 'Kitchen & Dining', 'admin'),
(252, 'Knives & Accessories', 'Home & Lifestyle', 'Kitchen & Dining', 'admin'),
(253, 'Serveware', 'Home & Lifestyle', 'Kitchen & Dining', 'admin'),
(254, 'Ceiling Lights', 'Home & Lifestyle', 'Lighting', 'admin'),
(255, 'Floor Lamps', 'Home & Lifestyle', 'Lighting', 'admin'),
(256, 'Lamp Shades', 'Home & Lifestyle', 'Lighting', 'admin'),
(257, 'Light Bulbs', 'Home & Lifestyle', 'Lighting', 'admin'),
(258, 'Lighting Components & Accessories in Pakistan', 'Home & Lifestyle', 'Lighting', 'admin'),
(259, 'Outdoor Lighting', 'Home & Lifestyle', 'Lighting', 'admin'),
(260, 'Rechargeables & Flashlights', 'Home & Lifestyle', 'Lighting', 'admin'),
(261, 'Table Lamps', 'Home & Lifestyle', 'Lighting', 'admin'),
(262, 'Wall LIghts & Sconces', 'Home & Lifestyle', 'Lighting', 'admin'),
(263, NULL, 'Home & Lifestyle', 'Laundry & Cleanings', 'admin'),
(264, 'Fixtures & Plumbing', 'Home & Lifestyle', 'Tools, DIY & Outdoor', 'admin'),
(265, 'Electrical', 'Home & Lifestyle', 'Tools, DIY & Outdoor', 'admin'),
(266, 'Hand Tools', 'Home & Lifestyle', 'Tools, DIY & Outdoor', 'admin'),
(267, 'lawn & Garden', 'Home & Lifestyle', 'Tools, DIY & Outdoor', 'admin'),
(268, 'Power Tools', 'Home & Lifestyle', 'Tools, DIY & Outdoor', 'admin'),
(269, 'Security', 'Home & Lifestyle', 'Tools, DIY & Outdoor', 'admin'),
(270, 'Art Supplies', 'Home & Lifestyle', 'Stationery & Craft', 'admin'),
(271, 'Gifts & Wrapping', 'Home & Lifestyle', 'Stationery & Craft', 'admin'),
(272, 'Packaging & Cartons', 'Home & Lifestyle', 'Stationery & Craft', 'admin'),
(273, 'Paper Products', 'Home & Lifestyle', 'Stationery & Craft', 'admin'),
(274, 'School & Office Equipments', 'Home & Lifestyle', 'Stationery & Craft', 'admin'),
(275, 'Writing & Correction', 'Home & Lifestyle', 'Stationery & Craft', 'admin'),
(276, 'Books', 'Home & Lifestyle', 'Media, Music & Books', 'admin'),
(277, 'Ebooks', 'Home & Lifestyle', 'Media, Music & Books', 'admin'),
(278, 'Magazines', 'Home & Lifestyle', 'Media, Music & Books', 'admin'),
(279, 'Musical Instruments', 'Home & Lifestyle', 'Media, Music & Books', 'admin'),
(280, 'Donate to Healthcare', 'Home & Lifestyle', 'Charity & Donation', 'admin'),
(281, 'Donate to Shelter', 'Home & Lifestyle', 'Charity & Donation', 'admin'),
(282, 'Donate to Educate', 'Home & Lifestyle', 'Charity & Donation', 'admin'),
(283, 'Others', 'Home & Lifestyle', 'Charity & Donation', 'admin'),
(284, 'Unstitched Fabric', 'Women\'s Fashion', 'Clothing', 'admin'),
(285, 'Kurtas', 'Women\'s Fashion', 'Clothing', 'admin'),
(286, 'Shalwaar Kameez', 'Women\'s Fashion', 'Clothing', 'admin'),
(287, 'Formal Wear', 'Women\'s Fashion', 'Clothing', 'admin'),
(288, 'Muslim Wear', 'Women\'s Fashion', 'Clothing', 'admin'),
(289, 'Pants, Palazzos & Capris', 'Women\'s Fashion', 'Clothing', 'admin'),
(290, 'Dupattas, Stoles & Shawls', 'Women\'s Fashion', 'Clothing', 'admin'),
(291, 'Blouses & Shirts', 'Women\'s Fashion', 'Tops', 'admin'),
(292, 'Tunics', 'Women\'s Fashion', 'Tops', 'admin'),
(293, 'T-Shirts', 'Women\'s Fashion', 'Tops', 'admin'),
(294, 'Tanks & Camisoles', 'Women\'s Fashion', 'Tops', 'admin'),
(295, 'Sleep & Loungewear', 'Women\'s Fashion', 'Lingerie, Sleep & Lounge', 'admin'),
(296, 'Bras', 'Women\'s Fashion', 'Lingerie, Sleep & Lounge', 'admin'),
(297, 'Panties', 'Women\'s Fashion', 'Lingerie, Sleep & Lounge', 'admin'),
(298, 'Lingerie Sets', 'Women\'s Fashion', 'Lingerie, Sleep & Lounge', 'admin'),
(299, 'Shape Wear', 'Women\'s Fashion', 'Lingerie, Sleep & Lounge', 'admin'),
(300, 'Camisoles & Slips', 'Women\'s Fashion', 'Lingerie, Sleep & Lounge', 'admin'),
(301, 'Robes', 'Women\'s Fashion', 'Lingerie, Sleep & Lounge', 'admin'),
(302, 'Pants', 'Women\'s Fashion', 'Pants & Leggings', 'admin'),
(303, 'leggings', 'Women\'s Fashion', 'Pants & Leggings', 'admin'),
(304, 'Top-Handle Bags', 'Women\'s Fashion', 'Women\'s Bags', 'admin'),
(305, 'Cross-body & Shoulder Bags', 'Women\'s Fashion', 'Women\'s Bags', 'admin'),
(306, 'Tote Bags', 'Women\'s Fashion', 'Women\'s Bags', 'admin'),
(307, 'Clutches', 'Women\'s Fashion', 'Women\'s Bags', 'admin'),
(308, 'Wallets & Accessories', 'Women\'s Fashion', 'Women\'s Bags', 'admin'),
(309, 'Wristlets', 'Women\'s Fashion', 'Women\'s Bags', 'admin'),
(310, 'Scarves', 'Women\'s Fashion', 'Accessories', 'admin'),
(311, 'Belts', 'Women\'s Fashion', 'Accessories', 'admin'),
(312, 'Socks & Tights', 'Women\'s Fashion', 'Accessories', 'admin'),
(313, 'Gloves', 'Women\'s Fashion', 'Accessories', 'admin'),
(314, 'Hats & Caps', 'Women\'s Fashion', 'Accessories', 'admin'),
(315, 'Sandals', 'Women\'s Fashion', 'Shoes', 'admin'),
(316, 'Flat Shoes', 'Women\'s Fashion', 'Shoes', 'admin'),
(317, 'Heels', 'Women\'s Fashion', 'Shoes', 'admin'),
(318, 'Khusa & Kohlapuri', 'Women\'s Fashion', 'Shoes', 'admin'),
(319, 'Slides & Flip Flops', 'Women\'s Fashion', 'Shoes', 'admin'),
(320, 'Wedges', 'Women\'s Fashion', 'Shoes', 'admin'),
(321, 'Sneakers', 'Women\'s Fashion', 'Shoes', 'admin'),
(322, 'Boots', 'Women\'s Fashion', 'Shoes', 'admin'),
(323, 'Casual Shirts', 'Men\'s Fashion', 'Shirts', 'admin'),
(324, 'Formal Shirts', 'Men\'s Fashion', 'Shirts', 'admin'),
(325, 'Chinos', 'Men\'s Fashion', 'Pants', 'admin'),
(326, 'Jeans', 'Men\'s Fashion', 'Pants', 'admin'),
(327, 'Joggers & Sweats', 'Men\'s Fashion', 'Pants', 'admin'),
(328, 'Cargos', 'Men\'s Fashion', 'Pants', 'admin'),
(329, 'Unstitched Fabrics', 'Men\'s Fashion', 'Traditional Clothing', 'admin'),
(330, 'Shalwar', 'Men\'s Fashion', 'Traditional Clothing', 'admin'),
(331, 'Shawls', 'Men\'s Fashion', 'Traditional Clothing', 'admin'),
(332, 'Briefs', 'Men\'s Fashion', 'Underwear', 'admin'),
(333, 'Trunk & Boxers', 'Men\'s Fashion', 'Underwear', 'admin'),
(334, 'Nightwear', 'Men\'s Fashion', 'Underwear', 'admin'),
(335, 'Slip-Ons & Loafers', 'Men\'s Fashion', 'Shoes', 'admin'),
(336, 'Sneaker', 'Men\'s Fashion', 'Shoes', 'admin'),
(337, 'House Slippers', 'Men\'s Fashion', 'Shoes', 'admin'),
(338, 'Formal Shoes', 'Men\'s Fashion', 'Shoes', 'admin'),
(339, 'Boot', 'garments', 'garments category', 'admin'),
(340, 'Khusa & Kolapuri', 'Men\'s Fashion', 'Shoes', 'admin'),
(341, 'Shoes Accessories', 'Men\'s Fashion', 'Shoes', 'admin'),
(342, 'Hats&Cap', 'Men\'s Fashion', 'Accessories', 'admin'),
(343, 'Ties', 'Men\'s Fashion', 'Accessories', 'admin'),
(344, 'Belt', 'Men\'s Fashion', 'Accessories', 'admin'),
(345, 'Glove', 'Men\'s Fashion', 'Accessories', 'admin'),
(346, 'Umbrellas', 'Men\'s Fashion', 'Accessories', 'admin'),
(347, 'Bow Ties', 'Men\'s Fashion', 'Accessories', 'admin'),
(348, 'Mens Bags', 'Men\'s Fashion', 'Accessories', 'admin'),
(349, 'Wallets', 'Men\'s Fashion', 'Accessories', 'admin'),
(350, 'Business', 'Watches & Accessories', 'Men\'s Watches', 'admin'),
(351, 'Casual', 'Watches & Accessories', 'Men\'s Watches', 'admin'),
(352, 'Fashion', 'Watches & Accessories', 'Men\'s Watches', 'admin'),
(353, 'Business Watches', 'Watches & Accessories', 'Women\'s Watches', 'admin'),
(354, 'Fashion Watches', 'Watches & Accessories', 'Women\'s Watches', 'admin'),
(355, 'Men Sunglasses', 'Watches & Accessories', 'Sunglasses', 'admin'),
(356, 'Women Sunglasses', 'Watches & Accessories', 'Sunglasses', 'admin'),
(357, 'UniSex', 'Watches & Accessories', 'Sunglasses', 'admin'),
(358, 'Kids', 'Watches & Accessories', 'Sunglasses', 'admin'),
(359, 'Men Eyeglasses', 'Watches & Accessories', 'Eyeglasses', 'admin'),
(360, 'Women Eyeglasses', 'Watches & Accessories', 'Eyeglasses', 'admin'),
(361, 'Earrings', 'Watches & Accessories', 'Women Fashion Jewellery', 'admin'),
(362, 'Shirt Accessories', 'Watches & Accessories', 'Men Fashion Jewellery', 'admin'),
(363, 'Running Shoes', 'Sports & Outdoor', 'Men Shoes & Clothing', 'admin'),
(364, 'Clothings', 'Sports & Outdoor', 'Men Shoes & Clothing', 'admin'),
(365, 'Shoes', 'Sports & Outdoor', 'Men Shoes & Clothing', 'admin'),
(366, 'Accessories', 'Sports & Outdoor', 'Men Shoes & Clothing', 'admin'),
(367, 'Bags', 'Sports & Outdoor', 'Men Shoes & Clothing', 'admin'),
(368, 'Clothing', 'Sports & Outdoor', 'Women Shoes & Clothing', 'admin'),
(369, 'Women Shoes', 'Sports & Outdoor', 'Women Shoes & Clothing', 'admin'),
(370, 'Women Accessories', 'Sports & Outdoor', 'Women Shoes & Clothing', 'admin'),
(371, 'Women Bags', 'Sports & Outdoor', 'Women Shoes & Clothing', 'admin'),
(372, 'Camping & Hiking', 'Sports & Outdoor', 'Outdoor Recreation', 'admin'),
(373, 'Bikes', 'Sports & Outdoor', 'Outdoor Recreation', 'admin'),
(374, 'Bike Lights & Reflactors', 'Sports & Outdoor', 'Outdoor Recreation', 'admin'),
(375, 'Fishing', 'Sports & Outdoor', 'Outdoor Recreation', 'admin'),
(376, 'Golf', 'Sports & Outdoor', 'Outdoor Recreation', 'admin'),
(377, 'Yoga', 'Sports & Outdoor', 'Exercise & Fitness', 'admin'),
(378, 'Fitness Accessories', 'Sports & Outdoor', 'Exercise & Fitness', 'admin'),
(379, 'Cardio Equipment', 'Sports & Outdoor', 'Exercise & Fitness', 'admin'),
(380, 'Weight', 'Sports & Outdoor', 'Exercise & Fitness', 'admin'),
(381, 'Goggles', 'Sports & Outdoor', 'Water Sport', 'admin'),
(382, 'Floaties', 'Sports & Outdoor', 'Water Sport', 'admin'),
(383, 'Diving & Snorkilling', 'Sports & Outdoor', 'Water Sport', 'admin'),
(384, 'Boxing Gloves', 'Sports & Outdoor', 'Boxing & Martial Arts', 'admin'),
(385, 'Badminton', 'Sports & Outdoor', 'Racket Sports', 'admin'),
(386, 'Table Tennis', 'Sports & Outdoor', 'Racket Sports', 'admin'),
(387, 'Football', 'Sports & Outdoor', 'Team Sports', 'admin'),
(388, 'Basket Ball', 'Sports & Outdoor', 'Team Sports', 'admin'),
(389, 'Cricket', 'Sports & Outdoor', 'Team Sports', 'admin'),
(390, 'Baseball', 'Sports & Outdoor', 'Team Sports', 'admin'),
(391, 'Auto tires & Wheels', 'Automotive & Motorbike', 'Automotive', 'admin'),
(392, 'Auto Oil & Fluids', 'Automotive & Motorbike', 'Automotive', 'admin'),
(393, 'Interior Accessories', 'Automotive & Motorbike', 'Automotive', 'admin'),
(394, 'Auto Tools & Equipment', 'Automotive & Motorbike', 'Automotive', 'admin'),
(395, 'Auto Parts & Spares', 'Automotive & Motorbike', 'Automotive', 'admin'),
(396, 'GPS', 'Automotive & Motorbike', 'Automotive', 'admin'),
(397, 'Floor Mats', 'Automotive & Motorbike', 'Automotive', 'admin'),
(398, 'Air Freshers', 'Automotive & Motorbike', 'Automotive', 'admin'),
(399, 'Consoles', 'Automotive & Motorbike', 'Automotive', 'admin'),
(400, 'Brakes', 'Automotive & Motorbike', 'Services & Installations', 'admin'),
(401, 'Additive', 'Automotive & Motorbike', 'Auto Oils & Fluids', 'admin'),
(402, 'Transmission Fluid', 'Automotive & Motorbike', 'Auto Oils & Fluids', 'admin'),
(403, 'Auto Tires', 'Automotive & Motorbike', 'Auto Tires & Wheels', 'admin'),
(404, 'Wheel Accessories', 'Automotive & Motorbike', 'Auto Tires & Wheels', 'admin'),
(405, 'Polish', 'Automotive & Motorbike', 'Auto Care', 'admin'),
(406, 'Vacuum', 'Automotive & Motorbike', 'Auto Care', 'admin'),
(407, 'Car Video', 'Automotive & Motorbike', 'Auto Electronics', 'admin'),
(408, 'Audio & Video Accessories', 'Automotive & Motorbike', 'Auto Electronics', 'admin'),
(409, 'In-Dash DVD & Video', 'Automotive & Motorbike', 'Auto Electronics', 'admin'),
(410, 'Speakers', 'Automotive & Motorbike', 'Auto Electronics', 'admin'),
(411, 'Scooters', 'Automotive & Motorbike', 'Motorcycle', 'admin'),
(412, 'Electric Bikes', 'Automotive & Motorbike', 'Motorcycle', 'admin'),
(413, 'Standard Bikes', 'Automotive & Motorbike', 'Motorcycle', 'admin'),
(414, 'ATVs & UTVs', 'Automotive & Motorbike', 'Motorcycle', 'admin'),
(415, 'Drive-train & Transmission', 'Automotive & Motorbike', 'Moto Parts & Accessories', 'admin'),
(416, 'Tires & Wheels', 'Automotive & Motorbike', 'Moto Parts & Accessories', 'admin'),
(417, 'Moto Covers', 'Automotive & Motorbike', 'Moto Parts & Accessories', 'admin'),
(418, 'Spare Parts', 'Automotive & Motorbike', 'Moto Parts & Accessories', 'admin'),
(419, 'Helmet', 'Automotive & Motorbike', 'Motorcycle Riding Gear', 'admin'),
(420, 'Moto Gloves', 'Automotive & Motorbike', 'Motorcycle Riding Gear', 'admin'),
(421, 'Chest & Back Protector', 'Automotive & Motorbike', 'Motorcycle Riding Gear', 'admin'),
(422, 'Moto Eye Wear', 'Automotive & Motorbike', 'Motorcycle Riding Gear', 'admin'),
(426, 'milk test whitener', 'Milk', 'whitener', 'admin'),
(427, 'sub sub\'s test', 'comma\'s test', 'sub comma\'s test', 'admin'),
(428, 'sub sub\'s test &', 'comma+%26+again', 'sub comma\'s & again', 'admin'),
(429, 'bath & bath\'s', 'Health+%26+Beauty', 'Bath & Body', 'admin'),
(430, 'hvj,h', 'Home+%26+Lifestyle', 'Tools, DIY & Outdoor', 'admin'),
(431, 'bvgc\' &', 'Babies & Toys', 'Toys & Games', 'admin'),
(432, 'bath & bath\'s bath', 'Health & Beauty', 'Bath & Body', 'admin'),
(435, 'Sprite', 'Food & Drink', 'Soft Drink', 'admin'),
(436, 'Shirts', 'Kids Collection', 'Clothing', 'admin'),
(437, 'winter collection', 'Garments', 'Ladies Garments', 'admin'),
(438, 'Footwear', 'Shoes', 'Variant Shoes', 'admin'),
(439, 'Mens Accessories', 'Accessories', 'Mens', 'admin'),
(440, 'Variety Home Textile', 'Home Textile', 'Home Accessories', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `promo_code`
--

CREATE TABLE `promo_code` (
  `pk_id` int(11) NOT NULL,
  `promo_code` varchar(500) DEFAULT NULL,
  `use_time` int(11) DEFAULT 0,
  `discount_type` varchar(500) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `min_total` int(255) DEFAULT NULL,
  `max_total` int(255) DEFAULT NULL,
  `discount_forr` varchar(55) DEFAULT NULL,
  `discount_category` varchar(255) DEFAULT '0',
  `status` int(11) DEFAULT NULL COMMENT '0 for active, 1 for inactive',
  `discount_amount` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_code`
--

INSERT INTO `promo_code` (`pk_id`, `promo_code`, `use_time`, `discount_type`, `start_date`, `end_date`, `min_total`, `max_total`, `discount_forr`, `discount_category`, `status`, `discount_amount`) VALUES
(48, 'fff', 5, 'fixed', '2021-02-22', '2021-02-23', NULL, NULL, NULL, 'Trousers', 1, 899),
(49, '123', 3, 'fixed', NULL, NULL, NULL, NULL, NULL, 'Trousers', 1, 200),
(50, 'rrr', 5, 'fixed', '2021-02-22', '2021-02-23', NULL, NULL, NULL, 'Trousers', 1, 899),
(51, 'FREEFORBABAR', 1, 'fixed', '2021-02-24', '2021-02-28', NULL, NULL, NULL, 'Polo', 0, 899);

-- --------------------------------------------------------

--
-- Table structure for table `promo_for`
--

CREATE TABLE `promo_for` (
  `pk_id` int(11) NOT NULL,
  `promo_id` int(11) DEFAULT NULL,
  `discount_for` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_for`
--

INSERT INTO `promo_for` (`pk_id`, `promo_id`, `discount_for`) VALUES
(48, 51, 'Babarshah94@gmail.com'),
(47, 50, 'nabeel_tanvir@yahoo.com'),
(46, 49, 'abdullahfarooqi26@gmail.com'),
(45, 48, 'nabeel_tanvir@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `pk_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `verification_code` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reset_password`
--

INSERT INTO `reset_password` (`pk_id`, `username`, `verification_code`, `created_at`) VALUES
(1, 'nabtan60@gmail.com', '5e2947ca4511f', '2020-01-23 07:14:18'),
(2, 'nabtan60@gmail.com', '5e2bf04defe34', '2020-01-25 07:37:49'),
(3, 'ashwarya1730@gmail.com', '5fc7634ae3f0b', '2020-12-02 09:50:02'),
(4, 'nabtan60@gmail.com', '5feecf7766c22', '2021-01-01 07:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `return_reason`
--

CREATE TABLE `return_reason` (
  `pk_id` int(11) NOT NULL,
  `user_id` int(12) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `size_detail`
--

CREATE TABLE `size_detail` (
  `pk_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(155) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size_detail`
--

INSERT INTO `size_detail` (`pk_id`, `product_id`, `quantity`, `size`) VALUES
(327, 182, 98, 'ALL'),
(40, 181, 12, '42'),
(39, 181, 4, '41'),
(38, 180, 6, '40'),
(37, 180, 3, '39'),
(36, 179, 10, 'Small'),
(35, 179, 8, 'Medium'),
(34, 178, 3, '12-18 Months'),
(33, 178, 4, '18-24 Months'),
(331, 183, 98, 'ALL'),
(333, 184, 99, 'all Sizes are available'),
(335, 185, 100, 'CASUAL'),
(48, 186, -2, 'Small'),
(49, 186, 2, 'Large'),
(50, 187, 0, '12-18 Months'),
(51, 187, 2, '18-24 Months'),
(1337, 188, 3, '18-24 Months'),
(1336, 188, 1, '12-18 Months'),
(1335, 188, 3, '9-12 Months'),
(1329, 189, 3, '18-24 Months'),
(1328, 189, -1, '9-12 Months'),
(1303, 190, 3, '18-24 Months'),
(1088, 191, 2, '11-12 Months'),
(1087, 191, 2, '9-10 Months'),
(1072, 192, 2, '5-6 Years'),
(1071, 192, 3, '4-5 Years'),
(1070, 192, 2, '3-4 Years'),
(1069, 192, 3, '2-3 Years'),
(1064, 193, 2, '5-6 Years'),
(1063, 193, -4, '4-5 Years'),
(1062, 193, 2, '3-4 Years'),
(1061, 193, -3, '2-3 Years'),
(1080, 194, -3, '5-6 Years'),
(1079, 194, 3, '4-5 Years'),
(1078, 194, 2, '3-4 Years'),
(1077, 194, 2, '2-3 Years'),
(1056, 195, 1, '5-6 Years'),
(1055, 195, 0, '4-5 Years'),
(1054, 195, 2, '3-4 Years'),
(1053, 195, 2, '2-3 Years'),
(465, 196, 3, '5-6 Years'),
(464, 196, 3, '4-5 Years'),
(463, 196, 3, '3-4 Years'),
(462, 196, 2, '2-3 Years'),
(1299, 255, 1, '4'),
(1334, 188, 2, '6-9 Months'),
(1327, 189, 2, '6-9 Months'),
(144, 197, 3, '18-24 Months'),
(145, 197, 5, '9-12 Months'),
(146, 198, 1, '18-24 Months'),
(147, 198, 5, '9-12 Months'),
(148, 199, 3, '18-24 Months'),
(149, 199, 5, '9-12 Months'),
(150, 200, 1, '12-18 Months'),
(151, 200, 5, '12-18 Months'),
(384, 204, 1, '88'),
(1086, 191, 2, '7-8 Months'),
(272, 201, 4, '9'),
(273, 201, 15, '11'),
(389, 202, 30, '7'),
(388, 202, 15, '6'),
(1085, 191, 2, '6-7 Months'),
(385, 211, 1, '77'),
(387, 203, 1, 'M'),
(390, 212, 1, '9'),
(393, 213, 4, '0'),
(469, 214, 1, 'Default'),
(470, 215, 1, 'Default'),
(1036, 216, 15, '5-6 years'),
(1035, 216, 14, '3-4 years'),
(1034, 216, 15, '2-3 years'),
(1033, 216, 17, '12-18 months'),
(1032, 216, 1, '9-12 months'),
(966, 217, 15, '5-6 years'),
(965, 217, 16, '3-4 years'),
(964, 217, 16, '2-3 years'),
(963, 217, 16, '18-24 months'),
(962, 217, 15, '12-18 months'),
(954, 218, 14, '5-6 years'),
(953, 218, 15, '3-4 years'),
(950, 218, 16, '12-18 months'),
(951, 218, 13, '18-24 months'),
(1023, 219, 16, '3-4 years'),
(1022, 219, 17, '2-3 years'),
(929, 220, 15, '3-4 years'),
(928, 220, 14, '2-3 years'),
(1011, 221, 16, '3-4 years'),
(1010, 221, 16, '2-3 years'),
(1009, 221, 18, '18-24 months'),
(917, 222, 15, '3-4 years'),
(916, 222, 14, '2-3 years'),
(915, 222, 15, '18-24 months'),
(914, 222, 16, '12-18 months'),
(1388, 256, 1, '4'),
(1323, 226, 10, 'Large'),
(1322, 226, 13, 'Medium'),
(1321, 226, 7, 'Small'),
(870, 227, 12, 'Large'),
(869, 227, 0, 'Medium'),
(868, 227, 4, 'Small'),
(864, 229, 8, 'Extra Large'),
(850, 231, 15, 'Large'),
(849, 231, 18, 'Medium'),
(848, 231, 8, 'Small'),
(905, 232, 15, '3-4 years'),
(904, 232, 15, '2-3 years'),
(903, 232, 17, '18-24 months'),
(902, 232, 17, '12-18 months'),
(1001, 233, 15, '3-4 years'),
(1000, 233, 18, '2-3 years'),
(1124, 240, 3, '5-6 years'),
(1048, 234, 16, '5-6 years'),
(1047, 234, 16, '3-4 years'),
(1046, 234, 10, '2-3 years'),
(1045, 234, 9, '18-24 months'),
(989, 235, 16, '3-4 years'),
(988, 235, 15, '2-3 years'),
(987, 235, 17, '18-24 months'),
(986, 235, 17, '12-18 months'),
(977, 236, 16, '3-4 years'),
(976, 236, 17, '2-3 years'),
(975, 236, 17, '18-24 months'),
(974, 236, 13, '12-18 months'),
(856, 230, 24, 'Extra Large'),
(574, 237, 20, '3'),
(855, 230, 17, 'Large'),
(862, 229, 0, 'Medium'),
(1309, 225, 9, 'Large'),
(1317, 223, 9, 'Medium'),
(927, 220, 14, '18-24 months'),
(926, 220, 16, '12-18 months'),
(1021, 219, 16, '18-24 Months'),
(1020, 219, 18, '12-18 months'),
(999, 233, 17, '18-24 months'),
(998, 233, 17, '12-18 months'),
(854, 230, 12, 'Medium'),
(863, 229, 5, 'Large'),
(1316, 223, 5, 'Small'),
(731, 238, 4, '9-12 Months'),
(730, 238, 4, '3'),
(861, 229, 8, 'Small'),
(1308, 225, -1, 'Medium'),
(1307, 225, 3, 'Small'),
(1044, 234, 11, '12-18 months'),
(1043, 234, 10, '9-12 months'),
(1031, 216, 1, '9-12 Months'),
(840, 239, 17, '12-18 months'),
(841, 239, 18, '18-24 Months'),
(842, 239, 16, '2-3 years'),
(843, 239, 16, '3-4 years'),
(844, 239, 17, '5-6 years'),
(901, 232, 13, '9-12 months'),
(906, 232, 17, '5-6 years'),
(913, 222, 13, '9-12 months'),
(918, 222, 16, '5-6 years'),
(925, 220, 12, '9-12 months'),
(930, 220, 16, '5-6 years'),
(952, 218, 15, '2-3 years'),
(949, 218, 14, '9-12 Months'),
(961, 217, 17, '9-12 months'),
(973, 236, 18, '9-12 months'),
(978, 236, 16, '5-6 years'),
(985, 235, 17, '9-12 months'),
(990, 235, 15, '5-6 years'),
(997, 233, 16, '9-12 months'),
(1002, 233, 16, '5-6 years'),
(1008, 221, 17, '12-18 months'),
(1012, 221, 16, '5-6 years'),
(1019, 219, 16, '9-12 months'),
(1024, 219, 16, '5-6 years'),
(1123, 240, 3, '4-5 years'),
(1122, 240, 3, '3-4 years'),
(1121, 240, 2, '2-3 years'),
(1136, 241, 7, 'Medium'),
(1135, 241, 19, 'Small'),
(1127, 242, 1, '9'),
(1128, 243, 1, '8'),
(1137, 241, 11, 'medium'),
(1138, 241, 18, 'Small'),
(1147, 245, 3, 'large'),
(1146, 245, 3, 'medium'),
(1145, 245, 2, 'Small'),
(1148, 246, 12, 'Small'),
(1149, 246, 9, 'Medium'),
(1150, 246, 8, 'large'),
(1387, 247, 3, 'large'),
(1386, 247, 1, 'Medium'),
(1385, 247, 1, 'Small'),
(1381, 248, 7, 'large'),
(1380, 248, 1, 'medium'),
(1379, 248, 4, 'Small'),
(1375, 249, 5, 'medium'),
(1374, 249, 12, 'Small'),
(1371, 250, 18, 'Large'),
(1370, 250, 9, 'Medium'),
(1367, 251, 13, 'Large'),
(1366, 251, 12, 'Medium'),
(1365, 251, 10, 'Small'),
(1361, 252, 2, 'Large'),
(1360, 252, 7, 'medium'),
(1359, 252, 8, 'Small'),
(1355, 253, 8, 'Large'),
(1354, 253, 2, 'Medium'),
(1353, 253, 12, 'Small'),
(1349, 254, 12, 'Large'),
(1348, 254, 13, 'medium'),
(1347, 254, 13, 'Small'),
(1302, 190, 1, '12-18 Months'),
(1389, 257, 5, '9-12 months'),
(1390, 257, 5, '12-18 months'),
(1391, 257, 6, '18-24 months'),
(1392, 257, 9, '2-3 years'),
(1393, 257, 10, '5-6 years'),
(1394, 257, 5, '7-8 years'),
(1395, 257, 3, '9-10 years'),
(1396, 257, 5, '3-4 years'),
(1397, 258, 3, '12-18 months'),
(1398, 258, 1, '2-3 years'),
(1399, 258, 2, '3-4 years'),
(1400, 258, 2, '5-6 years'),
(1401, 259, 2, '2-3 years'),
(1402, 259, 1, '3-4 years'),
(1403, 259, 2, '5-6 years'),
(1404, 260, 3, '18-24 months'),
(1405, 260, 2, '2-3 years'),
(1406, 260, 3, '3-4 years'),
(1407, 260, 3, '5-6 years'),
(1409, 261, 1, '15*15'),
(1410, 261, 10, '25*15'),
(1411, 262, 1, '15*15'),
(1412, 263, 1, '15*15'),
(1413, 264, 1, '15*15'),
(1414, 265, 10, '5'),
(1416, 266, 10, '5'),
(1417, 267, 10, '20soft tbs'),
(1418, 268, 10, '1x30tbs'),
(1419, 269, 10, '2x10softgel'),
(1420, 270, 10, '1x30tbs'),
(1421, 271, 12, '1x20tbs'),
(1422, 272, 10, '1x30softgel'),
(1423, 273, 10, '1x30tbs'),
(1424, 274, 10, '1x60tbs'),
(1427, 275, 10, '60'),
(1431, 276, 20, '50'),
(1430, 276, 20, '50'),
(1432, 278, 20, '40'),
(1561, 279, 10, '20x20x10'),
(1560, 280, 100, '20x20x10'),
(1571, 281, 100, '20x20x10'),
(1557, 282, 100, '20x20x10'),
(1509, 283, 99, '20x20x10'),
(1508, 283, 99, '20x20x10'),
(1507, 283, 99, '20x20x10'),
(1545, 286, 100, '20x20x10'),
(1558, 287, 100, '20x20x10'),
(1547, 288, 100, '20x20x10'),
(1543, 289, 100, '20x20x10'),
(1541, 290, 100, '20x20x10'),
(1565, 291, 100, '20x20x10'),
(1550, 292, 100, '20x20x10'),
(1559, 293, 100, '20x20x10'),
(1551, 294, 100, '20x20x10'),
(1554, 295, 100, '20x20x10'),
(1563, 296, 100, '20x20x10'),
(1572, 297, 100, '20x20x10'),
(1562, 298, 100, '20x20x10'),
(1537, 299, 100, '20x20x10'),
(1564, 300, 100, '20x20x10'),
(1552, 301, 100, '20x20x10'),
(1553, 302, 100, '20x20x10'),
(1544, 303, 100, '20x20x10'),
(1510, 304, 100, '20x20x10'),
(1511, 305, 100, '20x20x10'),
(1538, 306, 100, '20x20x10'),
(1566, 307, 100, '20x20x10'),
(1567, 308, 100, '20x20x10'),
(1506, 309, 100, '20x20x10'),
(1540, 310, 100, '20x20x10'),
(1548, 311, 100, '20x20x10'),
(1542, 312, 100, '20x20x10'),
(1546, 313, 100, '20x20x10'),
(1570, 314, 100, '20x20x10'),
(1568, 315, 100, '20x20x10'),
(1549, 316, 100, '20x20x10'),
(1569, 317, 100, '20x20x10'),
(1573, 318, 100, '20x20x10'),
(1539, 319, 100, '20x20x10'),
(1474, 320, 1, '1piece'),
(1475, 320, 1, '1piece'),
(1476, 322, 1, '1x1p'),
(1477, 323, 1, '1x50strips'),
(1522, 324, 100, '16x16x10'),
(1519, 325, 100, '16x16x10'),
(1517, 326, 100, '16x16x10'),
(1524, 327, 100, '16x16x10'),
(1532, 328, 100, '16x16x10'),
(1515, 329, 100, '16x16x10'),
(1535, 330, 100, '16x16x10'),
(1485, 331, 1, '1x50strips'),
(1526, 332, 100, '16x16x10'),
(1536, 333, 100, '16x16x10'),
(1518, 334, 100, '16x16x10'),
(1516, 335, 100, '16x16x10'),
(1528, 336, 100, '16x16x10'),
(1512, 337, 100, '16x16x10'),
(1530, 338, 100, '16x16x10'),
(1513, 339, 100, '16x16x10'),
(1525, 340, 100, '16x16x10'),
(1529, 341, 100, '16x16x10'),
(1527, 342, 100, '16x16x10'),
(1523, 343, 100, '16x16x10'),
(1531, 344, 100, '16x16x10'),
(1520, 345, 100, '16x16x10'),
(1534, 346, 100, '16x16x10'),
(1521, 347, 100, '16x16x10'),
(1514, 348, 100, '16x16x10'),
(1533, 349, 100, '16x16x10'),
(1504, 350, 10, '14*16+2'),
(1505, 351, 1, '1pack'),
(1574, 352, 100, '20x20x10'),
(1575, 353, 100, '20x20x10'),
(1577, 354, 100, '16x16x10'),
(1578, 355, 1, '1x3piece'),
(1579, 356, 9, '2 years'),
(1580, 356, 26, '3 years'),
(1581, 356, 26, '4 years'),
(1582, 356, 25, '5-6 years'),
(1583, 356, 26, '7-8 years'),
(1584, 357, 23, '2 years'),
(1585, 357, 21, '3 years'),
(1586, 357, 23, '4 years'),
(1587, 357, 22, '5-6 years'),
(1588, 357, 22, '7-8 years'),
(1589, 358, 7, '2 years'),
(1590, 358, 13, '3 years'),
(1591, 358, 15, '4 years'),
(1592, 358, 15, '5-6 years'),
(1593, 358, 15, '7-8 years');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `SKU` int(11) NOT NULL,
  `main_category` varchar(500) DEFAULT NULL,
  `sub_category` varchar(500) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `username` varchar(155) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`SKU`, `main_category`, `sub_category`, `thumbnail`, `username`, `created_at`) VALUES
(10, 'garments', 'garments category', NULL, 'admin', '2018-05-04 05:47:25'),
(11, 'garments', 'kids category', NULL, 'admin', '2018-05-04 05:47:58'),
(12, 'garments', 'leather category', NULL, 'admin', '2018-05-04 05:48:29'),
(13, 'accessories', 'accessories', NULL, 'admin', '2018-05-04 05:48:59'),
(15, 'Clothes', 'Jeans', NULL, 'admin', '2018-09-19 09:29:48'),
(17, 'garments', 'Casual Shoes', NULL, 'admin', '2018-09-25 10:04:43'),
(22, 'TOWELS', 'TOWELS', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 10:55:21'),
(23, 'APPLIANCES', 'SMALL APPLIANCES - HAND BLENDERS', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:01:41'),
(24, 'APPLIANCES', 'CHOPPERS', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:02:05'),
(25, 'APPLIANCES', 'FOOD FACTORY/PROCESSORS', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:03:10'),
(26, 'APPLIANCES', 'ICE CREAM MAKER', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:03:36'),
(27, 'APPLIANCES', 'IRON', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:04:06'),
(28, 'APPLIANCES', 'KETTLES', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:04:37'),
(29, 'APPLIANCES', 'OVENS', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:05:26'),
(30, 'APPLIANCES', 'PIZZA MAKER', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:05:56'),
(31, 'APPLIANCES', 'ROTI MAKER', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:07:32'),
(32, 'APPLIANCES', 'SANDWICH MAKER', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:07:45'),
(33, 'APPLIANCES', 'STEAMER/FACIAL', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:08:18'),
(34, 'APPLIANCES', 'TOASTER', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-19 11:09:49'),
(36, 'TOWELS', 'Towels', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-26 11:52:51'),
(37, 'APPLIANCES', 'KITCHEN APPLIANCES', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-10-26 11:54:20'),
(38, 'Stationary', 'Stationary items', NULL, 'vendor@gmail.com', '2018-10-29 07:47:58'),
(39, 'Stationary', 'Stationary items', NULL, 'admin', '2018-10-29 07:49:38'),
(40, 'Food Products', 'Mouth Freshner', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-11-16 20:08:41'),
(41, 'KitchenWares', 'ThermoPots', NULL, 'MUHAY@NAVSONS.COM.PK', '2018-11-22 15:10:13'),
(43, 'Electronics', 'Mobile', NULL, 'danish@gmail.com', '2018-12-05 10:54:13'),
(44, 'Electronics', 'Mobile', NULL, 'admin', '2018-12-05 11:05:23'),
(45, 'Electronics Devices', 'Mobiles', NULL, 'admin', '2018-12-07 11:02:13'),
(46, 'Electronics Devices', 'Tablets', NULL, 'admin', '2018-12-07 11:02:25'),
(47, 'Electronics Devices', 'Laptops', NULL, 'admin', '2018-12-07 11:02:39'),
(48, 'Electronics Devices', 'Desktops', NULL, 'admin', '2018-12-07 11:03:04'),
(49, 'Electronics Devices', 'Gaming Consoles', NULL, 'admin', '2018-12-07 11:03:35'),
(50, 'Electronics Devices', 'Action/Video Cameras', NULL, 'admin', '2018-12-07 11:06:46'),
(51, 'Electronics Devices', 'Security Cameras', NULL, 'admin', '2018-12-07 11:07:13'),
(52, 'Electronics Devices', 'Digital Cameras', NULL, 'admin', '2018-12-07 11:07:32'),
(53, 'Electronics Accessories', 'Mobile Accessories', NULL, 'admin', '2018-12-07 11:09:47'),
(54, 'Electronics Accessories', 'Audio', NULL, 'admin', '2018-12-07 11:10:03'),
(55, 'Electronics Accessories', 'Wearable', NULL, 'admin', '2018-12-07 11:10:24'),
(56, 'Electronics Accessories', 'Consoles Accessories', NULL, 'admin', '2018-12-07 11:10:41'),
(57, 'Electronics Accessories', 'Camera Accessories', NULL, 'admin', '2018-12-07 11:11:22'),
(58, 'Electronics Accessories', 'Computer Accessories', NULL, 'admin', '2018-12-07 11:11:41'),
(59, 'Electronics Accessories', 'Storage', NULL, 'admin', '2018-12-07 11:11:58'),
(60, 'Electronics Accessories', 'Printers', NULL, 'admin', '2018-12-07 11:12:22'),
(61, 'Electronics Accessories', 'Computer Components', NULL, 'admin', '2018-12-07 11:12:47'),
(62, 'Electronics Accessories', 'Network Components', NULL, 'admin', '2018-12-07 11:13:20'),
(63, 'TV and Home Appliances', 'TV and Video Devices', NULL, 'admin', '2018-12-07 11:14:08'),
(64, 'TV & Home Appliances', 'Home Audio', NULL, 'admin', '2018-12-07 11:14:42'),
(65, 'TV & Home Appliances', 'TV Accessories', NULL, 'admin', '2018-12-07 11:15:07'),
(66, 'TV & Home Appliances', 'Large Appliances', NULL, 'admin', '2018-12-07 11:15:29'),
(67, 'TV & Home Appliances', 'Small Kitchen Appliances', NULL, 'admin', '2018-12-07 11:15:57'),
(68, 'TV & Home Appliances', 'Cooling & Air Treatment', NULL, 'admin', '2018-12-07 11:16:46'),
(69, 'TV & Home Appliances', 'Vacuums & Floor Care', NULL, 'admin', '2018-12-07 11:17:19'),
(70, 'TV & Home Appliances', 'Irons & Garments Care', NULL, 'admin', '2018-12-07 11:17:46'),
(71, 'TV & Home Appliances', 'Personal Care Appliances', NULL, 'admin', '2018-12-07 11:18:16'),
(72, 'Health & Beauty', 'Bath & Body', NULL, 'admin', '2018-12-07 11:19:36'),
(73, 'Health & Beauty', 'Beauty Tools', NULL, 'admin', '2018-12-07 11:20:02'),
(74, 'Health & Beauty', 'Fragrances', NULL, 'admin', '2018-12-07 11:22:44'),
(75, 'Health & Beauty', 'Hair Care', NULL, 'admin', '2018-12-07 11:22:59'),
(76, 'Health & Beauty', 'Makeup', NULL, 'admin', '2018-12-07 11:23:26'),
(77, 'Health & Beauty', 'Men\'s Care', NULL, 'admin', '2018-12-07 11:23:47'),
(78, 'Health & Beauty', 'Personal Care', NULL, 'admin', '2018-12-07 11:24:12'),
(79, 'Health & Beauty', 'Skin Care', NULL, 'admin', '2018-12-07 11:24:25'),
(80, 'Health & Beauty', 'Food Supplements', NULL, 'admin', '2018-12-07 11:25:16'),
(81, 'Health & Beauty', 'Medical Supplies', NULL, 'admin', '2018-12-07 11:25:36'),
(82, 'Babies & Toys', 'Baby Gear', NULL, 'admin', '2018-12-07 11:26:14'),
(83, 'Babies & Toys', 'Baby Personal Care', NULL, 'admin', '2018-12-07 11:26:34'),
(84, 'Babies & Toys', 'Clothing & Accessories', NULL, 'admin', '2018-12-07 11:29:34'),
(85, 'Babies & Toys', 'Diapering & Potty', NULL, 'admin', '2018-12-07 11:30:31'),
(86, 'Babies & Toys', 'Feeding', NULL, 'admin', '2018-12-07 11:30:51'),
(87, 'Babies & Toys', 'Nursery', NULL, 'admin', '2018-12-07 11:32:08'),
(88, 'Babies & Toys', 'Baby & Toddler Toys', NULL, 'admin', '2018-12-07 11:32:57'),
(89, 'Babies & Toys', 'Toys & Games', NULL, 'admin', '2018-12-07 11:33:23'),
(90, 'Babies & Toys', 'Remote Controls & Vehicles', NULL, 'admin', '2018-12-07 11:34:06'),
(91, 'Babies & Toys', 'Sports & Outdoor Play', NULL, 'admin', '2018-12-07 11:34:33'),
(92, 'Groceries & Pets', 'Beverages', NULL, 'admin', '2018-12-07 11:36:47'),
(93, 'Groceries & Pets', 'Breakfast, Choco & Snacks', NULL, 'admin', '2018-12-07 11:38:20'),
(94, 'Groceries & Pets', 'Food Staples', NULL, 'admin', '2018-12-07 11:38:35'),
(95, 'Groceries & Pets', 'Dairy & Chilled', NULL, 'admin', '2018-12-07 11:39:06'),
(96, 'Groceries & Pets', 'Laundry & Household', NULL, 'admin', '2018-12-07 11:45:44'),
(97, 'Groceries & Pets', 'Cat', NULL, 'admin', '2018-12-07 11:46:26'),
(98, 'Groceries & Pets', 'Dog', NULL, 'admin', '2018-12-07 11:46:46'),
(99, 'Groceries & Pets', 'Fish', NULL, 'admin', '2018-12-07 11:46:58'),
(100, 'Home & Lifestyle', 'Bath', NULL, 'admin', '2018-12-07 11:48:50'),
(101, 'Home & Lifestyle', 'Bedding', NULL, 'admin', '2018-12-07 11:49:10'),
(102, 'Health & Beauty', 'Decor', NULL, 'admin', '2018-12-07 11:49:23'),
(103, 'Home & Lifestyle', 'Furniture', NULL, 'admin', '2018-12-07 11:49:37'),
(104, 'garments', 'Kitchen & Dining', NULL, 'admin', '2018-12-07 11:50:05'),
(105, 'Home & Lifestyle', 'Lighting', NULL, 'admin', '2018-12-07 11:50:59'),
(106, 'Home & Lifestyle', 'Laundry & Cleanings', NULL, 'admin', '2018-12-07 11:51:25'),
(107, 'Home & Lifestyle', 'Tools, DIY & Outdoor', NULL, 'admin', '2018-12-07 11:51:57'),
(108, 'Home & Lifestyle', 'Stationery & Craft', NULL, 'admin', '2018-12-07 11:52:26'),
(109, 'Home & Lifestyle', 'Media, Music & Books', NULL, 'admin', '2018-12-07 11:53:05'),
(110, 'Home & Lifestyle', 'Charity & Donation', NULL, 'admin', '2018-12-07 11:54:19'),
(111, 'Women\'s Fashion', 'Clothing', NULL, 'admin', '2018-12-07 11:55:20'),
(112, 'Women\'s Fashion', 'Women\'s Bags', NULL, 'admin', '2018-12-07 11:55:43'),
(113, 'Women\'s Fashion', 'Shoes', NULL, 'admin', '2018-12-07 11:57:51'),
(114, 'Women\'s Fashion', 'Accessories', NULL, 'admin', '2018-12-07 11:58:13'),
(115, 'Women\'s Fashion', 'Lingerie, Sleep & Lounge', NULL, 'admin', '2018-12-07 12:03:01'),
(116, 'Women\'s Fashion', 'Girls Fashion', NULL, 'admin', '2018-12-07 12:03:34'),
(117, 'Women\'s Fashion', 'Travel & Luggage', NULL, 'admin', '2018-12-07 12:04:42'),
(118, 'Men\'s Fashion', 'Clothing', NULL, 'admin', '2018-12-07 12:05:04'),
(119, 'Men\'s Fashion', 'Men\'s Bags', NULL, 'admin', '2018-12-07 12:05:19'),
(120, 'Men\'s Fashion', 'Shoes', NULL, 'admin', '2018-12-07 12:05:43'),
(121, 'Men\'s Fashion', 'Accessories', NULL, 'admin', '2018-12-07 12:06:08'),
(122, 'Men\'s Fashion', 'Boys Fashion', NULL, 'admin', '2018-12-07 12:06:25'),
(123, 'Men\'s Fashion', 'Travel & Luggage', NULL, 'admin', '2018-12-07 12:06:48'),
(124, 'Watches & Accessories', 'Men\'s Watches', NULL, 'admin', '2018-12-07 12:12:52'),
(125, 'Watches & Accessories', 'Women\'s Watches', NULL, 'admin', '2018-12-07 12:14:14'),
(126, 'Watches & Accessories', 'Kids Watches', NULL, 'admin', '2018-12-07 12:14:41'),
(127, 'Watches & Accessories', 'Sunglasses', NULL, 'admin', '2018-12-07 12:15:01'),
(128, 'Watches & Accessories', 'Eyeglasses', NULL, 'admin', '2018-12-07 12:15:24'),
(129, 'Watches & Accessories', 'Women Fashion Jewellery', NULL, 'admin', '2018-12-07 12:16:00'),
(130, 'Watches & Accessories', 'Men Fashion Jewellery', NULL, 'admin', '2018-12-07 12:16:24'),
(131, 'Sports & Outdoor', 'Men Shoes & Clothing', NULL, 'admin', '2018-12-07 12:20:37'),
(132, 'Sports & Outdoor', 'Women Shoes & Clothing', NULL, 'admin', '2018-12-07 12:20:58'),
(133, 'Sports & Outdoor', 'Outdoor Recreation', NULL, 'admin', '2018-12-07 12:21:52'),
(134, 'Sports & Outdoor', 'Exercise & Fitness', NULL, 'admin', '2018-12-07 12:22:36'),
(135, 'Sports & Outdoor', 'Water Sport', NULL, 'admin', '2018-12-07 12:22:52'),
(136, 'Sports & Outdoor', 'Boxing & Martial Arts', NULL, 'admin', '2018-12-07 12:23:23'),
(137, 'Sports & Outdoor', 'Racket Sports', NULL, 'admin', '2018-12-07 12:23:54'),
(138, 'Sports & Outdoor', 'Team Sports', NULL, 'admin', '2018-12-07 12:24:09'),
(139, 'Sports & Outdoor', 'Water Bottles', NULL, 'admin', '2018-12-07 12:24:33'),
(140, 'Automotive & Motorbike', 'Automotive', NULL, 'admin', '2018-12-07 12:25:01'),
(141, 'Automotive & Motorbike', 'Services & Installations', NULL, 'admin', '2018-12-07 12:27:28'),
(142, 'Automotive & Motorbike', 'Auto Oils & Fluids', NULL, 'admin', '2018-12-07 12:28:02'),
(143, 'Automotive & Motorbike', 'Auto Tires & Wheels', NULL, 'admin', '2018-12-07 12:28:26'),
(144, 'Automotive & Motorbike', 'Auto Care', NULL, 'admin', '2018-12-07 12:28:55'),
(145, 'Automotive & Motorbike', 'Auto Electronics', NULL, 'admin', '2018-12-07 12:29:26'),
(146, 'Automotive & Motorbike', 'Motorcycle', NULL, 'admin', '2018-12-07 12:29:58'),
(147, 'Automotive & Motorbike', 'Moto Parts & Accessories', NULL, 'admin', '2018-12-07 12:30:31'),
(148, 'Automotive & Motorbike', 'Motorcycle Riding Gear', NULL, 'admin', '2018-12-07 12:31:08'),
(149, 'garments', 'ego pret', NULL, 'vendor@gmail.com', '2018-12-20 13:33:54'),
(150, 'Women\'s Fashion', 'Tops', NULL, 'admin', '2019-01-14 08:30:12'),
(151, 'Women\'s Fashion', 'Pants & Leggings', NULL, 'admin', '2019-01-14 08:41:09'),
(152, 'Men\'s Fashion', 'T-Shirts', NULL, 'admin', '2019-01-14 10:23:46'),
(153, 'Men\'s Fashion', 'Shirts', NULL, 'admin', '2019-01-14 10:24:05'),
(154, 'Men\'s Fashion', 'Polo', NULL, 'admin', '2019-01-14 10:24:17'),
(155, 'Men\'s Fashion', 'Shorts', NULL, 'admin', '2019-01-14 10:24:54'),
(156, 'Men\'s Fashion', 'Traditional Clothing', NULL, 'admin', '2019-01-14 10:25:18'),
(157, 'Men\'s Fashion', 'Jackets & coats', NULL, 'admin', '2019-01-14 10:26:08'),
(158, 'Men\'s Fashion', 'Hoodies & sweatshirts', NULL, 'admin', '2019-01-14 10:26:51'),
(159, 'Men\'s Fashion', 'Sweaters', NULL, 'admin', '2019-01-14 10:27:12'),
(160, 'Men\'s Fashion', 'Underwear', NULL, 'admin', '2019-01-14 10:27:34'),
(161, 'Men\'s Fashion', 'Pants', NULL, 'admin', '2019-01-14 10:31:28'),
(162, 'Milk', 'whitener', NULL, 'admin', '2019-01-16 08:59:50'),
(163, 'comma\'s test', 'sub comma\'s test', NULL, 'admin', '2019-01-18 09:48:28'),
(164, 'comma & again', 'sub comma\'s & again', NULL, 'admin', '2019-01-18 09:49:51'),
(166, 'Food & Drink', 'Soft Drink', NULL, 'admin', '2019-01-21 10:50:50'),
(167, 'Kids Collection', 'Clothing', NULL, 'admin', '2019-06-15 10:41:14'),
(168, 'Garments', 'Ladies Garments', NULL, 'admin', '2019-09-23 07:52:22'),
(169, 'Shoes', 'Variant Shoes', NULL, 'admin', '2019-09-23 08:31:00'),
(170, 'Accessories', 'Mens', NULL, 'admin', '2019-09-23 08:44:55'),
(171, 'Home Textile', 'Home Accessories', NULL, 'admin', '2019-09-23 09:16:53'),
(172, 'Men\'s Fashion', 'Trousers', NULL, 'admin', '2020-11-13 07:29:23'),
(174, 'Packing Material', 'packing Flyers', NULL, 'admin', '2021-02-01 06:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` int(11) NOT NULL,
  `cheque_copy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NTN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealing_person` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_p_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `fname`, `lname`, `store_name`, `phone`, `city`, `email`, `password`, `address`, `cnic`, `bank_title`, `bank_name`, `account_number`, `bank_code`, `zip_code`, `cheque_copy`, `NTN`, `STN`, `dealing_person`, `d_p_phone`, `vendor_status`, `created_at`, `updated_at`) VALUES
(2, 'Asif', 'Ikram', 'Crazybuffalo', '03004416502', 'Lahore', 'asifikram77@gmail.com', '7495c278116b9dfc54e95be916303180', '21km,ferozpur road,st 2,nadir chowk,rohi nala', '3510205700467', 'crazybuffalo', 'Bank', '00941006556247', '0655', 54000, '', NULL, NULL, NULL, NULL, 0, '2019-10-23 06:55:45', '2019-10-23 10:55:14'),
(3, 'Mustafa', 'Saleem', 'Polo Club Outfit', '03244499700', 'Lahore', 'ramsha_kamran@hotmail.com', '3e3c69c054f0873cf76745bb208e7e99', '42-D street 6 Phase 8 DHA', '42000-2219174-6', 'Ramsha Mustafa', 'HBL', '10197901430603', '1019', 54000, '', NULL, NULL, NULL, NULL, 0, '2020-01-09 11:44:16', '2019-10-30 11:36:44'),
(11, 'Kamran', 'Aqeel', 'DECHAROL', '03400009521', 'Lahore', 'sales@decharol.com', '408b8193bdcb4e1bc4fe286e864b3baf', '13 km sheikhupura road Lahore Pakistan', '35202-5572230-1', 'SHAFI (PVT) LIMITED', 'BANK ALFALAH', '5543-5000749755', '5543', 54000, '5e26ad8b5213dAccount No .jpg.jpg', NULL, NULL, NULL, NULL, 0, '2020-10-26 09:49:18', '2020-01-21 12:51:39'),
(12, 'Talha', 'Mehboob', 'HMT', '+923054005587', 'lahore', 'talham09@gmail.com', '4f1cefa310317213b896bff204f2b49f', 'main colony', '3520112345678', 'arava', 'saraar', '3t235235', '213', 525255, '5e99e252395f9Desert.jpg.jpg', 'arara', 'ara', NULL, NULL, 0, '2020-10-26 09:49:11', '2020-04-17 21:07:30'),
(15, 'Abdullah', 'Ayub', 'TAG', '03004415669', 'Lahore', 'abdullahayubsaddiq@gmail.com', 'b9698b8546220246fe600a949db326bf', '965 a dha Phase 3 street25', '3520190111969', 'Abdullah ayub sadiq', 'MEEZAN BANK', '020503600001313', '025', 54000, '5ef5cae66370720200423_202614.jpg.jpg', NULL, NULL, NULL, NULL, 0, '2020-10-26 06:10:40', '2020-06-26 14:16:06'),
(18, 'Nadeem', 'Munir', 'Al-Mahdia', '03004900046', 'Gujranwala', 'mrnademmunir@gmail.com', 'cb97c8dcf5e7d0305a66ceb211c8a017', 'Gujranwala', '3410462438553', 'Al-Mahdia', 'HBL', '1234567890', '1234', 54250, '5f7c225fd499ccover photo.jpeg.jpeg', '1234', '1234', 'Nadeem Munir', '03004900046', 0, '2020-10-26 06:09:56', '2020-10-06 11:53:03'),
(19, 'Majid', 'Butt', 'Hybridsole', '03374848888', 'lahore', 'info@hybridsole.com', '815ac473ede14d4370149e6f5a07bfe0', '28-B-XX, Khayaban E Iqbal, Phase 3, DHA, Lahore', '35202-5463911-1', 'majid mahmood butt', 'muslim commercial bank ltd', '12497901189003', '0541249', 54600, '5fbe163d2baa4IMG_5774.jpg.jpg', NULL, NULL, NULL, NULL, 0, '2020-11-25 11:18:07', '2020-11-25 13:30:53'),
(21, 'Murtaza', 'Ali', 'Danish Kada', '03318621111', 'Gujranwala', 'boss@danishkada.net', 'ec2ca43825d1d3f19c9e763cb162adab', 'Danish Kada , Sharif Farm', '3410125337973', 'Dansih Kada', 'HBL', '5187900368003', '0518', 52280, '5ffd2dc0f1fe4WhatsApp Image 2021-01-12 at 10.02.30.jpeg.jpeg', NULL, NULL, NULL, NULL, 0, '2021-01-19 08:28:49', '2021-01-12 10:04:01'),
(22, 'fahad', 'maqsood', 'Green Grapez', '34642007334', 'Lahore', 'fahad.appiteck@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Katar band road toker niaz beig off Multan road street no 2 lahore', '3520112345678', 'current', 'HBL', '00021551155', '215', 54810, '60058101ed9b2slip.png.png', '5541265', '65132', 'Abdullah', '34642007334', 1, '2021-01-19 08:31:50', '2021-01-18 17:37:22'),
(23, 'Rashid Usman', 'Khokhar', 'HAYAT DAWAKHANA', '03006430012', 'Gujranwala', 'microdessign2014@gmail.com', '737c962a4fb2686df2f1fe04f995a736', 'Pasrur Road, Near madina Masjid, Satellite Town, Gujranwala.', '3410125044313', 'Rashid Usman Khokhar', 'Allied Bank', '0010043833530019', '0561', 52250, '6005c7a9ccdabCheque.jpg.jpg', NULL, NULL, NULL, NULL, 0, '2021-01-19 08:28:15', '2021-01-18 22:38:49'),
(24, 'Danish', 'siddiqui', 'Green Grapez', '03001234567', 'Lahore', 'danishsiddiqui36@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'lahore', '3520112345678', 'current', 'HBL', '00021551155', '215', 54000, '60068e24e90acslip.png.png', '5541265', '65132', 'Abdullah', '03001234567', 0, '2021-01-19 07:49:34', '2021-01-19 12:45:40'),
(25, 'Mohsin', 'Ali', 'kuli jume', '+92 349 554 575', 'Sargodha', 'contact@kulijume.com', 'ee15e23198e4d456fb514c7a8f94c02a', 'Logistics Office House# 69 Street# 2, Hayyat colony Sargodha', '3520074062807', 'kuli Jume', 'Alfalah', '1006911821', '0408', 40100, '60068f8bf3b7cChque Copy.jpeg.jpeg', '6710895', '3277876192826', 'Mohsin Ali Khan', '+923475791657', 1, '2021-01-29 11:39:46', '2021-01-19 12:51:40'),
(26, 'Abdullah', 'Farooqi', 'Green Grapez', '03064737502', 'Lahore', 'abdullahfarooqi26@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'lahore', '3520332010790', 'current', 'HBL', '00021551155', '215', 974613, '6006918d22bf5slip.png.png', NULL, NULL, NULL, NULL, 1, '2021-01-23 06:45:55', '2021-01-19 13:00:13'),
(27, 'muneeb', 'khalid butt', 'duwai mart', '03314011114', 'sargodha', 'duwaimart@gmail.com', '1eff0564cd5f3e93e93ace65a515f048', 'DuwaiMart,ShopNo24/ Akramplaza Main khushab road Aziz Bhaty Town Sargodha Punjab Pakistan', '3840356908103', 'Muneeb khalid butt', 'meezan bank', 'PK46MEZN0014020104647821', '1402', 483, '600b2e4c46433IMG-20210106-WA0018.jpg.jpg', NULL, 'khalid', 'muneeb', '03314011114', 0, '2021-01-23 06:32:37', '2021-01-23 00:58:04'),
(28, 'AYYAZ', 'BAIG', 'Toukry', '+923325284228', 'RawalPindi', 'mansoor.smt@gmail.com', 'd8d8bf296eb636609dfa7fcddf10bfc1', 'House # X-617 Near Papu Hotel Ratta Amral', '37405-0587552-5', 'AYYAZ BAIG', 'Allied Bank', '0010033477640016', '0338', 46000, '6011356faf562IMG-20201205-WA0011.jpg.jpg', NULL, NULL, NULL, NULL, 0, '2021-01-27 11:08:15', '2021-01-27 14:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payments`
--

CREATE TABLE `vendor_payments` (
  `payment_id` int(11) NOT NULL,
  `vendor_id` varchar(155) NOT NULL,
  `payment` int(11) NOT NULL,
  `total_earned` int(11) NOT NULL,
  `commision` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_payments`
--

INSERT INTO `vendor_payments` (`payment_id`, `vendor_id`, `payment`, `total_earned`, `commision`, `status`) VALUES
(1, 'qaseller420@gmail.com', 2000, 2000, NULL, 0),
(2, 'admin@gmail.com', 25000, 25000, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_reset_password`
--

CREATE TABLE `vendor_reset_password` (
  `pk_id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `verification_code` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_reset_password`
--

INSERT INTO `vendor_reset_password` (`pk_id`, `username`, `verification_code`, `created_at`) VALUES
(6, 'qavendor10@gmail.com', '5db6d18b2531b', '2019-10-28 11:31:23'),
(7, 'abdullahfarooqi26@gmail.com', '5fbe530164f10', '2020-11-25 12:50:09'),
(8, 'fahad.appiteck@gmail.com', '600584285e653', '2021-01-18 12:50:48'),
(9, 'fahad.appiteck@gmail.com', '60068804f28aa', '2021-01-19 07:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `pk_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`pk_id`, `user_id`, `product_id`) VALUES
(1, 'daniyalakbar19@gmail.com', 247);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_table`
--
ALTER TABLE `address_table`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `admin_reset_password`
--
ALTER TABLE `admin_reset_password`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`SKU`);

--
-- Indexes for table `client_details`
--
ALTER TABLE `client_details`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `detail_table`
--
ALTER TABLE `detail_table`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `discount_table`
--
ALTER TABLE `discount_table`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`SKU`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `promo_code`
--
ALTER TABLE `promo_code`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `promo_for`
--
ALTER TABLE `promo_for`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `return_reason`
--
ALTER TABLE `return_reason`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `size_detail`
--
ALTER TABLE `size_detail`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`SKU`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_payments`
--
ALTER TABLE `vendor_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `vendor_reset_password`
--
ALTER TABLE `vendor_reset_password`
  ADD PRIMARY KEY (`pk_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`pk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_table`
--
ALTER TABLE `address_table`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_reset_password`
--
ALTER TABLE `admin_reset_password`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `SKU` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_details`
--
ALTER TABLE `client_details`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `detail_table`
--
ALTER TABLE `detail_table`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `discount_table`
--
ALTER TABLE `discount_table`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `SKU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=359;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `promo_code`
--
ALTER TABLE `promo_code`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `promo_for`
--
ALTER TABLE `promo_for`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `return_reason`
--
ALTER TABLE `return_reason`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `size_detail`
--
ALTER TABLE `size_detail`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1594;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `SKU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `vendor_payments`
--
ALTER TABLE `vendor_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor_reset_password`
--
ALTER TABLE `vendor_reset_password`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
