# Simple PHP Login System (Admin & User)

This is a basic PHP login system using sessions.  
The project includes:
- Login form  
- Admin panel  
- User page  
- Session-based authentication  
- Logout system  
- Basic styling with CSS  

---

## ✅ Features
- Separate login for **admin** and **regular users**
- Session handling using `$_SESSION`
- Automatic redirection after login
- Simple and clean UI
- Fully functional logout

---

## 📂 Project Structure
```
/login.php
/check.php
/admin.php
/user.php
/logout.php
/style.css
/style2.css
```

---

## ⚙️ How it works
- The user enters username & password in `login.php`
- `check.php` validates the credentials:
  - If username/password match the admin → redirect to `admin.php`
  - Otherwise → redirect to `user.php`
- Sessions are used to track logged-in users
- `logout.php` destroys the session and redirects back to login

---

## 🔒 Security Issues & Missing Features (IMPORTANT)
This project is intended for learning and **is not secure for real use**.  
Here are the main problems:

### ❌ 1. Hardcoded username & password  
Inside `check.php`, credentials are written directly in code:
```php
$user_name === "mohamad moradi" && $password === "MM13831383"
```
