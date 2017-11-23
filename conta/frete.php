<?php
interface Frete 
{
	public function calcular($preco);

}

class FreteNormal implements Frete {
	public function calcular($preco){
		return $preco+10;
	}
}

class FreteExpresso implements Frete {
	public function calcular($preco){
		return $preco+12;
	}	
}

class FreteTurbo implements Frete {
	public function calcular($preco){
		return $preco+20;
	}
}

class Pedido
{
	public $preco;
	public $frete;

	public function __construct($preco,Frete $frete){
		$this->preco = $preco;
		$this->frete = $frete;
	}

	public function obterTotal(){
		return $this->frete->calcular($this->preco);
	}
}


$pedido = new Pedido(50, new FreteExpresso());
echo $pedido->obterTotal();
?>