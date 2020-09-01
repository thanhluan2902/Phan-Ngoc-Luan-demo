<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css" media="screen">
		h1 {
			color: red;
		}
	</style>
</head>
<body>
	<h1>
		<?php
		for($i = 7; $i >= 0 ;$i--) {
			for($j = 0; $j<7 ; $j++) {
					if($j < $i){
					echo "&nbsp;&nbsp;";
				} else {
					echo "*";
				}
			}	
				echo "<br>";
		}
		?>
	</h1>
</body>
</html>