# PHP-XpeedStudio Form Submission Task

This project is a PHP form submission system built using Object-Oriented Programming (OOP) principles. The project handles form submissions, backend validation, and displays submissions on a report page.

## Author of this project
- Md. Mizanur Rahman
- mizancse2018@gmail.com

## Features
- Form for submitting user data (amount, buyer, items, etc.)
- Validates all form inputs, including emails and phone numbers
- Captures IP address and submission date automatically
- Displays a report page with all submitted data
- Search functionality to filter submissions by user ID

## Requirements
- PHP (version 8.x or above)
- MySQL or any other supported database
- A web server (e.g., Apache, Nginx)

## Database Name
The database used in this project is named **php_xpeedstudio_task**.

## Steps to Run the Project

### Clone or Download the Project
If you are downloading the project as a zip file, extract it to your desired folder.

If you are cloning the project from GitHub, run:
```
git clone https://github.com/mizanurdev/php-xpeedstudio-task.git
```
Change to the project directory:
```
cd php-xpeedstudio-task
```
### Database Configuration and Setup

Update the database connection details in the Database.php class inside the classes/ directory with your database credentials:
```
private $host = 'localhost';
private $db_name = 'php_xpeedstudio_task';
private $username = 'root';
private $password = '';
```
Create the database by running the SQL query provided in create_table.php, or simply execute the script:
```
php create_table.php
```
### Application Setup

Ensure you have PHP and your web server set up. If you're using the built-in PHP server, you can run:

```
php -S localhost:8000
```
### Access the Application

Once the server is running, open your browser and go to:
```
http://localhost:8000
```
### Report Page

Visit the report page to view all submissions:
```
http://localhost:8000/report.php
```

You can search for submissions by user ID to filter the results.
### Contributing

If you'd like to contribute to this project: Fork the repository. Create a new branch for your feature or bug fix.
Make your changes and ensure everything works as expected. Submit a pull request for review.

### License

This project is licensed under the MIT License. You are free to use, modify, and distribute the code under the terms of this license.

Let me know if this works for you, or if you'd like to make any adjustments or additions!