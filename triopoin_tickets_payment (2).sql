-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2017 at 07:48 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `triopoin_tickets_payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_name` text NOT NULL,
  `ad_username` varchar(40) NOT NULL,
  `ad_password` varchar(40) NOT NULL,
  PRIMARY KEY (`ad_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `ad_username`, `ad_password`) VALUES
('Joseph', 'admin@ticko.com', '33dd4b30be07adef057153fbd994a305fc0a2c47');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `booking_id` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL,
  `c_username` varchar(40) NOT NULL,
  `no_of_tickets` varchar(40) NOT NULL,
  `serial_no` varchar(40) NOT NULL,
  `confirmation_code` varchar(40) NOT NULL DEFAULT '0',
  `timestamp` varchar(40) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `event_id`, `c_username`, `no_of_tickets`, `serial_no`, `confirmation_code`, `timestamp`) VALUES
('TICKO22290398', 24, 'mmm@ticko.com', '1', '', '', '20  June 2017  11.41 pm'),
('TICKO23660693', 22, 'mmm@ticko.com', '5', 'TICKO-74094599-P', 'KH93FE28YF', '20  June 2017  5.27 pm'),
('TICKO25568644', 19, 'mmm@ticko.com', '1', '', '', '20  June 2017  5.30 pm'),
('TICKO36278791', 21, 'nhgng@gmail.com', '1', '', '', '20  June 2017  5.02 pm'),
('TICKO38806157', 26, 'nhgng@gmail.com', '1', '', '', '20  June 2017  5.02 pm'),
('TICKO44657947', 25, 'mmm@ticko.com', '1', '', '', '20  June 2017  5.31 pm'),
('TICKO48613641', 26, 'mmm@ticko.com', '1', '', '', '20  June 2017  7.52 pm'),
('TICKO49877233', 25, 'nhgng@gmail.com', '1', '', '', '20  June 2017  5.01 pm'),
('TICKO52512640', 23, 'mmm@ticko.com', '3', 'TICKO-80100459-P', '', '20  June 2017  5.30 pm'),
('TICKO57882105', 24, 'nhgng@gmail.com', '1', '', '', '20  June 2017  5.02 pm'),
('TICKO60134637', 22, 'mmm@ticko.com', '2', '', '', '20  June 2017  11.44 pm'),
('TICKO63421384', 22, 'nhgng@gmail.com', '120', '', '', '20  June 2017  5.04 pm'),
('TICKO71868036', 22, 'mmm@ticko.com', '3', '', '', '20  June 2017  7.52 pm'),
('TICKO71972841', 22, 'mmm@ticko.com', '2', '', '', '20  June 2017  5.30 pm'),
('TICKO86669411', 22, 'nhgng@gmail.com', '800', '', '', '20  June 2017  5.04 pm'),
('TICKO96676768', 23, 'nhgng@gmail.com', '120', '', '', '20  June 2017  5.04 pm'),
('TICKO97732295', 21, 'mmm@ticko.com', '1', '', '', '20  June 2017  7.07 pm');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE IF NOT EXISTS `chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `message`, `username`, `date`, `time`) VALUES
(1, 'First Message', 'fred@gmail.com', '26/1/2017', '6.12 PM'),
(2, 'Second Message', 'fred@gmail.com', '26/1/2017', '6.12 PM'),
(3, 'First Message', 'fremd@gmail.com', '26/1/2017', '6.12 PM'),
(4, 'First Message', 'fred@gmail.com', '26/1/2017', '6.12 PM'),
(5, 'Hello Brother', 'aa@ticko.com', '2017-06-22', '22:39'),
(6, 'jhjgj', 'aa@ticko.com', '2017-06-22', '22:39'),
(7, 'kjds ss sd sds s sdsd ds sddsds ds sd sd ds ds ds', 'aa@ticko.com', '2017-06-22', '22:40'),
(8, 'Hello ted', 'aa@ticko.com', '2017-06-22', '22:42'),
(9, 'scsdcsdc', 'aa@ticko.com', '2017-06-22', '22:47'),
(10, 'Holla Guy', 'aa@ticko.com', '2017-06-22', '23:06'),
(11, 'Hello', 'mmm@ticko.com', '2017-06-22', '23:13'),
(12, 'wacha ufala', 'mmm@ticko.com', '2017-06-22', '23:13'),
(13, 'Hello Alex', 'fmwangi.mbugua94@gmail.com', '2017-06-22', '23:19'),
(14, 'Hello Fredrick', 'aa@ticko.com', '2017-06-22', '23:19'),
(15, 'In 2017 we''re celebrating brilliant and gutsy women around the world making the Internet a safer and more trusted place. Know someone doing the same? Tag them on social media using #ShineTheLight and add to the dicsussion on #ShePresisted and we''ll share ', 'aa@ticko.com', '2017-06-22', '23:21'),
(16, 'Hey bugger', 'aa@ticko.com', '2017-06-22', '23:27'),
(17, 'Sema fellow bugger', 'fmwangi.mbugua94@gmail.com', '2017-06-22', '23:28'),
(18, 'Fellong wewe', 'aa@ticko.com', '2017-06-22', '23:28'),
(19, 'Munaa haamini', 'fmwangi.mbugua94@gmail.com', '2017-06-22', '23:28'),
(20, 'blah blah', 'aa@ticko.com', '2017-06-22', '23:28'),
(21, 'We are manufacturers and tanners of hides and skins for wet blue leather and finished leathers. We produce a variety of leathers ranging from; softy, burnish, milled, cow upper and lining articles, sheep nappa, cow and sheep shoes lining which are availab', 'aa@ticko.com', '2017-06-22', '23:29'),
(22, 'In 2017 we''re celebrating brilliant and gutsy women around the world making the Internet a safer and more trusted place. Know someone doing the same? Tag them on social media using #ShineTheLight and add to the dicsussion on #ShePresisted and we''ll shareI', 'fmwangi.mbugua94@gmail.com', '2017-06-22', '23:29'),
(23, 'We are manufacturers and tanners of hides and skins for wet blue leather and finished leathers. We produce a variety of leathers ranging from; softy, burnish, milled, cow upper and lining articles, sheep nappa, cow and sheep shoes lining which are availab', 'aa@ticko.com', '2017-06-22', '23:30'),
(24, 'Bugger for sale', 'fmwangi.mbugua94@gmail.com', '2017-06-22', '23:33'),
(25, 'so you want to sell yourself bugger?', 'aa@ticko.com', '2017-06-22', '23:33'),
(26, 'I am talking to you Bugger', 'fmwangi.mbugua94@gmail.com', '2017-06-22', '23:34');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `c_f_name` text NOT NULL,
  `c_l_name` text NOT NULL,
  `c_username` varchar(40) NOT NULL,
  `c_phone` varchar(15) NOT NULL,
  `c_interests` text NOT NULL,
  `c_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_f_name`, `c_l_name`, `c_username`, `c_phone`, `c_interests`, `c_password`) VALUES
