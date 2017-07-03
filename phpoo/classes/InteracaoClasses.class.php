<?php 
	class InteracaoClasses {

		public $Nome;
		public $Idade;
		public $Profissao;
		public $Empresa;
		public $Salario;
		public $Conta;


		function __construct($Nome, $Idade, $Profissao, $Conta) {
			$this->Nome = $Nome;
			$this->Idade = $Idade;
			$this->Profissao = $Profissao;
			$this->Conta = $Conta;
		}

		public function trabalhar($Empresa, $Salario, $Profissao) {
			$this->Empresa = $Empresa;
			$this->Salario = $Salario;
			$this->Profissao = $Profissao;
		}

		public function receber($valor) {
			$this->Conta += $valor;
		}





	}

 ?>