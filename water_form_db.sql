
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `tbl_client` (
  `id` int IDENTITY(1,1) primary key,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `contractnumber` varchar(100)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
