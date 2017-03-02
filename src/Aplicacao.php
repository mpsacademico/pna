<?php
class Aplicacao{
	
	public function executar(){
	
		$erros = array();
		
		$cl = isset($_GET['cidade']) ? $_GET['cidade'] : NULL;
		$tp = isset($_GET['pagina']) ? $_GET['pagina'] : NULL;
		if(is_null($cl) || empty($cl)){
			$erros[] = "Nenhuma cidade foi informada";
			require_once("templates/erro_generico.php");
			die();
		}

		
		$cl = isset($_GET['cidade']) ? $_GET['cidade'] : NULL;
		$rd = new RequisicaoDados("http://localhost/maspt/api/previsao.php", "?cl=".$cl."&tr=json&ca=".CA);	
		$p = $pc = json_decode($rd->getResposta(), true);	
		$pc = new PrevisaoCompleta($pc);
		

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
}
?>
