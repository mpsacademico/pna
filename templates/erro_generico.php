<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Ops! Algo de Errado Aconteceu!</title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<link rel="icon" type="image/png" href="static/img/favicon.png">
		<style type="text/css">
			#centro {
				width:300px;
				height:300px;
				position:absolute;
				top:50%;
				left:50%;
				margin-top:-150px;
				margin-left:-150px;
			}
		</style>
	</head>
	<body style="background-color:#f4f4f4;font-family:sans-serif;">	
		<div id="centro">
			<h1>Ops! Algo de errado aconteceu!</h1>
			<p><strong><?php echo $erros[0]; ?></strong></p>
			<a href="/pna/">Ir para a página inicial</a>			
		</div>
	<!-- ANALYTICS -->
	</body>
</html>