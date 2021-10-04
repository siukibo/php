-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2021 at 04:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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

-- --------------------------------------------------------

--
-- Table structure for table `Brand`
--

CREATE TABLE `Brand` (
  `id_brand` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descript` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Brand`
--

INSERT INTO `Brand` (`id_brand`, `name`, `descript`, `image`, `status`) VALUES
(1, 'Apple', NULL, 'brand4.png', 1),
(2, 'Samsung', NULL, 'brand3.png', 1),
(3, 'Intel', NULL, 'brand8.png', 1),
(4, 'Dell', NULL, 'brand7.jpg', 1),
(5, 'HTC', NULL, 'brand5.png', 1),
(6, 'LG', NULL, 'brand6.png', 1),
(7, 'Nokia', NULL, 'brand1.png', 1),
(8, 'Cannon', NULL, 'brand2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `id_cate` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descript` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`id_cate`, `name`, `descript`, `image`, `status`) VALUES
(1, 'Laptop', NULL, NULL, 1),
(2, 'Smart Phone', NULL, NULL, 1),
(3, 'Head Phone', NULL, NULL, 1),
(4, 'Power Bank', NULL, NULL, 1),
(5, 'Camera', NULL, NULL, 1),
(6, 'Speaker', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `id_order` int(11) NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `account` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `county` varchar(30) DEFAULT NULL,
  `country` varchar(10) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`id_order`, `id_customer`, `first_name`, `last_name`, `account`, `password`, `address`, `city`, `county`, `country`, `postcode`, `email`, `phone`, `date`) VALUES
(1, 1, 'nguyen', 'dung', 'cus1', '1', 'faasv', 'vsdv', NULL, 'VN', 'dvdv', 'vdvsvsd1234546', 23453466, '2021-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `id_emp` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `id_order` int(11) NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `county` varchar(30) DEFAULT NULL,
  `country` varchar(40) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `note` text DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`id_order`, `id_customer`, `first_name`, `last_name`, `address`, `city`, `county`, `country`, `postcode`, `email`, `phone`, `note`, `date`, `status`) VALUES
(1, NULL, 'nguyen', 'dung', '1', 'hanoi', 'btl', 'vn', '1000', 'dung@gmail.com', 23453466, 'acsca', '2021-10-02 18:24:51', 0),
(2, NULL, 'nguyen', 'manh', 'da', 'hanoi', 'vs', 'vn', '1000', 'manh@gmail.com', 23453466, NULL, '2021-10-03 03:39:26', 0),
(3, NULL, 'nguyen', 'dung', 'hanoi', 'hanoi', 'btl', 'vn', '1000', 'dung@gmail.com', 23453466, NULL, '2021-10-03 03:46:26', 0),
(7, NULL, 'tran', 'van', 'nguyen huu', 'hanoi', 'btl', 'vn', '1000', 'van@gmail.com', 45678, NULL, '2021-10-03 03:45:13', 0),
(8, NULL, 'nguyen', 'dung', 'hanoi', 'hanoi', 'btl', 'vn', '1000', 'dung@gmail.com', 23453466, NULL, '2021-10-03 03:46:26', 0),
(9, NULL, 'tran', 'linh', 'vávsa', 'các', 'câcsc', 'GB', '3564', 'linh@gmail.com', 12532, '', '2021-10-03 14:49:38', 0),
(14, NULL, 'cácá', 'linh', 'âcs', 'vávasv', 'vávacas', 'GB', 'âcsc', 'linh@gmail.com', 12532, 'các', '2021-10-03 21:22:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Order_detail`
--

CREATE TABLE `Order_detail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Order_detail`
--

INSERT INTO `Order_detail` (`id`, `id_order`, `id_product`, `quantity`, `total_price`) VALUES
(1, 14, 6, 1, 2000),
(2, 14, 1, 1, 700);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `id_product` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`id_product`, `id_cate`, `id_brand`, `name`, `image`, `price`, `description`, `quantity`, `date`, `status`) VALUES
(1, 6, 4, 'Blaupunkt BT150 Portable', '1.jpg', 700, 'Blaupunkt is an iconic German brand that has developed cutting edge audio technology since 1924. Today this legendary Audio Tech German brand is available in India with a superior quality range of Audio Products. Superior Sound Quality: The Bluetooth speaker with dual high-performance drivers and unique enhanced bass. The treble is clean and defined, the bass is powerful. You can enjoy the wonderful music, whether indoors or outdoors. Long Playtime: Built-in 1800 mAh rechargeable battery powers up to 6 hours playtime. Small, but such powerful Bluetooth speakers. Support the USB, micro SD Card, aux playback. Built To Travel: Light, compact and with a clean design this speaker is the perfect travel companion. Just pick it up and get going Handsfree At Another Level: A built-in mic means you can answer calls and still go about doing your thing. The sensitive mic and clear output means the conversation will be crystal clear Wireless Or Wired: You get Bluetooth to connect with devices and when you need to you can slip in a cable into the AUX port. There is no stopping the music', 30, '0000-00-00', 1),
(2, 2, 2, 'Mivi Roam 2 5 Watt Wireless Bluetooth Portable Speaker (Black)', 'product-1.jpg', 900, 'Small Frame. Big Sound- Roam 2 wireless speaker is designed to deliver loud and clear music by pumping out sharp trebles, detailed mids and punchy bass. Now enjoy more richer & immersive notes to fill your room with music. Heavy Bass - Small in size yet big on Bass, get the party started by taking your music up a notch with resonating bass of Roam 2 Made in India and worry-free warranty: From design to manufacturing, Roam 2 is proudly made in India and is backed by Miviâs worry-free one year manufacturing warranty. 1 year warranty from the date of purchase, Built-in rechargeable battery : 2000mAh, Charging time : 3-4 hours 24 Hours Play Time â The only portable 5W speaker which gives you not 4or 5 but a whopping 24hrs playtime at 70% volume. Now, there is nothing else that can top that', 45, '0000-00-00', 1),
(5, 1, 5, 'HP Pavilion 11th Gen Intel Core i5 Processor', 'mini-cart3.jpg', 1400, ' Free upgrade to Windows 11 when available* Disclaimer-*The Windows 11 upgrade will be delivered late 2021 into 2022. Timing varies by device. Certain features require specific hardware. Processor: 11th Gen Intel Core i5-1135G7 (up to 4.2 GHz with Intel Turbo Boost Technology, 8 MB L3 cache, 4 cores) Memory: 16 GB DDR4-3200 SDRAM (1 x 16 GB) | Storage: 512 GB PCIe NVMe M.2 SSD Display: 14-Inch FHD IPS anti-glare micro-edge WLED-backlit, 250 nits, 45% NTSC (1920 x 1080) Graphics: NVIDIA GeForce MX450 (2 GB GDDR5 dedicated) Operating System & Preinstalled Software:Pre-loaded Windows 10 Home with lifetime validity, FREE Upgrade to Windows 11* (when available, refer product description for more details) | Microsoft Office Home & Student 2019', 54, '0000-00-00', 1),
(6, 1, 1, 'HP 15 Thin & Light 11th Gen Intel Core i5-1135G7 ', '2.jpg', 2000, ' Model Name	HP Laptop 15s-du3032TU Brand	HP Specific Uses For Product	Multimedia Screen Size	15.6 Inches Operating System	Windows 10 Home Device interface - primary	Microphone', 60, '0000-00-00', 1),
(7, 4, 6, 'Sạc', 'mini-cart2.jpg', 100, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.  Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.', 80, '0000-00-00', 1),
(8, 6, 4, 'Amkette Boomer FX Plus ', '1.jpg', 500, ' Connectivity Technology	Wireless, Bluetooth, Auxiliary, USB Speaker Type	Single Speaker Brand	Amkette Recommended Uses For Product	For Smartphones or Tablets Special Feature	Radio', 70, '0000-00-00', 0),
(9, 3, 6, 'Fire-Boltt Blast 1400', '3.jpg', 250, '\"SUPERIOR HARDCORE DESIGN WITH IN BUILT MIC: This bluetooth wireless headphone features a strong, lightweight design crafted with premium materials. The cushioned adjustable headband lets you dial in the perfect fit, while soft memory foam ear cushions mold to your ears. Feel the Difference with these headphones that are made with an aluminum gunmetal frame and high-quality ear cups for added comfort. This design yields superior sound isolation with maximum comfort and minimal ear fatigue. \" HI-FI SOUND & CAPTIVATING BASS: 40mm large-aperture drivers deliver riveting sound and a thumping bass in this wireless headset. The 90dB give a deep, powerful, and crisp sound. The inner & outer rings deliver vibrant bass, vivid midst & vivacious highs without overlap. The Microphone works in the \"Wireless\" mode. SIRI VOICE ASSISTANCE - Long press Multi Function ( On/ Off) button for about 3 seconds to wake up Siri. The original use of this headphone is for the DJ\'s specifically. The blast 1400 is a DJ headphone.', 100, '0000-00-00', 1),
(10, 5, 3, 'boAt Stone Grenade 5 Watt Wireless Bluetooth Outdoor Speaker (Charcoal Black)', '5.jpg', 400, 'Experience the true immersive sound with a pumping driver delivering 5W of audio and connect to the music that you love The long lasting lithium battery plays through all your genres for up to 7 hours in a single go Its connectivity options let you create your own atmosphere with the enhanced connectivity of Bluetooth 4.2 with a range of up to 10 meters, AUX and SD Card mode. IPX6 splash and water resistant design offers a sound and perfect companion for outings, so that you have a complete carefree listening experience Its integrated multifunction controls let you manage your device with ease allowing access to the full range of functionality', 40, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Purchase`
--

CREATE TABLE `Purchase` (
  `id` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost_price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Slider`
--

CREATE TABLE `Slider` (
  `id_slider` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Vendor`
--

CREATE TABLE `Vendor` (
  `id_vendor` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Brand`
--
ALTER TABLE `Brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_order` (`id_customer`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `Order_detail`
--
ALTER TABLE `Order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_brand` (`id_brand`),
  ADD KEY `id_cate` (`id_cate`);

--
-- Indexes for table `Purchase`
--
ALTER TABLE `Purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `Slider`
--
ALTER TABLE `Slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `Vendor`
--
ALTER TABLE `Vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Brand`
--
ALTER TABLE `Brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `Order_detail`
--
ALTER TABLE `Order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Purchase`
--
ALTER TABLE `Purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Slider`
--
ALTER TABLE `Slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Vendor`
--
ALTER TABLE `Vendor`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Order_detail`
--
ALTER TABLE `Order_detail`
  ADD CONSTRAINT `Order_detail_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `Orders` (`id_order`),
  ADD CONSTRAINT `Order_detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `Product` (`id_product`);

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `Product_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `Brand` (`id_brand`),
  ADD CONSTRAINT `Product_ibfk_2` FOREIGN KEY (`id_cate`) REFERENCES `Category` (`id_cate`);

--
-- Constraints for table `Purchase`
--
ALTER TABLE `Purchase`
  ADD CONSTRAINT `Purchase_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `Product` (`id_product`),
  ADD CONSTRAINT `Purchase_ibfk_2` FOREIGN KEY (`id_vendor`) REFERENCES `Vendor` (`id_vendor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
