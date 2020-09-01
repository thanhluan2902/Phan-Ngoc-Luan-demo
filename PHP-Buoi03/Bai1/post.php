<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align:center;
        }
        h3 {
            color: red;
        }
    </style>
</head>
<body>
    <h3>ZENT GROUP - PHP  - thực hành về gửi dữ liệu dùng POST</h3>
    <h3>
        <?php
            echo 'Mã sinh viên : '.$_POST['msv']."<br>";
            echo 'Họ và tên : '.$_POST['name']."<br>";
            echo 'Số điện thoại  : '.$_POST['sdt']."<br>";
            echo 'Email  : '.$_POST['email']."<br>";
            echo 'Gioi tính : '.$_POST['gt']."<br>";
            echo 'Địa chỉ  : '.$_POST['address'];
        ?>
    </h3>
</body>
</html>