<?php 
	require('inc/Config.inc.php');

	$obj = new Polimorfismo('Celular', 300);
	$obj->pagar();

	echo "<hr>";

	$obj2 = new PolimorfismoDeposito('Tablet', 1200);
	$obj2->setDesconto(25);
	$obj2->pagar();

	


 ?>