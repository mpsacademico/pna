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
			body{
				background-color: #fdfdfd;
			}
			.quadro{	
				background-color: #f4f4f4;
				margin-top: 5px;		
				padding-top: 15px;	
			}
			#condicao{
				background-color: #F0F8FF;
				margin-top: 5px;		
				padding-top: 15px;
			}
			.quadro *{
				text-align: center;
			}
			.quadro .info {
				color: #151515;
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
				color: #696969;
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
			body{font-family:'Segoe Ui','Crimison Text',Arial,sans-serif;font-size:1em}h1{font-size:24px;font-weight:bold;text-align:center;margin-bottom:25px;margin-top:20px}p{margin-bottom:10px;text-align:justify}p.red{color:#f00;text-align:center}select{padding:5px;width:100%}/*nav{margin-bottom:10px}nav ul{list-style:none}nav ul li{display:inline}*/nav a{display:inline-block;background:#333;color:white;padding:5px 15px;border:1px solid white;text-decoration:none}nav a:hover{border:1px solid #89aac0;background:#89aac0}nav a:active{background:blue}@media(max-width:480px){nav a {width:100%; padding:5px 0px;}}.center{text-align:center}.center img{margin-bottom: 10px}}			
		</style>
	</head>
	<body>	

		<div class="container">
			<div class="content">
				<div class="col12">
					<header>
						<h1><?php echo $lo->getNome(), " - ", $lo->getUf(); ?></h1>
					</header>
				</div>
			</div>
			<?php if(!is_null($ca)){ ?>
			<div id="condicao" class="content">
				<div class="col5">
					<p><i class="sprite sprite-<?php echo $ca->getIcone(); ?>" title="<?php echo $ca->getDescricao(); ?>"></i></p>
					<p><strong><?php echo $ca->getDescricao(); ?></strong></p>
					<p><em><?php echo $ca->getTexto(); ?></em></p>
				</div>
				<div class="col2">
					<p><span class="temp"><?php echo $ca->getTemperatura(); ?></span> <span class="celsius">ºC</span></p>
				</div>
				<div class="col5">
					<p><i class="wi wi-humidity" title="Umidade Relativa"></i> <span class="dnone">Umidade Relativa:</span> <?php echo $ca->getUmidade(); ?>%</p>
					<p><i class="wi wi-thermometer-exterior" title="Sensação Térmica"></i> <span class="dnone">Sensação Térmica:</span> <?php echo $ca->getSensacaoTermica(); ?> ºC</p>
					<p><i class="wi wi-windy" title="Direção do Vento"></i> <span class="dnone">Direção do Vento:</span> <?php echo $ca->getDirecaoVento(); ?></p>
					<p><i class="wi wi-strong-wind" title="Velocidade do Vento"></i> <span class="dnone">Velocidade do Vento:</span> <?php echo $ca->getVelocidadeVento(); ?></p>
					<p><i class="wi wi-barometer" title="Pressão Atmosférica"></i> <span class="dnone">Pressão Atmosférica:</span> <?php echo $ca->getPressao(); ?></p>		
				</div>
			</div>
			<?php } ?>
			<div class="content quadro">
				<?php foreach($ps as $pk => $p) { ?>
				<div class="col2">
					<div class="topo">
						<h2><?php echo $p->getData(), "<br>", $p->getDiaSemana(); ?></h2>
						<p><i class="sprite sprite-<?php echo $p->getIcone(); ?>" title="<?php echo $p->getDescricao(); ?>"></i></p>	
						<p><span class="temp min" title="Temperatura Mínima"><?php echo $p->getMinima(); ?></span> <span class="celsius">ºC</span> <span class="temp max" title="Temperatura Máxima"><?php echo $p->getMaxima(); ?></span> <span class="celsius">ºC</span></p>				
					</div>	
					<div class="info">
						<p><i class="wi wi-umbrella" title="Probabilidade de Chuva"></i> <span class="dnone">Probabilidade de Chuva:</span> <?php echo $p->getProbChuva(); ?></p>
						<p><i class="wi wi-sunrise" title="Nascer do Sol"></i> <span class="dnone">Nascer do Sol:</span> <?php echo $p->getNascerSol(); ?> <i class="wi wi-sunset" title="Pôr do Sol"></i> <span class="dnone">Pôr do Sol:</span> <?php echo $p->getPorSol(); ?></p>
						<p><i class="wi wi-hot" title="Índice Ultravioleta"></i> <span class="dnone">Índice Ultravioleta:</span> <?php echo $p->getUv(); ?></p>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="content quadro">
				<?php $i = 0; foreach($pe as $p) { $i++; ?>
				<div class="col2">
					<div class="topo">
						<h2><?php echo $p->getData(), "<br>", $p->getDiaSemana(); ?></h2>
						<p><i class="sprite sprite-<?php echo $p->getIcone(); ?>" title="<?php echo $p->getDescricao(); ?>"></i></p>	
						<p><span class="temp min" title="Temperatura Mínima"><?php echo $p->getMinima(); ?></span> <span class="celsius">ºC</span> <span class="temp max" title="Temperatura Máxima"><?php echo $p->getMaxima(); ?></span> <span class="celsius">ºC</span></p>			
					</div>
					<div class="info">
						<p><i class="wi wi-umbrella" title="Probabilidade de Chuva"></i> <span class="dnone">Probabilidade de Chuva:</span> <?php echo $p->getProbChuva(); ?></p>
						<p><i class="wi wi-sunrise" title="Nascer do Sol"></i> <span class="dnone">Nascer do Sol:</span> <?php echo $p->getNascerSol(); ?> <i class="wi wi-sunset" title="Pôr do Sol"></i> <span class="dnone">Pôr do Sol:</span> <?php echo $p->getPorSol(); ?></p>
					</div>
				</div>
				<?php if($i==6){break;}} ?>
			</div>
		</div>
		<footer style="margin-top:25px;">
			<p>Mudar para visualização de <a href="index.php?cidade=<?php echo $_GET['cidade']; ?>&pagina=texto">página em texto</a></p>	
			<p>Última atualização em <?php echo $pc->getAtualizacao(); ?> | Fonte: <a href="http://www.cptec.inpe.br/" title="Abrir página inicial do CPTEC/INPE" target="_blank">CPTEC/INPE</a><br>
			Não nos responsabilizamos pelo uso das informações fornecidas!</p>					
		</footer>		
	<!-- ANALYTICS -->
	</body>
</html>
