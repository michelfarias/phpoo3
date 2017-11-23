<?php
class Pessoa{
	public function __call($metodo, $parametros){
		print_r($metodo);
		echo "<hr>";
		print_r($parametros);
	}

}

$joao = new Pessoa();
//var_dump($joao);
echo $joao->getNome();
$joao->setNome("Joao");
?>