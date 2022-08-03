CREATE SCHEMA PetTracker
USE PetTracker


--This is a test for Github



CREATE TABLE users 
(
	email varchar(75) NOT NULL,
	first_name varchar(30) NOT NULL,
	last_name varchar(30) NOT NULL,
    password varchar(30) NOT NULL,
	phone varchar(10),
	picture MEDIUMBLOB,
	PRIMARY KEY(email)
);

CREATE TABLE pets 
(
	pet_id int NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(35) NOT NULL,
	type varchar(30) NOT NULL,
    name varchar(50) NOT NULL,
	age int NOT NULL,
	picture MEDIUMBLOB,
	note varchar(100),
	PRIMARY KEY(pet_id)
);

CREATE TABLE documents 
(
	document_id int NOT NULL AUTO_INCREMENT,
	user_email varchar(75) NOT NULL,
	pet_id int NOT NULL,
	document MEDIUMBLOB NOT NULL,
	date_uploaded date NOT NULL,
	PRIMARY KEY(document_id)
);

CREATE TABLE clean 
(
	pet_id int NOT NULL,
	clean_date date,
	PRIMARY KEY(clean_id)
);

CREATE TABLE water 
(
	pet_id int NOT NULL,
	water_date date NOT NULL,
	PRIMARY KEY(water_id)
);

CREATE TABLE weight 
(
	weight_id int NOT NULL,
	pet_id int NOT NULL,
	weight_date date NOT NULL,
	weight float NOT NULL,
	PRIMARY KEY(weight_id)
	
);

CREATE TABLE feed 
(
	pet_id int NOT NULL,
	feed_date date NOT NULL,
	PRIMARY KEY(pet_id)
);

CREATE TABLE schedule 
(
	schedule_id int NOT NULL AUTO_INCREMENT,
	pet_id int NOT NULL,
	user_email varchar(75) NOT NULL,
	schedule_type varchar(30) NOT NULL,
	start_date date NOT NULL,
	countdown int, 								/* in days */
	auto_repeat bool NOT NULL,
	PRIMARY KEY(schedule_id)
);

CREATE TABLE appoinment
(
	appointment_id int NOT NULL AUTO_INCREMENT,
	user_email varchar(75) NOT NULL,
	pet_id int NOT NULL,
	appointment_type varchar(20) NOT NULL,
	PRIMARY KEY(appointment_id)
	
);

