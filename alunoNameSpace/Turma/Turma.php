<?php
namespace Escola\Turma;

use Escola\Aluno\Aluno;
use Escola\Matricula\Matricula;

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
?>