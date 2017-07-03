<?php 
	function __autoload($Class) {
		$dirName = 'classes';

		if(file_exists("{$dirName}/{$Class}.class.php")) {
			require_once("{$dirName}/{$Class}.class.php");
		} else {
			die("Erro ao Incluir {$dirName}/{$Class}.class.php");
		}
	}



 ?>