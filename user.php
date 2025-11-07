<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location:./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> welcome world </h1>
    <h2> my name is <?= $_SESSION['user'] ?> and is password : <?= $_SESSION['user_password'] ?> </h2>
    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur natus ea possimus blanditiis omnis explicabo aliquid odio quis commodi. Cumque necessitatibus, dolore est modi sit asperiores sapiente nostrum reprehenderit debitis quisquam similique ad obcaecati, veritatis, iusto sed distinctio earum excepturi sunt natus accusamus iure sint quas! Quia, quibusdam sapiente. Deserunt laudantium reprehenderit illum voluptatum odio tempore unde dolorum, officiis, velit minus eaque aspernatur inventore sed quia maiores ut! Ullam vel blanditiis qui quasi iusto? Ad mollitia totam et! Quidem molestiae blanditiis vero obcaecati, adipisci atque quae hic velit quaerat culpa sapiente modi similique necessitatibus enim possimus autem, dolore, inventore non! </p>
    <a href="./logout.php"> exiet </a>
</body>

</html>