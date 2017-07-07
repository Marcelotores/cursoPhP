<?php 
	require('inc/Config.inc.php');

	$obj = new ObjetoDinamico;

	var_dump($obj);

	echo "<hr>";

	$obj2 = new stdClass;
	$obj2->Nome = 'Marcelo';
	$obj2->Email = 'marcelo@gmail.com';

	var_dump($obj2);

	$obj->novoCliente($obj2);

	echo "<hr>";

	var_dump($obj);

	echo "<hr>";

	$obj3 = clone $obj2;

	$obj3->Nome = 'Maria';

	var_dump($obj3, $obj2);

 ?>