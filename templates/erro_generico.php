<!DOCTYPE html>
<html>
	<head>
	 	<meta charset="UTF-8">
		<title>Ops! Algo de Errado Aconteceu!</title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">		
		<?php
		include_once("static/css/responsiveboilerplate234.min.css");			
		?>			
		body{font-family:'Crimison Text',Arial,sans-serif;font-size:1em}h1{font-size:24px;font-weight:bold;text-align:center;margin-bottom:25px;margin-top:20px}p{margin-bottom:10px;text-align:justify}p.red{color:#f00;text-align:center}select{padding:5px;width:100%}/*nav{margin-bottom:10px}nav ul{list-style:none}nav ul li{display:inline}*/nav a{display:inline-block;background:#333;color:white;padding:5px 15px;border:1px solid white;text-decoration:none}nav a:hover{border:1px solid #89aac0;background:#89aac0}nav a:active{background:blue}@media(max-width:480px){nav a {width:100%; padding:5px 0px;}}.center{text-align:center}.center img{margin-bottom: 10px}}			
		</style>
	</head>
	<body style="background-color:#f4f4f4">	
		<div class="container">
			<div class="content">
				<div class="col3"></div>
				<div class="col6">
					<header>
						<h1>Ops! Algo de Errado Aconteceu!</h1>
					</header>
					<p><strong><?php echo $erros[0]; ?></strong></p>
					<footer>				
					</footer>
				</div>
			</div>
		</div>
	<!-- ANALYTICS -->
	</body>
</html>