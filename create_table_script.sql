Use sakila; 
DROP TABLE IF EXISTS tickets;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
id int auto_increment,
name varchar(50) NOT NULL,
password varchar(255) NOT NULL,
CONSTRAINT PK_user PRIMARY KEY (id)
);

CREATE TABLE tickets (
id INT auto_increment,
user_id INT NOT NULL default 0,
title varchar(255) NOT NULL default '',
description varchar(255) NOT NULL default '',
level int(1) NOT NULL default 0,
done boolean NOT NULL default false,
CONSTRAINT PK_tickets PRIMARY KEY (id)
);

