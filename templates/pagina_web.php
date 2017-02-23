<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Previsão para <?php echo $p["nome"]; ?> - CPTEC/INPE</title>		
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
	</head>
	<body>	
		<header>
			<h1><?php echo $p["nome"]; ?> - <?php echo $p["uf"]; ?></h1>
		</header>
		<?php $previsao_t = $p["previsao"]; ?> 
		<?php foreach($previsao_t as $pt => $ps) { //ps previsao semanal?>
		<h2><?php echo $ps["data"]; ?> <?php echo $ps["dia"]; ?></h2>
		<p><img src="static/img/<?php echo $ps["ico"]; ?>.png" width="111px"></p>
		<p><?php echo $ps["desc"]; ?></p>
		<p><?php echo $ps["texto"]; ?></p>
		<p>Temperaturas: Min: <?php echo $ps["min"]; ?> - Max: <?php echo $ps["max"]; ?></p>
		<p>Probabilidade de chuva: <?php echo $ps["prob"]; ?></p>
		<p>Nascer do Sol: <?php echo $ps["sunrise"]; ?> - Pôr do Sol: <?php echo $ps["sunset"]; ?></p>
		<p>UV: <?php echo $ps["uv"]; ?></p>
		<?php } ?>		
		<footer>
			<small>Última atualização em <?php echo $p["atualizacao"]; ?></small>
		</footer>
	<!-- ANALYTICS -->
	</body>
</html>