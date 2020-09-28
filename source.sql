SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';
START TRANSACTION;
SET time_zone = '+00:00';

CREATE TABLE `team` (
       `team_id` INT(255) NOT NULL PRIMARY KEY,
       `title_team` VARCHAR(255) NOT NULL,
       `number_of_employees` INT(255) NOT NULL,
       `max_salary` INT(255) NOT NULL
);

CREATE TABLE `employeer` (
  `employeer_id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `wage` int(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `team_id` INT(255) NOT NULL,
  FOREIGN KEY (team_id) REFERENCES team(team_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO team (team_id, title_team, number_of_employees, max_salary) values (101, 'manager', 10, 100000);
