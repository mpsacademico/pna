<?php
class Localidade{
	
	private $nome;
	private $uf;
	private $pais;
	
	public function __construct($nome, $uf, $pais){
		$this->setNome($nome);
		$this->setUf($uf);
		$this->setPais($pais);
	}
	
	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getUf(){
		return $this->uf;
	}

	public function setUf($uf){
		$this->uf = $uf;
	}

	public function getPais(){
		return $this->pais;
	}

	public function setPais($pais){
		$this->pais = $pais;
	}
	
}
?>