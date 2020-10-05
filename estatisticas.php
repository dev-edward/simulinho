<?php 
	session_start();
	if(!session_status() == PHP_SESSION_ACTIVE){
		header('location:index.php');
	}
?>
<html>
<head>
	<title>Estatísticas</title>
	<meta charset="utf-8" />
	<link href="css/principal.css" rel="stylesheet">
	<link href="css/lateral.css" rel="stylesheet">
	<link href="css/estatisticas.css" rel="stylesheet">
</head>
<body>
	<?php 
		if(session_status() == PHP_SESSION_ACTIVE){
			$btnQuestoes ="btn";
			$btnSimulado ="btn";
			$btnEstatisticas ="atual";
			$btnSobre ="btn";
			$btnRanking ="btn";
			$btnOndeEstudar ="btn";
			include_once("lateral.php");
		}
	?>
	<div class="conteudo">
		<div class="grafico">
			Quantidade de questões por dia.
			<div class="stats">
				<div>
					<span class="qtd">8</span>
					<span class="dia">Seg.</span>
				</div>
				<div>
					<span class="qtd">4</span>
					<span class="dia">Terç.</span>
				</div>
				<div>
					<span class="qtd">12</span>
					<span class="dia">Qua.</span>
				</div>
				<div>
					<span class="qtd">11</span>
					<span class="dia">Qui.</span>
				</div>
				<div>
					<span class="qtd">7</span>
					<span class="dia">Sex.</span>
				</div>
				<div>
					<span class="qtd">10</span>
					<span class="dia">Sáb.</span>
				</div>
				<div>
					<span class="qtd">3</span>
					<span class="dia">Dom.</span>
				</div>
			</div>
		</div>
		<div class="grafico">
			Quantidade de questões por dia.
			<div class="stats">
				<div>
					<span class="qtd">8</span>
					<span class="dia">Seg.</span>
				</div>
				<div>
					<span class="qtd">4</span>
					<span class="dia">Terç.</span>
				</div>
				<div>
					<span class="qtd">12</span>
					<span class="dia">Qua.</span>
				</div>
				<div>
					<span class="qtd">11</span>
					<span class="dia">Qui.</span>
				</div>
				<div>
					<span class="qtd">7</span>
					<span class="dia">Sex.</span>
				</div>
				<div>
					<span class="qtd">10</span>
					<span class="dia">Sáb.</span>
				</div>
				<div>
					<span class="qtd">3</span>
					<span class="dia">Dom.</span>
				</div>
			</div>
		</div>
		<div class="grafico">
			Quantidade de questões por dia.
			<div class="stats">
				<div>
					<span class="qtd">8</span>
					<span class="dia">Seg.</span>
				</div>
				<div>
					<span class="qtd">4</span>
					<span class="dia">Terç.</span>
				</div>
				<div>
					<span class="qtd">12</span>
					<span class="dia">Qua.</span>
				</div>
				<div>
					<span class="qtd">11</span>
					<span class="dia">Qui.</span>
				</div>
				<div>
					<span class="qtd">7</span>
					<span class="dia">Sex.</span>
				</div>
				<div>
					<span class="qtd">10</span>
					<span class="dia">Sáb.</span>
				</div>
				<div>
					<span class="qtd">3</span>
					<span class="dia">Dom.</span>
				</div>
			</div>
		</div>
		<div class="grafico">
			Quantidade de questões por dia.
			<div class="stats">
				<div>
					<span class="qtd">8</span>
					<span class="dia">Seg.</span>
				</div>
				<div>
					<span class="qtd">4</span>
					<span class="dia">Terç.</span>
				</div>
				<div>
					<span class="qtd">12</span>
					<span class="dia">Qua.</span>
				</div>
				<div>
					<span class="qtd">11</span>
					<span class="dia">Qui.</span>
				</div>
				<div>
					<span class="qtd">7</span>
					<span class="dia">Sex.</span>
				</div>
				<div>
					<span class="qtd">10</span>
					<span class="dia">Sáb.</span>
				</div>
				<div>
					<span class="qtd">3</span>
					<span class="dia">Dom.</span>
				</div>
			</div>
		</div>
	
	</div>
</body>
</html>
