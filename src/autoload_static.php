<?php
$classes = array(
	"Requisicao" => "Requisicao.php",
	"RequisicaoDados" => "RequisicaoDados.php",
	"PrevisaoCompleta" => "PrevisaoCompleta.php",
	"Localidade" => "Localidade.php",
	"PrevisaoTempo" => "PrevisaoTempo.php",
	"Previsao" => "Previsao.php",
	"PrevisaoEstendida" => "PrevisaoEstendida.php",
	"CondicaoAtual" => "CondicaoAtual.php",
	"Aplicacao" => "Aplicacao.php"
);
foreach ($classes as $classe => $arquivo){
	require_once $arquivo;
}
?>