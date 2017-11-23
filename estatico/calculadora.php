<?php
class Calculadora {
	public static function somar($a, $b){
		return $a + $b;
	}

	public static function subtrair($a, $b){
		return $a - $b;
	}

	public static function multiplicar($a, $b){
		return $a * $b;
	}

	public static function dividir($a, $b){
		return $a / $b;
	}

}

echo Calculadora::subtrair(10,20);

?>