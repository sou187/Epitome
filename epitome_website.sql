-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 08:55 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epitome_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(11) NOT NULL,
  `section_type` varchar(255) NOT NULL,
  `About_Image` varchar(255) NOT NULL,
  `paragraph1` text NOT NULL,
  `paragraph2` text NOT NULL,
  `paragraph3` varchar(255) NOT NULL,
  `Mission_points` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `section_type`, `About_Image`, `paragraph1`, `paragraph2`, `paragraph3`, `Mission_points`) VALUES
(33, 'section-1', 'images/upload/about_img.jpg', '    Popularly know by Epitome founded in December 2012 by an enthusiased mechanical engineer Mr. Sudhir Patil. It is known for its abilities in Designing, Manufacturing of complex Hydraulic Valves, Systems and Hydraulic Cylinders.', 'We are an engineering company with qualified professionals with experience in design, manufacturing, installation. We work closely with customers to understand the pain areas, define, design, and erect hydraulic systems.', 'Due to the bespoke nature of the product our product portfolio is very large. As of Today, the company is already applied for ISO 9001:2000 Certifications.', ''),
(34, 'section-2', 'images/upload/bg2.jpg', '      We, at EPITOME, believe that the establishment of an effective quality and environmental management system will help our company achieve its vision of becoming a highly respected manufacturer of various hydraulic components/items.', '', '', ''),
(35, 'section-3', 'images/upload/mission.jpg', 'The company is strongly determined to lead in this industry by providing satisfaction to our customers and complying with all applicable environmental laws and other requirements that we subscribe to. We will achieve this by', '', '', '[\"Addressing the needs and expectations of our customers in a timely manner\",\"Continually improving our processes and manpower through innovation training\",\"Developing sound practices for effective waste management & proper consumption of electricity .\"]'),
(41, 'section-4', '', '', '', '', '[\"(2006-2007) Selected In campus for International Tractors Limited (Sonalika Tractors),             Hoshiarpur, Punjab. Worked as Graduate Engineer Trainee (GET) in sales and service             having experience in assembly line, development with problems faced in filed. Also             worked in sales for appointing dealers throughout Karnataka and making understand             use of Sonalika Tractorts. Promoted for TE (Territory Engineer) in six months for handling             field problems and the same to resolve with R&D in plant.\",\"(2007-2008) Left Sonalika Tractors after a year completion and joined as Design             Engineer at Servocontrols India Pvt. Ltd. Belgaum. Karnataka. Worked with hydraulic             system design with the usage of screw in cartridge Manufactured by Hydra force, UK.             Which is used as backbone of all automation industry\",\"(2007-2008) Left Sonalika Tractors after a year completion and joined as Design             Engineer at Servocontrols India Pvt. Ltd. Belgaum. Karnataka. Worked with hydraulic             system design with the usage of screw in cartridge Manufactured by Hydra force, UK.             Which is used as backbone of all automation industry\",\"(2007-2008) Left Sonalika Tractors after a year completion and joined as Design             Engineer at Servocontrols India Pvt. Ltd. Belgaum. Karnataka. Worked with hydraulic             system design with the usage of screw in cartridge Manufactured by Hydra force, UK.             Which is used as backbone of all automation industry\",\"Uniquely Worked on Design, Development and Manufacturing of following Mobile             hydraulic valves,jacks,hydraulic cylinder\"]');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `photo`) VALUES
(1, 'images/upload/logo1_180x150.png'),
(2, 'images/upload/logo2_180x150.png'),
(3, 'images/upload/logo3_180x150.png'),
(4, 'images/upload/logo4_180x150.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `mobile_no`, `message`) VALUES
(1, 'Shashank HS', 'sss@gmail.com', '09380228404', 'test'),
(2, 'maya patil', 'krish@gmail.com', '8765434567', 'uytrewxerthjuiytredw');

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE `enquery` (
  `enquery_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `product` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquery`
--

INSERT INTO `enquery` (`enquery_id`, `name`, `email`, `mobile_no`, `description`, `product`) VALUES
(2, 'Shashank HS', 'sss@gmail.com', '3254125632', 'tsest', 'Bootstrap 4'),
(3, 'Shashank HS', 'sss@gmail.com', '7412365478', 'test', 'Array'),
(4, 'Shashank HS', 'sss@gmail.com', '7689098765', 'test', '[\"Bootstrap 3\",\"Hybris\",\"Angular\"]');

-- --------------------------------------------------------

--
-- Table structure for table `future_product`
--

CREATE TABLE `future_product` (
  `fproduct_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `future_product`
--

INSERT INTO `future_product` (`fproduct_id`, `product_name`, `description`, `product_img`) VALUES
(4, 'Universal  Turning Center CNC', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sit illum dicta. Atque, repellat, impedit tenetur dolor unde ipsum cumque facilis eveniet, quam enim esse at. Ut earum provident necessitatibus.', 'images/upload/future.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`) VALUES
(1, 'Epitome', 'Epitome@123321');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `product_pdf` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_sketch1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`product_id`, `cat_id`, `product_name`, `description`, `product_pdf`, `product_img`, `product_sketch1`) VALUES
(11, 1, 'PRESSURE CONTROLS', ' Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the', 'images/upload/EDPR.pdf', 'images/upload/EDPRH.png', 'images/upload/img1.jpg'),
(12, 1, 'PRESSURE SWITCH', ' Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the', '', 'images/upload/PRESSURE SWITCH.png', 'images/upload/0003.jpg'),
(13, 2, 'Back Flange Mounting type styles cylinders', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the', 'images/upload/Back Flange Mounting type styles cylinders.pdf', 'images/upload/Back Flange Mounting type styles cylinders.png', 'images/upload/0010.jpg'),
(14, 2, 'Bottom Clevis Mounting type styles cylinders', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the', 'images/upload/Bottom Clevis Mounting type styles cylinders.pdf', 'images/upload/Bottom Clevis Mounting type styles cylinders.png', 'images/upload/0010.jpg'),
(15, 2, 'Foot Mounting type styles cylinders', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the', 'images/upload/Foot Mounting type styles cylinders.pdf', 'images/upload/Foot Mounting type styles cylinders.png', 'images/upload/0010.jpg'),
(16, 2, 'Front Flange Mounting type styles cylinders', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', 'images/upload/Front Flange Mounting type styles cylinders.pdf', 'images/upload/Front Flange Mounting type styles cylinders.png', 'images/upload/0010.jpg'),
(17, 2, 'trunion Mounting type styles cylinders', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', 'images/upload/trunion Mounting type styles cylinders.pdf', 'images/upload/trunion Mounting type styles cylinders.png', 'images/upload/0010.jpg'),
(18, 3, 'double acting center hole jack', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', 'images/upload/EDH-SERIES.pdf', 'images/upload/double acting center hole jack .png', 'images/upload/0025.jpg'),
(19, 3, 'double acting jack', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', 'images/upload/EST-SERIES.pdf', 'images/upload/double acting jack .png', 'images/upload/0026.jpg'),
(20, 3, 'DOUBLE ACTING THREADE RAM JACK', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', 'images/upload/DAT-SERIES.pdf', 'images/upload/DOUBLE ACTING THREADED RAM JACK .png', 'images/upload/spl-jack2.jpg'),
(21, 3, 'flat jack', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', 'images/upload/ESF-SERIES.pdf', 'images/upload/flat jack .png', 'images/upload/0020.jpg'),
(22, 3, 'single acting center hole jack', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', 'images/upload/ESH-SERIES.pdf', 'images/upload/single acting center hole jack .png', 'images/upload/0022.jpg'),
(23, 3, 'single acting jack', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', 'images/upload/ESP-SERIES SHEET 1 OFF 2.pdf', 'images/upload/singale acting jack.JPG', 'images/upload/0024.jpg'),
(24, 3, 'single acting low  jack', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', 'images/upload/ESL-SERIES.pdf', 'images/upload/singale acting low jack.JPG', 'images/upload/0024.jpg'),
(25, 3, 'single acting threaded ram jack', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', 'images/upload/EST-SERIES.pdf', 'images/upload/single acting threaded ram jack.png', 'images/upload/0014.jpg'),
(26, 3, 'TRAVERSE BASE JACK', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', '', 'images/upload/TRAVERSE BASE JACK.png', 'images/upload/spl-jack1.jpg'),
(27, 4, 'LUBRICATION UNIT', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', '', 'images/upload/LUBRICATION UNIT.png', 'images/upload/0011.jpg'),
(28, 4, '2 STATION POWER PACK', 'Fluid mechanics provides the theoretical foundation for hydraulics, which focuses on the applied engineering using the properties of fluids. In its fluid power applications, hydraulics is used for the generation, control, and transmission of power by the	', 'images/upload/EPU-SERIES- DOUBLE STATION.pdf', 'images/upload/2 STATION POWER PACK.png', 'images/upload/0015.jpg'),
(32, 5, 'Closed frame press', 'Fluid mechanics provides the theoretical foundation', 'images/upload/CLOSED FRAME WITH  DIE-CUSHION PRESS.pdf', 'images/upload/CLOSED FRAME PRESS.png', 'images/upload/0006.jpg'),
(33, 5, 'C type pyarr', 'Fluid mechanics provides the theoretical foundation', 'images/upload/C_TYPE_PRESS.pdf', 'images/upload/C_TYPE_PRESS.png', 'images/upload/0008.jpg'),
(34, 5, 'C-TYPETRACK PIN PRESS', 'Fluid mechanics provides the theoretical foundation', 'images/upload/C_TYPE_TRACK PIN PRESS.pdf', 'images/upload/C_type_track_pin_press.JPG', 'images/upload/0001.jpg'),
(35, 5, 'COIL CURING PRESS', 'Fluid mechanics provides the theoretical foundation', 'images/upload/COIL CURING PRESS.pdf', 'images/upload/COIL CURING PRESS.png', 'images/upload/0005.jpg'),
(36, 5, 'RUBBER MOULDING PRESS', 'Fluid mechanics provides the theoretical foundation', 'images/upload/FOUR PILLAR  RUBBER MOULDING  PRESS.pdf', 'images/upload/RUBBER MOULDING PRESS.png', 'images/upload/0007.jpg'),
(37, 5, 'TIE ROD PRESS', 'Fluid mechanics provides the theoretical foundation', 'images/upload/STRETCHED TIE ROD WITH  DIE-CUSHION PRESS.pdf', 'images/upload/TIE ROD PRESS.png', 'images/upload/0004.jpg'),
(38, 5, 'WORK SHOP TYPE PRESS', 'Fluid mechanics provides the theoretical foundation', 'images/upload/H_(WORK SHOP TYPE )TYPE PRESS.pdf', 'images/upload/WORK SHOP TYPE PRESS.png', 'images/upload/0003.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productgallery`
--

CREATE TABLE `productgallery` (
  `photogal_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productgallery`
--

INSERT INTO `productgallery` (`photogal_id`, `photo`) VALUES
(2, 'images/upload/pressure-control-valves.png'),
(3, 'images/upload/hydraulic -components.png'),
(4, 'images/upload/500-ton-lock.png'),
(5, 'images/upload/mono-pull20-ton.png'),
(6, 'images/upload/25hp-power-pack.png'),
(7, 'images/upload/traverse-base-jack.png'),
(9, 'images/upload/hydraulic-cylinder.png'),
(10, 'images/upload/press.png'),
(11, 'images/upload/press_pin_c_type-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `cat_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `categories`, `cat_img`) VALUES
(1, 'Hydraulic valves', 'images/upload/EDPRH.png'),
(2, 'Cylinder', 'images/upload/Back Flange Mounting type styles cylinders.png'),
(3, 'JACK', 'images/upload/double acting center hole jack .png'),
(4, 'Power Pack', 'images/upload/2 STATION POWER PACK.png'),
(5, 'Press', 'images/upload/C TYPE PRESS.png'),
(9, ' Safety device', 'images/upload/pressure-switch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_img`) VALUES
(3, '2 STATION POWER PACK', 'images/upload/2 STATION POWER PACK.png'),
(4, 'Back Flange Mounting type styles cylinders', 'images/upload/Back Flange Mounting type styles cylinders.png'),
(5, 'COIL CURING PRESS', 'images/upload/COIL CURING PRESS.png'),
(6, 'single acting threaded ram jack', 'images/upload/single acting threaded ram jack.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `enquery`
--
ALTER TABLE `enquery`
  ADD PRIMARY KEY (`enquery_id`);

--
-- Indexes for table `future_product`
--
ALTER TABLE `future_product`
  ADD PRIMARY KEY (`fproduct_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `productdetails`
--
ALTER TABLE `productdetails`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `productgallery`
--
ALTER TABLE `productgallery`
  ADD PRIMARY KEY (`photogal_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquery`
--
ALTER TABLE `enquery`
  MODIFY `enquery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `future_product`
--
ALTER TABLE `future_product`
  MODIFY `fproduct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productdetails`
--
ALTER TABLE `productdetails`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `productgallery`
--
ALTER TABLE `productgallery`
  MODIFY `photogal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
