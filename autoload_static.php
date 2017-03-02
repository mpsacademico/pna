<?php
$classes = array(
	"Requisicao" => "Requisicao.php",
	"RequisicaoDados" => "RequisicaoDados.php",
	"PrevisaoCompleta" => "PrevisaoCompleta.php",
	"Localidade" => "Localidade.php",
);
foreach ($classes as $classe => $arquivo){		
	require_once $arquivo;
}
?>