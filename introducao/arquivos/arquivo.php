<?php 

	header('Content-Type: text/html; charset=utf-8');

	$dirAr = getcwd(). "/05";
	echo $dirAr;



	$File = fopen("{$dirAr}/05.txt", 'w');

	$txt = "Marcelo Araújo torres\r\nTreinamentos upinside\r\nmarcelotores21@gmail.com";

	fwrite($File, $txt);

	fclose($File);

	$AddText = "\r\nTexto simples para teste";

	$FileAdd = fopen("{$dirAr}/05.txt", "a");

	fwrite($FileAdd, $AddText);

	fclose($FileAdd);

	$FileRead = fopen("{$dirAr}/05.txt", 'r');
	echo "<br>";

	while (!feof($FileRead)) {
		$Dado = fgets($FileRead);
		echo "${Dado} <br>";
	}

	fclose($FileRead);


	$FileContent = file_get_contents("{$dirAr}/05.txt");
	file_put_contents("{$dirAr}/05.txt", $FileContent . "nova mensagem");

	$F = File("{$dirAr}/05.txt");
	var_dump($F);

	copy("{$dirAr}/05.txt", "{$dirAr}/teste.txt");

	unlink("{$dirAr}/05.txt");



 ?>