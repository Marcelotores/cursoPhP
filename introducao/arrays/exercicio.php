<?php 

	$arr = [];

	for ($i = 0; $i < 10; $i++) { 
		$arr[] = $i;
	}


	foreach ($arr as $a) {
		echo $a;
	}

	$arrB = [];

	for ($i=0; $i < 10; $i++) { 
		for ($j=0; $j < 10; $j++) { 
			$arrB[$i][$j] = $j; 
		}
	}
	echo "<hr>";

	foreach ($arrB as $a) {
		foreach ($a as $b) {
			echo $b;
		}
		echo "<br>";
	}

s

 ?>