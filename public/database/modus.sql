-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 04:02 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `id` int(11) NOT NULL,
  `A` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `B` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `C` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `D` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `result` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_esperanto_ci;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`id`, `A`, `B`, `C`, `D`, `result`) VALUES
(1, 'they', 'their', 'them', 'themselves', 'themselves'),
(2, 'of', 'among', 'by', 'from', 'by'),
(3, 'frequent', 'frequently', 'frequency', 'frequents', 'frequently'),
(4, 'as well as', 'well', 'added', 'such as', 'such as'),
(5, 'prompt', 'promptness', 'prompts', 'promptly', 'prompts'),
(6, 'once', 'even', 'besides', 'moreover', 'once'),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `customer_img` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `customer_sex` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `customer_birthday` date NOT NULL,
  `customer_email` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `customer_phone` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `customer_username` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `customer_password` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `customer_description` text COLLATE utf8mb4_esperanto_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_esperanto_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `customer_name`, `customer_img`, `customer_sex`, `customer_birthday`, `customer_email`, `customer_phone`, `customer_username`, `customer_password`, `customer_description`) VALUES
(4, 'Nguyen Van B', 'man.png', 'man', '2018-05-27', 'b@gmail.com', '', 'customer1', '$2y$10$rbResbl8wMaac/kC98dDY.XZDdW0Vb/pIVs53GQRfz2pv11SezF3i', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `id` int(11) NOT NULL,
  `news_img` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `news_title` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `news_content` text COLLATE utf8mb4_esperanto_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_esperanto_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `news_img`, `news_title`, `news_content`, `user_id`, `updated_at`) VALUES
