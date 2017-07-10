<?php 
	
	class AssociacaoCliente {

		private $Nome;
		private $Email;
		private $Login;

		function __construct($Nome, $Email)
		{
			$this->Nome = $Nome;
			$this->Email = $Email;
		}

		public function getNome()
		{
			return $this->Nome;
		}

		public function getEmail()
		{
			return $this->Email;
		}
	}

 ?>