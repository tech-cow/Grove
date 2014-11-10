CREATE DATABASE IF NOT EXISTS grove_database;

USE grove_database;

CREATE TABLE IF NOT EXISTS users (
	id int(6) auto_increment PRIMARY KEY,
	username varchar(30) NOT NULL,
	pass_hash varchar(64) NOT NULL,
	name_first varchar(30) NOT NULL,
	name_last varchar(30) NOT NULL,
	profile_pic_link varchar(80),
	strengths varchar(40) NOT NULL,
	weaknesses varchar(40) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS groups (
	id int(6) auto_increment PRIMARY KEY,
	name varchar(30) NOT NULL,
	size_max int NOT NULL,
	members varchar(40),
	topic varchar(60),
	meeting_time varchar(30) NOT NULL,
	meeting_location varchar(30) NOT NULL,
	description varchar(255) NOT NULL
) ENGINE=InnoDB;