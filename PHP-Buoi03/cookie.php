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
            // setcookie('msg','Đăng nhập thành công' , time() + 10);
            if(isset($_COOKIE['msg'])){
                echo $_COOKIE['msg'];
            }
        ?>
    </h3>
</body>
</html>