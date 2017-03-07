<?php
class PrevisaoCompleta{
	
	private $localidade;
	private $condicaoAtual;
	private $previsaoAtual;
	private $previsaoSemanal;
	private $previsaoEstendida;
	private $atualizacao;
	
	public function __construct($pc){ 
		$this->lerDadosExternos($pc);
	}

	private function lerDadosExternos($pc){
		//pc - previsão completa (apptempo) do serviço de Previsão do Tempo do CPTEC/INPE
		$this->setLocalidade(new Localidade($pc["nome"], $pc["uf"], $pc["pais"]));
		$this->setAtualizacao($pc["atualizacao"]);
		if(isset($pc["metar"])){
			$m = $pc["metar"];
			$this->setCondicaoAtual(new condicaoAtual(
				    $m["data"],
				    $m["ico"],
				    $m["desc"],
				    $m["texto"],
				    $m["temp"],
				    $m["umidade"],
				    $m["dirvento"],
				    $m["velvento"],
				    $m["sentermica"],
				    $m["pressao"]
				)
			);
			
		}
		foreach($pc["previsao"] as $p){
			$this->previsaoSemanal[] = new Previsao(
				$p["dia"],
				$p["data"],
				$p["ico"],
				$p["desc"],
				$p["texto"],
				$p["min"],
				$p["max"],
				$p["prob"],
				$p["sunrise"],
				$p["sunset"],
				$p["uv"],
				$p["modelo"]
			);
		}
		if(count($this->getPrevisaoSemanal())==7){
			$this->setPrevisaoAtual($this->getPrevisaoSemanal()[0]);
			unset($this->previsaoSemanal[0]);
		}
		foreach($pc["estendida"] as $p){
			$this->previsaoEstendida[] = new PrevisaoEstendida(
				$p["dia"],
				$p["data"],
				$p["ico"],
				$p["desc"],
				$p["texto"],
				$p["min"],
				$p["max"],
				$p["prob"],
				$p["sunrise"],
				$p["sunset"]
			);
		}		
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
