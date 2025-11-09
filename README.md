# 🧭 Dante HRMS — Human Resource Management System

**Dante HRMS** is a modern web-based Human Resource Management System built with **Laravel 11** and **AdminLTE 3**.  
It helps organizations manage employees, departments, payroll, attendance, and leave applications efficiently — all in one dashboard.

---

## 🚀 Features

✅ **User Authentication** — Laravel Breeze (Login, Register, Forgot Password)  
✅ **Role Management** — Admin, HR, and Employee roles  
✅ **Employee Management** — CRUD operations for staff data  
✅ **Dashboard** — Overview of staff count, departments, and activity logs  
✅ **Attendance System** — Mark and track attendance  
✅ **Leave Management** — Request and approve leaves  
✅ **Payroll Module** — Salary, deductions, and payslips  
✅ **Activity Logs** — Track all user actions for accountability  
✅ **Responsive UI** — Fully mobile-friendly with AdminLTE 3  
✅ **Dark Mode (optional)** — Modern look and feel for all devices  

---

## 🧰 Tech Stack

| Component         | Technology Used          |
|-------------------|--------------------------|
| Framework         | Laravel 11 (PHP 8.2+)    |
| Frontend Template | AdminLTE 3.x             |
| Database          | MySQL                    |
| Authentication    | Laravel Breeze            |
| Version Control   | Git + GitHub             |
| Web Server        | XAMPP / Apache           |

---

## ⚙️ Installation

### 1️⃣ Clone the repository
```bash
git clone https://github.com/your-username/dante-hrms.git
cd dante-hrms
2️⃣ Install PHP dependencies
composer install

3️⃣ Install Node dependencies (optional if using AdminLTE assets directly)
npm install && npm run dev

4️⃣ Configure the environment

Duplicate .env.example and rename it to .env, then edit:

APP_NAME="Dante HRMS"
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dante_hrms
DB_USERNAME=root
DB_PASSWORD=

5️⃣ Generate app key
php artisan key:generate

6️⃣ Run migrations
php artisan migrate

7️⃣ Serve the application
php artisan serve


Visit 👉 http://127.0.0.1:8000

🎨 AdminLTE Integration

AdminLTE files are stored in:

public/adminlte/
├── css/
├── js/
├── img/
└── plugins/


Linked in resources/views/layouts/adminlte.blade.php for global use across pages.

👥 User Roles (Default Plan)
Role	Permissions
Admin	Full system access & user management
HR	Employee CRUD, leave approvals, attendance
Employee	Profile view, apply leave, view payslip
🧑‍💻 Development Notes

The project follows MVC architecture and Laravel Blade templating.

Components like Sidebar, Topbar, and Footer are reusable via @include.

To modify theme colors or branding, edit the AdminLTE CSS files inside public/adminlte/css/.

🛠️ Future Enhancements

✅ Biometric attendance integration

✅ Payroll reports export (CSV/PDF)

✅ Email & SMS notifications (Twilio integration)

✅ Cloud deployment with Docker

✅ REST API for mobile app integration

🧱 Project Structure
├── app/
│   ├── Http/
│   ├── Models/
│   └── Providers/
├── public/
│   ├── assets/
│   ├── css/
│   └── js/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   └── adminlte/
├── routes/
│   ├── web.php
│   └── api.php
└── database/
    └── migrations/

🧩 Technologies Used

Laravel 11 – Backend framework

Laravel Breeze – Authentication starter kit

AdminLTE 3 – Admin dashboard template

MySQL – Database

Bootstrap 4/5 – Frontend styling

FontAwesome – Icons

🧑‍💻 Author

Developed by Dantech Developers
📧 dantechdevs@gmail.com

© 2025 - DANTE SOFTWARES LTD. All Rights Reserved.

🪪 License

This project is licensed under the MIT License.
© 2025 DANTE SOFTWARES LTD. All Rights Reserved.
“Smart HR management — powered by technology.”
