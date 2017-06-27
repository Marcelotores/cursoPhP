<?php 


	class NovaClasse {
		
		var $Classe;
		var $Funcao;

		function getClass($Classe, $Funcao) {
			echo "Esta é a classe {$Classe} e sua função é {$Funcao}";
		}

		function verClass() {
			echo "<pre>";
			print_r($this);
			echo "</pre>";
		}

	}


 ?>