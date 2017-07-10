<?php 
	/**
	* 
	*/
	class Produto {

		private $Produto;
		private $Id;
		private $Valor;
		
		function __construct($Produto, $Id, $Valor) {
			$this->Produto = $Produto;
			$this->Id = $Id;
			$this->Valor = $Valor;
		}

		public function getProduto()
		{
			return $this->Produto;
		}

		public function getId()
		{
			 return $this->Id;
		}

		public function getValor()
		{
			return $this->Valor;
		}

	}

 ?>