('jack', 'mutua', 'jack@gmail.com', '0704825380', '', '58723627fcebc230ab0d53ddf5f16e34'),
('Alex', 'Wokabi', 'alex@eventpoint', '1234567890', '', 'trial'),
('Alex', 'Wokabi', 'alexwokabi@gmail.com', '0704825380', '', 'wabz'),
('Fred', 'Mwangi', 'fmwangi@eventpoint.com', '0704825380', 'IT, Tech', 'trial'),
('Joy', 'Gakii', 'gakiij@ymail.com', '0714848029', '', 'nairobi'),
('jack', 'kamu', 'jack@eventpoint.com', '0704825380', '', 'jack'),
('jack', 'mutua', 'jack@gmail.com', '0716597382', '', '12345'),
('jenny', 'robi', 'jennyrobi@gmail.com', '0725208309', '', 'kengarejude'),
('Brian', 'Musio', 'brian@eventpoint.com', '1234567890', '', '58723627fcebc230ab0d53ddf5f16e34'),
('Jack', 'Mutuku', 'fg', '1234567889', '', '58723627fcebc230ab0d53ddf5f16e34'),
('Patrick', 'Kithuka', 'pk@eventoint.com', '077234782', '', '58723627fcebc230ab0d53ddf5f16e34'),
('Mace', 'Artist', 'gfhfhvd@hfhh.com', '0794825380', '', '22213c395b9ac8253dd859648f85e5dd'),
('Fredrick', 'Mwangi', 'fmwangi.mbugua94@gmail.com', '0727317033', '', '58723627fcebc230ab0d53ddf5f16e34'),
('Nzioka', 'Nzioka', 'nhgng@gmail.com', '095655656', '', '33dd4b30be07adef057153fbd994a305fc0a2c47'),
('Mwanzia', 'Raymond', 'rm@gmail.com', '0727317033', '', '33dd4b30be07adef057153fbd994a305fc0a2c47'),
('Paul', 'Barasa', 'pbarasa@safaricom.co.ke', '0712458698', '', '33dd4b30be07adef057153fbd994a305fc0a2c47'),
('Mwema', 'Mutindi', 'mmm@ticko.com', '0789235489', '', '33dd4b30be07adef057153fbd994a305fc0a2c47');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(100) NOT NULL,
  `venue` varchar(40) NOT NULL,
  `participants` int(11) NOT NULL,
  `fixed_participants` int(11) NOT NULL,
  `e_category` varchar(40) NOT NULL,
  `st_time` varchar(40) NOT NULL,
  `ed_time` varchar(40) NOT NULL,
  `timestamp` varchar(40) NOT NULL,
  `st_date` varchar(40) NOT NULL,
  `ed_date` varchar(40) NOT NULL,
  `e_description` varchar(350) NOT NULL,
  `e_image` varchar(100) NOT NULL,
  `o_username` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'open',
  `e_price` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `e_name`, `venue`, `participants`, `fixed_participants`, `e_category`, `st_time`, `ed_time`, `timestamp`, `st_date`, `ed_date`, `e_description`, `e_image`, `o_username`, `status`, `e_price`) VALUES
