<?php

class ContaBanco {
	public $numConta;
	protected $tipo;
	protected $dono;
	private $saldo=0;
	private $status;

	public function abrirConta($tipo,$dono,$valor){
		$this->tipo = $tipo;
		$this->dono = $dono;
		$this->saldo = $valor;
		$this->status = true;
	}

	public function fecharConta(){
		if($this->saldo < 1){
			$this->status=false;
		}else{
			echo "Erro ao fechar conta, remova todo o saldo";
		}
	}

	public function depositar($valor){
		$this->saldo += $valor;
	}

	public function sacar($valor){
		if($this->saldo >= $valor){
			$this->saldo -= $valor;
		}else{
			echo "Erro o valor do seu saque eh maior que o saldo.";
		}
	}

	public function pagarMensal($tipo){
		if($tipo == "cc"){
			if($this->saldo > 20){
				$this->saldo -= 20;
			}else{
				echo "Seu saldo e menor que 20 (ERRO) faca um deposito de 20 reais ou mais.";
			}
			
		}elseif($tipo = "cp"){
			
			if($this->saldo > 12){
				$this->saldo -= 12;
			}else{
				echo "Seu saldo e menor que 12 (ERRO) faca um deposito de 12 reais ou mais.";
			}
		}
	}


	public function getNumConta(){
		return $this->numConta;
	}


	public function setNumConta($numConta){
		$this->numConta = $numConta;
	}

	public function getStatus(){
		return $this->status;
	}


	public function setStatus($status){
		$this->status = $status;
	}

}

$contaCorrente = new ContaBanco();
$contaCorrente->setNumConta(rand(1,100));
//echo $contaCorrente->getNumConta();
$contaCorrente->abrirConta("cc","Michel",100);
echo ("<pre>");
print_r($contaCorrente);
$contaCorrente->sacar(80);
print_r($contaCorrente);
$contaCorrente->depositar(180);
print_r($contaCorrente);
$contaCorrente->fecharConta();
print_r($contaCorrente);
$contaCorrente->sacar(200);
print_r($contaCorrente);
$contaCorrente->fecharConta();
print_r($contaCorrente);
$contaCorrente->setStatus(true);
print_r($contaCorrente);
$contaCorrente->pagarMensal("cc");
echo ("</pre>");
?>