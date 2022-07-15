DROP DATABASE if EXISTS tuatara_users;
CREATE DATABASE tuatara_users;
USE tuatara_users;

CREATE TABLE IF NOT EXISTS usuarios (
    id int(11) NOT NULL AUTO_INCREMENT,
	documento VARCHAR(20),
    nombre VARCHAR(40),
    apellido VARCHAR(60),
    email VARCHAR(100),
    f_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	f_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
)
