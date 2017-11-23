<?php
abstract class ContaBanco {
	public $numConta;
	protected $tipo;
	protected $dono;
	private $saldo=0;
	private $status;

	abstract function abrirConta($tipo,$dono);
	abstract function fecharConta();
	abstract function depositar($valor);
	abstract function sacar($valor);
	abstract function pagarMensal();

	public function getNumConta(){
		return $this->numConta;
	}


	public function setNumConta($numConta){
		$this->numConta = $numConta;
	}

	public function getTipo(){
		return $this->tipo;
	}


	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function getDono(){
		return $this->dono;
	}


	public function setDono($dono){
		$this->dono = $dono;
	}

	public function getSaldo(){
		return $this->saldo;
	}


	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

	public function getStatus(){
		return $this->status;
	}


	public function setStatus($status){
		$this->status = $status;
	}


}

final class Poupanca extends ContaBanco
{
	public function abrirConta($tipo,$dono){
		$this->setTipo($tipo);
		$this->setDono($dono);
		$this->setStatus(true);
		$this->depositar(150);
	}

	public function fecharConta(){
		if($this->getStatus()){
			if($this->getSaldo() < 1){
				$this->setStatus(false);
			}else{
				echo "Erro ao fechar conta, remova todo o saldo";
			}
		}else{
			echo "Sua conta esta fechada!";
		}
	}

	public function depositar($valor){
		$this->setSaldo($this->getSaldo()+$valor);
	}

	public function sacar($valor){
		if($this->getSaldo() >= $valor){
			$this->setSaldo($this->getSaldo()-$valor);
		}else{
			echo "Erro o valor do seu saque eh maior que o saldo.";
		}
	}

	public function pagarMensal(){
		if($this->getSaldo() > 12){
				$this->setSaldo($this->getSaldo() - 12);
			}else{
				echo "Seu saldo e menor que 12 (ERRO) faca um deposito de 12 reais ou mais.";
			}
	}
}

final class Corrente extends ContaBanco
{
	public function abrirConta($tipo,$dono){
		$this->setTipo($tipo);
		$this->setDono($dono);
		$this->setStatus(true);
		$this->depositar(50);
	}

	public function fecharConta(){
		if($this->getStatus()){
			if($this->getSaldo() < 1){
				$this->setStatus(false);
			}else{
				echo "Erro ao fechar conta, remova todo o saldo";
			}
		}else{
			echo "Sua conta esta fechada!";
		}
	}

	public function depositar($valor){
		$this->setSaldo($this->getSaldo()+$valor);
	}

	public function sacar($valor){
		if($this->getSaldo() >= $valor){
			$this->setSaldo($this->getSaldo()-$valor);
		}else{
			echo "Erro o valor do seu saque eh maior que o saldo.";
		}
	}

	public function pagarMensal(){
		if($this->getSaldo() > 20){
				$this->setSaldo($this->getSaldo() - 20);
			}else{
				echo "Seu saldo e menor que 12 (ERRO) faca um deposito de 12 reais ou mais.";
			}
	}

}


$michelPoupanca = new Poupanca();
$michelPoupanca->abrirConta("cp", "Michel Farias");
//print_r($michelPoupanca);
$michelPoupanca->sacar(10);
//print_r($michelPoupanca);
$michelPoupanca->pagarMensal();
//print_r($michelPoupanca);


$michelCorrente = new Corrente();
$michelCorrente->abrirConta("cc", "Michel Farias");
//print_r($michelPoupanca);
$michelCorrente->sacar(10);
//print_r($michelPoupanca);
$michelCorrente->pagarMensal();
//print_r($michelCorrente);
$michelCorrente->depositar(100);
//print_r($michelCorrente);
$michelCorrente->sacar(110);
$michelCorrente->fecharConta();
//echo $michelCorrente->getSaldo();
$michelCorrente->sacar(10);
//echo $michelCorrente->getSaldo();
$michelCorrente->fecharConta();
print_r($michelCorrente);

?>