<pre>
<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	require_once __DIR__."/src/autoload_static.php";

	$app = new Aplicacao();
	
	$rd = new RequisicaoDados("http://localhost/maspt/api/previsao.php", "?cl=1083&tr=json&ca=44");	
	$pc = json_decode($rd->getResposta(), true);	
	$pc = new PrevisaoCompleta($pc);
	var_dump($pc);
	//header("Location: previsao.php?cidade=244");
	die();
	//echo "Bem-vindo ao Customizador!";
?>
</pre>
