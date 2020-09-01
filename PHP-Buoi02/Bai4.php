<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  
    $name ="    vŨ VăN thƯƠng   ";
    echo "Chuỗi ban đầu là : ";
    print_r($name);

    // Cat chuoi theo ky tu mong muon
    $data = explode(" ",$name);

    echo "<pre>";
	    print_r($data);
    echo "</pre>";

    // Ghép chuoi theo ky tu mong muon
    $name1 = implode(" ",$data);

    $name2 = mb_strtolower("$name1","UTF-8");
    echo "<br>Chuỗi sau khi chuẩn hóa là :  " . ucwords($name2);

?>
</body>
</html>