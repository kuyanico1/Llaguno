-- Tasks for Today Management System
-- Northstar Drugs
-- Dr. Nico Llaguno - TC32
--
-- Create/select a database named tsa1_llaguno before importing this file.

SET NAMES utf8mb4;
SET time_zone = '+08:00';

DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS tasks;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tasks (title, status, task_date, created_at) VALUES
    ('Check pharmacy opening requirements', 'completed', '2026-10-06', '2026-10-05 16:38:24'),
    ('Review medicine expiration dates', 'completed', '2026-10-06', '2026-10-06 09:17:46'),
    ('Review controlled-item documentation', 'completed', '2026-10-06', '2026-10-06 13:42:19'),
    ('Confirm supplier delivery records', 'completed', '2026-10-07', '2026-10-07 09:16:35'),
    ('Review low-stock medicine list', 'completed', '2026-10-07', '2026-10-07 13:28:11'),
    ('Organize prescription filing records', 'pending', '2026-10-07', '2026-10-07 15:53:42'),
    ('Check morning medicine inventory', 'pending', '2026-10-08', '2026-10-07 16:24:18'),
    ('Record cold-storage temperature checks', 'pending', '2026-10-08', '2026-10-07 17:11:53'),
    ('Complete end-of-day inventory reconciliation', 'pending', '2026-10-08', '2026-10-07 18:47:26'),
    ('Prepare next-day restock request', 'pending', '2026-10-09', '2026-10-07 19:08:14');

INSERT INTO users (username, full_name, email, created_at) VALUES
    ('kuyanico1', 'Dr. Nico Llaguno', 'kuyanico1@gmail.com', '2026-10-08 10:14:37');
