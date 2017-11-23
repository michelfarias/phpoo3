<?php
class Titulo{
	private $data = [];

	public function __get($prop){
		if($prop == "valor"){
			return $this->getValor();
		}else{
			return $this->data[$prop];
		}
	}

	public function __set($prop, $val){
		if($prop == "dt_vencimento"){
			$this->setVencimento($val);
		}else{
			$this->data[$prop] = $val;
		}
	}

	private function getValor(){
		$venc = new DateTime($this->data["dt_vencimento"]);
		$now = new DateTime("now");

		if($venc < $now){
			$interval = $venc->diff($now);
			$days = $interval->days;
			$novoValor = $this->data["valor"] + $this->data["multa"];
			$novoValor += $this->data["valor"] * $this->data["juros"] * $days;
			return $novoValor;
		}else{
			return $this->data["valor"];
		}

	}

	private function setVencimento($val){
		$partes = explode("-",$val);
		
		if(count($partes) === 3){
			if(checkdate($partes[1],$partes[2],$partes[0])){
				$this->data['dt_vencimento'] = $val;
			}else{
				throw new Exception("Data {$val} eh inválida!");
			}
		}else{
				throw new Exception("Data {$val} eh inválida!");
			}
	}




}

try{
	$titulo = new Titulo();
	$titulo->dt_vencimento = "2017-10-14";
	$titulo->multa = 2;
	$titulo->juros = 0.01;
	$titulo->valor = 1200;

	echo $titulo->dt_vencimento;
	echo "<br>";
	echo "O valor eh: ".number_format($titulo->valor, 2,',','.');


}catch(Exception $e){
	echo $e->getMessage();
}




?>