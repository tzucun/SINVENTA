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

## 🚀 How to Run the Project (Local Development)

Follow the steps below to run the SINVENTA project on your local machine.

---

### 1️⃣ Clone the Repository
```bash
git clone <YOUR_GITHUB_REPOSITORY_URL>
cd <PROJECT_FOLDER_NAME>
```

### 2️⃣ Install PHP Dependencies (Composer)

Make sure Composer is installed, then run:
```bash
composer install
```
If an error occurs related to PHP extensions (such as openssl or pdo_mysql), enable the required extensions in your php.ini file and restart the server.

### 3️⃣ Create Environment File

Copy the example environment file:
```bash
copy .env.example .env
```

For macOS/Linux:
```bash
cp .env.example .env
```

### 4️⃣ Generate Application Key
```bash
php artisan key:generate
```

### 5️⃣ Configure Database

Create a new database in MySQL (via phpMyAdmin or CLI), for example:

- Database name: sinventa

Then configure the database settings in the .env file:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sinventa
DB_USERNAME=root
DB_PASSWORD=
```

Adjust the username and password according to your local MySQL configuration.

### 6️⃣ Run Database Migration
```bash
php artisan migrate
```
If the project includes seeders, run:
```bash
php artisan db:seed
```

### 7️⃣ Start the Laravel Development Server
```bash 
php artisan serve
```
Open the application in your browser.

### 8️⃣ Access the Application

- Login to the system using an existing account
- If no account is available, create one manually or via the registration feature (if implemented)

--- 

### 📂 Main Features

- Work Tools (Alker) Management: Add, view, update, and delete work tools data
- Work Facilities (Salker) Management: Add, view, update, and delete facilities data
- Authentication System: Login and logout functionality

--- 

### 🛠️ Common Issues & Troubleshooting
Application key not set / Error 500
```bash
php artisan key:generate
php artisan config:clear
php artisan cache:clear
```

Database connection error
- Ensure MySQL is running
- Check database credentials in .env
- Ensure the database exists

View or CSS changes not applied
```bash
php artisan view:clear
```
Then refresh browser with Ctrl + F5

---

### 📄 License

This project is developed for academic and internship purposes.
Further licensing can be adjusted as needed.

--- 

### ✉️ Contact

For questions or collaboration, please use the Issues or Pull Requests feature in this GitHub repository.

