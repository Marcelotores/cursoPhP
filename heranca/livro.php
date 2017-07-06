<?php 
	require('inc/Config.inc.php');

	$produto = new Livro('PhP', 30.90);

	$produtoDigital = new LivroDigital('Java', 19.90);

	$produto->vender();
	$produto->vender();
	$produto->vender();

	$produtoDigital->vender();
	$produtoDigital->vender();


	//métodos statics podem ser exibidos tanto pelos objetos da classe como diretamente pela classe.
	$produto->relatorio();
	Livro::relatorio();

	echo Livro::$Vendas - LivroDigital::$ProdutoDigital. "Quantidade de livros digitais";


	//Atributos statics podem ser exibidos somente pela classe.
	//echo Livro::$Vendas;

 ?>