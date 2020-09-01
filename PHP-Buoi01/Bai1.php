<?php
//khai báo biến
$a = "1";
$b = "3";
$c = "2";

//in ra màn hình phương trình vừa nhập
echo "<h3>Phương trình vừa nhập là:  </h3>";
echo "<h4>".$a."x2 + ".$b."x + ".$c." = 0"."</h4>";

if($a == 0) {
    if($b == 0) {
        echo "Phương trình vô nghiệm";
    } else {
        echo ("Phương trình có nghiệm là: ".(-$c/$b));
    }
}

$delta = $b*$b - 4*$a*$c;
$x1 = "";
$x2 = "";
//tính nghiệm
if($delta > 0) {
  $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
  $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
  echo "<h3>"."Phương trình có 2 nghiệm phân biệt : "."</h3>";
  echo "X1 = ".$x1."<br>"."X2 = ".$x2;
}
else if ($delta == 0) {
    $x1 = (- $b / (2 * $a));
    echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
} else {
    echo ("Phương trình vô nghiệm!");
}
?>