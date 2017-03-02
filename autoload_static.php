<?php
$classes = array(
	"Requisicao" => "Requisicao.php",
	"RequisicaoDados" => "RequisicaoDados.php"
);
foreach ($classes as $classe => $arquivo){		
	require_once $arquivo;
}
?>