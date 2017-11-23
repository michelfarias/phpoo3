<?php
class Programa{
	public $nome;
	public static $contador;

	public function __construct($nome){
			$this->nome = $nome;
			self::$contador++;
	}
}

$futebol = new Programa("Futebol");
$natacao = new Programa("Natacao");
$volei = new Programa("Volei");

echo Programa::$contador;
?>