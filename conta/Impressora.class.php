<?php
	class Impressora
	{
		public function imprimir(BaseDocumento $doc){
			$conteudo = $doc->getConteudo();
			echo $conteudo;
		}

	}

	abstract class BaseDocumento {
		abstract public function getConteudo();
	}

	class Documento extends BaseDocumento
	{
		private $conteudo;

		public function __construct($conteudo){
			$this->conteudo = $conteudo;
		}

		public function getConteudo(){
			return $this->conteudo;
		}

	}

	class Planilha extends BaseDocumento 
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
$planilha = new Planilha(array("Php", "Html"));
$impressora = new Impressora();
$impressora->imprimir($documento);
echo "<hr>";
$impressora->imprimir($planilha);

?>