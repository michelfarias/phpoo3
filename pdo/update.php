<?php
require_once("conexao.php");

	///nome  |    tipo    | carga_horaria |       requisitos

$nome = "Jquery";
$tipo = "Presencial";
$carga_horaria =  120;
$requisitos = "Javascript e Logica de Programacao";

$sql = "UPDATE tb_cursos SET nome='{$nome}', tipo='{$tipo}', carga_horaria='{$carga_horaria}', requisitos='{$requisitos}' WHERE id=11";

//var_dump($sql);

$result = $con->exec($sql);
var_dump($result);

?>