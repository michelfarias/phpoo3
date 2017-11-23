<?php
function __autoload($class){
	print_r($class);

	if(file_exists("{$class}.php")){
		require("{$class}.php");
	}else{
		echo "Erro na inclusao da classe";
	}
}

$conta = new Conta();
?>