
SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
START TRANSACTION;
SET time_zone = '+00:00';

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `age`, `group`) VALUES
(1, 'ram', 23, 'mumbai'),
(4, 'Raman', 21, 'noida'),
(5, 'Sunny', 40, 'mumbai'),
(6, 'Amrit', 24, 'ferozepur'),
(7, 'Roop', 28, 'jalandar'),
(8, 'Prince', 24, 'ferozepur');

--
-- Indexes for dumped tables
--
--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
