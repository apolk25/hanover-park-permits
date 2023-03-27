DROP DATABASE IF EXISTS permit;
CREATE DATABASE permit DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

USE permit;


CREATE TABLE `customers` (
  `cus_id` int NOT NULL AUTO_INCREMENT,
  `cus_first_name` varchar(45) NOT NULL,
  `cus_last_name` varchar(45) NOT NULL,
  `cus_phone` varchar(20) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_organization` varchar(100) DEFAULT 'null',
  `cus_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `applications` (
  `app_id` int NOT NULL AUTO_INCREMENT,
  `app_cus_id` int NOT NULL,
  `app_tier` int NOT NULL,
  `app_time_enter` datetime NOT NULL,
  `app_time_exit` datetime NOT NULL,
  `app_activity_start` datetime NOT NULL,
  `app_activity_end` blob NOT NULL,
  `app_date` date NOT NULL,
  `app_people` int DEFAULT NULL,
  `app_teams` int DEFAULT NULL,
  `app_registrants` int DEFAULT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `afl` (
  `afl_id` int NOT NULL AUTO_INCREMENT,
  `afl_app_id` int NOT NULL,
  `afl_areas_id` int NOT NULL,
  PRIMARY KEY (`afl_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `areas` (
  `areas_id` int NOT NULL AUTO_INCREMENT,
  `area_name` varchar(100) NOT NULL,
  `area_loc_id` int NOT NULL,
  PRIMARY KEY (`areas_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `locations` (
  `loc_id` int NOT NULL AUTO_INCREMENT,
  `loc_name` varchar(100) NOT NULL,
  PRIMARY KEY (`loc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

