CREATE DATABASE your_database_name;

USE your_database_name;

CREATE TABLE students(
	id INT PRIMARY KEY AUTO_INCREMENT,
	student_number VARCHAR(50),

	first_name VARCHAR(80),
	middle_name VARCHAR(80),
	last_name VARCHAR(80),

	grade_level VARCHAR(15),
	midterm_grade DECIMAL(5, 2),
	final_grade DECIMAL(5, 2),
	
	created INT(2),
	date_created DATE,
	
	updated INT(2),
	date_updated DATE,
	
	date_deleted DATE,
	is_deleted INT(1) DEFAULT 0
);

CREATE TABLE users(
	id INT PRIMARY KEY AUTO_INCREMENT,
	employee_number VARCHAR(50),

	first_name VARCHAR(80),
	middle_name VARCHAR(80),
	last_name VARCHAR(80),

	contact_number VARCHAR(13),
	
	user_level VARCHAR(9),

	user_name VARCHAR(50),
	pword VARCHAR(200),
	
	created INT(2),
	date_created DATE,
	
	updated INT(2),
	date_updated DATE,
	
	date_deleted DATE,
	is_deleted INT(1) DEFAULT 0
);