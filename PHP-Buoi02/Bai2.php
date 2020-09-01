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
        $arrs = [1,3,7,5,9,0];
        echo "Mảng truyền vào là : ";
        echo "<pre>";
        print_r($arrs);
        echo "</pre>";
        
        echo "<br><br>Mảng đảo ngược là : ";
        
        $reversed = array_reverse($arrs);
        echo "<pre>";
            print_r($reversed);
        echo "</pre>";
    ?>
</h3>    

</body>
</html>