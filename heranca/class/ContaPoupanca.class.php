<?php 
	class ContaPoupanca extends ContaCorrente {
		public $Rendimento;

		function __construct($Cliente, $Saldo) {
			parent::__construct($Cliente, $Saldo, 0);
			$this->Rendimento = 1.7;
		}

		public function depositar($Valor) {
			$juro = $Valor * ($this->Rendimento / 100);
			$total = $Valor + $juro;
			parent::depositar($total);
			echo "Deposito de {$Valor} efetuado com sucesso! Valor dos juros: {$juro}";
		}
	}

 ?>