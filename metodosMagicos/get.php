<?php
class Pessoa{
	public $atributos = [];
	//private $nome;
	//private $valor;

	public function __get($propriedades){
		return $this->atributos[$propriedades];
	}

	/*public function __set(){
		$this->atributos[$nome] = $valor;
	}*/

	public function __isset($propriedades){
		echo "Chamou isset p/ {$propriedades}";
		//return $prop;
	}
}


$joao = new Pessoa();

if(isset($joao->nome)){
	echo $joao->nome;
}else{
	echo "<br>SEM NOME";
}

//$joao->nome = "Joao";
//$joao->idade = 44;

//echo $joao->nome;

?>