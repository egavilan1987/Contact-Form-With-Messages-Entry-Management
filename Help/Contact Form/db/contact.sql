CREATE DATABASE contacts;

USE contacts;

CREATE TABLE messages(
				id INT NOT NULL AUTO_INCREMENT,
				name VARCHAR(60) NOT NULL,
				phone VARCHAR(20) NOT NULL,
				email VARCHAR(100) NOT NULL,
				subject VARCHAR(100) NOT NULL,
				message VARCHAR(300) NOT NULL,
				send_date DATETIME NOT NULL,
				PRIMARY KEY(id)
					);
