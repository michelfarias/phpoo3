<?php 

echo "<pre>";

class Conta
{
	private $saldo = 0;
	private $titular;
	private $numero;
	private $agencia;

	public function __call($metodo, array $params){

		$atributo 	= lcfirst(substr($metodo, 3));		
		$acao		= substr($metodo,0,3);

		switch ($acao) {
			case 'get':
				return $this->$atributo;
				break;
			case 'set':
				$this->$atributo = $params[0];
				break;
			default:
				throw new InvalidArgumentException("Método {$metodo} Inválido");
				break;
		}
	}
}

try {
	$novaConta = new Conta();
	$novaConta->setNumero('12345-x');
	$novaConta->setTitular('4Linux');
	// $novaConta->verSaldo();
	$novaConta->setNome('Lucas');
	// echo $novaConta->getNome();
	var_dump($novaConta);

	echo "Número da Conta: {$novaConta->getNumero()}";
	echo "<br>";
	echo "Saldo: {$novaConta->getSaldo()}";

} catch (Exception $e) {
	echo $e->getMessage();
}