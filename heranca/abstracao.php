<?php 
	require('inc/Config.inc.php');

	// $obj = new Conta('Marcelo', 0);
	// $obj2 = new Conta('João', 0);

	// var_dump($obj);

	// $obj->depositar(200);

	// $obj->sacar(30);

	// $obj->sacar(80);

	// $obj->depositar(200);

	// $obj->sacar(100);	

	// echo "Saldo do {$obj2->Cliente}: {$obj2->Saldo}<br>";
	// echo "Saldo do {$obj->Cliente}: {$obj->Saldo}<br>";

	// $obj->transferir(20, $obj2);

	// echo "Saldo do {$obj2->Cliente}: {$obj2->Saldo}<br>";
	// echo "Saldo do {$obj->Cliente}: {$obj->Saldo}<br>";

	// $obj->transferir(20, $obj);

	$obj = new ContaCorrente('Marcelo', 100, 1000);

	var_dump($obj);

	$obj->sacar(2000);

	$obj->extrato();

	$obj->ver();

	$obj2 = new ContaPoupanca('Marcos', 0);
	$obj2->depositar(100);


 ?>