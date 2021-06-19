SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankuser`
Create  Database `bankuser`;
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Shambhavi Agarwal', 'Sneha Joshi', 1000, '2021-06-18 06:19:25'),
(2, 'Dhruvi Somaiya', 'Neha Lalwani', 5000, '2021-06-18 06:23:46'),
(3, 'Priya Kamani', 'Shreya Modi', 10000, '2021-06-18 06:25:07'),
(4, 'Dhruvi Somaiya', 'Avni Thakkar', 10000, '2021-06-18 06:31:25'),
(5, 'Dhruvi Somaiya', 'Sneha Joshi', 10000, '2021-06-18 07:43:34'),
(6, 'Priya Kamani', 'Dhruvi Somaiya', 20000, '2021-06-18 07:43:52'),
(7, 'Neha Lalwani', 'Janvi Garg', 15000, '2021-06-18 07:44:15'),
(8, 'Priya Kamani', 'Dhwani Joshi', 20000, '2021-06-18 07:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Dhruvi Somaiya', 'dhruvi@gmail.com', 50000),
(2, 'Sneha Joshi', 'sneha@gmail.com', 85000),
(3, 'Janvi Garg', 'janvi@gmail.com', 50000),
(4, 'Avni Thakkar', 'avni@gmail.com', 50000),
(5, 'Dhwani Joshi', 'dhwani@gmail.com', 60000),
(6, 'Neha Lalwani', 'neha@gmail.com', 85000),
(7, 'Shambhavi Agarwal', 'shambhavi@gmail.com', 56000),
(8, 'Shreya Modi', 'shreya@gmail.com', 50000),
(9, 'Vaidehi Pabani', 'vaidehi@gmail.com', 85000),
(10, 'Priya Kamani', 'priya@gmail.com', 105000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
