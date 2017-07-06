<?php 
	/**
	* @copyrigth 2017 Marcelo Torres
	*/

	class Livro{

 		public $Produto;
		public $Valor;
		public static $Vendas;
		public static $Lucros;

		function __construct($Produto, $Valor) {
			$this->Produto = $Produto;
			$this->Valor = $Valor;
		}

		public function vender() {
			self::$Vendas += 1;
			self::$Lucros += $this->Valor;
			echo "Você acabou de vender um livro de {$this->Produto} por {$this->Valor} <br>";
		}

		public static function relatorio() {
			echo "Este produto vendeu ". self::$Vendas. " livros. Total: ". self::$Lucros. "<br>";
		}
	}



 ?>