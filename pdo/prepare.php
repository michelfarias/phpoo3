<?php
require_once("conexao.php");
echo "<pre>";

$nome = "Node.js";
$tipo = "Presencial";
$carga_horaria =  40;
$requisitos = "Javascript e Logica de Programacao";

$sql = "INSERT INTO tb_cursos(nome,tipo,carga_horaria,requisitos) VALUES(:nome,:tipo,:carga_horaria,:requisitos)";

//var_dump($sql);

//$result = $con->exec($sql);
//var_dump($result);

$stmt = $con->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':tipo', $tipo);
$stmt->bindParam(':carga_horaria', $carga_horaria);
$stmt->bindParam(':requisitos', $requisitos);

$result = $stmt->execute();

var_dump($result);
?>