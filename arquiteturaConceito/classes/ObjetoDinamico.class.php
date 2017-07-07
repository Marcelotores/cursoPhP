<?php 

	/**
	* 
	*/
	class ObjetoDinamico {
		
		public $Nome;
		private $Email;

		public function novoCliente($Cliente) {
			if (is_object($Cliente)) {
				$this->Nome = $Cliente->Nome;
				$this->Email = $Cliente->Email;
			}
			else {
				die('Isso não é um objeto! ');
			}

		}
		
	}

 ?>