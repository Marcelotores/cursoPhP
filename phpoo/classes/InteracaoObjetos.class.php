<?php 

	/**
	* <b>InteracaoObjetos:</b>
	* Essa classe foi criada para mostrar a interação de objetos.
	*
	*
	* @copyright (c) 2017, Marcelo Torres
	*/

	class InteracaoObjetos {

		/** @var string nome da empresa */
		public $Empresa;
		/** @var int quantidade de setores da empresa, este atributo é incrementado */
		public $Setores;
		/* var @InteracaoClasses */
		public $Funcionario;

		function __construct($Empresa) {
			$this->Empresa = $Empresa;
			$this->Setores = 0;
		}

		public function contratar($Funcionario, $Cargo, $Salario) {
			$this->Funcionario = (object) $Funcionario;
			$this->Funcionario->trabalhar($this->Empresa, $Salario, $Cargo);
			$this->Setores += 1;
		}

		public function pagar() {
			$this->Funcionario->receber($this->Funcionario->Salario);
		}

		public function promover($Cargo, $Salario = null) {
			$this->Funcionario->Profissao = $Cargo;
			if ($Salario) {
				$this->Funcionario->Salario = $Salario;
			}
			
		}

		public function funcionario($Funcionario) {
			$this->Funcionario = (object)$Funcionario;
		}

		public function demitir($Recisao) {
			$this->Funcionario->Empresa = null;
			$this->Funcionario->Salario = null;
			$this->Funcionario->receber($Recisao);
			$this->Setores -= 1;
		}


	}

 ?>