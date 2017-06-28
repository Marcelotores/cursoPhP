<?php 
	/**
	* 
	*/
	class ComportamentoInicial
	{
		
		var $Nome;
		var $Idade;
		var $Profissao;
		var $Salario;


		function __construct($Nome, $Idade, $Profissao, $Salario) {
			$this->Nome = (string) $Nome;
			$this->Idade = (int) $Idade;
			$this->Profissao = (string) $Profissao;
			$this->Salario = (float) $Salario;
		}


		function getClasse() {
			echo "<pre>";
			print_r($this);
			echo "</pre>";
		}

		function __destruct(){
			echo "O objeto {$this->Nome} foi destruido";
		}


	}

 ?>