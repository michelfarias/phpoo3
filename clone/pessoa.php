<?php
class Pessoa{
	public $nome;
}

$joao = new Pessoa();
$joao->nome = "Joao";
$jose = $joao;
$jose->nome = "Jose";

echo "<pre>";
var_dump($joao);
var_dump($jose);
echo "<hr>";

$michel = new Pessoa();
$michel->nome = "Michel";
$maria = clone $michel;
var_dump($maria);
var_dump($michel);
echo "<hr>";
$maria->nome = "Maria";
var_dump($maria);
var_dump($michel);
?>