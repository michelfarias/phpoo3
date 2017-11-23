<?php
	require("autoloader.php");

	//use \DAO\PeriodoDAO\PeriodoDAO;
	use Model\Periodo\Periodo;

	
	//RETORNA TODOS RESULTADOS
	/*
	$periodos = new PeriodoDAO();
	foreach($periodos->all() as $periodo){
		print_r($periodo->getId());
		echo " - ";
		print_r($periodo->getDescricao());
		echo "<hr>";
	}*/

	
	//RETURNA 1 RESULTADO
	/*
	$periodoId = new PeriodoDAO();
	$periodo =  $periodoId->fetchId(1);
	echo $periodo->getId().' - '.$periodo->getDescricao().'<hr>';
	*/

	//INSERE PERIODO
	/*
	$periodoNovo = new Periodo(null,"Noturno novo");
	$cadastraPeriodo = new PeriodoDAO();
	$cadastraPeriodo->insert($periodoNovo);
	*/

	//ATUALIZAR PERIODO
	/*
	$atualizar = new PeriodoDAO();
	$atualizar->update(9,'Noturno novo update 2');
	*/

	//DELETAR PERIODO
	/*
	$periodoId = new PeriodoDAO();
	$periodo =  $periodoId->fetchId(7);

	$deletar = new PeriodoDAO();
	$deletar->delete($periodo);
	*/

	//SALVA OU ATUALIZA
	//$periodoNovo = new Periodo(10,"Noturno novo saveOuUpdate new 2");
	//$periodoNovo->saveOuUpdate();

	/*
	//DELETA
	$dao = new PeriodoDAO();
	$periodo =  $dao->fetchId(10);
	$periodo->remove();
	*/

	//LISTAR PERIODO BY ID
	//print_r(Periodo::find(5));

	//LISTAR TODOS PERIODOS
	//print_r(Periodo::all());
	foreach(Periodo::all() as $periodo){
		echo $periodo->getId();
		echo "<br>";
		echo $periodo->getDescricao();
		echo "<br>";
		echo "<br><hr>";
	}

?>