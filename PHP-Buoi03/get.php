<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3 {
            color: red;
        }
    </style>
</head>
<body>
    <h3>
        <?php
            // $course = $_GET['course'];
            // echo $course;

            // $class = $_GET['class'];
            // echo "<br>".$class;


            echo 'Tên đăng nhập : '.$_GET['user']."<br>";
            echo 'Mật khẩu : '.$_GET['pwd']
        ?>   
    </h3>
</body>
</html>