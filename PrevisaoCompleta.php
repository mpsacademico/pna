<?php
class PrevisaoCompleta{
	
	private $localidade;
	private $condicaoAtual;
	private $previsaoAtual;
	private $previsaoSemanal;
	private $previsaoEstendida;
	private $atualizacao;
	
	public function __construct($pc){ //previsão completa do serviço do CPTEC/INPE
		$this->setLocalidade(new Localidade($pc["nome"], $pc["uf"], $pc["pais"]));
		$this->setAtualizacao($pc["atualizacao"]);
	}
	
	public function getLocalidade(){
		return $this->localidade;
	}

	public function setLocalidade($localidade){
		$this->localidade = $localidade;
	}

	public function getCondicaoAtual(){
		return $this->condicaoAtual;
	}

	public function setCondicaoAtual($condicaoAtual){
		$this->condicaoAtual = $condicaoAtual;
	}

	public function getPrevisaoAtual(){
		return $this->previsaoAtual;
	}

	public function setPrevisaoAtual($previsaoAtual){
		$this->previsaoAtual = $previsaoAtual;
	}

	public function getPrevisaoSemanal(){
		return $this->previsaoSemanal;
	}

	public function setPrevisaoSemanal($previsaoSemanal){
		$this->previsaoSemanal = $previsaoSemanal;
	}

	public function getPrevisaoEstendida(){
		return $this->previsaoEstendida;
	}

	public function setPrevisaoEstendida($previsaoEstendida){
		$this->previsaoEstendida = $previsaoEstendida;
	}
	
	public function getAtualizacao(){
		return $this->atualizacao;
	}

	public function setAtualizacao($atualizacao){
		$this->atualizacao = $atualizacao;
	}
	
}
?>