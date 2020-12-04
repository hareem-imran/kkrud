-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 06:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kandns_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `category_image` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'Kabab Temptation', NULL),
(2, 'Breaded Selection', NULL),
(3, 'Deline', NULL),
(4, 'Bakistry', NULL),
(5, 'Signature Samosa and Spring Rolls', NULL),
(6, 'Toppingz n Fillings', NULL),
(7, 'Tender Brest', NULL),
(8, 'Stok', NULL),
(9, 'Whole Chicken Designer Cuts and Boneless Meat', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_image` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category_id`, `product_image`) VALUES
(1, 'Chapli Kabab', 1, NULL),
(2, 'Seekh Kabab', 1, NULL),
(3, 'Shami Kabab', 1, NULL),
(4, 'Kofta Home-Style', 1, NULL),
(5, 'Kafta Kabab', 1, NULL),
(6, 'Mughlai Tikka', 1, NULL),
(7, 'Nuggets', 2, NULL),
(8, 'Croquettes', 2, NULL),
(9, 'Tender Pops', 2, NULL),
(10, 'Haray Bharay Nuggets', 2, NULL),
(11, 'Fun Nuggets', 2, NULL),
(12, 'Burger Patties', 2, NULL),
(13, 'Thunder Fillet (Breast)', 2, NULL),
(14, 'Combo Wings', 2, NULL),
(15, 'Chicken Tempura', 2, NULL),
(16, 'Fiery Fingers', 2, NULL),
(17, 'Breakfast Sausage', 3, NULL),
(18, 'Frankfurter Sausage', 3, NULL),
(19, 'Jumbo Frank Sausage with cheese and onion', 3, NULL),
(20, 'Jumbo Frank Sausage with Jalapeño peppers and cheese', 3, NULL),
(21, 'Mini Franks Sausage with chesse', 3, NULL),
(22, 'Bologna Slices', 3, NULL),
(23, 'Mortadella Slices', 3, NULL),
(24, 'Pepperoni Slices', 3, NULL),
(25, 'Smoked Breast Fillet Strips', 3, NULL),
(26, 'Puff Patteze', 4, NULL),
(27, 'Patteze', 4, NULL),
(28, 'Pizzetta', 4, NULL),
(29, 'Quiche', 4, NULL),
(30, 'Samosa', 5, NULL),
(31, 'Tornadoz', 5, NULL),
(32, 'Spring Rolls', 5, NULL),
(33, 'Tikka', 6, NULL),
(34, 'Fajita', 6, NULL),
(35, 'Chicken Tikka Chunks', 6, NULL),
(36, 'Tender Brest', 7, NULL),
(37, 'Stok', 8, NULL),
(38, 'Whole Chicken', 9, NULL),
(39, 'Designer Cuts', 9, NULL),
(40, 'Boneless Meat', 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(11) NOT NULL,
  `recipe_ing` longtext DEFAULT NULL,
  `recipe_serves` varchar(100) DEFAULT NULL,
  `recipe_cooking` varchar(100) DEFAULT NULL,
  `recipe_preparation` varchar(100) DEFAULT NULL,
  `recipe_method` longtext DEFAULT NULL,
  `recipe_youtube` mediumtext DEFAULT NULL,
  `recipe_image` longtext DEFAULT NULL,
  `recipe_category_id` int(11) DEFAULT NULL,
  `recipe_product_id` int(11) DEFAULT NULL,
  `recipe_title` varchar(255) DEFAULT NULL,
  `url_slug` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `recipe_ing`, `recipe_serves`, `recipe_cooking`, `recipe_preparation`, `recipe_method`, `recipe_youtube`, `recipe_image`, `recipe_category_id`, `recipe_product_id`, `recipe_title`, `url_slug`, `status`) VALUES
