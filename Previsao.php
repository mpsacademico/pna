<?php
class Previsao extends PrevisaoTempo{
	
	private $uv;
	private $modelo;

	public function __construct($diaSemana, $data, $icone, $descricao, $texto, $minima, $maxima, $probChuva, $nascerSol, $porSol, $uv, $modelo){
		parent::__construct($diaSemana, $data, $icone, $descricao, $texto, $minima, $maxima, $probChuva, $nascerSol, $porSol);
		$this->uv = $uv;
		$this->modelo = $modelo;
	}

	public function getUv(){
		return $this->uv;
	}

	public function setUv($uv){
		$this->uv = $uv;
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

}
?>