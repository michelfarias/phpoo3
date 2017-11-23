<?php
namespace Escola\Aluno;

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







?>