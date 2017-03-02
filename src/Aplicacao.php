<?php
class Aplicacao{
	
	public function gerar(){
	
		$erros = array();
		
		$cl = isset($_GET['cidade']) ? $_GET['cidade'] : NULL;
		if(is_null($cl) || empty($cl)){
			$erros[] = "Nenhuma cidade foi informada";
			require_once("templates/erro_generico.php");
			die();
		}
		
		define("CA", "C5E3539121C4944F2BBE097B425EE774");
		$cl = isset($_GET['cidade']) ? $_GET['cidade'] : NULL;
		$previsao = file_get_contents("http://localhost/maspt/api/previsao.php?cl=".$cl."&tr=json&ca=".CA);
		$p = json_decode($previsao, TRUE);
		require_once("templates/pagina_web.php");

	}
}
?>
