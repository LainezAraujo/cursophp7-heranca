<?php 

class Documento{

	private $numero;

	public function getNumero(){

		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

}

class CPF extends Documento{

	public function validar():bool{
		//validação do CPF
		$numeroCPF = $this->getNumero();	
		//não tem acesso direto ao $numero. 

		return true;
	}

}

$doc= new CPF;
$doc->setNumero("111222333-12");
var_dump($doc->validar());

echo "<br/>";
echo $doc->getNumero();
 ?>
