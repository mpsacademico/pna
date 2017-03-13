<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Previsão para <?php echo $lo->getNome(), " - ", $lo->getUf(); ?> | CPTEC/INPE</title>
		<?php if(isset($_GET['colorido'])){ ?>
		<style>
			body{
				/*background-color: #F4F4F4;*/
			}
			#pa, #ca, #ps, #pe{
				padding: 5px;
			}
			article{
				padding: 5px;
			}
			#pa{
				background-color: #F5F5DC;
			}
			#ca{
				background-color: #E0FFFF;
			}
			#ps{
				background-color: #F0FFF0;
			}
			#ps article:nth-child(odd){
				background-color: #D5FDD5;
			}			
			#pe{
				background-color: #FFFFE0;
			}
			#pe article:nth-child(odd){
				background-color: #FFFACD;
			}
		</style>
		<?php } ?>
	</head>
	<body style="font-family:sans-serif;">
		<header>
			<h1><?php echo $lo->getNome(), " - ", $lo->getUf(); ?></h1>
		</header>	
		<?php if(!is_null($ca)){ ?>
		<section id="ca">
			<header>			
				<h1>Condição Atual</h1>
			</header>	
			<p><strong><?php echo $ca->getDescricao(); ?></strong></p>
			<p><em><?php echo $ca->getTexto(); ?></em></p>
			<p>Temperatura: <?php echo $ca->getTemperatura(); ?> ºC</p>	
			<p>Umidade Relativa: <?php echo $ca->getUmidade(); ?>%</p>
			<p>Sensação Térmica: <?php echo $ca->getSensacaoTermica(); ?> ºC</p>
			<p>Direção do Vento: <?php echo $ca->getDirecaoVento(); ?></p>
			<p>Velocidade do Vento: <?php echo $ca->getVelocidadeVento(); ?></p>
			<p>Pressão Atmosférica: <?php echo $ca->getPressao(); ?></p>		
		</section>
		<?php } ?>
		<?php if(!is_null($pa)){ ?>
		<?php $p = $pa; ?>
		<section id="pa">
			<header>
				<h1>Hoje <?php echo $p->getData(), " - ", $p->getDiaSemana(); ?></h1>
			</header>						
			<p><strong><?php echo $p->getDescricao(); ?></strong></p>
			<p><em><?php echo $p->getTexto(); ?></em></p>
			<p>Temperatura Mínima: <?php echo $p->getMinima(); ?> ºC</p>
			<p>Temperatura Máxima: <?php echo $p->getMaxima(); ?> ºC</p>
			<p>Probabilidade de Chuva: <?php echo $p->getProbChuva(); ?></p>
			<p>Nascer do Sol: <?php echo $p->getNascerSol(); ?></p>
			<p>Pôr do Sol: <?php echo $p->getPorSol(); ?></p>
			<p>Índice Ultravioleta: <?php echo $p->getUv(); ?></p>
		</section>
		<?php } ?>
		<section id="ps">
			<header>
				<h1>Previsão Semanal</h1>
			</header>
			<?php foreach($ps as $pk => $p) { ?>
			<article>
				<header>
					<h1><?php echo $p->getData(), " - ", $p->getDiaSemana(); ?></h1>
				</header>
				<p><strong><?php echo $p->getDescricao(); ?></strong></p>
				<p><em><?php echo $p->getTexto(); ?></em></p>
				<p>Temperatura Mínima: <?php echo $p->getMinima(); ?> ºC</p>
				<p>Temperatura Máxima: <?php echo $p->getMaxima(); ?> ºC</p>
				<p>Probabilidade de Chuva: <?php echo $p->getProbChuva(); ?></p>
				<p>Nascer do Sol: <?php echo $p->getNascerSol(); ?></p>
				<p>Pôr do Sol: <?php echo $p->getPorSol(); ?></p>
				<p>Índice Ultravioleta: <?php echo $p->getUv(); ?></p>
			</article>
			<?php } ?>
		</section>
		<section id="pe">
			<header>
				<h1>Previsão Estendida</h1>
			</header>
			<?php foreach($pe as $pk => $p) { ?>
			<article>
				<header>
					<h1><?php echo $p->getData(), " - ", $p->getDiaSemana(); ?></h1>
				</header>
				<p><strong><?php echo $p->getDescricao(); ?></strong></p>
				<p><em><?php echo $p->getTexto(); ?></em></p>
				<p>Temperatura Mínima: <?php echo $p->getMinima(); ?> ºC</p>
				<p>Temperatura Máxima: <?php echo $p->getMaxima(); ?> ºC</p>
				<p>Probabilidade de Chuva: <?php echo $p->getProbChuva(); ?></p>
				<p>Nascer do Sol: <?php echo $p->getNascerSol(); ?></p>
				<p>Pôr do Sol: <?php echo $p->getPorSol(); ?></p>				
			</article>
			<?php } ?>
		</section>			
		<footer>
			<p>Mudar para visualização de <a href="index.php?cidade=<?php echo $_GET['cidade']; ?>&pagina=web">página web</a></p>	
			<p>Última atualização em <?php echo $pc->getAtualizacao(); ?> | Fonte: <a href="http://www.cptec.inpe.br/" title="Abrir página inicial do CPTEC/INPE" target="_blank">CPTEC/INPE</a><br>
			Não nos responsabilizamos pelo uso das informações fornecidas!</p>					
		</footer>
	<!-- ANALYTICS -->
	</body>
</html>