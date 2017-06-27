<?php 


	$arr = [];

	for ($i=0; $i < 10; $i++) { 
		for ($j=0; $j < 5; $j++) { 
			for ($k=0; $k < 4; $k++) { 
				$arr[$i][$j][$k] = $k;
			}
		}
	}

	foreach ($arr as $a) {
		foreach ($a as $b) {
			foreach ($b as $c) {
				echo $c;
			}
			echo "<br>";
		}
		echo "<br>";
	}


 ?>