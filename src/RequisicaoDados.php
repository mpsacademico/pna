<?php
class RequisicaoDados implements Requisicao{
	
	private $endereco;
	private $parametros;
	private $resposta;
	private $estado;
	
	public function __construct($endereco, $parametros){
		$this->setEndereco($endereco);
		$this->setParametros($parametros);
		$this->setResposta(null);
		$this->setEstado(false);
		try{
			$this->obterDados();
		}catch (Exception $e) {
			//echo 'Exceção capturada: ',  $e->getMessage(), "\n";
		}
	}
	
	public function obterDados(){
		$url = $this->getEndereco().$this->getParametros();
		$resposta = file_get_contents($url);
		if(!empty($resposta)){
			$this->setResposta($resposta);
			$this->setEstado(true);
		}else{
			$this->setResposta(null);
			$this->setEstado(false);
			throw new Exception('Obtenção de dados falhou!');
		}
	}
	
	public function exibirResposta(){
		echo $this->getResposta();
	}
	
	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getParametros(){
		return $this->parametros;
	}

	public function setParametros($parametros){
		$this->parametros = $parametros;
	}

	public function getResposta(){
		return $this->resposta;
	}

	public function setResposta($resposta){
		$this->resposta = $resposta;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}
	
}
?>