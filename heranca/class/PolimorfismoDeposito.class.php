<?php 
	class PolimorfismoDeposito extends Polimorfismo{

		public $Desconto;

		function __construct($Produto, $Valor) {
			parent::__construct($Produto, $Valor);
			$this->Metodo = 'Deposito';
			$this->Desconto = 15;
		}

		public function setDesconto($Desconto) {
			$this->Desconto = $Desconto;
		}

		public function pagar() {
			$this->Valor = $this->Valor - $this->Valor * $this->Desconto / 100;
			parent::pagar();
		}

	}


 ?>