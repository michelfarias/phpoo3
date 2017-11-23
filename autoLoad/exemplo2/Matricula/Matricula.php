<?php
//namespace Escola\Matricula;

//use Escola\Aluno\Aluno;
//use Escola\Turma\Turma;

class Matricula{
	private $aluno;
	private $turma;
	private $nota1;
	private $nota2;

	public function __construct(Aluno $aluno,Turma $turma){
		$this->setAluno($aluno);
		$this->setTurma($turma);
	}

	public function __toString(){
		return "Matricula: Para usar essa clase eh necessario instanciar!";
	}

	public function getAluno(){
		return $this->aluno;
	}

	public function setAluno($aluno){
		$this->aluno = $aluno;
	}

	public function getTurma(){
		return $this->turma;
	}

	public function setTurma($turma){
		$this->turma = $turma;
	}

	public function getNota1(){
		return $this->nota1;
	}

	public function setNota1($nota1){
		$this->nota1 = $nota1;
	}


	public function getNota2(){
		return $this->nota2;
	}

	public function setNota2($nota2){
		$this->nota2 = $nota2;
	}

	public function verificarAprovado(){
		if(($this->nota1+$this->nota2/2) > 5){
			echo "Aprovado";
		}else{
			echo "Reprovado";
		}
	}

}

?>