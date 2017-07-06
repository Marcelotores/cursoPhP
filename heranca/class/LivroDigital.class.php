<?php 

	/**
	* 
	*/
	class LivroDigital extends Livro {

		public static $ProdutoDigital;

		public function vender() {
			self::$ProdutoDigital += 1;
			parent::vender();
		}
	}

 ?>