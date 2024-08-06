Student Management System
Overview
The Student Management System is a web-based application built using PHP and MySQL for managing student records in a school. It allows administrators to log in, view, add, edit, and delete student records through a user-friendly web interface. The system ensures secure access with session-based authentication and provides a responsive design using Bootstrap.

Features
User Authentication: Secure login for administrators.
CRUD Operations: Create, Read, Update, and Delete student records.
Validation: Ensures data integrity with validation for email uniqueness and phone number format.
Responsive Design: Mobile-friendly interface using Bootstrap.
Icons: Utilizes Font Awesome icons for intuitive navigation and actions.
Installation
Prerequisites
PHP (version 7.4 or higher)
MySQL (version 5.7 or higher)
A web server like Apache (XAMPP or similar)
Setup
Clone the Repository

bash
Copy code
git clone https://github.com/jadenmatth/matthias_22RP02216.git
cd matthias_22RP02216
Configure the Database

Create a MySQL database named student_management.
Import the student_management.sql file from the database folder using phpMyAdmin.
Set Up Your Web Server

Place the project files in the web server's document root directory (e.g., htdocs for XAMPP).
Ensure that your server is running and navigate to http://localhost/student_management_system in your web browser.
Usage
Log In
Visit login.php to log in as an administrator. Enter the following credentials to access the dashboard:

Username: matthias
Password: matthias@123
Manage Students
View Students: Navigate to index.php to see the list of students.
Add Student: Use add_student.php to add new student records.
Edit Student: Click the edit button next to a student's record to modify their details.
Delete Student: Click the delete button to remove a student record.
Validation Rules
Email: Must be unique across all student records.
Phone Number: Must start with "07" and be 10 digits long.
