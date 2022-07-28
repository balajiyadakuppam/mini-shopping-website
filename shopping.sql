-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 06:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `item` varchar(30) NOT NULL,
  `count` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`item`, `count`, `userid`) VALUES
('home/furniture2', 1, 1),
('home/kitchen2', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Name` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` int(30) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `width` varchar(32) DEFAULT NULL,
  `height` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Name`, `description`, `price`, `rating`, `width`, `height`) VALUES
('books/biography1', 'Wings of Fire(English, Paperback, Tiwari Arun)\r\n', 227, '4.9', '250px', '400px'),
('books/biography2', 'Steve Jobs by Walter Isaacson(English, Paperback, Walter Isaacson)\r\n', 338, '4.3', '250px', '400px'),
('books/biography3', 'Mein Kampf(English, Paperback, Hitler Adolf)\r\n', 186, '4.5', '250px', '400px'),
('books/biography4', 'A Brief History Of Time(English, Paperback, Hawking Stephen)\r\n', 223, '4.5', '250px', '400px'),
('books/biography5', 'WITHOUT FEAR - PB(English, Paperback, Kuldip Nayar)\r\n', 186, '4.6', '250px', '400px'),
('books/biography6', 'Elon Musk(English, Paperback, Ashlee Vance)\r\n', 370, '4.5', '250px', '400px'),
('books/biography7', 'Alibaba(English, Hardcover, Clark Duncan)\r\n', 373, '4.5', '250px', '400px'),
('books/biography8', 'An Indian Spy in Pakistan(English, Paperback, Bhaskar Mohanial)\r\n', 178, '4.4', '250px', '400px'),
('books/children1', 'Mahabharata(English,Hardcover)\r\n', 1594, '4.6', '250px', '400px'),
('books/children2', 'Best Of Tinkle: 10 Tinkle Digests (1980 - 2008) - Where Learning Meets Fun(Paperback)\r\n', 466, '4.3', '250px', '400px'),
('books/children3', 'The Subtle Knife(English, Paperback, Philip Pullman)\r\n', 329, '4.1', '250px', '400px'),
('books/children4', 'The Evertree(English, Hardcover, Lu Marie)\r\n', 298, '4.5', '250px', '400px'),
('books/children5', 'Secret Seven 15 copy box set INDIA(English, Paperback, Blyton Enid)\r\n', 1313, '4.6', '250px', '400px'),
('books/children6', 'POEMS FOR YOUNG CHILDREN(English, Hardcover)\r\n', 378, '4.9', '250px', '400px'),
('books/children7', 'Valmiki\'s Ramayana(English, Hardcover, Dreamland Publications)\r\n', 520, '4.6', '250px', '400px'),
('books/children8', 'Paper Folding Part 1(English, Paperback, Gurinder)\r\n', 116, '4.3', '250px', '400px'),
('books/entrance1', 'Fundamentals of Database System Seventh Edition(English,Paperback, Ramez Elmasri,Shamkant B.Navathe)\r\n', 711, '4.5', '250px', '400px'),
('books/entrance2', 'Comprehensive Guide to SBI Bank PO Preliminary & Main Exam - Includes Prelim & Main Solved Papers 2017(English,Paperback,unknown)\r\n', 450, '4.2', '250px', '400px'),
('books/entrance3', 'Basic Science & Engineering for Indian Railways (RRB) Assistant Loco Pilot Exam 2018 Stage II(English, Paperback,unknown)\r\n', 88, '3.8', '250px', '400px'),
('books/entrance4', 'IAS Mains Chapterwise Solved Papers General Studies(English, Paperback, Arihant Experts)\r\n', 256, '4.5', '250px', '400px'),
('books/entrance5', 'Chapterwise Solutions Physics JEE Main 2019(English, Paperback, Arihant Experts)\r\n', 110, '4.3', '250px', '400px'),
('books/entrance6', 'Banking Interviews(English, Paperback, unknown)\r\n', 73, '4.1', '250px', '400px'),
('books/entrance7', 'General Science for Competitive Exams - SSC/ Banking/ Railways/ Defense/ Insurance(English, Paperback, Disha Experts)\r\n', 126, '3.8', '250px', '400px'),
('books/entrance8', 'Magbook Indian Polity & Governance 2019(English, Paperback, Arihant Expert)\r\n', 168, '4.3', '250px', '400px'),
('electronics/camera1', 'Canon EOS 3000D DSLR Camera Single Kit with 18-55 lens (16 GB Memory Card & Carry Case)(Black)\r\n', 21990, '4.6', '400px', '300px'),
('electronics/camera2', 'Nikon D5300 DSLR Camera Body with Single Lens: AF-P DX NIKKOR 18-55 mm f/3.5-5.6G VR Kit (16 GB SD Card + Camera Bag)(Black)\r\n', 35990, '4.7', '400px', '300px'),
('electronics/camera3', 'Nikon D5600 DSLR Camera Body with Dual Lens: AF-P DX Nikkor 18 - 55 MM F/3.5-5.6G VR and 70-300 MM F/4.5-6.3G ED VR (16 GB SD Card)(Black)\r\n', 49430, '4.8', '400px', '300px'),
('electronics/camera4', 'Canon 1300D DSLR Camera Body with Dual Lens: Canon EF-S 18-55 IS II + Tamron AF 70-300 mm F/4-5.6 Di LD Macro Lens (16 GB SD Card + Camera Bag)(Black)\r\n', 31990, '4.4', '400px', '300px'),
('electronics/camera5', 'Canon EOS 1300D DSLR Camera Body with Dual Lens: EF-S 18-55 mm IS II + EF-S 55-250 mm F4 5.6 IS II (16 GB SD Card+ Camera Bag)(Black)\r\n', 32990, '4.5', '400px', '300px'),
('electronics/camera6', 'Nikon D3400 DSLR Camera Body with Dual Lens: AF-P DX NIKKOR 18-55 mm f/3.5 - 5.6G VR + AF-P DX NIKKOR 70-300 mm f/4.5 - 6.3G ED VR (16 GB SD Card + Camera Bag)(Black)\r\n', 39990, '4.5', '400px', '300px'),
('electronics/camera7', 'Nikon D7200 (AF-S 18-140 mm VR Kit Lens) DSLR Camera(Black)\r\n', 67970, '4.6', '400px', '300px'),
('electronics/camera8', 'Canon EOS 80D(W) DSLR Camera (Body Only) (16 GB SD Card)(Black)\r\n', 65990, '4.5', '400px', '300px'),
('electronics/laptop1', 'MSI GS Core i7 8th Gen-(16 GB/512 GB SSD/Windows 10 Home/6 GB Graphics) GS65 8RE-084IN Gaming Laptop(15.6 inch, Black, 1.8 kg)\r\n', 169990, '4.9', '400px', '300px'),
('electronics/laptop2', 'Asus ROG Strix Edition Core i7 7th Gen-(16 GB/1 TB HDD/128 GB SSD/Windows 10 Home/6 GB Graphics) GL503VM-FY166T Gaming Laptop(15.6 inch, Black, 2.6 kg)\r\n', 139990, '5.0', '400px', '300px'),
('electronics/laptop3', 'Acer Predator Helios 300 Core i5 7th Gen-(8 GB/1 TB HDD/128 GB SSD/Windows 10 Home/4 GB Graphics) G3-572 Gaming Laptop(15.6 inch, Black, 2.7 kg)\r\n', 76990, '4.5', '400px', '300px'),
('electronics/laptop4', 'Lenovo Ideapad 330S Core i7 8th Gen - (8 GB/1 TB HDD/Windows 10 Home/4 GB Graphics) 330S-15IKB Laptop(15.6 inch, Platinum Grey, 1.87 kg, With MS Office)\r\n', 71990, '4.6', '400px', '300px'),
('electronics/laptop5', 'Microsoft Surface Book 2 Core i7 8th Gen-(8 GB/256 GB SSD/Windows 10 Pro/2 GB Graphics) 1832 2 in 1 Laptop(13.5 inch, Silver, 1.64 kg)\r\n', 185999, '4.7', '400px', '300px'),
('electronics/laptop6', 'Apple Macbook Pro Core i7 8th Gen - (16 GB/512 GB SSD/Mac OS Mojave/4 GB Graphics) MR942HN/A(15.4 inch, Space Grey, 1.83 kg)\r\n', 259900, '4.3', '400px', '300px'),
('electronics/laptop7', 'Dell Inspiron 13 7000 Core i7 8th Gen -(16 GB/512 GB SSD/Windows 10 Home) 7373 2 in 1 Laptop(13.3 inch, Era Grey, 1.45 kg, With MS Office)\r\n', 94990, '4.4', '400px', '300px'),
('electronics/laptop8', 'HP Core i7 7th Gen-(16 GB/2 TB HDD/Windows 10 Home/4 GB Graphics) 15-au627tx Laptop(15.6 inch, SIlver, 2.04 kg)\r\n', 89990, '4.2', '400px', '300px'),
('electronics/mobile1', 'Apple iPhone XR (Black, 128 GB)', 81900, '4.7', '250px', '500px'),
('electronics/mobile2', 'Redmi Note 6 Pro (Black, 64 GB)', 13999, '4.6', '250px', '500px'),
('electronics/mobile3', 'Vivo Y95 (Nebula Purple, 64 GB)', 15990, '4.8', '250px', '500px'),
('electronics/mobile4', 'Samsung Galaxy J6 Plus (Red, 64 GB)', 12990, '4.5', '250px', '500px'),
('electronics/mobile5', 'Mi A2 (Red, 64 GB)', 14389, '4.9', '250px', '500px'),
('electronics/mobile6', 'Realme 2 Pro (Black Sea, 64 GB)', 15990, '4.6', '250px', '500px'),
('electronics/mobile7', 'OPPO F5 Youth (Gold, 32 GB)', 14990, '4.7', '250px', '500px'),
('electronics/mobile8', 'Honor 9N (Midnight Black, 32 GB)', 9999, '4.8', '250px', '500px'),
('home/automation1', 'Google Home(White)(Best Selling)', 9999, '4.4', '300px', '450px'),
('home/automation2', 'Xiaomi Mi 360 1080p Smart Security Camera\r\n', 2699, '4.8', '300px', '450px'),
('home/automation3', 'Google Home Mini(Chalk)\r\n', 4499, '4.4', '300px', '450px'),
('home/automation4', 'Panasonic Security Camera(1 Channel)\r\n', 150000, '4.8', '300px', '450px'),
('home/automation5', 'yale YDM3212 Smart Door Lock\r\n', 24499, '4.5', '300px', '450px'),
('home/automation6', 'Godrej Solus ST 7 VDP with Free Installation Video Door Phone(Wired Single Way)\r\n', 14997, '4.5', '300px', '450px'),
('home/automation7', 'Emotix Miko - Companion Robot(Playful Purple)\r\n', 15000, '4.1', '300px', '450px'),
('home/automation8', 'Smiledrive Freekee Keyless Bluetooth Smart Luggage lock/Padlock for Suitcases, Backpacks, Lockers, Cabinets Smart Door Lock\r\n', 2599, '4.2', '300px', '450px'),
('home/furniture1', 'Spacewood Apex Engineered Wood 3 Door Wardrobe(Finish Color - Natural Wenge, Mirror Included)\r\n', 16499, '4.1', '400px', '400px'),
('home/furniture2', 'Nilkamal Leo Engineered Wood Computer Desk(Curved, Finish Color - Walnut)\r\n', 1979, '4.2', '400px', '400px'),
('home/furniture3', 'UNIGEAR Portable Foldable Wooden Laptop Table Stand Wood Portable Laptop Table(Finish Color - WOODEN)\r\n', 1999, '4.3', '400px', '400px'),
('home/furniture4', 'Nilkamal SUTLEJ Solid Wood 4 Seater Dining Set(Finish Color - Cherry)\r\n', 14220, '3.9', '400px', '400px'),
('home/furniture5', 'Adiko Leatherette Office Arm Chair(Brown)\r\n', 5636, '4.5', '400px', '400px'),
('home/furniture6', 'Nilkamal Beaumont Engineered Wood TV Entertainment Unit(Finish Color - Wenge)\r\n', 5799, '4.4', '400px', '400px'),
('home/furniture7', 'Sofame Rio Double Sofa Sectional Bed(Finish Color - Grey Mechanism Type - Pull Out)\r\n', 24616, '4.2', '400px', '400px'),
('home/furniture8', 'Delite Kom 24 Inches wide Four Door Double Decker Powder Coated Wall Mounted Metallic Ivory Metal Shoe Rack(White, 4 Shelves)\r\n', 7499, '4.3', '400px', '400px'),
('home/kitchen1', 'Pigeon Special Combo Pack 2L,3L,5L Pressure Cooker(Aluminium)\r\n', 1599, '4.1', '400px', '400px'),
('home/kitchen2', 'BMS Lifestyle Non-Stick 12 Cavity Appam Patra Side Handle with lid Paniyarakkal(Aluminium, Non-stick)\r\n', 399, '3.8', '400px', '400px'),
('home/kitchen3', 'Expresso Pot 2 L(Stainless Steel, Induction Bottom)\r\n', 450, '4.3', '400px', '400px'),
('home/kitchen4', 'Prestige Marvel Plus Glass, Aluminium Manual Gas Stove(4 Burners)\r\n', 5889, '4.1', '400px', '400px'),
('home/kitchen5', 'IFB 23 L Convection Microwave Oven(23SC3, Silver)\r\n', 8990, '4.4', '400px', '400px'),
('home/kitchen6', 'Philips HD4928/01 Induction Cooktop(Black, Push Button)\r\n', 2313, '4.2', '400px', '400px'),
('home/kitchen7', 'SKY TRENDS Valentine Gifts For Special Girlfriend,Boyfriend,Wife,Husband,design 107 Ceramic Mug(325 ml)\r\n', 349, '4.1', '400px', '400px'),
('home/kitchen8', 'Classic Essentials Premium Glory with Permanent Lazer design Pack of 61 Dinner Set(Steel)\r\n', 2849, '4.2', '400px', '400px'),
('sports/badminton1', 'Yonex MAVIS 350 - Green Cap Nylon Shuttle - Yellow(Slow, 75, Pack of 6)\r\n', 699, '4.3', '320px', '320px'),
('sports/badminton2', 'Yonex Gr 201 Multicolor Strung Badminton Racquet(G4 -3.25 Inches, 90 g)\r\n', 352, '4.1', '320px', '320px'),
('sports/badminton3', 'Yonex GR-303 Red, Blue Strung Badminton Racquet(G4 -3.25 Inches, 95 g)\r\n', 849, '4.2', '320px', '320px'),
('sports/badminton4', 'Nivia Ranger Combo - 2 Badminton Kit\r\n', 426, '4.3', '320px', '320px'),
('sports/badminton5', 'Roxon Phantom Badminton Racquet Set Of 2 Piece With 6 Piece Suney Extrerme Nylon Shuttle Badminton Kit\r\n', 297, '3.7', '320px', '320px'),
('sports/badminton6', 'Yonex SUNR 1815FK Badminton Kit Bag(Blue, Kit Bag)\r\n', 487, '4.4', '320px', '320px'),
('sports/badminton7', 'Yonex GR-303 Silver, Blue Strung Badminton Racquet(G4 -3.25 Inches, 95 g)\r\n', 849, '4.1', '320px', '320px'),
('sports/badminton8', 'Silver\'s Pro 270 Nylon Shuttle - White(Slow, 75, Pack of 6)\r\n', 368, '3.9', '320px', '320px'),
('sports/cricket1', 'Kookaburra kahuna poplar willow tennis bat Poplar Willow Cricket Bat(Short Handle, 1 kg)\r\n', 292, '3.9', '320px', '320px'),
('sports/cricket2', 'MRF MRF-200 Poplar Willow Cricket Bat(6, 1.2 kg)\r\n', 285, '4.2', '320px', '320px'),
('sports/cricket3', 'Suntop Camo Platinum Cricket Backpack Bag (Military Print) XXL Size Cricket Kit Bag(Multicolor, Backpack)\r\n', 1450, '4.9', '320px', '320px'),
('sports/cricket4', 'Kookaburra Kahuna Prodigy 100 Kashmir Willow Cricket Bat(Harrow, 1200-1400 g)\r\n', 749, '4.6', '320px', '320px'),
('sports/cricket5', 'Yonker STEP ONE Cricket Helmet(Blue)\r\n', 990, '4.4', '320px', '320px'),
('sports/cricket6', 'CLUB 2 Part Leather Cricket Leather Ball(Pack of 1, Maroon)\r\n', 155, '4.6', '320px', '320px'),
('sports/cricket7', 'JetFire Green Gloves Combo Wicket Keeping Gloves(Men, Green)\r\n', 599, '4.2', '320px', '320px'),
('sports/cricket8', 'Redmax Ceat Popular Poplar Willow Cricket Bat(Harrow, 800-1100 kg)\r\n', 450, '4.9', '320px', '320px'),
('sports/football1', 'RAHICO CLUB Multicolor Brazuca Football - Size: 5(Pack of 1, Multicolor)\r\n', 398, '4.3', '320px', '320px'),
('sports/football2', 'Nivia Storm Football-Size:5(Pack of 1, Multicolor)\r\n', 349, '4.4', '320px', '320px'),
('sports/football3', 'Sniper RUSSIA FIFA World cup 2018 Football-Size:5(Pack of 1, Red)\r\n', 399, '3.7', '320px', '320px'),
('sports/football4', 'Nivia Classic with Sleeve Football Shin Guard(M, Black)\r\n', 261, '4.4', '320px', '320px'),
('sports/football5', 'Furious3D UEFA Star Champion League Football-Size:5(Pack of 1, Multicolor)\r\n', 381, '4.6', '320px', '320px'),
('sports/football6', 'Nivia Carbonite Web Goalkeeping Gloves(S, Multicolor)\r\n', 285, '4.4', '320px', '320px'),
('sports/football7', 'ADIDAS Orange Starlancer V Football - Size:5(Pack of 1, Orange)\r\n', 1348, '4.9', '320px', '320px'),
('sports/football8', 'Nivia Torrido Football-Size: 5(White)\r\n', 766, '4.2', '320px', '320px');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id`, `firstname`, `lastname`, `username`, `password`, `phoneno`, `email`) VALUES
(1, 'sfsdfsfas', 'sfsdfsfdasf', 'Balaji1998', 'Balaji1998', '9182868812', 'balaji.y.1998@gmail.com'),
(2, 'sumanthkr', 'kristipati', 'sumanthkr', 'sumanthkr', '9896464665', 'balaji.y.1998@gmail.com'),
(3, 'naushabss', 'skfjslkjlksjl', 'naushab12', 'naushab12', '5555666644', 'balaji.y.1998@gmail.com'),
(4, 'seena', 'baluw', 'balaji', 'balaji', '8585858585', 'balaji.y.1998@gmail.com'),
(5, '', '', '', '', '0', ''),
(7, 'sdfasfas', 'safsfda', 'sfsfasasf', 'afsfsf', '9502593130', 'balaji.y.1998@gmail.com'),
(8, 'asfasf', 'asfsaf', 'asfasf', 'fsafsaf', '9502593130', 'balaji.y.1998@gmail.com'),
(9, 'Balaji1998', 'ksjdfl', 'jslfkjs', 'ljkjfl', '8585858585', 'balaji.y.1998@gmail.com'),
(10, 'Balaji1998', 'skjfkj', 'kjfdkdjs', 'kjskdjfk', '9502593130', 'balaji.y.1998@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `userid` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `debitcard` int(12) NOT NULL,
  `ccv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`userid`, `address`, `debitcard`, `ccv`) VALUES
(1, 'D-NO:2-101, HIGH SCHOOL ROAD,TADA\r\nSPSR NELLORE DISTRICT,ANDHRA PRADES', 2147483647, 990),
(1, '26/2/321, 4th street,chandra mouli nagar,andhrakesari nagar,opp nippo', 2147483647, 990),
(1, 'D-NO:2-101, HIGH SCHOOL ROAD,TADA\r\nSPSR NELLORE DISTRICT,ANDHRA PRADES', 2147483647, 990);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `cartno` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
