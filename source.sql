SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
START TRANSACTION;
SET time_zone = '+00:00';

CREATE TABLE `employeer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `wage` int(255) NOT NULL,
  `group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `employeer`
--


-- Indexes for table `employeer`
--
ALTER TABLE `employeer`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeer`
--
ALTER TABLE `employeer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
