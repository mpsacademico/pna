<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Previsão em Nova Aba | Início</title>	
		<meta property="og:site_name" content="CPTEC/INPE" />
		<meta property="og:locale" content="pt-BR" />	
		<meta name="description" content="" />
		<meta name="keywords" content="previsão, tempo, , clima, sol, chuva, temperatura" />
		<meta name="author" content="Marcos Paulo da Silva - Visualização CPTEC/INPE" />    
		<meta property="og:url" content="" />
		<meta property="og:type" content="website" />    
		<meta property="og:title" content="Previsão para  - CPTEC/INPE" />
		<meta property="og:description" content="" />
		<meta property="og:image" content="LINK" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="300" />
		<meta property="og:image:height" content="300" />	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="static/img/favicon.png">		
		<style type="text/css">		
		<?php include_once("static/css/responsiveboilerplate234.min.css"); ?>			
		</style>
		<link rel="stylesheet" type="text/css" href="static/css/pna.css">
	</head>
	<body style="background-color:#f4f4f4">	
		<div class="container">
			<div class="content">
				<div class="col4">
					&nbsp;
				</div>
				<div class="col4">
					<h1><img src="/pna/static/img/logotipo.png" width="100px" height="100px"></h1>
					<center><h2>Bem-vindo ao Previsão em Nova Aba!</h2>					
					<form method="GET" action="">
						<input type="text" name="busca" value="<?php if(isset($d['q'])) echo $d['q']; ?>" placeholder="Busque sua cidade aqui">
						<input type="submit" value="Pesquisar">
					</form><br>
					</center>	
					<?php 
					if(!is_null($d)){
						foreach($d['c'] as $c){
							echo '<p><a href="/pna/index.php?cidade='.$c['regiao_cptec'].'">'.$c['nome'].' - '.$c['uf'].'</a></p>';
						}
					}
					?>			
				</div>
			</div>
		</div>
	<!-- ANALYTICS -->
	</body>
</html>
