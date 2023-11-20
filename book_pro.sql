-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 08:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_name`) VALUES
(1, 'horror'),
(2, 'Thriller'),
(3, 'Science Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `pro_id` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cat_id` int(200) NOT NULL,
  `sub_id` int(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`pro_id`, `image`, `title`, `description`, `cat_id`, `sub_id`, `price`, `author`) VALUES
(31, 'image/x.png', 'Ghosts of the Silent Hills', 'Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where sh', 1, 26, '60k', ''),
(32, 'image/x4.png', 'Dark', 'Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where sh', 1, 27, '60k', ''),
(33, 'image/vaman.jpg', 'The Return of Vaman ', 'Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where sh', 3, 28, '60k', ''),
(34, 'image/beast.jpg', 'beast', 'Here’s another of the scariest horror books that has been made into a movie—and a successful Netflix series. If you loved those, you’ll be pleased to know the book is even better. (Isn’t it always?) Here’s what happens: A quirky researcher gathers togethe', 2, 26, '60k', ''),
(35, 'image/x1.png', 'morning', 'Here’s another of the scariest horror books that has been made into a movie—and a successful Netflix series. If you loved those, you’ll be pleased to know the book is even better. (Isn’t it always?) Here’s what happens: A quirky researcher gathers togethe', 3, 26, '60k', ''),
(36, 'image/x3.png', 'one morning', 'Here’s another of the scariest horror books that has been made into a movie—and a successful Netflix series. If you loved those, you’ll be pleased to know the book is even better. (Isn’t it always?) Here’s what happens: A quirky researcher gathers togethe', 3, 26, '60k', ''),
(37, 'image/aliens.jpg', 'alian', 'Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where sh', 2, 26, '60k', ''),
(38, 'image/x4.png', 'WROST DAY', 'Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where sh', 2, 30, '60k', ''),
(39, 'image/aliens.jpg', 'alian', 'Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where sh', 1, 30, '60k', ''),
(40, 'image/x.png', 'dark', 'Here’s another of the scariest horror books that has been made into a movie—and a successful Netflix series. If you loved those, you’ll be pleased to know the book is even better. (Isn’t it always?) Here’s what happens: A quirky researcher gathers togethe', 1, 30, '60k', ''),
(41, 'image/pexels-dominika-roseclay-1036848.jpg', 'Anita Krishan sci fic', 'sdfsdf', 3, 26, 'sdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `sub_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `sub_cat_name` varchar(200) NOT NULL,
  `followers` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`sub_id`, `cat_id`, `author_name`, `rating`, `sub_cat_name`, `followers`) VALUES
(23, 1, 'Stephen King ', '.', 'Stephen King ', '.'),
(24, 1, 'Christopher Buehlman ', '', 'Christopher Buehlman ', ''),
(25, 1, 'William Peter Blatty ', '', 'William Peter Blatty ', ''),
(26, 1, 'Anita Krishan', '', 'Anita Krishan', ''),
(27, 1, 'Ratnakar Matkari and Vikrant Pande', '', 'Ratnakar Matkari and Vikrant Pande', ''),
(28, 3, 'Jayant V Narlikar', '', 'Jayant V Narlikar', ''),
(29, 3, 'Anil Menon', '', 'Anil Menon', ''),
(30, 2, 'Ahmad Khan', '', 'Ahmad Khan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `sub_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
