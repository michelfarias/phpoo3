<?php
class Caneta{
	private $quantidade;
	private $cor;
	public static $tamanho = 10;


	public function __construct($cor, $quantidade=0){
		$this->cor = $cor;
		$this->quantidade = $quantidade;
	}

	public function getTamanho(){
		return self::$tamanho;
	}

}

echo "<pre>";
$azul = new Caneta("Azul");
var_dump($azul->getTamanho());
Caneta::$tamanho = 50;
$preta = new Caneta("Preta");
var_dump($preta->getTamanho());
?>