<div align="center">

# Technical Formative Assessment 1

## From Zero to Four Pages: Your First CodeIgniter Application

**Nico Llaguno**  
**TC32**

</div>

## Overview

TFA1 is a basic four-page Point-of-Sale website created with CodeIgniter 4. The activity demonstrates routing, controllers, views, multi-page navigation, and the use of static PHP arrays with `foreach` loops to display customer and user records.

## Features

- Consistent navigation across four pages
- Customer account records from a static PHP array
- User and staff account records from a static PHP array
- Responsive page and table layouts
- Separate CodeIgniter controllers and views

## Website Pages

- **Home** - Introduces the Northstar POS website and its main record sections.
- **About** - Provides basic information about the purpose of the POS system.
- **Customer Accounts** - Displays customer names, email addresses, and phone numbers.
- **User Accounts** - Displays staff usernames, full names, and roles.

## Installation Guide

1. Clone the repository:

   ```bash
   git clone https://github.com/kuyanico1/Llaguno.git
   ```

2. Open the TFA1 directory:

   ```bash
   cd Llaguno/tfa1_llaguno
   ```

3. Install the required Composer dependencies:

   ```bash
   composer install
   ```

4. Ensure that the project has a `.env` file. If the clone includes an `env` template and `.env` does not already exist, copy or rename `env` to `.env`. Do not overwrite an existing configured `.env` file.

5. Set `app.baseURL` in `.env` to match the local address used for the project. For example:

   ```ini
   app.baseURL = 'http://localhost:8080/'
   ```

6. Start the CodeIgniter development server:

   ```bash
   php spark serve
   ```

7. Open the local address shown in the terminal, normally `http://localhost:8080`.

## Project Links

- **Repository:** [TFA1 source code](https://github.com/kuyanico1/Llaguno/tree/main/tfa1_llaguno)
- **Hosted Website:** [Open the TFA1 website](https://nico-llaguno.rf.gd/public/index.php)
