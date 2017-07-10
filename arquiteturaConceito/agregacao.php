<?php 

	require('inc/Config.inc.php');

	$produto1 = new Produto('Notebook', 1, 1000);
	$produto2 = new Produto('PC', 2, 3000);
	$produto3 = new Produto('SmartTv', 3, 2000);
	$produto4 = new Produto('Freezer', 4, 4000);

/*
	$pro = new stdClass;

	$pro->Produto = 'Celular';
	$pro->Id = 6;
	$pro->Valor = 200;
*/

	$cliente1 = new AssociacaoCliente('Marcelo', 'marcelo@gmail.com');

	$carrinho = new Carrinho($cliente1);

	$carrinho->addProduto($produto1);
	$carrinho->addProduto($produto2);
	$carrinho->addProduto($produto4);
	//$carrinho->addProduto($pro);

	$carrinho->removeProduto($produto2);

	var_dump($carrinho);

 ?>