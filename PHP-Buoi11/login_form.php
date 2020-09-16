<?php
    session_start();
    if($_SESSION['login']){
        header('location: home.php');
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
    <form action="login.php" method="post">
        Username : <input type="text" placeholder="username" name="username"> <br>
        Password : <input type="password" placeholder="password" name="password"> <br>
        <button type="submit" value="Đăng nhập">Đăng nhập</button>
    </form>
</body>
</html>