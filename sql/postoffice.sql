create database postoffice_db;
use postoffice_db;

## create table
# create `mail_data` table
CREATE TABLE `mail_data`
(
	`mail_id` INT AUTO_INCREMENT,
    `mail_type_id` INT,
    `sender_id` INT,
    `addressee` INT,
    `mail_weight` INT,
    `mail_cost` INT,
	`employee_id` INT,
	PRIMARY KEY (mail_id)
);

# create `delivery_arrival_time` table
CREATE TABLE `delivery_arrival_time`(
	`mail_id` INT PRIMARY KEY,
    `delivery_time` DATETIME,
    `arrival_time` DATETIME
);

# create `postoffice` table
CREATE TABLE `office`(
	`office_id` INT PRIMARY KEY,
    `postal_code` INT,
    `address` VARCHAR(100),
    `office_name` VARCHAR(50),
    `tel` VARCHAR(50)
); 


# create `employee` table
CREATE TABLE `employee`(
	`employee_id` INT AUTO_INCREMENT,
    `office_id` INT,
    `position` VARCHAR(30),
    `employee_name` VARCHAR(20),
    `sex` VARCHAR(6),
    `employee_tel` VARCHAR(50),
	PRIMARY KEY (employee_id)
);

# create `sender` table
CREATE TABLE `sender`(
	`sender_id` INT AUTO_INCREMENT,
    `sender_name` VARCHAR(20),
    `postal_code` INT,
    `address` VARCHAR(100),
	PRIMARY KEY (sender_id)
);

# create `addressee` table
CREATE TABLE `addressee`(
	`addressee_id` INT AUTO_INCREMENT,
    `addressee_name` VARCHAR(20),
    `postal_code` INT,
    `address` VARCHAR(100),
	PRIMARY KEY (addressee_id)
);

# create `mail_type` table
CREATE TABLE `mail_type`(
	`type_id` INT(6) PRIMARY KEY,
    `type` VARCHAR(20)
);