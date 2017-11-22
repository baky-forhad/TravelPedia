-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 04:17 PM
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
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `points` int(11) NOT NULL,
  `travelDate` date NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdDateTime` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDateTime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_image`
--

CREATE TABLE `post_image` (
  `imageId` int(11) NOT NULL,
  `fileLink` varchar(2000) NOT NULL,
  `postId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `postTagId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  `postId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `tagCount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `travel_history`
--

CREATE TABLE `travel_history` (
  `historyId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `locationId` int(11) NOT NULL,
  `visitDate` datetime DEFAULT NULL
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
  `profilePicLink` text,
  `userTypeId` int(11) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` char(10) DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `email`, `firstName`, `lastName`, `password`, `profilePicLink`, `userTypeId`, `phone`, `dob`, `gender`) VALUES
(1, 'dipto', 'dipto7@gh.com', 'dipto', 'zaman', 'Asdfghj1', NULL, 1, NULL, NULL, 'N'),
(2, 'baky', 'baky@gh.com', NULL, NULL, 'Password1', NULL, 1, NULL, NULL, 'N'),
(7, 'iamdipto', 'dipto@gmail.com', 'gtrsguus', 'rdjdsj', 'Asdfghj1', 'gfghffhj', 1, '01712383910', '2017-11-09', 'F'),
(10, 'jon', 'gamil@gmail.com', NULL, NULL, 'Asdfghj1', NULL, 1, NULL, NULL, 'N'),
(11, 'jon3', 'mil@gmail.com', NULL, NULL, 'Asdfghj1', NULL, 1, NULL, NULL, 'N'),
(13, 'jon6', 'jh@gmail.com', NULL, NULL, 'Asdfghj1', NULL, 1, NULL, NULL, 'N'),
(14, 'jon7', 'jh7@gmail.com', NULL, NULL, 'Asdfghj1', NULL, 1, NULL, NULL, 'N'),
(15, 'jon8', 'jh8@gmail.com', NULL, NULL, 'Asdfghj1', NULL, 1, NULL, NULL, 'N'),
(16, 'ex8', 'ex8@gmail.com', NULL, NULL, 'Asdfghj1', NULL, 1, NULL, NULL, 'N'),
(18, 'ex9', 'ex9@gmail.com', NULL, NULL, 'Asdfghj1', NULL, 1, NULL, NULL, 'N'),
(19, 'anu', 'anu@gmail.com', NULL, NULL, 'Through1', NULL, 1, NULL, NULL, 'N'),
(20, 'jonbir', 'hr@gmail.com', NULL, NULL, 'Asdfghj1', NULL, 1, NULL, NULL, 'N'),
(21, 'ragnar', 'ragnar@gmail.com', 'Ragnar', 'Lothbrok', 'Asdfghj1', 'images/ragnar.jpeg', 1, '01654124578', '1953-10-04', 'M');

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
  MODIFY `locationId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post_image`
--
ALTER TABLE `post_image`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `postTagId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `social_link`
--
ALTER TABLE `social_link`
  MODIFY `socialLinkId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tagId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `travel_history`
--
ALTER TABLE `travel_history`
  MODIFY `historyId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `travel_mate`
--
ALTER TABLE `travel_mate`
  MODIFY `travelMateId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `userTypeId` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
