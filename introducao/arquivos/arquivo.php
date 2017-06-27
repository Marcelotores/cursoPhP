<?php 

	header('Content-Type: text/html; charset=utf-8');

	$dirAr = getcwd(). "/05";
	echo $dirAr;



	$File = fopen("{$dirAr}/05.txt", 'w');


 ?>