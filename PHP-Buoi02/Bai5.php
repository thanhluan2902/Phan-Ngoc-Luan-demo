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
        $fullName = "Lê Thị Văn Minh";
        echo "Fullname : ".$fullName;
        echo "<br><br>";
        $arrName = explode(" ", $fullName);
        $firstName = array_shift($arrName); //Họ chính là phần tử đầu tiên của mảng
        echo "Họ : ".$firstName;
        $lastName = array_pop($arrName); //Tên chính là phần tử cuối cùng của mảng
        echo "<br>Tên : ".$lastName;
        $middleName = implode(" ", $arrName); //Tên đệm chính là kết nối các phần tử còn lại
        echo "<br>Đệm : ".$middleName;
    ?>
</h3>    
</body>
</html>