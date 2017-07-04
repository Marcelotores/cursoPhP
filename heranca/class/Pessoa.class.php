<?php 
 
	class Pessoa {
		public $Nome;
		public $Idade;
		public $Formacao;

		function __construct($Nome, $Idade) {
			$this->Nome = $Nome;
			$this->Idade = $Idade;
			$this->Formacao = array();
		}


		public function formar($Curso) {
			$this->Formacao[] = $Curso;
		}

		public function envelhecer() {
			$this->Idade += 1;
		}

		public function verPessoa() {
			$Formacao = implode(', ', $this->Formacao);
			echo "{$this->Nome} tem {$this->Idade} anos e é fomado(a) em: {$Formacao}";
		}
	}


	

 ?>