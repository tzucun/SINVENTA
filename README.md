# SINVENTA  
**Inventory Information System for Work Tools and Facilities**

SINVENTA is a web-based inventory management system developed to support the recording and management of **Work Tools (Alker)** and **Work Facilities (Salker)**. This project was developed as part of a **Group Internship (Kerja Praktik)** program at **PT. Telkom Infrastruktur Indonesia**.

---

## 👥 Development Team (Internship Group)

- **Davin Kristianto** (09021182328005)  
- **Mevika Vania** (09021182328010)  
- **Stanley Gilbert Lionardi** (09021282328042)

**Academic Supervisor:** Dian Palupi Rini, M.Kom., Ph.D.  
**University:** Universitas Sriwijaya  
**Internship Institution:** PT. Telkom Infrastruktur Indonesia

---

## 📌 Project Description

SINVENTA is designed to help organizations manage inventory data efficiently by providing features to:
- Manage **Work Tools (Alker)** data
- Manage **Work Facilities (Salker)** data
- Perform **CRUD operations** (Create, Read, Update, Delete)
- Implement **user authentication** (login and logout)
- Provide a clean and user-friendly interface for internal inventory management

This system supports daily operational needs related to inventory tracking within the company environment.

---

## 🧩 Technologies Used

- **PHP** (recommended version: 8.x)
- **Laravel Framework**
- **MySQL / MariaDB** (Database Management System)
- **Composer** (PHP Dependency Manager)
- **HTML, CSS, JavaScript**
- **Node.js & NPM** *(optional, for frontend asset build)*
- **Laragon / XAMPP** *(optional, for local development environment)*
- **Git & GitHub** (Version Control)

---

## ✅ System Requirements

Make sure the following software is installed on your system:
- PHP
- Composer
- MySQL or MariaDB
- Git
- *(Optional)* Node.js and NPM

You can verify installations using:
```bash
php -v
composer -V
git --version
node -v
npm -v
```

🚀 How to Run the Project (From Scratch)
1️⃣ Clone the Repository
git clone <YOUR_GITHUB_REPOSITORY_URL>
cd <PROJECT_FOLDER_NAME>

2️⃣ Install PHP Dependencies
composer install


If an error occurs related to PHP extensions (e.g., openssl, pdo_mysql), enable the required extensions in php.ini and restart the server.

3️⃣ Create Environment File

Copy the example environment file:

copy .env.example .env


For macOS/Linux:

cp .env.example .env

4️⃣ Generate Application Key
php artisan key:generate

5️⃣ Configure Database

Create a new MySQL database, for example:

Database Name: sinventa

Edit the .env file:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sinventa
DB_USERNAME=root
DB_PASSWORD=


Adjust the username and password according to your MySQL configuration.

6️⃣ Run Database Migration
php artisan migrate


If the project includes seeders:

php artisan db:seed

7️⃣ Run Laravel Development Server
php artisan serve


Access the application via browser:

http://127.0.0.1:8000
