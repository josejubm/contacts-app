DROP DATABASE IF EXISTS contacts_app;

CREATE DATABASE contacts_app;

USE contacts_app;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255)
);
 
INSERT INTO users (name, email, password) VALUES ("joseju", "josejugamer@gmail.com", "holahola");

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) UNIQUE,
    phone_number VARCHAR(255)
);

INSERT INTO contacts (name, phone_number) VALUES ("pedro", "8667312367");