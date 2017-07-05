<?php 
	abstract class Conta {

		public $Cliente;
		public $Conta;
		public $Saldo;

		function __construct($Cliente, $Saldo) {
			$this->Cliente = $Cliente;
			$this->Saldo = $Saldo;
		}

		public function depositar($Valor) {
			$this->Saldo += (float) $Valor;
			echo "<hr> Parabéns {$this->Cliente}, você acaba de depositar {$this->valor($Valor)} na sua conta e seu novo saldo é: {$this->valor($this->Saldo)} <hr>";
		}

		public function sacar($Valor) {
			if ($Valor <= $this->Saldo) {
				$this->Saldo -= $Valor;
				echo "<br>Saque de {$this->valor($Valor)} efetuado com sucesso! Saldo atual: {$this->valor($this->Saldo)}<br>";
			}
			else {
				echo "Desculpe {$this->Cliente}, mas você não pode sacar {$this->valor($Valor)}, sua conta possui apenas: {$this->valor($this->Saldo)}";
			}
		}

		public function transferir($Valor, $Conta) {
			if ($this === $Conta) {
				echo "Transação invalida, você não pode transferir para a mesma conta";
			}
			else {
				$this->sacar($Valor);
				$Conta->depositar($Valor);
				echo "Transferencia de {$this->valor($Valor)} da conta do {$this->Cliente} para a conta do {$Conta->Cliente}<br>";
			}
		}

		public function extrato() {
			echo "<hr>Olá {$this->Cliente}, seu saldo atual em {$this->Conta} é de: {$this->Saldo}<hr>";
		}

		public function valor($Valor) {
			return "R$ ". number_format($Valor);
		}

		abstract public function ver();
	}

 ?>