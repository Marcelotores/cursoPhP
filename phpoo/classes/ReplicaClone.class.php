<?php 

	/**
	* 
	*/
	class ReplicaClone {
		
		var $Tabela;
		var $AddQuery;
		var $Termos;
		var $Query;
		
		function __construct($Tabela, $AddQuery, $Termos)
		{
			$this->Tabela = $Tabela;
			$this->AddQuery = $AddQuery;
			$this->Termos = $Termos;
		}

		function setTermos($Termos) {
			$this->Termos = $Termos;
		}

		function tabela($Tabela)
		{
			$this->Tabela = $Tabela;
		}

		function Ler() {
			$this->Query = "SELECT * FROM {$this->Tabela} WHERE {$this->Termos} {$this->AddQuery}";
			echo "{$this->Query} <hr>";
		}


	}


 ?>