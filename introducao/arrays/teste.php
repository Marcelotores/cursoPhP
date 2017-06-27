<?php 

	header('Content-Type: text/html; charset=utf8');


	$colaboradores = [];

	$colaboradores[] = ['nome' => 'Marcelo', 'idade' => 22, 'peso' => 70.2];
	$colaboradores[] = ['nome' => 'Matheus', 'idade' => 15, 'peso' => 45.4];
	$colaboradores[] = ['nome' => 'Ivete', 'idade' => 39, 'peso' => 60.2];


	$arr = [];
	$arr = ['fruta' => 'marça', 'preco' => 34.3];	

	//extract($arr);

	var_dump(array_keys($arr));

	echo "<hr>";

	foreach ($colaboradores as $c) {
		print_r(array_keys($c));
	}

	

	echo "<hr>";

	print_r($colaboradores);

	echo "<hr>";

	echo $colaboradores[1]['nome'];


	echo "<hr>";


	foreach ($colaboradores as $c) {
		extract($c);
		echo "{$nome} tem {$idade} anos e pesa {$peso} Kg";
		echo "<br>";
	}

	echo "<hr>";

	foreach ($colaboradores as $c) {
		echo $c['nome']."     ";
		echo $c['idade']."     ";
		echo $c['peso']."";
		echo "<br>";
	}


	echo "<hr>";

	for ($i=0; $i < 2; $i++) { 
		echo $colaboradores[$i]['nome'];
		echo $colaboradores[$i]['idade'];
		echo $colaboradores[$i]['peso'];
		echo "<br>";
	}

	echo "<hr>";

	foreach ($colaboradores as $c) {
		echo $c['nome']."     ";
		echo $c['idade']."     ";
		echo $c['peso']."";
		break;
	}






	//var_dump($colaboradores);




 ?>

