<?php
require_once("conexao.php");
echo "<pre>";
//nome  |    tipo    | carga_horaria |       requisitos


$sql = "SELECT * FROM tb_cursos ORDER BY id";
$result = $con->query($sql);

//var_dump($result->fetchALL(PDO::FETCH_ASSOC));

foreach($result->fetchALL(PDO::FETCH_ASSOC) as $cursos){
	print_r($cursos);
}

?>