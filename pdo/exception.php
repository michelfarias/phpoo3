<?php
require_once("conexao.php");

	///nome  |    tipo    | carga_horaria |       requisitos

$nome = "Banco att";
$tipo = "Presencial";
$carga_horaria =  '120';
$requisitos = "Javascript e Logica de Programacao";

$sql = "UPDATE tb_cursos SET nome=':nome', tipo=':tipo', carga_horaria=':carga_horaria', requisitos=':requisitos' WHERE id=15";

//var_dump($sql);

try{

	$stmt = $con->prepare($sql);
	$stmt->bindParam(':nome', $nome);
	$stmt->bindParam(':tipo', $tipo);
	$stmt->bindParam(':carga_horaria', $carga_horaria);
	$stmt->bindParam(':requisitos', $requisitos);
	$result = $stmt->execute();

	var_dump($result);

}catch(PDOException $e){
	echo "Erro: ".$e->getMessage();
}

?>