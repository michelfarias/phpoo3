<?php
class Aluno {
	private $nome;
	private $email;

	public function __construct($nome, $email){
		$this->setNome($nome);
		$this->setEmail($email);
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}
}


class Turma {
	private $curso;
	private $periodo;

	public function __construct($curso, $periodo){
		$this->setCurso($curso);
		$this->setPeriodo($periodo);
	}

	public function getCurso(){
		return $this->curso;
	}

	public function setCurso($curso){
		$this->curso = $curso;
	}


	public function getPeriodo(){
		return $this->periodo;
	}

	public function setPeriodo($periodo){
		$this->periodo = $periodo;
	}
}


class Matricula{
	private $aluno;
	private $turma;
	private $nota1;
	private $nota2;

	public function __construct(Aluno $aluno,Turma $turma){
		$this->setAluno($aluno);
		$this->setTurma($turma);
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


$michel = new Aluno("Michel","michel@design.com");
$turma 	= new Turma("Turma 10", "Noturno");
$matricula = new Matricula($michel, $turma);


print_r($matricula->getAluno()->getNome());
echo "<br>";
print_r($matricula->getAluno()->getEmail());
echo "<br><br>";
print_r($matricula->getTurma()->getCurso());
echo "<br>";
print_r($matricula->getTurma()->getPeriodo());



?>