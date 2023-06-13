# SpacexEmployeePayRoll
This project is a web application for managing employee information, attendance, and payroll. It provides a user-friendly interface for employees and employers to perform their respective tasks efficiently.

## Features

- **Employee Portal:** Employees can log in to access their personal information, view attendance records, and download their payroll statements.
- **Employer Portal:** Employers can log in to post attendance records, manage employee information, and generate payroll reports.

## Technologies Used

- PHP
- MySQL
- HTML
- CSS
- JavaScript

## Installation and Setup

1. Clone the repository:

2. Import the database:
- Create a MySQL database named `mydatabase`.
- Import the SQL file provided in the `database` directory to set up the necessary tables.

3. Configure the database connection:
- Open the `config.php` file in the project's root directory.
- Update the database credentials (`DB_HOST`, `DB_USERNAME`, `DB_PASSWORD`, `DB_DATABASE`) to match your MySQL setup.

4. Start the web server:
- Place the project files in the appropriate directory of your local server (e.g., XAMPP `htdocs` directory).
- Start your local server to run the application.

5. Access the application:
- Open a web browser.

## Usage

### Employee Portal

1. Navigate to the employee login page.
2. Enter your employee credentials.
3. Upon successful login, you can:
- View and edit your personal information.
- Access your attendance records.
- Download your payroll statements.

### Employer Portal

1. Navigate to the employer login page.
2. Enter your employer credentials.
3. Upon successful login, you can:
- Post attendance records for employees.
- Manage employee information, including adding, updating, and deleting employee records.
- Generate payroll reports based on the provided attendance records.

