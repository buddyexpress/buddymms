

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bmms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmms_apis`
--

CREATE TABLE IF NOT EXISTS `bmms_apis` (
  `api_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `api` text NOT NULL,
  `email` text NOT NULL,
  `owner` varchar(20) NOT NULL,
  `secret` text NOT NULL,
  PRIMARY KEY (`api_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- --------------------------------------------------------

--
-- Table structure for table `bmms_mails`
--

CREATE TABLE IF NOT EXISTS `bmms_mails` (
  `email_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `api` text NOT NULL,
  `to` text NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;

-- --------------------------------------------------------

--
-- Table structure for table `bmms_users`
--

CREATE TABLE IF NOT EXISTS `bmms_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `name` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bmms_users`
--

INSERT INTO `bmms_users` (`id`, `type`, `name`, `username`, `email`, `password`) VALUES
(1, 'admin', 'Arsalan Shah', 'admin', 'admin@localhost', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
