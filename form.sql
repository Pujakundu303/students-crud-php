SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gpa` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `form` (`id`, `name`, `phone`, `email`, `city`, `dob`, `gpa`) VALUES
(4, 'sahin', '333', 'sahin@gmail', 'khulna', '2024-06-28', 4.44),
(6, 'rahim  bcvbcvbc', '666', 'rahim@gmail', 'dhaka', '2024-05-31', 3.22),
(8, 'ggghd', '1111111111111111', '', '', '0000-00-00', 0.00),
(23, '', '555555555555', '', '', '0000-00-00', 0.00),
(29, '', '', '', '', '0000-00-00', 0.00),
(31, '', '4444', '', '', '0000-00-00', 0.00);

ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

