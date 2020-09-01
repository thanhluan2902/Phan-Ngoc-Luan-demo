<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
    </style>
</head>
<body>
<h3>


<?php
    $arr = [1,4,2,6,9,100,45,8,20];
    echo "Mảng truyền vào là : ";
    // var_dump($arr1);
    print_r($arr);
    
    $max = $arr[0];
    for($i = 0 ; $i < count($arr) ; $i++){
        if($arr[$i] > $max){
            $max = $arr[$i];
        }
    }
    echo "<br><br>Phần tử lớn nhất của mảng là : ".$max;
?>


</h3>
</body>
</html>