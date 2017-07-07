<?php 

	function __autoload($Classe) {
		$dir = 'classes';
		if (file_exists("{$dir}/{$Classe}.class.php")) {
			require_once("$dir/{$Classe}.class.php");
		}
		else {
			die("Erro ao incluir classe {$dir}/{$Classe}.class.php" );
		}
	}


 ?>