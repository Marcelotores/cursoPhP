<?php 
	
	require('classes/ReplicaClone.class.php');

	$query = new ReplicaClone("posts", "categoria = 'noticias'", "ORDER BY data DESC");	

	echo "<hr>";

	$query->Ler();


	$query->setTermos("categoria = 'internet'");
	$query->Ler();

	$queryB = clone($query);

	$queryB->Tabela('comments');

	$queryB->Ler();

	echo "<hr>";

	var_dump($query, $queryB);






 ?>