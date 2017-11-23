<?php
	/*require("Aluno/Aluno.php");
	require("Matricula/Matricula.php");
	require("Turma/Turma.php");
*/

	require("autoloader.php");

	use Escola\Model\Aluno\Aluno;
	use Escola\Model\Matricula\Matricula;
	use Escola\Model\Turma\Turma;


$michel = new Aluno("Michel","michel@design.com");
$turma 	= new Turma("Turma 10", "Noturno");
$matricula = new Matricula($michel, $turma);

echo $matricula;
echo "<br><br>";
print_r($matricula->getAluno()->getNome());
echo "<br><br>";
print_r($matricula->getAluno()->getEmail());
echo "<br><br>";
print_r($matricula->getTurma()->getCurso());
echo "<br><br>";
print_r($matricula->getTurma()->getPeriodo());



?>