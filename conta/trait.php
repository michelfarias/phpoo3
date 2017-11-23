<?php
trait LogTrait{
	public function log($message){
		echo "Registrando log {$message}";
	}
}

class Z{

}

class X extends Z{
	use LogTrait;

	public function save(){
		$this->log("Salvando!!!");
	}
}

$trait = new X();
$trait->save();


?>