<pre>
<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	require_once __DIR__."/autoload_static.php";
	
	$rd = new RequisicaoDados("http://localhost/maspt/api/previsao.php", "?cl=244&tr=json&ca=44");
	
	//header("Location: previsao.php?cidade=244");
	die();
	//echo "Bem-vindo ao Customizador!";
?>
</pre>