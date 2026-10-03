-- Northstar Drugs Database Management System
-- Nico Llaguno - TC32 - IT0049 TFA2

-- Database
CREATE DATABASE IF NOT EXISTS llaguno_tfa2
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;

USE llaguno_tfa2;

-- Customers Table
DROP TABLE IF EXISTS customers;

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at DATETIME NOT NULL
);

-- Customer Records
INSERT INTO customers (full_name, email, phone, created_at) VALUES
    ('Angela Cruz', 'angela.cruz@example.com', '09171234567', '2026-09-27 14:21:37'),
    ('Miguel Santos', 'miguel.santos@example.com', '09182345678', '2026-09-27 14:23:12'),
    ('Patricia Reyes', 'patricia.reyes@example.com', '09193456789', '2026-09-27 14:26:49'),
    ('Daniel Garcia', 'daniel.garcia@example.com', '09204567890', '2026-09-27 14:27:24'),
    ('Sofia Mendoza', 'sofia.mendoza@example.com', '09215678901', '2026-09-27 14:29:56');

-- Users Table
DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

-- User Records
INSERT INTO users (username, full_name, created_at) VALUES
    ('nico.llaguno', 'Nico Llaguno', '2026-09-27 14:30:08'),
    ('maria.santos', 'Maria Santos', '2026-09-27 14:30:43'),
    ('jose.reyes', 'Jose Reyes', '2026-09-27 14:31:19'),
    ('anna.garcia', 'Anna Garcia', '2026-09-27 14:32:05'),
    ('carlo.mendoza', 'Carlo Mendoza', '2026-09-27 14:32:51');