<?php
	require("autoloader.php");

	use Escola\Model\Aluno\Aluno;
	use Escola\Model\Matricula\Matricula;
	use Escola\Model\Turma\Turma;
	use Escola\Src\Conexao\Conexao;


	$con = Conexao::getInstance();

	var_dump($con);






?>