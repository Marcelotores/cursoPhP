<?php 
	class Polimorfismo {

		public $Produto;
		public $Valor;
		public $Metodo;

		function __construct($Produto, $Valor) {
			$this->Produto = $Produto;
			$this->Valor = $Valor;
			$this->Metodo = "Boleto";
		}

		public function pagar() {
			echo "Você pagou {$this->valor($this->Valor)} por um {$this->Produto} via {$this->Metodo}";

		}

		public function valor($Valor) {
			return 'R$ '. number_format($Valor, '2', ',', '.');
		}
	}

 ?>