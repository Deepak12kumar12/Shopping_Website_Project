# Shopping_Website_Project
This is my first online shopping site project which is develop by using HTML, CSS, PHP , MYSQL and updated with admin &amp; user password reset with the Multi User System
# 🛒 Smart Shopping Website with Advanced Admin Dashboard (PHP + MySQL)
# - Multi-user management system (Admin control)

A complete dynamic shopping website built using PHP, MySQL, Bootstrap, and JavaScript with an advanced Admin Dashboard.
---
## 🚀 Features

### 👤 User Side
- User Registration & Login
- Add to Cart system
- Order placement
- Order history
- Complaint system
- Profile management
---

### 🔐 Admin Panel
- Dashboard with stats (Users, Orders, Complaints)
- Product management (Add / Delete / Restore)
- Order management (status update)
- Delete multiple users (popup modal)
- Change user password (popup modal)
- Admin can control all users
- Admin cannot be deleted (security)
---

### 🔐 Authentication & Security
- Password hashing using password_hash()
- Admin-only protected routes
- Session-based authentication
- SQL Injection protection using prepared statements

---

### 🔑 Forgot Password System
- Mobile / Email based reset
- OTP verification system
- Timer-based OTP expiry
- Auto refresh OTP
- Secure password reset flow
---

### 💻 UI / UX Features
- Responsive design (Mobile + Tablet + Desktop)
- Modern UI design
- Bootstrap modals (popup system)
- Toast notifications
- Smooth animations
---

## 🛠️ Technologies Used
- Frontend: HTML, CSS, Bootstrap, JavaScript
- Backend: PHP
- Database: MySQL
- Server: XAMPP / Apache
---

## 📂 Project Structure
/project-folder  
│── admin_dashboard.php  
│── admin_change_password.php  
│── delete_multiple_users.php  
│── login.php  
│── register.php  
│── forgot_password.php  
│── db.php  
│── /uploads  
│── /assets  
---

## Installation

1. Clone the repository  
git clone https://github.com/Deepak12kumar12/Shopping_Website.git 

2. Move project to XAMPP  
C:\xampp\htdocs\  

3. Start Apache & MySQL  

4. Import database  
- Open phpMyAdmin  
- Create database  
- Import .sql file  

5. Run project  
http://localhost/Shopping_Website  
---

## 🔐 Default Admin Access
Email: admin@gmail.com  
Password: (create your own password)
---

## ⚠️ Important Notes
- Admin cannot be deleted  
- Only admin can change user passwords  
- OTP system is for development (SMS/Email integration optional)  
---

## Future Improvements
- Email OTP (SMTP integration)  
- Two-factor authentication  
- Advanced analytics dashboard  
- Payment gateway integration  
- Search & filter in admin panel  
---

## 👨‍💻 Author
Deepak Kumar Singh  

---
## ⭐ Support
If you like this project, give it a ⭐ on GitHub!
