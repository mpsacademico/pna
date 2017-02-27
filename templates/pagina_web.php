<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Previsão para <?php echo $p["nome"]; ?> - CPTEC/INPE</title>	
		<meta property="og:site_name" content="CPTEC/INPE" />
		<meta property="og:locale" content="pt-BR" />
		<?php 
		$pd = $p["previsao"][0]; //previsão do dia
		$desc = $pd["dia"]." - ".$pd["data"].": ".$pd["desc"];		
		?>
		<meta name="description" content="<?php echo $desc; ?>" />
		<meta name="keywords" content="previsão, tempo, <?php echo $p["nome"]; ?>, clima, sol, chuva, temperatura" />
		<meta name="author" content="Marcos Paulo da Silva - Visualização CPTEC/INPE" />    
		<meta property="og:url" content="" />
		<meta property="og:type" content="website" />    
		<meta property="og:title" content="Previsão para <?php echo $p["nome"]; ?> - CPTEC/INPE" />
		<meta property="og:description" content="<?php echo $desc; ?>" />
		<meta property="og:image" content="LINK" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="300" />
		<meta property="og:image:height" content="300" />	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="static/img/favicon.png">
		<link rel="stylesheet" type="text/css" href="static/css/spritesheet.css">
		<style type="text/css">			
		<?php
		include_once("static/css/normalize500.min.css");	
		include_once("static/css/skeleton204.min.css");		
		?>		
		span {
			font-size:36px;
		}			
		p {
			margin-bottom: 2px;
		}
		</style>
	</head>
	<body style="background-color:#f4f4f4">	
		<div class="container" style="margin-top:25px;">
			<div class="row">
				<div class="twelve columns">
					<header>
						<h1><?php echo $p["nome"]; ?> - <?php echo $p["uf"]; ?></h1>
					</header>
				</div>
			</div>
			<?php $previsao_t = $p["previsao"]; ?> 
			<div class="row">
			<?php foreach($previsao_t as $pt => $ps) { //ps previsao semanal?>			
				<div class="two columns" style="text-align:center">
					<p><h5><?php echo $ps["data"]; ?></h5>
					<?php echo $ps["dia"]; ?></p>
					<p><div style="width: 50%;margin: 0 auto;"><i class="sprite sprite-<?php echo $ps["ico"]; ?>"></i></div></p>					
					<p><span style="color:#2980b9"><?php echo $ps["min"]; ?></span><small>ºC</small> &bull; <span style="color:#c0392b"><?php echo $ps["max"]; ?></span><small>ºC</small></p>		
					<p>Prob. de chuva:<br><?php echo $ps["prob"]; ?></p>
					<p>&#9728; <br>&uarr; <?php echo $ps["sunrise"]; ?><br>&darr; <?php echo $ps["sunset"]; ?></p>
					<p>UV: <br><?php echo $ps["uv"]; ?></p>					
				</div>
			<?php } ?>
			</div>
			<footer>
				<small>Última atualização em <?php echo $p["atualizacao"]; ?></small>
			</footer>
		</div>
	<!-- ANALYTICS -->
	</body>
</html>