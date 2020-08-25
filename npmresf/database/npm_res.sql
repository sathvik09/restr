-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2020 at 04:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `npm_res`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `category` varchar(50) NOT NULL,
  `dishname` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `table_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menulist`
--

CREATE TABLE `menulist` (
  `category` varchar(100) NOT NULL,
  `dishname` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `mid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menulist`
--

INSERT INTO `menulist` (`category`, `dishname`, `price`, `description`, `mid`) VALUES
('Starter', 'Garlic Bread Rolls', 120, 'Subroll topped with garlic, butter and herbs', 1),
('Starter', 'Veg Manchurian', 200, 'Manchurian dumplings and vegetables in soya and chilli sauce', 2),
('Starter', 'Potato Wedges', 145, 'Deep fried potato wedges', 3),
('Starter', 'Chilli Cheese toast', 160, 'Toasted brown bread with cheese and chilli flakes', 4),
('Soup', 'Lemon Cilantro', 145, 'Clear soup served with vegetables and lemon juice', 5),
('Soup', 'Cream of Tomato', 162, 'Creamy soup served with tomato flavour', 6),
('Soup', 'Manchow', 175, 'Spicy vegetables cooked with chilli and soya', 7),
('Soup', 'Creamy Mushroom', 190, 'Creamy soup served with mushroom ', 8),
('Salad', 'Mushroom Cheese', 140, 'Fresh mushroom and egg wih cheese slice', 9),
('Salad', 'Caesar salad', 160, 'A lush green salad served with lettuce', 10),
('Salad', 'Melon Salad', 165, 'Fresh melon , watermelon and oranges are served', 11),
('Salad', 'Avocado Quinoa', 170, 'Bell pepper and olives dressed with pinapple dressing', 12),
('Sandwich', 'Bombay sandwich', 120, 'Street inspired bread grilled sandwich', 13),
('Sandwich', 'Mushroom Cheese', 135, 'Roasted mushroom sandwich served with cheese slice', 14),
('Sandwich', 'Grilled Cottage Cheese', 180, 'Served with cottage cheese, french fries and bell peppers', 15),
('Sandwich', 'Tofu Sandwich', 195, 'Deep Fried tofu layered sandwich with bell peppers and sauce', 16),
('Italian', 'Basil Pesto', 290, 'In pesto and white cream sauce', 17),
('Italian', 'Tomato and cream', 310, 'Tossed in tomato and white cream sauce', 18),
('Italian', 'Alfredo', 320, 'White cream flavoured', 19),
('Italian', 'Mac n cheese', 340, 'Maccoroni pasta with yellow cheddar cheese sauce', 20),
('Mexican', 'Paneer Pizza', 320, 'Served with paneer tikka and tomato sauce base', 21),
('Mexican', 'Classic Margherita', 290, 'Pizza with single cheese, tomato and basil toppings', 22),
('Mexican', 'Farmhouse villa', 310, 'Mushroom topped with 3 types of cheese', 23),
('Mexican', 'Indian Spicy', 300, 'Served with indian flavour and fresh vegetables', 24),
('Indian', 'Dal Khichdi', 190, 'Classic Rice with ghee and lemon', 25),
('Indian', 'Roti Delight', 200, 'North Indian style food with sliced onions/potato wedges', 26),
('Indian', 'Chole Paratha', 220, 'Punjabi Style choice served with paratha ', 27),
('Rice n Noodles', 'Schezwan', 230, 'Schezwan sauce with rice/noodles', 28),
('Rice n Noodles', 'Burnt Garlic', 200, 'Burnt and fried flavoured garlic ', 29),
('Rice n Noodles', 'Veg Fried', 220, 'Chopped chinese vegetables tossed with soya and chilli sauce', 30),
('Waffles', 'Classic waffles', 110, 'Choice of maple or honey', 31),
('Waffles', 'Chocolate Loaded ', 130, 'Layered with belgium dark,milk and white chocolate', 32),
('Waffles', 'Nutty Waffle', 146, 'Loaded with nuts and melted chocolate', 33),
('Waffles', 'Nutella Waffle', 180, 'Spread of nutella and milk chocolate', 34),
('Pancakes', 'Nutella Pancake', 170, 'Served with white chocolate', 35),
('Pancakes', 'Banana Pancake', 185, 'Served with maple syrup', 36),
('Pancakes', 'Dark chocolate ', 190, 'Served with honey', 37),
('Cake n pastries', 'Hazelnut Mousse', 110, 'Blended chocolate mousse', 38),
('Cake n pastries', 'Kitkat Pastry', 122, 'Dutch truffle loaded pastry', 39),
('Cake n pastries', 'Red Velvet', 135, 'Distinct Flavoured with cheamy cheese', 40),
('Cake n pastries', 'Lemon Cheese Cake', 140, 'Thick and creamy base grated with lemon rindes', 41),
('Cookies', 'Whole wheat', 120, 'Healthy whole wheat and oats cookies', 42),
('Cookies', 'Butter cookies', 130, 'Served with butter flavoured yummy cookies', 43),
('Cookies', 'Red Velvet', 155, 'Red velvet classic creamy cookies', 44),
('Indian Tea', 'Masala Chai', 80, 'Masala Spices Flavoured', 45),
('Indian Tea', 'Ginger Chai', 95, 'Ginger Flavoured', 46),
('Indian Tea', 'Lemon Grass Chai', 110, 'Fresh Lemon Grass flavoured', 47),
('Classic Coffee', 'Expresso', 60, 'Coffee delight', 48),
('Classic Coffee', 'Filter Coffee', 70, 'Fresh Filter coffee', 49),
('Classic Coffee', 'Latte', 85, 'Creamy Latte', 50),
('Classic Coffee', 'Classic Cappuccino', 110, 'Served with cookie', 51),
('Jar Shakes', 'Strawberry', 120, 'Berry Flavoured milkshake', 52),
('Jar Shakes', 'Oreo Shake', 135, 'Oreo crunches flavoured', 53),
('Jar Shakes', 'Nutella', 160, 'Nutella with cream milkshake', 54),
('Mojitos', 'Mint', 110, 'Mint flavoured chilled drink', 55),
('Mojitos', 'Peach', 150, 'Peach flavoured chilled drink', 56),
('Mojitos', 'Orange', 165, 'Orange flavoured chilled drink', 57),
('Starter', 'dvkjb', 83, 'dkjsb', 58);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `customer_fname` varchar(50) NOT NULL,
  `customer_lname` varchar(50) NOT NULL,
  `nop` int(4) NOT NULL,
  `phone_no` bigint(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`customer_fname`, `customer_lname`, `nop`, `phone_no`, `date`) VALUES
('svvs', '$dfd', 3233, 3232233232, '3233-02-23'),
('ergre', '$dfdfbf', 2332, 3242432322, '2332-04-23'),
('sdvs', '$dfd', 1212, 39585400, '1212-02-23'),
('Nikhil', 'sk', 2, 9986743899, '2020-08-28'),
('Sathvik', 'kp', 3, 9986806485, '2020-07-31'),
('Sathvik', 'kp', 2, 9986806485, '2020-08-15'),
('Sathvik', 'kp', 2, 9986806485, '2020-08-22'),
('Nikhil', 'sk', 2, 9986743899, '2020-08-08'),
('Sathvik', 'kp', 3, 9986806485, '2020-08-09'),
('Sathvik', 'kp', 2, 9986806485, '2020-08-13'),
('Sathvik', 'kp', 2, 9986806485, '2020-08-08'),
('Sathvik', 'kp', 2, 9986806485, '2020-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `restr`
--

CREATE TABLE `restr` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `numCus` int(11) NOT NULL,
  `totalCus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restr`
--

INSERT INTO `restr` (`sno`, `name`, `type`, `numCus`, `totalCus`) VALUES
(1, 'Stockhome', 'dine_in', 6, 10),
(2, 'Empire Restaurant', 'dine_in', 0, 10),
(3, 'Burger_King', 'fast_food', 0, 10),
(4, 'South_Kitchen', 'fast_food', 0, 10),
(5, 'Meghana_Biriyani', 'dine_in', 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'abcd', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menulist`
--
ALTER TABLE `menulist`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `restr`
--
ALTER TABLE `restr`
  ADD PRIMARY KEY (`sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
