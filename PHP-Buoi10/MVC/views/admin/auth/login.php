<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?mod=admin&c=auth&act=checkLogin" method="post">
        Username : <input type="text" placeholder="username" name="username"> <br> <br>
        Password : <input type="password" placeholder="password" name="password"> <br> <br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>