<?php
class Pessoa{
	private $nome;
	private $genero;
	const GENEROS = ['M' => 'Masculino', 'F' => 'Feminino'];

	public function __construct($nome, $genero){
		$this->nome = $nome;
		$this->genero = $genero;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getGenero(){
		return self::GENEROS[$this->genero];
	}
}

$michel = new Pessoa("Michel","M");
//print_r($michel->getGenero());
print_r(Pessoa::GENEROS);
?>