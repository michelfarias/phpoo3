<?php
	interface AlunoRespositorio {
		public function adicionar(Aluno $aluno);
		public function recuperar($cpf);
		public function remover(Aluno $aluno);
	}


class Aluno {
	public $cpf;

}

class AlunoRepositorioMySQL implements AlunoRespositorio {
	public function adicionar(Aluno $aluno){
		echo "Adicionando {$aluno->cpf} no MySQL";
	}

	public function recuperar($cpf){
		echo "Recuperando {$cpf} no MySQL";
	}

	public function remover(Aluno $aluno){
		echo "Removendo {$aluno->cpf} no MySQL";
	}
}

class AlunoRepositorioPostGreSQL implements AlunoRespositorio {
	public function adicionar(Aluno $aluno){
		echo "Adicionando {$aluno->cpf} no PostGreSQL";
	}


	public function recuperar($cpf){
		echo "Recuperando {$cpf} no PostGreSQL";
	}


	public function remover(Aluno $aluno){
		echo "Removendo {$aluno->cpf} no PostGreSQL";
	}
}

function obterRepositorio($repositorio){
	if($repositorio == "mysql"){
		return new AlunoRepositorioMySQL;
	}elseif($repositorio == "postgreesql"){
		return new AlunoRepositorioPostGreSQL;
	}
}

$aluno = new Aluno();
$aluno->cpf = "362.514";
$repositorio = obterRepositorio("postgreesql");
$repositorio->adicionar($aluno);
echo "<br>";
$repositorio->recuperar($aluno->cpf);
echo "<hr>";
$repositorio = obterRepositorio("mysql");
$repositorio->adicionar($aluno);
echo "<br>";
$repositorio->recuperar($aluno->cpf);


?>