(19, 'Free event', 'Carnivore', 541, 542, 'Free', '01:30PM', '06:30PM', '19  June 2017  3.21 pm', '21 June, 2017', '27 June, 2017', 'Free eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree eventFree event', 'Free event-1497874909.jpg', 'aa@ticko.com', 'Open', 0),
(21, 'Hello Event', 'sdsds', 498, 499, 'Free', '08:40PM', '06:25PM', '19  June 2017  3.27 pm', '22 June, 2017', '28 June, 2017', 'Hello EventHello EventHello EventHello EventHello EventHello EventHello EventHello EventHello EventHello EventHello EventHello Event', 'Hello Event-1497875261.jpg', 'aa@ticko.com', 'Open', 0),
(22, 'csdcc', 'sdcsdcsdc', 68, 1000, 'Paid', '04:20PM', '06:30PM', '19  June 2017  3.29 pm', '6 June, 2017', '7 June, 2017', 'fccdscdscsdc fccdscdscsdc fccdscdscsdc fccdscdscsdc fccdscdscsdc', 'csdcc-1497875374.jpg', 'aa@ticko.com', 'Open', 1212),
(23, 'rrrtrt', 'rtrtrttr', 331, 454, 'Paid', '06:30PM', '06:30PM', '19  June 2017  3.40 pm', '20 June, 2017', '20 June, 2017', '454545terertertr54454', 'rrrtrt-1497876054.jpg', 'aa@ticko.com', 'Open', 233),
(24, 'sds', 'sdsdsd', 340, 341, 'Free', '09:20PM', '05:30AM', '19  June 2017  3.45 pm', '21 June, 2017', '27 June, 2017', 'sds sdssdssds sds', 'sds-1497876300.jpg', 'aa@ticko.com', 'Open', 0),
(25, 'Meetup', 'Kasarani', 341, 342, 'Free', '03:00PM', '06:00PM', '19  June 2017  4.29 pm', '23 June, 2017', '23 June, 2017', 'An  event for PHP gurus and Code ninjas to meet and exchange ideas. Any wanabees are welcome as well.', 'Meetup-1497878986.jpg', 'aa@ticko.com', 'Open', 0),
(26, 'Women in Technology', 'Safaricom Care Center', 398, 399, 'Free', '09:00AM', '05:00AM', '20  June 2017  2.58 pm', '23 June, 2017', '23 June, 2017', 'In 2017 we''re celebrating brilliant and gutsy women around the world making the Internet a safer and more trusted place.\r\n\r\nKnow someone doing the same?\r\n\r\nTag them on social media using #ShineTheLight and add to the dicsussion on #ShePresisted and we''ll share their story. In a time where online harrassment is real, let''s send the message that wome', 'Women in Technology-1497959927.jpg', 'aa@ticko.com', 'Open', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events-category`
--

CREATE TABLE IF NOT EXISTS `events-category` (
  `event_id` int(11) NOT NULL,
  `event_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(500) NOT NULL,
  `timestamp` varchar(40) NOT NULL,
  `sender` varchar(40) NOT NULL,
  `recipient` varchar(40) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `content`, `timestamp`, `sender`, `recipient`) VALUES
