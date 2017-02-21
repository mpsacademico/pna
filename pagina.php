<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Previsão para <?php echo $p["nome"]; ?> - CPTEC/INPE</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<h1><?php echo $p["nome"]; ?></h1>
		<p><?php echo $p["uf"]; ?></p>
		<?php $previsao_t = $p["previsao"]; ?>
		<ul>
			<?php foreach($previsao_t as $pt => $v) { ?>
			<li><img src="icones/<?php echo $v['ico']; ?>.png"><?php echo $v["dia"]; ?></li>
			<?php } ?>
		</ul>
		<footer>
			Última atualização em <?php echo $p["atualizacao"]; ?>
		</footer>
	<!-- ANALYTICS -->
	</body>
</html> 