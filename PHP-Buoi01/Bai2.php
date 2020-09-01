<?php
$a = 1;
$b = 3;

echo "<h3>Phương trình bấc nhất là: </h3>".$a."x + ".$b." = 0"."<br>";

if($a == 0){
	echo "Phương trình vô nghiệm";
} else if ($b == 0) {
	echo "Phương trình có nghiệm: x = ".$a;
} else {
	echo "Phương trình có nghiệm là: x = ".(-$b/$a);
}
?>