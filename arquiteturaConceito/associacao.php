<?php 
	require('inc/Config.inc.php');

	$obj = new AssociacaoCliente('Marcelo', 'marcelotores21@gmail.com');

	$login = new Associacao($obj);

	echo "O {$login->getCliente()->getNome()} tem o email {$login->getCliente()->getEmail()}";
	echo "<hr>";
	var_dump($obj);
	echo "<hr>";
	var_dump($login);


 ?>