CREATE DATABASE egmedia_contacts;

USE egmedia_contacts;

CREATE TABLE tbl_contacts(
     contact_id INT(11) NOT NULL AUTO_INCREMENT,
     firstname VARCHAR(20) NOT NULL,
     lastname VARCHAR(20) NOT NULL,
     email VARCHAR (50) NOT NULL, 
     phone VARCHAR (20),
     subject VARCHAR (70) NOT NULL,
     message VARCHAR (200) NOT NULL,
     sentDate DATETIME NOT NULL,
     PRIMARY KEY(contact_id)
);