(1, 'What is this event about?', '26  August 2016  12.22 am', 'pk@eventoint.com', 'alexwokabi@gmail.com'),
(2, 'Hello Lorna', '7  December 2016  8.05 pm', 'fmwangi.mbugua94@gmail.com', 'waridi@eventpoint.com');

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE IF NOT EXISTS `organizers` (
  `o_f_name` text NOT NULL,
  `o_l_name` text NOT NULL,
  `company_name` text NOT NULL,
  `company_address` varchar(40) NOT NULL,
  `company_description` varchar(200) NOT NULL,
  `o_username` varchar(40) NOT NULL,
  `o_phone` varchar(15) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `business_no` int(11) NOT NULL,
  `o_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`o_f_name`, `o_l_name`, `company_name`, `company_address`, `company_description`, `o_username`, `o_phone`, `post_image`, `business_no`, `o_password`) VALUES
('Alex', 'Wokabi', 'Abasani events', '678 Nairobi', 'With over a dozen years of experience in the events industry in Kenya, our company offers a fun, friendly and positive â€˜can-doâ€™ attitude which ensures personal responsibility is taken to deliver t', 'alexwokabi@gmail.com', '704825380', 'Logo.png', 0, '58723627fcebc230ab0d53ddf5f16e34'),
('Alex', 'Wokabi', 'Giggs Guru', '678 Nairobi', 'blah blah blah blah blah blah blah blah blah blah blah blah ', 'giggs@evenpoint.com', '1234567890', 'newsletter.jpg', 0, '58723627fcebc230ab0d53ddf5f16e34'),
('jenny', 'robi', 'abasani events', '678 Nairobi', 'blah blah blah blah blah blah blah blah ', 'jennyrobi@gmail.com', '725208309', 'logo.png', 0, 'kengarejude'),
('Alex', 'KKalan', 'Gig Centre', '56 Juja', 'Some quick example text to build on the card ', 'org@eventpoint.com', '704825380', '3d-cool-wallpapers-desktop.jpg', 0, 'trial'),
('Aleky', 'Greats', 'Greats Events', '5765 Nairobi', 'Waab ffjj kbnknk kmnljlj \r\n', 'organizer@evenpoint.com', '5656745747', 'Llarge.png', 525278, 'trial'),
('Dev', 'Null', 'Spact', '786-0600, Nairobi', 'Information Security', 'salomo@riseup.net', '72222222', 'symmetric.png', 0, '123'),
('Alex', 'Karanja', 'Abasani events', '678 Nairobi', 'We are the best when it comes to events organizing/planning. With over 10 years of experience, we will give a lifetime exprience', 'org@eventpoint.com', '704825380', 'FiRe-Award-Thumbnail.jpg', 0, '58723627fcebc230ab0d53ddf5f16e34'),
('Lornah ', 'Mercy', 'Waridi Events', '5765 Nairobi', 'Waridi Events brings freshness, creativity and reliability to corporate event planning in Kenya. With end to end event design, planning and coordination, we make your brand shine.', 'waridi@eventpoint.com', '704825380', 'Featured-Image13.jpg', 0, '58723627fcebc230ab0d53ddf5f16e34'),
('Alex', 'Wokabi', 'Triopoint', 'Nairobi Kenya', 'Nairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairobi KenyaNairo', 'aa@ticko.com', '0789765567', 'Alex-1497857214.jpg', 0, '33dd4b30be07adef057153fbd994a305fc0a2c47'),
('Mwendia', 'James', 'The Eventer', '122 Nairobi Kenya', 'We are a company of intellectuals who organize intellectual meetings and Events only', 'jm@ticko.com', '0727317033', 'Mwendia-1497968651.jpg', 0, '33dd4b30be07adef057153fbd994a305fc0a2c47'),
('mtemi', 'munaa', 'traderssacco', '1233', 'uniting butangi', 'munaa@gmail.com', '079980988', 'mtemi-1497991978.jpg', 0, '2e34cb66149effe8f6402861e564eb2707e84019'),
('Fredrick', 'Mwangi', 'Safaricom', 'Kinale', 'In 2017 we''re celebrating brilliant and gutsy women around the world making the Internet a safer and more trusted place. Know someone doing the same? Tag them on social media using #ShineTheLight and ', 'fmwangi.mbugua94@gmail.com', '0727317033', 'Fredrick-1498162659.JPG', 0, '33dd4b30be07adef057153fbd994a305fc0a2c47');

-- --------------------------------------------------------

--
-- Table structure for table `pesapi_account`
--

CREATE TABLE IF NOT EXISTS `pesapi_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `push_in` tinyint(1) NOT NULL,
  `push_out` tinyint(1) NOT NULL,
  `push_neutral` tinyint(1) NOT NULL,
  `settings` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type_index` (`type`),
  KEY `definedby` (`identifier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pesapi_account`
--

INSERT INTO `pesapi_account` (`id`, `type`, `name`, `identifier`, `push_in`, `push_out`, `push_neutral`, `settings`) VALUES
(1, 2, 'EventPoint', 'tickets', 1, 0, 0, 'a:7:{s:11:"PUSH_IN_URL";s:41:"http://triopointsolutions.com/smssync.php";s:14:"PUSH_IN_SECRET";s:9:"Awokabi1!";s:12:"PUSH_OUT_URL";s:0:"";s:15:"PUSH_OUT_SECRET";s:0:"";s:16:"PUSH_NEUTRAL_URL";s:0:"";s:19:"PUSH_NEUTRAL_SECRET";s:0:"";s:11:"SYNC_SECRET";s:8:"aiqf8qg4";}'),
(2, 2, 'EventPoint Tickets', '0704825380', 1, 0, 0, 'a:7:{s:11:"PUSH_IN_URL";s:41:"http://triopointsolutions.com/smssync.php";s:14:"PUSH_IN_SECRET";s:9:"Awokabi1!";s:12:"PUSH_OUT_URL";s:0:"";s:15:"PUSH_OUT_SECRET";s:0:"";s:16:"PUSH_NEUTRAL_URL";s:0:"";s:19:"PUSH_NEUTRAL_SECRET";s:0:"";s:11:"SYNC_SECRET";s:8:"sp6y5f77";}'),
(3, 2, 'EventPoint Tickets', '0718440851', 1, 0, 0, 'a:7:{s:11:"PUSH_IN_URL";s:41:"http://triopointsolutions.com/smssync.php";s:14:"PUSH_IN_SECRET";s:9:"Awokabi1!";s:12:"PUSH_OUT_URL";s:0:"";s:15:"PUSH_OUT_SECRET";s:0:"";s:16:"PUSH_NEUTRAL_URL";s:0:"";s:19:"PUSH_NEUTRAL_SECRET";s:0:"";s:11:"SYNC_SECRET";s:8:"npznzdj2";}');

-- --------------------------------------------------------

--
-- Table structure for table `pesapi_payment`
--

CREATE TABLE IF NOT EXISTS `pesapi_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `super_type` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `phonenumber` varchar(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `post_balance` bigint(20) NOT NULL,
  `note` varchar(255) NOT NULL,
  `transaction_cost` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `receipt` (`receipt`),
  KEY `type_index` (`type`),
  KEY `name_index` (`name`),
  KEY `phone_index` (`phonenumber`),
  KEY `time_index` (`time`),
  KEY `super_index` (`super_type`),
  KEY `fk_mpesapi_payment_account_idx` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pesapi_payment`
--

INSERT INTO `pesapi_payment` (`id`, `account_id`, `super_type`, `type`, `receipt`, `time`, `phonenumber`, `name`, `account`, `status`, `amount`, `post_balance`, `note`, `transaction_cost`) VALUES
(1, 2, 1, 21, 'KH93FE28YF', '2016-08-09 13:34:00', '0716597382', 'Jackson MUTUA', '', 0, 1000, 1000, 'KH93FE28YF Confirmed.You have received Ksh10.00 from Jackson MUTUA 0716597382 on 9/8/16 at 8:34 PM New M-PESA balance is Ksh10.00. Pay bills via M-PESA.', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
