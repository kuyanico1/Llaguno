<div align="center">

# Technical Formative Assessment 2

## From Arrays to a Real Database

**Nico Llaguno**<br>
**TC32**

</div>

## Overview

TFA2 extends the account-record application from TFA1 by replacing temporary PHP arrays with records stored in a MySQL database. The project uses a Northstar Drugs community-pharmacy setting to demonstrate the CodeIgniter Model, Controller, and View flow for retrieving and displaying customer and user accounts.

## Features

- MySQL database containing customer and user account records
- `CustomerModel` and `UserModel` for database access
- Records retrieved through the CodeIgniter `findAll()` method
- Customer and user data passed from Controllers to Views
- Separate date and time presentation from each `created_at` value
- Responsive Northstar Drugs website and account tables
- SQL database export included with the project

## Website Pages

- **Home** - Introduces Northstar Drugs and the database-management system.
- **About** - Explains the pharmacy setting and the project’s CodeIgniter MVC flow.
- **Customer Accounts** - Displays customer names, email addresses, phone numbers, and creation timestamps from MySQL.
- **User Accounts** - Displays staff usernames, full names, and creation timestamps from MySQL.

## Installation Guide

1. Clone the repository:

   ```bash
   git clone https://github.com/kuyanico1/Nico-Llaguno---TC32.git
   ```

2. Open the TFA2 directory:

   ```bash
   cd Nico-Llaguno---TC32/tfa2_llaguno
   ```

3. Install the required Composer dependencies:

   ```bash
   composer install
   ```

4. Create a MySQL database named `llaguno_tfa2` for local development.

5. Import the database file:

   ```text
   app/Database/llaguno_tfa2.sql
   ```

6. Ensure that the project has a `.env` file. If the clone includes an `env` template and `.env` does not already exist, copy or rename `env` to `.env`. Do not overwrite an existing configured `.env` file.

7. Configure the application and database settings in `.env`:

   ```ini
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost:8080/'

   database.default.hostname = localhost
   database.default.database = llaguno_tfa2
   database.default.username = root
   database.default.password =
   database.default.DBDriver = MySQLi
   database.default.DBPrefix =
   database.default.port = 3306
   ```

8. Start MySQL through XAMPP, then start the CodeIgniter development server:

   ```bash
   php spark serve
   ```

9. Open the local address shown in the terminal, normally `http://localhost:8080`.

For hosted deployment, create the database through the hosting control panel and use the exact hosted database name, hostname, username, and password in the server’s `.env` file. Do not commit database credentials to the repository.

## Project Links

- **Repository:** [TFA2 source code](https://github.com/kuyanico1/Nico-Llaguno---TC32/tree/main/tfa2_llaguno)
- **Hosted Website:** [Open the TFA2 website](https://nico-llaguno2.rf.gd/index.php/users)
