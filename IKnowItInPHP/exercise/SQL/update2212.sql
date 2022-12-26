CREATE DATABASE trening;

CREATE TABLE todos( id int(4) NOT NULL AUTO_INCREMENT, description text, completed boolean, PRIMARY KEY (id) );
INSERT INTO `todos`( `description`, `completed`) VALUES ('zaprogramować Facebook',0)
INSERT INTO `todos`( `description`, `completed`) VALUES ('zaprogramować Instagrama',0);