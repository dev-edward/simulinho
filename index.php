<html>
<head>
	<title>Pagina inicial</title>
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
			<div class="btn">
				<a href="questoes.php">Questões Aleatórias</a><div></div>
			</div>
			<div class="btn">
				<a href="simulado.php">Modo Simulado</a><div></div>
			</div>
			<div class="btn">
				<a href="estatisticas.php">Estatísticas</a><div></div>
			</div>
			<div class="btn">
				<a href="informacoes.php">Sobre o vestibulinho</a><div></div>
			</div>
		</div>
	</div>
	<!--div onde fica o conteúdo de cada página-->
	<div class="conteudo">
			<!--O conteúdo da página inicial seria uma tela de cadastro/login>-->
			<h1>Crie uma conta ou faça login </h1>
	</div>
</body>
</html>
