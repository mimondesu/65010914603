-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 05:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(7) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` float(9,2) NOT NULL,
  `p_ext` varchar(50) NOT NULL,
  `c_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_ext`, `c_id`) VALUES
(1, 'สายพันธุ์บาฮี Barhi', 'ผลมีสีเหลืองอ่อน และเมื่อเริ่มสุกจะออกเป็นสีเหลืองเข้ม พันธุ์นี้จะนิยมทานสด ได้รสสัมผัสกรอบ หวาน แต่มีความฝาดเล็กน้อย แต่เมื่อเคี้ยวไปเรื่อยๆ จะได้ความหวานหอม ไม่หวานจนเกินไป ทำให้ทานได้เรื่อยๆ ไม่แสบคอ', 400.00, 'jpg.', 1),
(2, 'สายพันธุ์อัมเอ็ดดาฮาน UM ED DAHAN', 'รสชาติ หวาน กรอบ ผลสีส้มออกโอโรสสวยงามระยะรอสุกนานกว่าบาร์ฮี แต่ทานได้ทั้งผลสุกและผลแห้ง เมื่อตัดสุกจากทะลายแล้วรสชาติจะหวานขึ้นเรื่อยๆ ', 450.00, 'jpg.', 1),
(3, 'สายพันธุ์อัมเอ็ดดาฮาน UM ED DAHAN (แห้ง)', 'ผลแห้ง เมื่อตัดสุกจากทะลายแล้วรสชาติจะหวานขึ้นเรื่อยๆ ', 500.00, 'jpg.', 2),
(4, 'สายพันธุ์โคไนซี่ Khonaizi (แห้ง)', 'สามารถรับประทานได้ตั้งแต่เริ่มแก่จัดและแห้ง เป็นพันธุ์ที่มีปริมาณเทนนินน้อยมาก รสชาติไม่หวานมาก ค่อนไปทางหวานมัน เมื่อแห้งจะมีเนื้อสัมผัสของอินทผลัมในแบบเฉพาะตัว ผลสีแดงเข้มและเปลียนเป็นสีดำเมื่อเริ่มสุก', 400.00, 'jpg.', 1),
(5, 'สายพันธุ์โคไนซี่ Khonaizi (แห้ง)', 'สามารถรับประทานได้ตั้งแต่เริ่มแก่จัดและแห้ง เป็นพันธุ์ที่มีปริมาณเทนนินน้อยมาก รสชาติไม่หวานมาก ค่อนไปทางหวานมัน เมื่อแห้งจะมีเนื้อสัมผัสของอินทผลัมในแบบเฉพาะตัว ผลสีแดงเข้มและเปลียนเป็นสีดำเมื่อเริ่มสุก', 400.00, 'jpg.', 2),
(6, 'สายพันธุ์ฮายานี่ Hayany', 'รสชาติจะหวานน้อย ผลสีของเป็นสีแดงสดรูปทรงค่อนข้างยาววงรี', 400.00, 'jpg.', 1),
(7, 'สายพันธุ์คาลาส Khalas (แห้ง)', 'มีสีน้ำตาลคล้ำ แต่เม็ดใหญ่ มีรสชาติหวานฉ่ำ', 300.00, 'jpg.', 2),
(8, 'สายพันธุ์เดกเลทนัวร์ Deglet Nour (แห้ง)', 'มีความหวานฉ่ำ สีค่อนข้างแดงเหลือง รสชาติจะหวานหอม เหมือนกินน้ำผึ้ง เป็นชนิดท่นแห้ง', 450.00, 'jpg.', 2),
(9, 'สายพันธุ์อัจวะ Ajwah (แห้ง)', 'มีกลิ่นและรสชาติหวานคล้ายคาราเมลเช่นเดียวกับ พันธุ์ Medjool รสสัมผัสจะค่อนข้างนุ่มหนึบ ยิ่งเก็บไว้นานเนื้อจะยิ่งนุ่มและมีความเหนียวหนึบสู้ฟัน หวานหอมอร่อย', 450.00, 'jpg.', 2),
(10, 'สายพันธุ์เมดจูล Medjool', 'สัมผัสจะมีความนุ่ม หอม หวาน อร่อยเหมือนกินคาราเมล ฝาดน้อย พอเมื่อผลสุกแล้วจะมีลักษณะผิวค่อนข้างย่น ออกไปทางสีน้ำตาลแดงอ่อน พันธุ์นี้จึงทานอร่อยทั้งผลสด และผลแห้ง', 500.00, 'jpg.', 1),
(11, 'สายพันธุ์เมดจูล Medjool (แห้ง)', 'สัมผัสจะมีความนุ่ม หอม หวาน อร่อยเหมือนกินคาราเมล ฝาดน้อย พอเมื่อผลสุกแล้วจะมีลักษณะผิวค่อนข้างย่น ออกไปทางสีน้ำตาลแดงอ่อน พันธุ์นี้จึงกินอร่อยทั้งผลสด และผลแห้ง', 600.00, 'jpg.', 2),
(12, 'สายพันธุ์ชิชิ Shishi (แห้ง)', 'เนื้อนุ่ม หวาน ทานได้ทั้งผลสด และผลแห้ง', 500.00, 'jpg.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
