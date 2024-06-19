-- setup_database.sql

CREATE DATABASE foodsave;
USE foodsave;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    restaurant_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL
);
