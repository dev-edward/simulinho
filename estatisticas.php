<html>
<head>
	<title>Estatísticas</title>
	<meta charset="utf-8" />
	<link href="css/estilo.css" rel="stylesheet">
</head>
<body>
	<!--div lateral onde ficam as informações do usuário e os botões-->
	<div class="lateral">
		<div class="usuario">
			<div id="personagem">
				<img src="img/jake.png" alt="personagem">
			</div>
			<div id="info">
				<span class="nickname">Usuario.123</span><br>
				<span>Nivel: Iniciante</span><br>
				<span>Meta: Desenvolvimento de sistemas</span><br>
				<span>Unidade: Prof. Aprigio Gonzaga</span><br>
				<span class="n-moedas"><img  class="moeda" src="img/coin.png">390</span><br>
				<a class="btn-p" href="personagem.php">Personagem</a>
				<a class="btn-config" href="configuracao.php"><img src="img/config.png"></a>
			</div>
		</div>
		<div class="botoes">
			<!--Os botões tem tem uma div vazia do lado porque vira uma 'seta' e fica visível(azul) para indicar que está na mesma página do botão-->
			<div class="btn"><a href="questoes.php">Questões Aleatórias</a><div></div></div>
			<div class="btn"><a href="simulado.php">Modo Simulado</a><div></div></div>
			<div class="atual"><a href="estatisticas.php">Estatísticas</a><div></div></div>
			<div class="btn"><a href="informacoes.php">Sobre o vestibulinho</a><div></div></div>
		</div>
	</div>
	<!--div onde fica o conteúdo de cada página-->
	<div class="conteudo">
		<!--a página estatísticas exibirá várias estatísticas como exemplo coloquei o número de questões respondidas durante a semana-->
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
</body>
</html>
