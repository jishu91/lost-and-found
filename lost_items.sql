-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2025 at 05:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lostfound_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `lost_items`
--

CREATE TABLE `lost_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lost_items`
--

INSERT INTO `lost_items` (`id`, `item_name`, `description`, `location`, `contact`, `image`, `created_at`) VALUES
(1, 'box', 'red box', 'near the lab', '9365699301', 'WhatsApp Image 2025-01-03 at 3.59.26 PM.jpeg', '2025-02-09 07:22:52'),
(2, 'box', 'blue box', 'near the table', '9365699302', 'wallpaperflare.com_wallpaper.jpg', '2025-02-09 07:37:40'),
(3, 'new', 'near new', 'newen', '23', 'v4-1200px-Find-Lost-Objects-Step-13-Version-8.jpg', '2025-02-15 06:52:40'),
(4, 'Pencil box', 'Red pencil box with 3green pencils', 'At xyz_university room_no.210', '8812862455', 'pencil box.jpg', '2025-02-16 10:26:59'),
(5, 'Keys', '2 pair of keys', 'xyz_cafeteria', '8812862455', 'keys.jpg', '2025-02-16 10:29:05'),
(6, 'Tiffin Box', 'Tiffin Box with 3 Containers yellow blue color', 'xyz_place', '8812862455', 'tiffin.jpg', '2025-02-16 10:31:34'),
(7, 'Helmet', 'black colored helmet', 'xyz_hotel', '8812862455', 'helmet.png', '2025-02-16 10:32:30'),
(8, 'new', 'dd', 'dd', '8812862455', 'logo.png', '2025-02-20 08:20:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lost_items`
--
ALTER TABLE `lost_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lost_items`
--
ALTER TABLE `lost_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
