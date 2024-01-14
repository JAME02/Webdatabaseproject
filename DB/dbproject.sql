-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2022 at 05:03 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `u_name` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `u_password` varchar(15) NOT NULL,
  `pre_id` varchar(10) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `po_id` varchar(10) NOT NULL,
  `depart_id` varchar(10) NOT NULL,
  `adv_id` varchar(10) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `status_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `uimg` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '1.png'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`u_name`, `u_password`, `pre_id`, `r_name`, `surname`, `po_id`, `depart_id`, `adv_id`, `u_email`, `status_id`, `uimg`) VALUES
('chakkrit', '1234', '1', 'จักรกฤษณ์', 'ภู่ทอง', '5', '27', '', '', '1', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_advisor`
--

CREATE TABLE `tb_advisor` (
  `adv_id` int(10) NOT NULL,
  `advisor` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_advisor`
--

INSERT INTO `tb_advisor` (`adv_id`, `advisor`) VALUES
(1, 'นายจักรกฤษณ์ ภู่ทอง'),
(2, 'นายสัมฤทธิ์ ทองพัฒน์'),
(3, 'นางอรอนงค์ แซ่ลิ่ม'),
(4, 'นายกฤษฎา อำนาจเจริญ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_depart`
--

CREATE TABLE `tb_depart` (
  `depart_id` int(10) NOT NULL,
  `depart` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_depart`
--

INSERT INTO `tb_depart` (`depart_id`, `depart`) VALUES
(1, 'งานบริหารทั่วไป'),
(2, 'งานบุคลากร'),
(3, 'งานการเงิน'),
(4, 'งานอาคารสถานที่'),
(5, 'งานพัสดุ'),
(6, 'งานการบัญชี'),
(7, 'งานทะเบียน'),
(8, 'งานประชาสัมพันธ์'),
(9, 'งานกิจกรรมนักเรียนนักศึกษา'),
(10, 'งานปกครอง'),
(11, 'งานครูที่ปรึกษา'),
(12, 'งานแนะแนวอาชีพและจัดหางาน'),
(13, 'งานสวัสดิการนักเรียนนักศึกษา'),
(14, 'งานวางแผนและงบประมาณ'),
(15, 'งานศูนย์ข้อมูลสารสนเทศ'),
(16, 'งานความร่วมมือ'),
(17, 'งานวิจัยพัฒนานวัตกรรมและสิ่งประดิษฐ์'),
(18, 'งานประกันคุณภาพและมาตรฐานการศึกษา'),
(19, 'งานส่งเสริมผลผลิต การค้าและประกอบธุรกิจ'),
(20, 'งานพัฒนาหลักสูตรการเรียนการสอน'),
(21, 'งานวัดผลและประเมินผล'),
(22, 'งานอาชีวศึกษาระบบทวิภาคี'),
(23, 'งานสื่อการเรียนการสอน'),
(24, 'การบัญชี'),
(25, 'การขายการตลาด'),
(26, 'การเลขานุการ'),
(27, 'คอมพิวเตอร์ธุรกิจ'),
(28, 'วิจิตรศิลป์'),
(29, 'ออกแบบ'),
(30, 'คอมพิวเตอร์กราฟิก'),
(31, 'ผ้าและเครื่องแต่งกาย'),
(32, 'อาหารและโภชนาการ'),
(33, 'คหกรรมทั่วไป'),
(34, ' การโรงแรม'),
(35, 'สามัญสัมพันธ์'),
(36, 'สัมพันธ์ธุรกิจ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_doc`
--

CREATE TABLE `tb_doc` (
  `doc_nthai` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `doc_neng` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pre_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `doc_on1` varchar(50) NOT NULL,
  `doc_su1` varchar(50) NOT NULL,
  `pre_id1` varchar(10) NOT NULL,
  `doc_on2` varchar(50) NOT NULL,
  `doc_su2` varchar(50) NOT NULL,
  `pre_id2` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `doc_on3` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `doc_su3` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `po_id` varchar(10) NOT NULL,
  `depart_id` varchar(10) NOT NULL,
  `pre_id3` varchar(10) NOT NULL,
  `teacher_n` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `teacher_su` varchar(50) NOT NULL,
  `year_id` varchar(10) NOT NULL,
  `doc1` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `doc2` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `doc3` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `doc4` varchar(50) DEFAULT NULL,
  `doc5` varchar(50) DEFAULT NULL,
  `doc6` varchar(50) DEFAULT NULL,
  `doc7` varchar(50) DEFAULT NULL,
  `doc8` varchar(50) DEFAULT NULL,
  `doc9` varchar(50) DEFAULT NULL,
  `doc10` varchar(50) DEFAULT NULL,
  `doc11` varchar(50) DEFAULT NULL,
  `doc12` varchar(50) DEFAULT NULL,
  `doc13` varchar(50) DEFAULT NULL,
  `doc14` varchar(50) DEFAULT NULL,
  `doc15` varchar(50) DEFAULT NULL,
  `doc16` varchar(50) DEFAULT NULL,
  `doc17` varchar(50) DEFAULT NULL,
  `u_name` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_po`
--

CREATE TABLE `tb_po` (
  `po_id` int(10) NOT NULL,
  `position` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_po`
--

INSERT INTO `tb_po` (`po_id`, `position`) VALUES
(1, 'ผู้บริหาร'),
(2, 'รองผู้บริหาร'),
(3, 'หัวหน้าฝ่ายงาน'),
(4, 'เจ้าหน้าที่'),
(5, 'ครู'),
(6, 'นักเรียน'),
(7, 'นักศึกษา');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pre`
--

CREATE TABLE `tb_pre` (
  `pre_id` int(10) NOT NULL,
  `pre_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pre`
--

INSERT INTO `tb_pre` (`pre_id`, `pre_name`) VALUES
(1, 'นาย'),
(2, 'นาง'),
(3, 'นางสาว'),
(4, 'Mr.'),
(5, 'Miss.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pre1`
--

CREATE TABLE `tb_pre1` (
  `pre_id1` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pre_name1` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pre1`
--

INSERT INTO `tb_pre1` (`pre_id1`, `pre_name1`) VALUES
('1', 'นาย'),
('2', 'นาง'),
('3', 'นางสาว'),
('4', 'Mr.'),
('5', 'Miss.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pre2`
--

CREATE TABLE `tb_pre2` (
  `pre_id2` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pre_name2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pre2`
--

INSERT INTO `tb_pre2` (`pre_id2`, `pre_name2`) VALUES
('1', 'นาย'),
('2', 'นาง'),
('3', 'นางสาว'),
('4', 'Mr.'),
('5', 'Miss.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pre3`
--

CREATE TABLE `tb_pre3` (
  `pre_id3` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pre_name3` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pre3`
--

INSERT INTO `tb_pre3` (`pre_id3`, `pre_name3`) VALUES
('1', 'นาย'),
('2', 'นาง'),
('3', 'นางสาว'),
('4', 'Mr.'),
('5', 'Miss.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `status_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `u_status` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`status_id`, `u_status`) VALUES
('1', 'ผู้ดูแลระบบ'),
('2', 'ครูที่ปรึกษา'),
('3', 'นักเรียน/นักศึกษา'),
('0', 'ไม่อนุญาต'),
('4', 'อนุญาต');

-- --------------------------------------------------------

--
-- Table structure for table `tb_year`
--

CREATE TABLE `tb_year` (
  `year_id` int(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_year`
--

INSERT INTO `tb_year` (`year_id`, `year`) VALUES
(1, '2558'),
(2, '2559'),
(3, '2560'),
(4, '2561'),
(5, '2562'),
(6, '2563'),
(7, '2564'),
(8, '2565');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`u_name`);

--
-- Indexes for table `tb_advisor`
--
ALTER TABLE `tb_advisor`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `tb_depart`
--
ALTER TABLE `tb_depart`
  ADD PRIMARY KEY (`depart_id`);

--
-- Indexes for table `tb_doc`
--
ALTER TABLE `tb_doc`
  ADD PRIMARY KEY (`doc_nthai`);

--
-- Indexes for table `tb_po`
--
ALTER TABLE `tb_po`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `tb_pre`
--
ALTER TABLE `tb_pre`
  ADD PRIMARY KEY (`pre_id`);

--
-- Indexes for table `tb_pre1`
--
ALTER TABLE `tb_pre1`
  ADD PRIMARY KEY (`pre_id1`);

--
-- Indexes for table `tb_pre2`
--
ALTER TABLE `tb_pre2`
  ADD PRIMARY KEY (`pre_id2`);

--
-- Indexes for table `tb_pre3`
--
ALTER TABLE `tb_pre3`
  ADD PRIMARY KEY (`pre_id3`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tb_year`
--
ALTER TABLE `tb_year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_advisor`
--
ALTER TABLE `tb_advisor`
  MODIFY `adv_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_depart`
--
ALTER TABLE `tb_depart`
  MODIFY `depart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_po`
--
ALTER TABLE `tb_po`
  MODIFY `po_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pre`
--
ALTER TABLE `tb_pre`
  MODIFY `pre_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_year`
--
ALTER TABLE `tb_year`
  MODIFY `year_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
