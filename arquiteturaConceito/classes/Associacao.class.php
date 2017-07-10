<?php 
	class Associacao {

		private $Cliente;
		private $Login;

		function __construct($Cliente)
		{
			if (is_object($Cliente)) {
				$this->Cliente = $Cliente;
			}
			else {
				die('Isto nao é um objeto');
			}
		}

		public function getCliente()
		{
			return $this->Cliente;
		}
	}

 ?>