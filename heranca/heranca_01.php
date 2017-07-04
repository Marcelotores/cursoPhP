<?php 
	require('inc/Config.inc.php');

	$pessoa = new Pessoa('Marcelo', 22);
	$pessoa->formar('Engenharia de Software');
	$pessoa->formar('PhP');
	$pessoa->formar('Laravel');
	$pessoa->envelhecer();
	var_dump($pessoa);
	echo "<hr>";
	$pessoa->verPessoa();


	echo "<hr>";

	$empresa = new PessoaJuridica('Marcelo', 22, 'Mseven');
	$empresa->contratar('José');
	$empresa->formar('Java');
	$empresa->formar('Html');
	$empresa->formar('CSS');
	$empresa->envelhecer();
	$empresa->contratar('Marcio');
	$empresa->contratar('Maria');

	var_dump($empresa);

	echo "<hr>";

	$empresa->verPessoa();

	echo "<hr>";

	$empresa->verEmpresa();

 ?>