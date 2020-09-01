<?php

$n = 10;
$s = 0;
function ham_tinh_giai_thua($n)  
{  
	if($n ==0)  
	{  
		return 1;  
	}  
	else   
	{     
		return $n * ham_tinh_giai_thua($n-1);  
	}  
}  

for($i = 1; $i <= $n ; $i++) {
	$s += $i/ham_tinh_giai_thua($i);
} 
echo "<h3>"."S = 1/1! + 2/2! + 3/3! + ... + n/n! = ".$s."</h3>";
?>
