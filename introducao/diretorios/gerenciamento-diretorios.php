<?php 

	header('Content-Type: text/html; charset=utf8');

	function checkDir($Dir) {
	    if (file_exists($Dir) && is_dir($Dir)):
	        return true;
	    else:
	        return false;
	    endif;
	}


	$getDir = getcwd();
	$setDir = "{$getDir}/04";
	echo "{$getDir}<hr>";

	if (!checkDir($setDir)):
	    mkdir($setDir, 0777);
	endif;

	if (checkDir($setDir)) {
		//rmdir($setDir);
	}

	rename("{$getDir}/05", "{$setDir}");


	//rename($setDir, "{$getDir}/uploads");

/*
	$dirAtual = getcwd();

	echo $dirAtual;

	$setDir = "{$dirAtual}/04";

	mkdir("/var/www/html/cursoPhP/introducao/diretorios/04", 0777);


	if (!checkDir($setDir)) {
		mkdir("$setDir", 0777);
	}

*/
 ?>