(3, '3.jpg', 'I am not sure what I would use this for, or if I even need it. Can someone please explain what this is and why should/soundn''t I use it?', 'I am not sure what I would use this for, or if I even need it. Can someone please explain what this is and why should/soundn''t I use it?I am not sure what I would use this for, or if I even need it. Can someone please explain what this is and why should/soundn''t I use it?', 1, '2018-05-03 04:27:34'),
(5, '5.jpg', 'I am not sure what I would use this for, or if I even need it. Can someone please explain what this is and why should/soundn''t I use it?', 'I am not sure what I would use this for, or if I even need it. Can someone please explain what this is and why should/soundn''t I use it?I am not sure what I would use this for, or if I even need it. Can someone please explain what this is and why should/soundn''t I use it?', 1, '2018-05-03 04:27:34'),
(11, '152534420222195391_1985996418352022_4916870975227617696_n.jpg', 'Title', '<p>tt7</p>', 3, '2018-05-23 03:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paragraph`
--

CREATE TABLE IF NOT EXISTS `tbl_paragraph` (
  `id` int(11) NOT NULL,
  `content` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_esperanto_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_part`
--

CREATE TABLE IF NOT EXISTS `tbl_part` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `directions` text COLLATE utf8mb4_esperanto_ci NOT NULL,
  `example` text COLLATE utf8mb4_esperanto_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_esperanto_ci;

--
-- Dumping data for table `tbl_part`
--

INSERT INTO `tbl_part` (`id`, `name`, `directions`, `example`) VALUES
(1, 1, 'For each question in this part, you will hear four statements about a picture in your test book. When you hear the statements, you must select the one statement that best describes what you see in the picture. Then find the number of the question on your answer sheet and mark your answer. The statements will not be printed in your test book and will be spoken only one time.', ''),
(2, 2, 'You will hear a question or statement and three responses spoken in English. They will not be printed in your test book and will be spoken only one time. Select the best response to the question or statement and mark the letter (A), (B), or (C) on your answer sheet.', ''),
(3, 3, 'You will hear some conversations between two people. You will be asked to answer three questions about what the speakers say in each conversation. Select the best response to each question and mark the letter (A), (B), (C), or (D) on your answer sheet. The conversations will not be printed in your test book and will be spoken only one time.', ''),
(4, 4, 'You will hear some talks given by a single speaker. You will be asked to answer three questions about what the speaker says in each talk. Select the best response to each question and mark the letter (A), (B), (C), or (D) on your answer sheet. The talks will not be printed in your test book and will be spoken only one time.', ''),
(5, 5, 'A word or phrase is missing in each of the sentences below. Four answer choices are given below each sentence. Select the best answer to complete the sentence. Then mark the letter (A), (B), (C), or (D) on your answer sheet.', ''),
(6, 6, 'Read the texts that follow. A word or phrase is missing in some of the sentences. Four answer choices are given below each of the sentences. Select the best answer to complete the text. Then mark the letter (A), (B), (C), or (D) on your answer sheet.', ''),
(7, 7, 'In this part you will read a selection of texts, such as magazine and newspaper articles, letters, and advertisements. Each text is followed by several questions. Select the best answer for each question and mark the letter (A), (B), (C), or (D) on your answer sheet.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `id` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_esperanto_ci NOT NULL,
  `paragraph_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `radio_id` int(11) NOT NULL,
  `conversation` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_esperanto_ci;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`id`, `question`, `paragraph_id`, `part_id`, `answer_id`, `radio_id`, `conversation`) VALUES
(1, 'Passengers on the aircraft are asked to secure _____ belongings during takeoff and landing', 0, 5, 1, 0, 0),
(2, 'East Abihay City is run _____ a mayor and six-member council who are elected for four years', 0, 5, 2, 0, 0),
(3, 'Due to its need for _____ repairs, the Paliot 12Z conveyor belt is scheduled to be replaced by a more efficient model.', 0, 5, 3, 0, 0),
(4, 'On July 23, Mr. Saito will be named chairman of the board _____ president of Tairex Electronics', 0, 5, 4, 0, 0),
(5, 'Any problem with the new software system should be reported to the system administrator _____', 0, 5, 5, 0, 0),
(6, 'Employees currently working in Ridge Manufacturing''s branch offices will move into the new headquarters _____ the building is finished.', 0, 5, 6, 0, 0),
(7, '', 0, 5, 7, 0, 0),
(8, '', 0, 5, 8, 0, 0),
(9, '', 0, 5, 9, 0, 0),
(10, '', 0, 5, 10, 0, 0),
(11, '', 0, 5, 11, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_radio`
--

CREATE TABLE IF NOT EXISTS `tbl_radio` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_esperanto_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `user_img` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `user_name` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `user_username` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `user_password` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `user_sex` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `user_address` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `user_birthday` date NOT NULL,
  `user_email` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `user_phone` varchar(500) COLLATE utf8mb4_esperanto_ci NOT NULL,
  `user_description` text COLLATE utf8mb4_esperanto_ci NOT NULL,
  `user_level` int(11) NOT NULL,
  `user_use` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_esperanto_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_img`, `user_name`, `user_username`, `user_password`, `user_sex`, `user_address`, `user_birthday`, `user_email`, `user_phone`, `user_description`, `user_level`, `user_use`) VALUES
(1, 'man.png', 'Nguyen Van A', 'admin', '$2y$10$E.McQtF3X3gJEP8D9j41Xean8IY3U0KEInITh71MSSOrW1jlXuTEy', 'man', 'hanoi', '2018-04-03', 'a@gmail.com', '123456789', 'Nguyen Van A', 1, 0),
(3, 'man.png', 'Nguyen Van C', 'admin2', '$2y$10$YzblhDUtLG8ceHM1Swz4/.VU.AKgDlWHgj8XbAXxSfcr9ogpaX72O', 'man', 'danang', '2018-04-27', '', '', '', 2, 0),
(4, 'man.png', 'Nguyen Van D', 'admin3', '$2y$10$Gz7FNw5lngrsoOiIPZKhheQ.196XK33iz4ySWDgwKCgd0Popi2xmy', 'man', 'danang', '2018-04-27', '', '', '', 2, 0),
(5, 'man.png', 'Nguyen Van E', 'admin4', '$2y$10$BkMxUaze9HG/MBZfQ2CqdOh8l4W36.080JRg92nFxN3wP.DRP2aG6', 'man', 'danang', '2018-04-27', '', '', '', 2, 0),
(6, 'man.png', 'Nguyen Van F', 'admin5', '$2y$10$8LgTRiBDzJgytlXb.jFYI.YnZUP7goEW6CxY98ZZw.aSVShZk0Ina', 'man', 'danang', '2018-04-27', '', '', '', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_part`
--
ALTER TABLE `tbl_part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_part`
--
ALTER TABLE `tbl_part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
