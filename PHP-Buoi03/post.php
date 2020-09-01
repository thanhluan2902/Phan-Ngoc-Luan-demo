<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        <?php
            echo 'Tên đăng nhập: '.$_POST['user'].'<br>';
            echo 'Mật khẩu: '.$_POST['pwd'];
        ?>
    </h3>    
</body>
</html>