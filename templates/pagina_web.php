<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Previsão para <?php echo $lo->getNome(), " - ", $lo->getUf(); ?> | CPTEC/INPE</title>
		<meta property="og:site_name" content="CPTEC/INPE" />
		<meta property="og:locale" content="pt-BR" />		
		<meta name="description" content="" />
		<meta name="keywords" content="previsão, tempo, <?php echo $lo->getNome(), ', ', $lo->getUf(); ?>, clima, sol, chuva, temperatura" />
		<meta name="author" content="Marcos Paulo da Silva - Visualização CPTEC/INPE" />    
		<meta property="og:url" content="" />
		<meta property="og:type" content="website" />    
		<meta property="og:title" content="" />
		<meta property="og:description" content="" />
		<meta property="og:image" content="LINK" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta property="og:image:width" content="300" />
		<meta property="og:image:height" content="300" />	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
		<link rel="icon" type="image/png" href="static/img/favicon.png">
		<link rel="stylesheet" type="text/css" href="static/css/spritesheet.css">
		<style type="text/css">		
		.quadro{
			background-color:#f0f0f0;
			border-top: solid 5px #e5e5e5;
		}	
		.diap{
			text-align: center;
		}
		.temp{
			font-size:36px;
		}
		.min{			
			color: #2980b9;
		}
		.max{
			color: #c0392b;
		}
		.celsius{
			color: grey;
			font-size: 12px;
		}
		<?php include_once("static/css/responsiveboilerplate234.min.css"); ?>				
		p {
			margin-bottom: 2px;
		}
		body{font-family:'Crimison Text',Arial,sans-serif;font-size:1em}h1{font-size:24px;font-weight:bold;text-align:center;margin-bottom:25px;margin-top:20px}p{margin-bottom:10px;text-align:justify}p.red{color:#f00;text-align:center}select{padding:5px;width:100%}/*nav{margin-bottom:10px}nav ul{list-style:none}nav ul li{display:inline}*/nav a{display:inline-block;background:#333;color:white;padding:5px 15px;border:1px solid white;text-decoration:none}nav a:hover{border:1px solid #89aac0;background:#89aac0}nav a:active{background:blue}@media(max-width:480px){nav a {width:100%; padding:5px 0px;}}.center{text-align:center}.center img{margin-bottom: 10px}}
		</style>
	</head>
	<body style="background-color:#f4f4f4">	

		<div class="container">
			<div class="content">
				<div class="col12">
					<header>
						<h1><?php echo $lo->getNome(), " - ", $lo->getUf(); ?></h1>
					</header>
				</div>
			</div>
			<div class="content quadro">
				<?php foreach($ps as $pk => $p) { ?>
				<div class="col2">
					<h2><?php echo $p->getData(), "<br>", $p->getDiaSemana(); ?></h2>
					<p><i class="sprite sprite-<?php echo $p->getIcone(); ?>"></i></p>	
					<p><span class="temp min"><?php echo $p->getMinima(); ?></span> <span class="celsius">ºC</span> <span class="temp max"><?php echo $p->getMaxima(); ?></span> <span class="celsius">ºC</span></p>				
					<p><strong><?php echo $p->getDescricao(); ?></strong></p>					
					<p>Probabilidade de Chuva: <?php echo $p->getProbChuva(); ?></p>
					<p>Nascer do Sol: <?php echo $p->getNascerSol(); ?></p>
					<p>Pôr do Sol: <?php echo $p->getPorSol(); ?></p>
					<p>Índice Ultravioleta: <?php echo $p->getUv(); ?></p>
				</div>
				<?php } ?>
			</div>
		</div>

		
			<?php $pe = $pc->getPrevisaoEstendida(); $i = 0; ?>
			<?php foreach($pe as $p) { $i++; ?>
				
			<?php if($i==6){break;}} ?>
			

			<footer>
				<p>Última atualização em <?php echo $pc->getAtualizacao(); ?></p>
				<p>Mudar para visualização de <a href="index.php?cidade=<?php echo $_GET['cidade']; ?>&pagina=texto">página em texto</a></p>
				<p>Não nós responsabilizados por qualquer informação fornecida!</p>
			</footer>		
	<!-- ANALYTICS -->
	</body>
</html>