<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Previsão para <?php echo $lo->getNome(), " - ", $lo->getUf(); ?> | CPTEC/INPE</title>
		<meta property="og:site_name" content="CPTEC/INPE" />
		<meta property="og:locale" content="pt-BR" />		
		<meta name="description" content="Veja a previsão completa para a cidade <?php echo $lo->getNome(), ' - ', $lo->getUf(); ?>" />
		<meta name="keywords" content="previsão, tempo, <?php echo $lo->getNome(), ', ', $lo->getUf(); ?>, clima, sol, chuva, temperatura" />
		<meta name="author" content="Marcos Paulo da Silva - Visualização CPTEC/INPE" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
		<link rel="icon" type="image/png" href="static/img/favicon.png">
		<link rel="stylesheet" type="text/css" href="static/css/spritesheet.css">
		<link rel="stylesheet" type="text/css" href="static/css/weather-icons.min.css">
		<link rel="stylesheet" type="text/css" href="static/css/weather-icons-wind.min.css">
		<style type="text/css">		
			.quadro{				
				margin-top: 5px;		
				padding-top: 15px;	
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
			footer{
				padding: 2px;				
			}
			footer p{
				font-size: 12px;
				text-align: center;
			}
			.dnone{
				display: none;
			}
			<?php include_once("static/css/responsiveboilerplate234.min.css"); ?>		
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
					<p><i class="sprite sprite-<?php echo $p->getIcone(); ?>" title="<?php echo $p->getTexto(); ?>"></i></p>	
					<p><span class="temp min"><?php echo $p->getMinima(); ?></span> <span class="celsius">ºC</span> <span class="temp max"><?php echo $p->getMaxima(); ?></span> <span class="celsius">ºC</span></p>				
					<p><strong><?php echo $p->getDescricao(); ?></strong></p>					
					<p><i class="wi wi-umbrella" title="Probabilidade de Chuva"></i> <span class="dnone">Probabilidade de Chuva:</span> <?php echo $p->getProbChuva(); ?></p>
					<p><i class="wi wi-sunrise" title="Nascer do Sol"></i> <span class="dnone">Nascer do Sol:</span> <?php echo $p->getNascerSol(); ?> <i class="wi wi-sunset" title="Pôr do Sol"></i> <span class="dnone">Pôr do Sol:</span> <?php echo $p->getPorSol(); ?></p>
					<p><i class="wi wi-hot" title="Índice Ultravioleta"></i> <span class="dnone">Índice Ultravioleta:</span> <?php echo $p->getUv(); ?></p>
				</div>
				<?php } ?>
			</div>
			<div class="content quadro">
				<?php $i = 0; foreach($pe as $p) { $i++; ?>
				<div class="col2">
					<h2><?php echo $p->getData(), "<br>", $p->getDiaSemana(); ?></h2>
					<p><i class="sprite sprite-<?php echo $p->getIcone(); ?>" title="<?php echo $p->getTexto(); ?>"></i></p>	
					<p><span class="temp min"><?php echo $p->getMinima(); ?></span> <span class="celsius">ºC</span> <span class="temp max"><?php echo $p->getMaxima(); ?></span> <span class="celsius">ºC</span></p>				
					<p><strong><?php echo $p->getDescricao(); ?></strong></p>					
					<p><i class="wi wi-umbrella" title="Probabilidade de Chuva"></i> <span class="dnone">Probabilidade de Chuva:</span> <?php echo $p->getProbChuva(); ?></p>
					<p><i class="wi wi-sunrise" title="Nascer do Sol"></i> <span class="dnone">Nascer do Sol:</span> <?php echo $p->getNascerSol(); ?> <i class="wi wi-sunset" title="Pôr do Sol"></i> <span class="dnone">Pôr do Sol:</span> <?php echo $p->getPorSol(); ?></p>
				</div>
				<?php if($i==6){break;}} ?>
			</div>
		</div>
		<footer>				
			<p>Última atualização em <?php echo $pc->getAtualizacao(); ?></p>
			<p>Não nós responsabilizados por qualquer informação fornecida  &bull; Mudar para visualização de <a href="index.php?cidade=<?php echo $_GET['cidade']; ?>&pagina=texto">página em texto</a></p>
			<p></p>
		</footer>		
	<!-- ANALYTICS -->
	</body>
</html>
