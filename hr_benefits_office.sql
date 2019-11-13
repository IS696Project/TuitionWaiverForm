SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `hr_benefits_office` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hr_benefits_office`;

DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `grad_level` varchar(255) NOT NULL,
  `credit_hour` smallint(6) NOT NULL,
  `student_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `eid_number` varchar(10) NOT NULL,
  `e_class` varchar(10) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `hired_date` date DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `department` varchar(128) DEFAULT NULL,
  `semester` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `due_date` date NOT NULL DEFAULT '2019-09-05',
  `sem_start_date` date NOT NULL DEFAULT '2019-09-05',
  `grad_cost` decimal(10,0) NOT NULL DEFAULT '0',
  `under_grad_cost` decimal(10,0) NOT NULL DEFAULT '0',
  `doc_cost` decimal(10,0) NOT NULL DEFAULT '0',
  `cs_under_grad_cost` decimal(10,0) NOT NULL DEFAULT '0',
  `cs_grad_cost` decimal(10,0) NOT NULL DEFAULT '0',
  `cs_doc_cost` decimal(10,0) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `setting` (`due_date`, `sem_start_date`, `grad_cost`, `under_grad_cost`, `doc_cost`, `cs_under_grad_cost`, `cs_grad_cost`, `cs_doc_cost`) VALUES
('2019-01-01', '2019-01-01', '0', '0', '0', '0', '0', '0');

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` bigint(20) NOT NULL,
  `s_first_name` varchar(50) NOT NULL,
  `s_last_name` varchar(50) NOT NULL,
  `s_eid_number` varchar(10) NOT NULL,
  `employee_id` bigint(20) NOT NULL,
  `spouse_dependent` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `tuition_waiver`;
CREATE TABLE `tuition_waiver` (
  `id` bigint(20) NOT NULL,
  `employee_id` bigint(20) NOT NULL,
  `semester` smallint(6) NOT NULL,
  `value` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_student` (`student_id`);

ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

ALTER TABLE `tuition_waiver`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tuition_waiver_employee` (`employee_id`);


ALTER TABLE `class`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `employee`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `student`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tuition_waiver`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;


ALTER TABLE `class`
  ADD CONSTRAINT `student_class_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

ALTER TABLE `student`
  ADD CONSTRAINT `student_employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`);
