<?php
require_once("conexao.php");

	///nome  |    tipo    | carga_horaria |       requisitos


$sql = "DELETE FROM tb_cursos WHERE id=11";

//var_dump($sql);

$result = $con->exec($sql);
var_dump($result);

?>