CREATE DATABASE mojaBaza;

USE mojaBaza;

CREATE TABLE samochody (
       id INT AUTO_INCREMENT PRIMARY KEY,
       marka VARCHAR(255),
       model VARCHAR(255),
       cena FLOAT,
       rok INT,
       opis TEXT
);
