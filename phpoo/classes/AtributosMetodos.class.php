<?php 

	class AtributosMetodos{
				
		var $Nome;
		var $Idade;
		var $Profissao;


		function setUsuario($Nome, $Idade, $Profissao)
		{
			$this->Nome = $Nome;
			$this->setIdade($Idade);
			$this->Profissao = $Profissao;
		}

		function getUsuario () {
			return "{$this->Nome} tem {$this->Idade} anos de idade e trabalha como {$this->Profissao}";
		}

		function getClasse () {
			echo "<pre>";
			print_r($this);
			echo "</pre>";
		}

		function setIdade ($Idade) {
			if (!is_int($Idade)) {
				echo "Idade informada incorreta";
			}
			else {
				$this->Idade = $Idade;
			}
			
		}
		
	}

 ?>