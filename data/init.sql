CREATE DATABASE IF NOT EXISTS socialnetwork;

use socialnetwork;

CREATE TABLE IF NOT EXISTS users (
	user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	user_name VARCHAR(30) NOT NULL,
	user_pass VARCHAR(30) NOT NULL,
	user_email VARCHAR(50) NOT NULL,
	joining_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  	PRIMARY KEY (`user_id`)
);