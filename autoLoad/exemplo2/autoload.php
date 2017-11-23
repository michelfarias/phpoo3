<?php
function __autoload($class){
	if(file_exists("{$class}/{$class}.php")){
		require_once("{$class}/{$class}.php");
	}else{
		echo "Erro ao incluir a classe {$class}";
	}
}
?>