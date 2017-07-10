<?php 
	class Carrinho {

		private $Cliente;
		private $Produtos;
		private $Total;

		function __construct(AssociacaoCliente $Cliente) 
		{
			$this->Cliente = $Cliente;
			$this->Produtos = array();

		}

		public function addProduto(Produto $Produto)
		{
			$this->Produtos[$Produto->getId()] = $Produto;
			$this->Total += $Produto->getValor();
			echo "Produto {$Produto->getProduto()} que custa {$Produto->getValor()} add com sucesso! <hr>";
		}

		public function removeProduto(Produto $Produto)
		{
			 unset($this->Produtos[$Produto->getId()]);
			 $this->Total -= $Produto->getValor();
			 echo "Produto {$Produto->getProduto()} que custa {$Produto->getValor()} removido com sucesso! <hr>";
		}


	}

 ?>