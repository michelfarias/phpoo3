<?php
require_once("conexao.php");



try{

	$con->BeginTransaction();

	$sql = "INSERT INTO tb_alunos ( nome , email , senha , cpf , rg ) VALUES ('Teste789','teste789@teste', '123','123','123')";

	$result = $con->exec($sql);



	$sql = "INSERT INTO tb_alunos ( nome , email , senha , cpf , rg ) VALUES ('Teste789','teste712@teste', '123','1234','123')";

	$result = $con->exec($sql);




	$sql = "INSERT INTO tb_alunos ( nome , email , senha , cpf , rg ) VALUES ('Teste789','teste1@teste', '123','12345','123')";

	$result = $con->exec($sql);




	print_r($result);

	$con->commit();

}catch(PDOException $e){
	$con->rollback();
	echo "Erro: ".$e->getMessage();
}

?>