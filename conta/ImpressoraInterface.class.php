<?php
	class Impressora
	{
		public function imprimir(BaseDocumento $doc){
			$conteudo = $doc->getConteudo();
			echo $conteudo;
		}

	}


	interface BaseDocumento {
		public function getConteudo();
	}
	

	class Documento implements BaseDocumento
	{
		private $conteudo;

		public function __construct($conteudo){
			$this->conteudo = $conteudo;
		}

		public function getConteudo(){
			return $this->conteudo;
		}

	}

	class Planilha implements BaseDocumento 
	{
		private $conteudo;
		public function __construct(array $linhas){
			$this->conteudo = "";

			foreach($linhas as $linha){
				$this->conteudo .= $linha."<br>";
			}

		}

		public function getConteudo(){
			return $this->conteudo;
		}
	}


$documento = new Documento("4Linux");
$planilha = new Planilha(array("Php", "Html", "Css"));
$impressora = new Impressora();

$impressora->imprimir($documento);
echo "<hr>";
$impressora->imprimir($planilha);

?>