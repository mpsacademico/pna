<?php
class PrevisaoEstendida extends PrevisaoTempo{
	
	public function __construct($diaSemana, $data, $icone, $descricao, $texto, $minima, $maxima, $probChuva, $nascerSol, $porSol){
		parent::__construct($diaSemana, $data, $icone, $descricao, $texto, $minima, $maxima, $probChuva, $nascerSol, $porSol);		
	}

}
?>