(1, 'abcd', '2', '20 min', '10 min', '', 'https://www.youtube.com/embed/EUPZODy7pYk', 'mortadella-pasta-salad.jpg', 1, 1, 'abc', NULL, 1),
(2, '', '1', '20 min', '25 min', '', 'https://www.youtube.com/embed/LSgVOVerEdQ', 'chaplikabab-small.png', 1, 1, 'Baked Chapli Kabab', NULL, 1),
(26, '<ul>\r\n <li><strong>K&N&#39;s Mortadella Slices - 12 slices</strong></li>\r\n <li>Olive oil - 2 tbsp</li>\r\n <li>Onion - ¼ cup; chopped</li>\r\n <li>Garlic - 2 tbsp; crushed</li>\r\n <li>Mushrooms - ½ cup; sliced</li>\r\n <li>Tomato paste - 1 tbsp</li>\r\n <li>White pepper powder - 1 tsp</li>\r\n <li>Salt - 1 tsp or to taste</li>\r\n <li>Penne pasta - 4 cups; boiled</li>\r\n <li>Sour cream - 1 cup</li>\r\n <li>Basil leaves - ¼ cup</li>\r\n <li>Chicken stock - ½ cup; 1 cube K&N&#39;s Stok dissolved in ½ cup water</li>\r\n</ul>\r\n', '3-4', '5 min', '10 min', '<p>Thaw K&N&#39;s Mortadella Slices as per instructions on pack, and cut them into quarters.</p>\r\n\r\n<p>Heat oil in a pan and sauté onions and garlic for 2 minutes, or until soft.</p>\r\n\r\n<p>Add mushrooms, tomato paste, white pepper powder, salt and stir well.</p>\r\n\r\n<p>Add boiled pasta to the pan and stir to combine flavours.</p>\r\n\r\n<p>Pour in sour cream and stir to combine.</p>\r\n\r\n<p>Add quartered Mortadella Slices and mix well.</p>\r\n\r\n<p>Mix in basil leaves and chicken stock. Let simmer for 1-2 minutes and serve hot.</p>\r\n', 'https://www.youtube.com/embed/LSgVOVerEdQ', 'mortadella-pasta-salad.jpg', 3, 23, 'Mortadella Pasta Salad', NULL, 1),
(28, '<p>abcd</p>\r\n', '3-4', '11 min', '40min', '<p>abcdefgh</p>\r\n', 'https://www.youtube.com/embed/LSgVOVerEdQ', 'chapli-kabab-roll.jpg', 3, 17, 'abc', NULL, 1),
(29, '', '1', '5 min', '10 min', '', 'https://www.youtube.com/embed/LSgVOVerEdQ', 'chapli-kabab-roll.jpg', 1, 1, 'abc', 'abc', 1),
(30, '<p>bdkjvh</p>\r\n', '3-4', '5 min', '25 min', '<p>hdbvkj</p>\r\n', 'https://www.youtube.com/embed/LSgVOVerEdQ', 'chapli-kabab-roll.jpg', 3, 17, 'abc', 'abc-1', 1),
(31, '<p>abc</p>\r\n', '3-4', '5 min', '26 min', '<p>abc</p>\r\n', 'https://www.youtube.com/embed/LSgVOVerEdQ', 'chapli-kabab-roll.jpg', 1, 2, 'Baked Chapli Kabab', 'baked-chapli-kabab', 1),
(32, '<p>abc</p>\r\n', '1', '5 min', '10 min', '<p>abc</p>\r\n', 'https://www.youtube.com/embed/LSgVOVerEdQ', 'chapli-kabab-roll.jpg', 2, 8, 'Croquettes Stroganoff', 'croquettes-stroganoff', 1),
(33, '<p>abcdefgh</p>\r\n', '3-4', '5 min', '25 min', '<p>abcdefgh</p>\r\n', 'https://www.youtube.com/embed/LSgVOVerEdQ', 'chapli-kabab-roll.jpg', 1, 1, 'Chapli Kabab Roll', 'chapli-kabab-roll', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
