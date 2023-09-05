-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2023 at 01:55 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'electronics'),
(2, 'cloths'),
(5, 'others'),
(9, 'Books'),
(11, 'Beauty Products'),
(12, 'Note Book'),
(13, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `product_desc` text,
  `product_img` varchar(255) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `tax` int NOT NULL,
  `category_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_title`, `product_desc`, `product_img`, `price`, `discount`, `tax`, `category_id`) VALUES
(4, 'Camera', 'Product Specification ; Camera Range, 10 to 20 m ; Max. Image Resolution, 1920 x 1080 MP ; Country of Origin, Made in India ; option, All NVR and DVR supported in ..', 'A digital camera is a camera that captures photographs in digital memory. Most cameras produced today are digital, largely replacing those that capture ...', '1.jpg', 50000, 30, 20, 1),
(5, 'Glasses', '    Occhiali.     Fresh Specs.     Image Eyewear.     Brighteyes.     Pash Eyewear.     Blackout.     La Nuance.     Retr0.', 'Sunglasses or sun glasses (informally called shades or sunnies; more names below).', '2.jpg', 700, 15, 12, 2),
(6, 'Headphone', 'Wings Vader 100 Wired Gaming Headset  ', 'Mesmeric experience and ambidextrous comfortable design with ultra-smooth movement are essential for gaming.', 'headphone.jpg', 1800, 10, 18, 1),
(7, 'Shoes', 'REVOLUTION 6 NN Running Shoes For Men  (Red)', 'Each description focuses on details specific to each dress. I used the', 'shoes.jpg', 1500, 20, 18, 2),
(8, 'T-shirt', 'Men Striped Polo Neck Multicolor T-Shirt', 'Everyone, including men, women, teenagers, children, and babies, wears t-shirts.', 'T-shirt.jpg', 450, 15, 8, 2),
(9, 'Sweater', 'Women Solid High Neck Black Sweater', 'Find cardigans, oversized sweaters, cable knits, and more.', 'pexels-dom-j-45982.jpg', 800, 20, 5, 2),
(10, 'Towel', '', 'NANDAN IRIS Cotton 550 GSM Bath Towel Set  (Pack of 2)', 'pexels-dom-j-45980.jpg', 489, 15, 12, 2),
(11, 'Jeans', '', 'Men Slim Mid Rise Blue Jeans', 'pexels-karolina-grabowska-4210860.jpg', 449, 12, 8, 2),
(12, 'Kids T-shirt', '', 'Baby Boys & Baby Girls Casual T-shirt Pant  (Black)', 'kids clothes.jpg', 349, 15, 8, 2),
(13, 'Belt', 'Men Formal, Casual, Party Black Genuine Leather Belt', '', '36-leather-belts-for-men.jpg', 259, 20, 12, 2),
(14, 'iphone-13', 'APPLE iPhone 13 (Midnight, 128 GB)', 'iPhone 13. boasts an advanced dual-camera system that allows you to click mesmerising pictures with immaculate clarity. ', 'iphone-13.jpg', 58999, 25, 18, 1),
(15, 'LED TV', 'SAMSUNG 80 cm (32 Inch) HD Ready LED Smart Tizen TV with 2022 Model  (UA32T4380AKXXL)', ' Installation: The TV table stand is not included in the box with this model.', 'led tv.jpg', 13599, 25, 18, 1),
(16, 'Iron', 'Orient Electric by orient Fabri Press DIFP10BP 1000 W Dry Iron  (Blue, Black)', ' Straightening out creases and wrinkles from clothes is not a tedious task anymore, thanks to the Orient Electric Fabri Press 1000 W Dry Iron.', '-original-imagghxryq5xntgt.JPG', 699, 20, 12, 1),
(17, ' Exado Pro AS (Riband Blue Matte)', 'V-Guard Exado Pro AS 1 Star 1200 mm Energy Saving 3 Blade Ceiling Fan', ' Enjoy all the advantages of a high speed ceiling fan that also matches any stunning showpiece in your interior spaces, with V-Guard Exado Pro AS Anti Dust Designer Ceiling Fans for Home. ', 'fan.jpg', 3399, 20, 18, 1),
(18, 'Gas Stove ', 'Khaitan 2 Burner BP Nano Premium MS Black Glass Manual Gas Stove  (2 Burners)', 'Khaitan 2 Burner BP NANO MS Premium Black Glass Manual GasStove(2 Burners)Bring home the joy of cooking with Khaitan Gas stoves.', 'gas stove.jpg', 1549, 25, 21, 5),
(19, ' Lunch Box ', 'Oliveware Teso Lunch Box with Bottle (Blue-Pro) 4 Containers Lunch Box  (1470 ml, Thermoware)', ' Oliveware Teso Pro Lunch Box is made using only the best quality materials that are European Food Grade Virgin raw materials.', 'lunch bag.jpg', 800, 15, 8, 5),
(21, 'Mama Earth aloe gel', 'Mama Earth aloe gel', 'Mama Earth aloe gel', 'Screenshot 2023-04-17 at 15-18-19 mama earth aloe vera gel - Bing.png', 599, 0, 12, 11),
(22, 'Laptop ', 'Some Laptop', 'This is Asus Laptop for new generartion', 'altumcode-gbcQSP1nAGA-unsplash.jpg', 59000, 5, 18, 1),
(24, 'Keyboard', 'artis WK60 Combo Set  (Pink)', 'WK60 Wireless Keyboard & WM60 Mouse Combo with Soft touch, hotkeys keyboard, and a high precision optical mous', 'f84bf217-f421-45d5-bf2a-8f7635e8a54d.3993ad15c17a02fb21ce2e7e4ce0d406.jpeg', 1299, 5, 9, 1),
(25, 'Moniter', 'Lenovo D-Series 19.5 Inch Full HD TN Panel with Fully Adjustable', ' Work or entertainment, it performs brilliantly. Lenovo D20-30 Monitor Meet the smart monitor with a fun side.', '338223.webp', 14000, 20, 18, 1),
(26, 'Meter', 'Republic Multimeter AC DC Voltage current', 'Voltage Testing, Current Testing, Continuity Check and Testing, AC testing, DC', 'Electronic_multi_meter.jpg', 400, 5, 9, 1),
(27, 'Shirt', 'Men Regular Fit Casual Shirt', 'Men Regular Fit Casual Shirt', 'Folded_Shirts_1000_0001.jpg', 459, 5, 0, 2),
(28, 'Saree', 'Self Design Banarasi Cotton Blend, Pure Silk Saree  (Maroon)', 'Self Design Banarasi Cotton Blend, Pure Silk Saree  (Maroon)', 'free-banarasi-saree-kalapushpi-unstitched-original-imagm5vz25z6fmuj.webp', 549, 10, 9, 2),
(29, 'Books', 'Books', '', 'stack-of-books-transparent-background-4.png', 500, 10, 0, 9),
(30, 'Note Book', 'NAVNEET HQ Five Subject Book A5 Notebook Single Line 300 Pages  (Blue)', 'Flexi Note book with four removable dividers to divide the number of pages in sections.', 'notebook-transparent-background-18.png', 250, 5, 0, 9),
(31, 'Rich Dad Poor Dad', 'Rich Dad Poor Dad  (Paperback, Robert T Kiyosaki)', 'Rich Dad Poor Dad  (Paperback, Robert T Kiyosaki)', 'rich-dad-poor-dad-robert-kiyosaki.png', 200, 5, 0, 9),
(32, 'Diary', '2023 B5 Diary YES 330 Pages ', '2023 B5 Diary YES 330 Pages ', 'book_PNG51057.png', 299, 5, 0, 9),
(33, 'Book', 'Classmate Notebook Regular Notebook Four Lines with Gap 300 Pages', ' The cover design of the delivered product may vary slightly from what is shown in the image, as it is sourced in mixed batches.', 'book-clipart-png-5.png', 550, 15, 9, 9),
(34, 'Barking up to the wrong tree', 'Barking up to the wrong tree', 'Barking up to the wrong tree', 'Untitled.jpg', 299, 0, 0, 9),
(35, 'Every thing is fked up', 'Every thing is fked up', 'Every thing is fked up', '2_5402529801317647414_0000.jpg', 499, 0, 0, 9),
(36, 'Elon Musk', 'Elon Musk', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, perspiciatis.', 'elon.png', 399, 0, 0, 9),
(37, 'How the world really works', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, perspiciatis.', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, perspiciatis.', 's-l500.jpg', 299, 0, 0, 9),
(38, 'The subtle are of not giving ', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, perspiciatis.', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, perspiciatis.', '9780062457714.jpg', 799, 0, 0, 9),
(39, 'Facial Cream', 'Facial Cream 120ml', '', 'pngwing.com_.png', 299, 5, 0, 11),
(40, 'Face Brash', 'Face Brash 2 inch', '', 'Makeup-PNG-Image.png', 249, 10, 0, 11),
(41, 'Make Kit', 'Make kit with diamond ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, commodi?', 'Makeup-Kit-Products.png', 499, 5, 0, 11),
(42, 'Makeup product kit', 'Make kit with set', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, commodi?', 'Motives-pic-2.png', 349, 10, 0, 11),
(43, 'Dove Shampoo', 'Dove Shampoo', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, commodi?', '50468-tab-516476_greentea_1920x1920-1063213.png', 549, 15, 9, 11),
(44, 'Himalya Shampoo', 'Himalya shampoo anti hair fall sampoo', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, commodi?', 'AHF-rev_1.png', 399, 0, 0, 5),
(45, 'Beauty Kit', 'Beauty kit all product mix', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, commodi?', 'pngwing.com_.png', 499, 10, 0, 11),
(46, 'Oil', 'Oil product and Face wash, Shampoo ,Body butter', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, commodi?', 'ppt_template12.png', 599, 15, 9, 11),
(47, 'Skin Medica', 'SkinMedica product', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, commodi?', 'Skinmedica-Product-Family.png', 799, 15, 0, 11),
(48, 'Endota spa', 'Endota spa organic product', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, commodi?', '612e310604b9948cfa20df9b3150c789.png', 449, 10, 9, 11),
(51, 'DSLR Camera Lens', 'DSLR Camera Lens product', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, perspiciatis.', 'pexels-pixabay-279906.jpg', 2700, 30, 18, 5),
(52, 'Moon', 'Moon', 'Moon ', 'morteza-khalili-DGShmXbqpn0-unsplash(1).jpg', 599, 15, 9, 5),
(53, 'Book', 'Note Book', 'Note Book', 'stack-of-books-transparent-background-4.png', 249, 20, 9, 5),
(54, 'Dog', 'Dog a pet', 'dghjhtyjyjjjjjjhdfdff', 'pets2.jpg', 5000, 15, 9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile_number`, `password`) VALUES
(1, 'Vivek Kumar', 'vivek@gmail.com', '7974884384', 'vivek4323'),
(2, 'Pratigya Kumari', 'pratigya@gmail.com', '87965766622', 'pratigya12'),
(39, 'Raju', 'raju@gmail.com', '96656795755', 'raju454'),
(40, 'Rohan', 'rohan@gmail.com', '8956687857', 'rohan445');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
