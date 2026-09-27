# PHP Session + Login + Product CRUD Dashboard

A PHP and MySQL based Product Management System that provides user registration, secure authentication, PHP session handling, and complete CRUD operations for managing products.

## 📌 Project Overview

This project is a web-based Product Management System developed using PHP, MySQL, HTML, and Bootstrap.

The application provides two separate database tables:

- `users` - Used for registration and login authentication
- `products` - Used for product CRUD operations

After successful login, users are redirected to a protected product dashboard where they can view, insert, update, and delete products.

## 🚀 Features

### User Authentication

- User Registration
- User Login
- Username and Password Authentication
- Password Hashing using `password_hash()`
- Password Verification using `password_verify()`
- PHP Session Management
- Protected Dashboard
- Logout functionality

### Product Management

- Add new products
- Display all products
- Update existing products
- Delete products
- Product ID based update/delete
- Product category management
- Product quantity management
- Product brand management
- Product description management

### UI

- Responsive Bootstrap layout
- Bootstrap navigation bar
- Responsive product table
- Bootstrap buttons and forms
- Mobile-friendly interface

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| PHP | Backend development |
| MySQL | Database |
| HTML5 | Page structure |
| Bootstrap 5 | UI and responsive design |
| XAMPP | Local development server |
| Apache | Web server |
| MySQLi | Database connectivity |

## 📂 Project Structure

```text
PHP-Session-CRUD-Product-Management/
│
├── db.php
├── register.php
├── login.php
├── home.php
├── insert.php
├── update.php
├── delete.php
├── logout.php
├── csv.php
├── README.md
└── .gitignore
