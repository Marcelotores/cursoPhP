<?php 
	class ContaCorrente extends Conta {

		public $Limite;

		function __construct($Cliente, $Saldo, $Limite) {
			parent::__construct($Cliente, $Saldo);
			$this->Conta = "Conta Corrente";
			$this->Limite = (float) $Limite;
		}

		/** @override sacar() Conta */
		public function sacar($Valor) {
			if ($this->Saldo + $this->Limite >= $Valor) {
				parent::sacar($Valor);
			} 
			else {
				echo "<hr>Saque invalido, Saldo + Limite inferior!<br>";
				$total = $this->Saldo + $this->Limite;
				echo 'Saldo + Limite: '. "{$total}";
			}
		}

		public function transferir($Valor, $Conta) {
			if ($this->Saldo + $this->Limite >= $Valor) {
				parent::transferir($Valor, $Conta);
			} 
			else {
				echo "<hr>Transferencia inválida, Saldo + Limite inferior!<br>";
				echo 'Saldo + Limite: '{$this->Saldo + $this->Limite};
			}	
		}

		public function ver() {
			parent::extrato();
		}
	}


