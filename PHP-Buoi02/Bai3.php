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
        $arrs = [100,3,6,2,4,8,10,20];
        echo "Mảng vừa nhập là :   ";
        echo "<pre>";
        print_r($arrs);
        echo "</pre>";

        echo "<br><br>Mảng sắp xếp tăng dần là : ";
        sort($arrs);

        echo "<pre>";
        print_r($arrs);
        echo "</pre>";

    ?>
</h3>

</body>
</html>