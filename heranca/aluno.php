<?php 

	require('inc/Config.inc.php');
	require('Interface/IAluno.php');

	$aluno = new Aluno('Marcelo', 'Ciencias da Computação');

	$aluno->formar();
	$aluno->matricular('Matemática');
	$aluno->formar();

	var_dump($aluno);

 ?>