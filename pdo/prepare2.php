<?php
require_once("conexao.php");
echo "<pre>";

$nome = "Banco de dados";
$tipo = "Presencial";
$carga_horaria =  115;
$requisitos = "Banco";

$sql = "INSERT INTO tb_cursos(nome,tipo,carga_horaria,requisitos) VALUES(:nome,:tipo,:carga_horaria,:requisitos)";

//var_dump($sql);

//$result = $con->exec($sql);
//var_dump($result);

$stmt = $con->prepare($sql);
//$stmt->bindParam(':nome', $nome);
//$stmt->bindParam(':tipo', $tipo);
//$stmt->bindParam(':carga_horaria', $carga_horaria);
//$stmt->bindParam(':requisitos', $requisitos);

$values = [
':nome' => $nome,
':tipo' => $tipo,
':carga_horaria' => $carga_horaria,
':requisitos' => $requisitos];

$result = $stmt->execute($values);

var_dump($result);
?>