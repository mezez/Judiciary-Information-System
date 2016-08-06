-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2016 at 08:48 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `partyA` varchar(40) NOT NULL,
  `partyB` varchar(40) NOT NULL,
  `classification` varchar(40) NOT NULL,
  `casetitle` varchar(80) NOT NULL,
  `courtroom` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `casedetails` longtext NOT NULL,
  `status` varchar(40) NOT NULL,
  `judge` varchar(40) NOT NULL DEFAULT 'null',
  `partyAlawyer` varchar(40) NOT NULL,
  `partyBlawyer` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `partyA`, `partyB`, `classification`, `casetitle`, `courtroom`, `date`, `casedetails`, `status`, `judge`, `partyAlawyer`, `partyBlawyer`) VALUES
(1, 'Daniel Ekemam', 'Paul Ohiri', 'General Civil', 'LAND ISSUE AT OPI JUNCTION, NSUKKA', 'Court Room 1', '2014-02-14', '<p>Mr Daniel Ekemam Purchased a piece of Land at Owerri West LGA in Imo State, Nigeria and commenced work on the land. On the 3rd&nbsp;december, 2012, A week later, One Mr Paul Ohiri came into the said piece of land while construction work was going on and interrupted the process, damaging some building materials on site, together with a group of youths from the area who came with him. Mr Paul claims that the land belongs to both him and his brother and hence his beother has no right to sell off the land without his consent, this claim his brother totally denies.&nbsp;Mr Daniel, being very dissappointed and Unhappy about the whole incident, and efforts to settle this matter having failed in all ramifications, Mr Daniel decided to take the matter to the court to follow due process to settle the matter. More details coming soon&nbsp;</p>\r\n', 'Status 2', 'Emeka Echefu', 'Ozioha Ekemam', 'Soronnadi Chibuike'),
(28, 'Adaugo Obi', 'Edeh Obinna', 'General Civil', 'Abuse of Human Right', 'Court Room 1', '2015-03-23', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est.</span></p>\r\n', 'Status 1', 'Olua Chiga', 'Ekemam Victor', 'Patrick Sawyer'),
(29, 'Obiasogu Precious', 'Danny Shittu', 'Civil', 'QUIT NOTICE DISAGREEMENT', 'Court Room 3', '2014-02-03', '<p>This case involves disagreement which came up as a result of the misunderstanding between the Landlord of Freedom House and Mr Danny&nbsp;of flat 9. The Landlord Mr Obiasogu has served Mr Danny a quit notice but Mr Danny is of the view that he is entitled to 6 more months in the apartment and as a result the misunderstanding between the two parties has escalated and thus been taken to court.</p>\r\n', 'Arraignment', 'Olua Chiga', 'John Doe', 'Jane Doe'),
(30, 'Ogbogbe Chidera', 'Obiasogu Family', 'Civil', 'Land Matter at Ibagwa Nsukka', 'Court Room 3', '2015-12-04', '<p>The Obiasogu family have in recent times been involved in series of misunderstandings with Mr Ogbogbe Chidera who &nbsp;claims he bought the said piece of land at Ibeagwa Nsukka from a third party.The Obiasogu Family claim that the land is an inheritance to Miss Precious. The Situation has only aggravated and thus has been taken to court.</p>\r\n', 'Arraignment', 'Olua Chiga', 'Okorie Kelechi', 'Okafor Peter'),
(31, 'Ogbogbe Chidera', 'Obiasogu Family', 'Civil', 'Land Matter at Ibagwa Nsukka', 'Court Room 3', '2015-12-04', '<p>The Obiasogu family have in recent times been involved in series of misunderstandings with Mr Ogbogbe Chidera who &nbsp;claims he bought the said piece of land at Ibeagwa Nsukka from a third party.The Obiasogu Family claim that the land is an inheritance to Miss Precious. The Situation has only aggravated and thus has been taken to court.</p>\r\n', 'Arraignment', 'Olua Chiga', 'Okorie Kelechi', 'Okafor Peter'),
(32, 'The People Of Enugu State', 'Eze Samuel', 'Felonies', 'Property Dispute at World B', 'Court Room 4', '2016-03-05', '<p>The Security Officials of Enugu State, having gone through the necessary proceedures have charged Mr Eze Samuel to court, having accused him of partaking in an armed robbery operation that led to the death of the special adviser to the Governor on youth and sports. The Details of this case will be updated as they unfold.</p>\r\n', 'Arraignment', 'Chiawa Uju', 'Ekene Ohiri ', 'Uka Simeon');

-- --------------------------------------------------------

--
-- Table structure for table `casescourtroom`
--

CREATE TABLE IF NOT EXISTS `casescourtroom` (
  `id` int(10) NOT NULL,
  `judge_id` int(10) NOT NULL,
  `courtroom_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casescourtroom`
--

INSERT INTO `casescourtroom` (`id`, `judge_id`, `courtroom_id`) VALUES
(26, 3, 3),
(27, 0, 0),
(28, 3, 3),
(29, 3, 3),
(30, 3, 3),
(31, 3, 3),
(32, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE IF NOT EXISTS `court` (
  `court_id` int(10) NOT NULL AUTO_INCREMENT,
  `courtroom` varchar(40) NOT NULL,
  PRIMARY KEY (`court_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`court_id`, `courtroom`) VALUES
(1, 'Court Room 1'),
(2, 'Court Room 2'),
(3, 'Court Room 3'),
(4, 'Court Room 4'),
(5, 'Court Room 5'),
(6, 'Court Room 6'),
(7, 'Court Room 7'),
(8, 'Court Room 8');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `title`, `message`, `username`, `phone`) VALUES
(1, 'Request For Change of Login Details', '<p>Please Mr Admin. i would like you to change my Login Details for me. my name is Victoria.....</p>\r\n', 'vicky', '08063424922');

-- --------------------------------------------------------

--
-- Table structure for table `judge`
--

CREATE TABLE IF NOT EXISTS `judge` (
  `judge_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL,
  PRIMARY KEY (`judge_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `judge`
--

INSERT INTO `judge` (`judge_id`, `name`, `username`, `phone`) VALUES
(1, 'Okoro Samuel', 'samuel', '08134544676'),
(2, 'Emeka Echefu', 'emeka', '09037874654'),
(3, 'Olua Chiga', 'chiga', '07036457584'),
(4, 'Chiawa Uju', 'uju', '07015263851'),
(5, 'Eze George', 'george', '08145435676'),
(6, 'Asadu Ike', 'aikay', '08100405768');

-- --------------------------------------------------------

--
-- Table structure for table `judgescourtroom`
--

CREATE TABLE IF NOT EXISTS `judgescourtroom` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judge_id` int(10) NOT NULL,
  `court_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `judgescourtroom`
--

INSERT INTO `judgescourtroom` (`id`, `judge_id`, `court_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE IF NOT EXISTS `lawyer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `username`, `phone`) VALUES
(1, 'Ozioha Ekemam', 'ozioha', '08033318623'),
(2, 'Soronnadi Chibuike', 'chibuike', '07037273765'),
(3, 'Ekemam Victor', 'eke', '09079765634'),
(4, 'Patrick Sawyer', 'sawyer', '07065435423'),
(5, 'John Doe', 'john', '07085467345'),
(6, 'Jane Doe', 'jane', '08134565676'),
(7, 'Okorie Kelechi', 'kaycee', '07086545321'),
(8, 'Okafor Peter', 'peter', '08134565678'),
(9, 'Ekene Ohiri ', '', ''),
(10, 'Uka Simeon', '', ''),
(11, 'Aka Adiele', 'adele', '07034349529');

-- --------------------------------------------------------

--
-- Table structure for table `proceedings`
--

CREATE TABLE IF NOT EXISTS `proceedings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `caseid` int(10) NOT NULL,
  `casetitle` varchar(50) NOT NULL,
  `charging` mediumtext NOT NULL,
  `plea` mediumtext NOT NULL,
  `calling1` mediumtext NOT NULL,
  `exam1` mediumtext NOT NULL,
  `calling2` mediumtext NOT NULL,
  `exam2` mediumtext NOT NULL,
  `submission` mediumtext NOT NULL,
  `adjournment` mediumtext NOT NULL,
  `interlocutory` mediumtext NOT NULL,
  `judgement` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `proceedings`
--

INSERT INTO `proceedings` (`id`, `caseid`, `casetitle`, `charging`, `plea`, `calling1`, `exam1`, `calling2`, `exam2`, `submission`, `adjournment`, `interlocutory`, `judgement`) VALUES
(1, 31, 'Land Matter at Ibagwa Nsukka', '  The Obiasogu Family charged Mr Chidera in Court on 24/03/2015 for illegal possession of their property', '  Mr Chidera Pleaded Not Guilty', 'calling1', '  Mr Chidera who is also his representative in turn cross-examined the witness to the Obiasogu family and the witness responded accordingly ', '  The witness to the defendant was called up next to the dock who presented said facts that suggests the property was rightfully acquired by Mr Ogbogbe', '  Counsel Okorie Kelechi cross-examined the witness to Mr Chidera on the case and the witness also responded accordingly', '  The Counsels to the prosecution and the defendants then  presented their final submissions to the court', '  The Presiding Judge, Hon. Olua Chiga having listened to the both parties adjourned the cases for final judgment in two weeks time', '  No Interlocutory cases so far held', '  Final Judgement will be passed in two weeks time');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `phone`, `password`, `position`) VALUES
(1, 'Chimezirim Ekemam', 'mezez', '07037537969', 'victor', 'admin'),
(3, 'Victor Ekemam', 'victor', '', 'ekemam', 'authorized'),
(5, 'Victoria Egwuatu', 'vicky', '08063424922', 'vicky', 'authorized'),
(7, '', 'mezez', '', 'victor', 'admin'),
(8, 'Yady Charles-Olumba', 'yady', '08146832883', 'yadyy', 'authorized'),
(10, 'Yadi Charles-Olumba', 'yadi', '', 'purrissima', 'admin'),
(12, 'Ozioha Ekemam', 'ozioha', '08033318623', 'ozioha', 'authorized'),
(13, 'Soronnadi Chibuike', 'soronnadi', '07037273765', 'soronnadi', 'authorized'),
(14, 'Ekemam Victor', 'eke', '09079765634', 'eke', 'authorized'),
(15, 'Okorie Kelechi', 'kaycee', '07086545321', 'kaycee', 'authorized');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
