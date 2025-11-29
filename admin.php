<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:./login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style2.css">
</head>

<body>
    <h1> welcome <b> admin </b><?= $_SESSION['admin'] ?> and my password <?= $_SESSION['password']; ?> </h1>

    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis modi, ipsa accusamus reprehenderit quae nemo sint nesciunt aliquid, minima non quibusdam beatae perferendis soluta consequatur ut deleniti voluptatum error fuga. </p>

    <a href="./logout.php"> exiet </a>

</body>

</html>
