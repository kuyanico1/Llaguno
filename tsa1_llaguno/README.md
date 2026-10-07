<h1 align="center">Tasks for Today Management System</h1>

<p align="center">
  <strong>Northstar Drugs</strong><br>
  Dr. Nico Llaguno<br>
  TC32 - IT0049 Web System Technologies
</p>

## Project Description

The Tasks for Today Management System is a four-page CodeIgniter 4 application for monitoring the daily operational work of Northstar Drugs. The Welcome page filters the database to show only tasks scheduled for the current Asia/Manila date, while the Task List displays every task in ascending date order. The application also includes one database-backed pharmacist profile and a static developer information page.

The project is limited to operational task management. It does not provide diagnosis, treatment recommendations, patient-specific medical advice, sales processing, authentication, or CRUD forms.

## Features

- Current Asia/Manila date on the Welcome page
- Today-only task retrieval using `where()`
- Complete task list using `orderBy()` and `findAll()`
- One administrator/pharmacist profile using `first()`
- Empty states for missing task or profile data
- Responsive Northstar Drugs interface
- Accessible navigation and readable status text
- Escaped database output using `esc()`
- SQL export, migration, and seeder database options

## Technologies Used

- PHP 8.2 or newer
- CodeIgniter 4.7
- MySQL or MariaDB
- HTML5
- CSS3
- Vanilla JavaScript
- Composer
- XAMPP

## Required Software

- XAMPP with Apache, MySQL, and PHP 8.2+
- Composer
- A modern web browser
- Git, if the project will be cloned from GitHub

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/kuyanico1/Llaguno.git
   ```

2. Open the TSA1 project directory:

   ```bash
   cd Llaguno/tsa1_llaguno
   ```

   For the existing XAMPP workspace, the project path is:

   ```text
   D:\Utilities\XAMPP\Installer\htdocs\Llaguno\tsa1_llaguno
   ```

3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Create a private `.env` file if one does not already exist:

   ```powershell
   New-Item .env -ItemType File
   ```

5. Set the local application URL in `.env`:

   ```ini
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'
   ```

## Safe Database Configuration

Create a local database named `tsa1_llaguno`. Configure the local connection only in the ignored `.env` file:

```ini
database.default.hostname = localhost
database.default.database = tsa1_llaguno
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

Use the username and password supplied by your own environment. Never commit `.env`, production passwords, or hosting credentials to GitHub.

## Database Setup

Choose either the SQL import method or the migration and seeder method.

### Option A SQL Import

1. Start Apache and MySQL in XAMPP.
2. Open phpMyAdmin at `http://localhost/phpmyadmin`.
3. Create a database named `tsa1_llaguno` using `utf8mb4_general_ci`.
4. Select the database.
5. Import:

   ```text
   app/Database/tsa1_llaguno.sql
   ```

The SQL file creates the exact `tasks` and `users` tables and inserts the required sample records.

### Option B Migration and Seeder

After creating the empty database and configuring `.env`, run:

```bash
php spark migrate
php spark db:seed DatabaseSeeder
```

Do not run the SQL import and seeder on the same populated database unless you intend to recreate the data.

## Running with XAMPP

1. Start Apache and MySQL from the XAMPP Control Panel.
2. Confirm that the database exists and `.env` is configured.
3. From the project directory, start the CodeIgniter development server:

   ```bash
   php spark serve
   ```

4. Open `http://localhost:8080/` in a browser.

## Required Routes

| Route | Controller Method | Purpose |
| --- | --- | --- |
| `/` | `Tasks::today` | Displays only tasks scheduled for the current date |
| `/tasks` | `Tasks::index` | Displays all tasks ordered by task date ascending |
| `/profile` | `Users::profile` | Displays Dr. Nico Llaguno's single database record |
| `/about` | `Pages::about` | Displays static project and developer information |

## Project Structure

```text
tsa1_llaguno/
|-- app/
|   |-- Config/
|   |   |-- App.php
|   |   `-- Routes.php
|   |-- Controllers/
|   |   |-- Pages.php
|   |   |-- Tasks.php
|   |   `-- Users.php
|   |-- Database/
|   |   |-- Migrations/
|   |   |-- Seeds/
|   |   `-- tsa1_llaguno.sql
|   |-- Models/
|   |   |-- TaskModel.php
|   |   `-- UserModel.php
|   `-- Views/tsa1_llaguno/
|       |-- pages/
|       |   |-- about.php
|       |   |-- profile.php
|       |   |-- tasks.php
|       |   `-- welcome.php
|       `-- partials/
|           |-- footer.php
|           `-- header.php
|-- public/tsa1_llaguno/
|   |-- css/style.css
|   `-- js/script.js
|-- .env
|-- composer.json
`-- spark
```

## Database Information

The `tasks` table contains exactly these fields:

- `id`
- `title`
- `status`
- `task_date`
- `created_at`

The `users` table contains exactly these fields:

- `id`
- `username`
- `full_name`
- `email`
- `created_at`

The included dataset contains ten pharmacy operations across October 6, 7, 8, and 9, 2026. October 8 is the implementation date. Completed records appear only on October 6 and 7. Three pending tasks are scheduled for October 8, and one pending restock task is scheduled for October 9. Creation times are varied, include seconds, and fall within believable pharmacy working hours. The database contains exactly one user: Dr. Nico Llaguno (`kuyanico1`, `kuyanico1@gmail.com`).

## Verification

Useful checks from the project directory:

```bash
php spark routes
php spark config:check App
php spark config:check Database
php vendor/bin/phpunit
```

If the XAMPP PHP CLI has the SQLite library available but disabled, run the starter test suite with:

```bash
php -d extension=php_sqlite3.dll vendor/bin/phpunit
```

You can also run PHP syntax checks over files in `app` before submission.

## Repository and Hosted Application

- GitHub repository: [TSA1 source code](https://github.com/kuyanico1/Llaguno/tree/main/tsa1_llaguno)
- Hosted application: Not yet published

Add the hosted application URL only after the deployed pages and database connection have been verified.

## Screenshots

Add final screenshots after local and hosted verification:

1. Welcome page with October 8 tasks
2. Complete Task List page
3. Dr. Nico Llaguno profile page
4. About page
5. phpMyAdmin table structures and sample records
