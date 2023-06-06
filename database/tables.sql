-- Accounts
CREATE TABLE `accounts`
( `serial` INT
(255) NOT NULL AUTO_INCREMENT , `first_name` VARCHAR
(50) NOT NULL , `last_name` VARCHAR
(50) NOT NULL , `email` VARCHAR
(50) NOT NULL , `age` VARCHAR
(50) NOT NULL , `phone` VARCHAR
(20) NOT NULL , `gender` VARCHAR
(10) NOT NULL , `password` VARCHAR
(255) NOT NULL , PRIMARY KEY
(`serial`)) ENGINE = InnoDB;
ALTER TABLE `accounts`
ADD `security_question` VARCHAR
(255) NOT NULL AFTER `password`,
ADD `security_answer` VARCHAR
(255) NOT NULL AFTER `security_question`;

-- Payments And Slot Booking
CREATE TABLE `payments`
( `serial` INT NOT NULL AUTO_INCREMENT , `usermail` VARCHAR
(255) NOT NULL , `name` VARCHAR
(255) NOT NULL , `ammount` VARCHAR
(255) NOT NULL , `free` VARCHAR
(255) NULL , `freetime` VARCHAR
(255) NULL , `paymment_time` VARCHAR
(255) NOT NULL , PRIMARY KEY
(`serial`)) ENGINE = InnoDB;
ALTER TABLE `payments`
ADD `bill` VARCHAR
(255) NULL AFTER `ammount`;