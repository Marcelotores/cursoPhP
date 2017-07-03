<?php 

	require('classes/InteracaoObjetos.class.php');
	require('classes/InteracaoClasses.class.php');


	$marcelo = new InteracaoClasses('Marcelo', 22, 'Professor', 1000);
	$marcos = new InteracaoClasses('Marcos', 30, 'Estudante', 200);

	$empresa = new InteracaoObjetos('MSeven');

	$empresa->contratar($marcelo, 'Web Master', 2000);

	$empresa->pagar();

	$empresa->promover('Gerente de Projetos', 6000);

	$empresa->pagar();

	//$empresa->demitir(4000);

	$empresa->contratar($marcos, 'Web Design', 1500);

	$empresa->pagar();

	$empresa->funcionario($marcelo);

	$empresa->pagar();

	var_dump($marcelo, $marcos,  $empresa);

 ?>