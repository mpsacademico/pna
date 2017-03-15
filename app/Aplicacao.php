<?php
require_once __DIR__."/config.php";
require_once __DIR__."/autoload_static.php";
class Aplicacao{
	
	public function executar(){
	
		$erros = array();
		$tps = array("web", "texto");
		
		$cl = isset($_GET['cidade']) ? $_GET['cidade'] : NULL; //1
		$tp = isset($_GET['pagina']) ? $_GET['pagina'] : NULL; //0		
		$co = isset($_GET['colorido']) ? $_GET['colorido'] : NULL; //0
		//$ac = isset($_GET['contraste']) ? $_GET['constraste'] : NULL; //0

		$busca = isset($_GET['busca']) ? $_GET['busca'] : NULL; //0

		if(!is_null($busca)){			
			$rd = new RequisicaoDados("http://localhost/lobrasil/index.php", "?q=".urlencode($busca));			
			$d = array("q"=>$busca, "c"=>json_decode($rd->getResposta(), true));
			$this->renderizar("pagina_inicial.php", $d);			
		}
		
		if(is_null($tp) || empty($tp) || !in_array($tp, $tps)){
			$tp = "web";
		}
		
		if(is_null($cl)){			
			$this->renderizar("pagina_inicial.php");			
		}elseif(empty($cl)){
			$this->abortar("Nenhuma cidade foi informada");
		}		
		
		$rd = new RequisicaoDados("http://localhost/maspt/api/previsao.php", "?cl=".$cl."&tr=json&ca=".CA);	
		
		if($rd->getResposta()=="false"){
			$this->abortar("Não foi possível exibir a previsão");
		}

		$p = $pc = json_decode($rd->getResposta(), true);	
		$pc = new PrevisaoCompleta($pc);
		
		$lo = $pc->getLocalidade();
		$ca = $pc->getCondicaoAtual();
		$pa = $pc->getPrevisaoAtual();
		$ps = $pc->getPrevisaoSemanal();
		$pe = $pc->getPrevisaoEstendida();

		if(!is_null($tp)){
			if($tp=="web"){
				require_once("templates/pagina_web.php");		
			}elseif($tp=="texto"){
				require_once("templates/texto_formatado.php");	
			}
		}else{
			require_once("templates/pagina_web.php");		
		}
		
	}

	public function renderizar($template, $d = NULL){
		require_once("templates/".$template); //problema com escopo de variáveis
		die();
	}

	public function abortar($erros, $tipo = "generico"){
		require_once("templates/erro_".$tipo.".php");
		die();
	}

}
?>
