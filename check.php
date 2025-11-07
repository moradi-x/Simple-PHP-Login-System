<?php
session_start();

$user_name = $_POST['name'];
$password = $_POST['password'];

if (empty($user_name) || empty($password)) {
    header("location:./login.php");
} elseif ($user_name === "mohamad moradi" and $password === "MM13831383") {
    $_SESSION['admin'] = $user_name;
    $_SESSION['password'] = $password;
    header("location:/admin.php");
} else {
    $_SESSION['user'] = $user_name;
    $_SESSION['user_password'] = $password;
    header("location:./user.php");
}
