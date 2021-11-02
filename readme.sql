-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2018 at 09:56 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `readme`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authorName` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`ID`, `name`, `authorName`, `category`, `link`, `image`) VALUES
(1, 'Star Wars', 'Eric Johnson', 'Fiction', 'https://www.bookrix.com/book.html?bookID=ericthered38_1333495825.6803750992#0,486,95022', 'img/team/1.jpg'),
(2, 'Kingdom of a thousand', 'Eftos Ent.', 'Fiction', 'https://www.bookrix.com/book.html?bookID=eftostunnel_1301049355.0605859756#0,486,95454', 'img/team/2.jpg'),
(3, 'Time Traveler', 'S. M. Bowes', 'Fiction', 'https://www.bookrix.com/book.html?bookID=susanbowes_1257178452.5276820660#0,486,8838', 'img/team/3.jpg'),
(4, 'Unofficial Harry Potter Cookbook', 'Dinah Bucholz', 'Fiction', 'https://www.pdfdrive.com/unofficial-harry-potter-cookbookpdf-e27649946.html', 'img/team/4.jpg'),
(5, 'History of Julius Caesar', 'Jacob Abbott', 'History', 'https://www.bookrix.com/book.html?bookID=librarian_1209925614.2448570728#0,432,109818', 'img/team/history 1.jpg'),
(6, 'Narendra Modi', 'Pratap Simha', 'History', 'https://www.bookrix.com/book.html?bookID=imation09_1248759739.6023399830', 'img/team/history 2.jpg'),
(7, 'India', 'Raj Patel', 'History', 'https://www.bookrix.com/book.html?bookID=rajpatel1995_1252018152.6433670521', 'img/team/history 3.jpg'),
(8, 'To My Beloved Heart', 'James Marchiori', 'Horror', 'https://www.free-ebooks.net/ebook/To-My-Beloved-Heart-The-last-Journey-Of-Edgar-Allan-Poe ', 'img/team/h1.jpg'),
(9, 'The Soul King', 'Ray Patino', 'Horror', 'https://www.free-ebooks.net/ebook/The-Soul-King ', 'img/team/h2.jpg '),
(10, 'Author Of Pain', ' David Dwan', 'Horror', 'https://www.free-ebooks.net/ebook/Author-Of-Pain-Minor-Mayhem ', 'img/team/h3.jpg '),
(11, 'A cute love story', 'Nidhi Agrawal', 'Romance', 'https://www.bookrix.com/book.html?bookID=nidhi.agrawal_1272188264.1893169880#0,432,13968', 'img/team/r1.jpg'),
(12, 'A Howl In The Night', 'Lorelei Sutton', 'Romance', ' https://www.bookrix.com/book.html?bookID=lucky97_1307627974.3750898838', 'img/team/r2.jpg'),
(13, 'Kolams', 'Kalai Selvi Arivalagan', 'Arts', 'https://www.bookrix.com/book.html?bookID=kalai29_1302099633.2484359741', 'img/team/arts 3.jpg'),
(14, 'Fun Easy Art', 'John Vandebrooke', 'Arts', 'https://www.bookrix.com/book.html?bookID=funeasyart_1289188771.6836090088', 'img/team/arts 1.jpg'),
(15, 'Sketchbook', 'Adam LaValley', 'Arts', '  https://www.bookrix.com/book.html?bookID=rootrot_1370211692.7657060623', 'img/team/arts 2.jpg'),
(17, 'Arranged', 'Katy Wong', 'Romance', 'https://www.bookrix.com/book.html?bookID=katywong_1340661480.7700328827', 'img/team/r3.jpg'),
(43, 'ZOMBIE APOCALYPSE STORY', 'T.D Jackson', 'Horror', 'https://www.bookrix.com/book.html?bookID=thj1139_1360457352.5284121037', 'img/team/h4.jpg'),
(44, 'Kids love toys', 'Ella Cascino, Natalie Rodda', 'Kids', 'https://www.bookrix.com/book.html?bookID=yd56acceb08da45_1421087180.5461499691', 'img/team/kid1.jpg'),
(45, 'The Mouse that wanted Cheese', 'Austyn Scruggs', 'Kids', 'https://www.bookrix.com/book.html?bookID=austynator13_1332038521.0292160511', 'img/team/kid2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmPassword` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `confirmPassword`, `email`, `userName`) VALUES
(1, 'HaNa', 'hanaa123', 'hanaa123', 'Hana@yahoo.com', 'HaNa'),
(2, 'Yomna', '1234', '1234', 'yomna@yahoo.com', 'YomnaManas'),
(3, 'Mera', '123456789', '123456789', 'mera@yahoo.com', 'Mera'),
(4, 'yamana', 'yamana', 'yamana', 'yamana@yahoo.com', 'yamana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
