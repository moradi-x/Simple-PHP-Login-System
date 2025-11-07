<?php
session_start();
if(isset($_SESSION['admin'])){
    header("location:./admin.php");
}
if(isset($_SESSION['user'])){
    header("location:./user.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <div class="asle">
        <form action="/check.php" method="post">
            <div>
                <h1>LOGIN </h1>
            </div>
            <div class="a">
                user name : <input type="text" name="name" class="aa">
            </div>
            <div class="b">
                password : <input type="password" name="password" class="bb">
            </div>
            <div class="c">
                <input type="submit" name="submet" value="LogIn" class="cc">
            </div>
        </form>
    </div>
</body>

</html>