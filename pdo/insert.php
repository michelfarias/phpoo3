<?php
	require_once("conexao.php");

	///nome  |    tipo    | carga_horaria |       requisitos

$nome = "Node.js";
$tipo = "Presencial";
$carga_horaria =  40;
$requisitos = "Javascript e Logica de Programacao";

$sql = "INSERT INTO tb_cursos(nome,tipo,carga_horaria,requisitos) VALUES('{$nome}','{$tipo}','{$carga_horaria}','{$requisitos}')";

//var_dump($sql);

$result = $con->exec($sql);
var_dump($result);

?>