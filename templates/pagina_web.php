<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Previsão para <?php echo $p["nome"]; ?> - CPTEC/INPE</title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">		
		
		<?php
		include_once("static/css/normalize500.min.css");	
		include_once("static/css/skeleton204.min.css");		
		?>
		
		span {
			font-size:32px;
		}			
		</style>
	</head>
	<body style="background-color:#f4f4f4">	
		<div class="container">
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
					<h5><?php echo $ps["data"]; ?></h5>
					<h6><?php echo $ps["dia"]; ?></h6>
					<p><img src="static/img/<?php echo $ps["ico"]; ?>.png" width="100px"></p>
					<p><span style="color:#2980b9"><?php echo $ps["min"]; ?></span><small>ºC</small> &bull; <span style="color:#c0392b"><?php echo $ps["max"]; ?></span><small>ºC</small></p>		
					<p>Prob de chuva:<br><?php echo $ps["prob"]; ?></p>
					<p>Sol: <br>&uarr; <?php echo $ps["sunrise"]; ?><br>&darr; <?php echo $ps["sunset"]; ?></p>
					<p>UV: <br><?php echo $ps["uv"]; ?></p>	
					<p><?php echo $ps["desc"]; ?></p>	
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