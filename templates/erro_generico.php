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
						<h1>Página de Previsão do Tempo</h1>
					</header>
				</div>
			</div>
				<?php echo $erros[0]; ?>
			</div>
			<footer>
				
			</footer>
		</div>
	<!-- ANALYTICS -->
	</body>
</html>