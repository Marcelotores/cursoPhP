<?php 

	class PessoaJuridica extends Pessoa{

		public $Empresa;
		public $Funcionarios;


		function __construct($Nome, $Idade, $Empresa) {
			Parent::__construct($Nome, $Idade);
			$this->Empresa = $Empresa;
		}

		public function contratar($Pessoa) {
			echo "A empresa {$this->Empresa} de {$this->Nome} contratou {$Pessoa} <br>";	
			$this->Funcionarios += 1;
		}

		public function verEmpresa() {
			echo "{$this->Empresa} foi fundada por {$this->Nome} <br>";
			Parent::verPessoa();
		}
	}

 ?>