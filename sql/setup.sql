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
    user_id INT NOT NULL,
    phone_number VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO contacts (name, phone_number) VALUES ("pedro", "8667312367");