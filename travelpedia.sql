-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 02:29 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelpedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `bucket_list`
--

CREATE TABLE `bucket_list` (
  `bucketId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `locationId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `commentDetails` text NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDateTime` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDateTime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image_tag`
--

CREATE TABLE `image_tag` (
  `imageTagId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  `postImageId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationId` int(11) NOT NULL,
  `placeName` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationId`, `placeName`, `latitude`, `longitude`) VALUES
(10, 'Boga Lake, Ruma Upazila, Chittagong Division, Bang', 21.980335, 92.46999649999998),
(9, 'Sajek, Chittagong Division, Bangladesh', 23.3819926, 92.29382290000001);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `postTitle` varchar(120) NOT NULL,
  `locationId` int(11) NOT NULL,
  `postDetails` text NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `travelDate` date NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDateTime` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDateTime` datetime DEFAULT NULL,
  `delete_status` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postId`, `userId`, `postTitle`, `locationId`, `postDetails`, `points`, `travelDate`, `createdBy`, `createdDateTime`, `updatedBy`, `updatedDateTime`, `delete_status`) VALUES
(45, 21, 'Tour of sajek', 9, 'Awesome. super lir. stranger things 3. ', 0, '2017-12-23', 21, '2017-12-23 06:54:28', NULL, NULL, 0),
(44, 21, 'Tour of Ruma', 12, 'It was lit', 0, '2017-12-23', 21, '2017-12-23 06:45:09', NULL, NULL, 0),
(43, 21, 'Tour of boga lake', 11, 'It was lit', 0, '2017-12-23', 21, '2017-12-23 06:40:16', NULL, NULL, 0),
(42, 21, 'Tour of boga lake', 0, 'It was lit', 0, '2017-12-23', 21, '2017-12-23 06:38:10', NULL, NULL, 0),
(41, 21, 'First tour in sajek', 9, 'Onk ghurlam onk oja korlam', 0, '2017-12-05', 21, '2017-12-23 06:32:43', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_image`
--

CREATE TABLE `post_image` (
  `imageId` int(11) NOT NULL,
  `fileLink` varchar(2000) NOT NULL,
  `postId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_image`
--

INSERT INTO `post_image` (`imageId`, `fileLink`, `postId`) VALUES
(12, 'images/20171223014509image.jpeg', 44),
(11, 'images/20171223014016image.jpeg', 43),
(10, 'images/20171223013810image.jpeg', 42),
(9, 'images/20171223013243image.jpeg', 41),
(8, 'images/20171223013243image.jpeg', 41),
(7, 'images/20171223013243image.jpeg', 41),
(13, 'images/20171223015428image.jpeg', 45);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `postTagId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  `postId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`postTagId`, `tagId`, `postId`) VALUES
(1, 1, 41),
(2, 2, 41),
(3, 3, 41),
(4, 4, 42),
(5, 5, 42),
(6, 6, 42),
(7, 7, 42),
(8, 8, 42),
(9, 4, 43),
(10, 5, 43),
(11, 6, 43),
(12, 7, 43),
(13, 8, 43),
(14, 2, 44),
(15, 9, 44),
(16, 10, 44),
(17, 11, 44),
(18, 12, 44),
(19, 7, 44),
(20, 1, 45),
(21, 4, 45),
(22, 13, 45);

-- --------------------------------------------------------

--
-- Table structure for table `social_link`
--

CREATE TABLE `social_link` (
  `socialLinkId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `Link` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tagId` int(11) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `tagCount` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tagId`, `tag`, `tagCount`) VALUES
(1, '#travel', 1),
(2, '#ghuraghuri', 1),
(3, '#sajek', 1),
(4, '#pani', 1),
(5, '#onk_JOSS', 1),
(6, '#best', 1),
(7, '#river', 1),
(8, '#traveling_is_life', 1),
(9, '#moja', 1),
(10, '#border', 1),
(11, '#ruma', 1),
(12, '#boga', 1),
(13, '#hill', 1);

-- --------------------------------------------------------

--
-- Table structure for table `travel_history`
--

CREATE TABLE `travel_history` (
  `historyId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `locationId` int(11) NOT NULL,
  `visitDate` datetime DEFAULT NULL,
  `summary` varchar(50) DEFAULT NULL,
  `temperature` decimal(10,0) DEFAULT NULL,
  `apparentTemperature` decimal(10,0) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedBy` int(11) NOT NULL,
  `updatedDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleteStatus` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `travel_mate`
--

CREATE TABLE `travel_mate` (
  `travelMateId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_mate`
--

INSERT INTO `travel_mate` (`travelMateId`, `postId`, `userId`) VALUES
(1, 41, 3),
(2, 41, 3),
(3, 41, 3),
(4, 42, 0),
(5, 42, 0),
(6, 42, 0),
(7, 42, 0),
(8, 43, 22),
(9, 43, 20),
(10, 43, 7),
(11, 43, 0),
(12, 44, 1),
(13, 45, 1),
(14, 45, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `profilePicLink` varchar(1000) NOT NULL DEFAULT 'resource/profile.png',
  `userTypeId` int(11) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` char(10) DEFAULT 'N',
  `createdDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleteStatus` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `email`, `firstName`, `lastName`, `password`, `profilePicLink`, `userTypeId`, `phone`, `dob`, `gender`, `createdDateTime`, `deleteStatus`) VALUES
(1, 'dipto', 'dipto7@gh.com', 'dipto', 'zaman', 'Asdfghj1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0),
(2, 'baky', 'baky@gh.com', NULL, NULL, 'Password1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0),
(7, 'iamdipto', 'dipto@gmail.com', 'gtrsguus', 'rdjdsj', 'Asdfghj1', 'gfghffhj', 1, '01712383910', '2017-11-09', 'F', '2017-12-23 03:33:05', 0),
(10, 'jon', 'gamil@gmail.com', NULL, NULL, 'Asdfghj1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0),
(11, 'jon3', 'mil@gmail.com', NULL, NULL, 'Asdfghj1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0),
(13, 'jon6', 'jh@gmail.com', NULL, NULL, 'Asdfghj1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0),
(14, 'jon7', 'jh7@gmail.com', NULL, NULL, 'Asdfghj1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0),
(15, 'jon8', 'jh8@gmail.com', NULL, NULL, 'Asdfghj1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0),
(16, 'ex8', 'ex8@gmail.com', NULL, NULL, 'Asdfghj1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0),
(18, 'ex9', 'ex9@gmail.com', NULL, NULL, 'Asdfghj1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0),
(19, 'anu', 'anu@gmail.com', NULL, NULL, 'Through1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0),
(20, 'jonbir', 'hr@gmail.com', NULL, NULL, 'Asdfghj1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0),
(21, 'ragnar', 'ragnar@gmail.com', 'Ragnar', 'Lothbrok', 'Asdfghj1', 'images/ragnar.jpeg', 1, '01654124578', '1953-10-04', 'M', '2017-12-23 03:33:05', 0),
(22, 'oindrila', 'oindrila@gmail.com', NULL, NULL, 'Asdfghj1', '', 1, NULL, NULL, 'N', '2017-12-23 03:33:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `userTypeId` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bucket_list`
--
ALTER TABLE `bucket_list`
  ADD PRIMARY KEY (`bucketId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `image_tag`
--
ALTER TABLE `image_tag`
  ADD PRIMARY KEY (`imageTagId`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postId`);

--
-- Indexes for table `post_image`
--
ALTER TABLE `post_image`
  ADD PRIMARY KEY (`imageId`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`postTagId`);

--
-- Indexes for table `social_link`
--
ALTER TABLE `social_link`
  ADD PRIMARY KEY (`socialLinkId`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tagId`);

--
-- Indexes for table `travel_history`
--
ALTER TABLE `travel_history`
  ADD PRIMARY KEY (`historyId`);

--
-- Indexes for table `travel_mate`
--
ALTER TABLE `travel_mate`
  ADD PRIMARY KEY (`travelMateId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`userTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bucket_list`
--
ALTER TABLE `bucket_list`
  MODIFY `bucketId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image_tag`
--
ALTER TABLE `image_tag`
  MODIFY `imageTagId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `post_image`
--
ALTER TABLE `post_image`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `postTagId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `social_link`
--
ALTER TABLE `social_link`
  MODIFY `socialLinkId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tagId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `travel_history`
--
ALTER TABLE `travel_history`
  MODIFY `historyId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `travel_mate`
--
ALTER TABLE `travel_mate`
  MODIFY `travelMateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `userTypeId` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
