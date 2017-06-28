<?php 
	require('classes/AtributosMetodos.class.php');

	$obj = new AtributosMetodos();

	$obj->setUsuario('Marcelo', 22, 'programador');


	echo $obj->getUsuario();	

	echo "<hr>";

	$obj->setUsuario('Jose', 25, 'DBA');

	$obj->setIdade(34);

	$obj->getClasse();






 ?>