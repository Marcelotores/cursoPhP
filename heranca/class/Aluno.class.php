<?php 
	
	class Aluno implements IAluno{

		public $Nome;
		public $Curso;
		public $Formacao;

		function __construct($Nome, $Curso) {
			$this->Nome = $Nome;
			$this->Curso = $Curso;
			$this->Formacao = array();
		}

		public function formar() {
			$this->Formacao[] = $this->Curso;
			echo "<hr> O aluno {$this->Nome} acaba de se formar em {$this->Curso}<hr>";
		}

		public function matricular($Curso) {
			$this->Curso = $Curso;
			echo "<hr> Aluno acaba de se matricular em {$Curso}<hr>";
		}
		
	}

 ?>