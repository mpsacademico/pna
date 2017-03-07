<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Previsão para <?php echo $lo->getNome(), " - ", $lo->getUf(); ?> | CPTEC/INPE</title>
	</head>
	<body style="font-family:sans-serif;">
		<header>
			<h1><?php echo $lo->getNome(), " - ", $lo->getUf(); ?></h1>
		</header>	
		<?php if(!is_null($ca)){ ?>
		<section>
			<header>
				<h1>Condição Atual</h1>
			</header>			
			<article>
				<header>
					<?php echo $ca->getTemperatura(); ?>
				</header>				
			</article>			
		</section>
		<?php } ?>
		<?php if(!is_null($pa)){ ?>
		<section>
			<header>
				<h1>Previsão para Hoje</h1>
			</header>
			<?php foreach($pa as $pk => $p) { ?>
			<article>
				<header>
					<h1><?php echo $p->getData(), " ", $p->getDiaSemana(); ?></h1>
				</header>
				<p><?php echo $p->getDescricao(); ?></p>
			</article>
			<?php } ?>
		</section>
		<?php } ?>
		<section>
			<header>
				<h1>Previsão Semanal</h1>
			</header>
			<?php foreach($ps as $pk => $p) { ?>
			<article>
				<header>
					<h1><?php echo $p->getData(), " ", $p->getDiaSemana(); ?></h1>
				</header>
				<p><?php echo $p->getDescricao(); ?></p>
			</article>
			<?php } ?>
		</section>
		<section>
			<header>
				<h1>Previsão Estendida</h1>
			</header>
			<?php foreach($pe as $pk => $p) { ?>
			<article>
				<header>
					<h1><?php echo $p->getData(), " ", $p->getDiaSemana(); ?></h1>
				</header>
				<p><?php echo $p->getDescricao(); ?></p>
			</article>
			<?php } ?>
		</section>
		<?php $previsao_t = $p["previsao"]; ?> 
		<?php foreach($previsao_t as $pt => $ps) { //ps previsao semanal?>
		<h2><?php echo $ps["data"]; ?> <?php echo $ps["dia"]; ?></h2>
		<p><?php echo $ps["desc"]; ?></p>
		<p><?php echo $ps["texto"]; ?></p>
		<p>Temperaturas: Min: <?php echo $ps["min"]; ?> - Max: <?php echo $ps["max"]; ?></p>
		<p>Probabilidade de chuva: <?php echo $ps["prob"]; ?></p>
		<p>Nascer do Sol: <?php echo $ps["sunrise"]; ?> - Pôr do Sol: <?php echo $ps["sunset"]; ?></p>
		<p>UV: <?php echo $ps["uv"]; ?></p>
		<?php } ?>		
		<footer>
			<p>Última atualização em <?php echo $pc->getAtualizacao(); ?></p>
			<p>Mudar para visualização de <a href="index.php?cidade=<?php echo $_GET['cidade']; ?>&pagina=web">página web</a></p>
		</footer>
	<!-- ANALYTICS -->
	</body>
</html>