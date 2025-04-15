CREATE TABLE IF NOT EXISTS posts(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
category_id INT(11),
title varchar(11),
body text,
author varchar(255),
created_at datetime DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS category(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
name varchar(11),
created_at datetime DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO category(name) VALUES('programowanie'), ('angielski'), ('autoregulacja');
INSERT INTO posts(category_id, title, body, author) VALUES (2,'verbs','english verbs','John'),(1,'php','connect to DB','Wojtek'),(1,'PHP','OOP','Wojtek'),(1,'variables','type of variables','Wojtek'),(3,'life','how to life','nobody');


