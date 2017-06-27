<?php 

	header('Content-Type: text/html; charset=utf8');

	require('classes/NovaClasse.class.php');

	$obj = new NovaClasse();

	$obj->getClass("Teste", "Não serve para nada");

	$obj->verClass();

	$obj->Classe = "Teste";
	$obj->Funcao = "Sem funcionalidade";

	$obj->verClass();

 ?>