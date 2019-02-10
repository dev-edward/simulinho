<?php 
	#aqui inclui o arquivo que faz a conexão com o banco de dados
	include_once("conexao.php");
?>
<html>
<head>
	<title>Questões</title>
	<meta charset="utf-8" />
	<link href="css/estilo.css" rel="stylesheet">
</head>
<body>
	<script type="text/javascript" src="js/questoes.js"></script>
	
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
			<div class="atual">
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
		<?php
		/* 
		 * seguinte codigo seleciona aleatóriamente um registro da tabela questão do banco de dados
		 * aleatório por enquanto, apenas para testar depois atualizaremos para selecionar a questão de acordo 
		 * com o comportamento do usuário ex:não selecionará as 10 últimas questões que o usúario viu
		 */
		$sql = "SELECT * FROM questao ORDER BY RAND() LIMIT 1";	
		$resultado = $conexao->query($sql);
		if ($resultado->num_rows > 0) {
			$row = $resultado->fetch_assoc(); 
			$id_texto_base = $row["texto-base"];
			
		} else {
			printf("Error message: %s\n", mysqli_error($conexao));
		}
		/*
		 * aqui seleciona o texto-base da questão que foi selecionada, o texto-base deixei em outra tabela
		 * porque algumas questões tem o mesmo texto, (ex:leia o texto a seguir para responder as questões 3,4 e 5)
		 * separando em duas tabelas não precisamos guardar o mesmo texto 3 veces em nosso banco de dados 
		 */
		$sql2 = "SELECT * FROM `texto-base` where `id_texto-base` = \"$id_texto_base\"";	
		$resultado2 = $conexao->query($sql2);
		if ($resultado2->num_rows > 0) {
			$row2 = $resultado2->fetch_assoc(); 
		} else {
			printf("Error message: %s\n", mysqli_error($conexao));
		}
		/*
		 * após cada seleção verifica SE o bd retornou pelo menos um registro então armazena dentro de um objeto 
		 * para que possamos usar cada campo do registro depois, SENÂO ele exibe uma mensagem de erro
		 * no final fecha a conexão
		 */
			$conexao->close();
		?>
		<!--aqui ficará a questão-->
		<div class="questao">
			<!-- no começo da questão ficará o texto-base, aqui pegamos o texto e colocamos dentro do div-->
			<div class="texto-base"><?php echo $row2["texto"]. "<br>"; ?></div>
					<!--Caso o texto base tenha imagens o seguite codigo irá verificar e colocar dentro deste mesmo div.
					funciona para a questão de exemplo que coloquei que tem só uma imagem, depois teremos que melhorar isto
					-->
					<?php
					if ($row2["imagens"]==1) {
						echo "<img width='100%' src=".$row2["caminho_imagens"].">";
					}
					?>
				<!--coloca o enunciado nesta div-->
				<div class="enunciado"><?php echo $row["enunciado"]. "<br>"; ?></div>
				<!--aqui coloca as 5 alternativas, quando o usuário clica em uma alternativa chama uma função que altera o valor de uma variável que é a alternativa que o usuário selecionou -->
				<div class="alternativas">
					<label>
						<div class="letra">
						<input type="radio" name="alternativa" id="altA" value="a" onclick="radiobutons();"/>
						<span>A</span>
						</div>
						<div>
							<?php 
							echo $row["alternativaA"]. "<br>";
							?>
						</div>
					</label>
					<label>
						<div class="letra">
						<input type="radio" name="alternativa" id="altB" value="b" onclick="radiobutons();"/>
						<span>B</span>
						</div>
						<div>
							<?php 
							echo $row["alternativaB"]. "<br>";
							?>
						</div>
					</label>
					<label>
						<div class="letra">
						<input type="radio" name="alternativa" id="altC" value="c" onclick="radiobutons();"/>
						<span>C</span>
						</div>
						<div>
							<?php 
							echo $row["alternativaC"]. "<br>";
							?>
						</div>
					</label>
					<label>
						<div class="letra">
						<input type="radio" name="alternativa" id="altD" value="d" onclick="radiobutons();"/>
						<span>D</span>
						</div>
						<div>
							<?php 
							echo $row["alternativaD"]. "<br>";
							?>
						</div>
					</label>
					<label>
						<div class="letra">
						<input type="radio" name="alternativa" id="altE" value="e" onclick="radiobutons();"/>
						<span>E</span>
						</div>
						<div>
							<?php 
							echo $row["alternativaE"]. "<br>";
							?>
						</div>
					</label>
				</div>
			</div>
				<!--Aqui guardamos a alternativa correta da questão em  uma variável para depois comparar com a alternativa que o usuário selecionou -->
				<script type="text/javascript">
					var alternativacorreta = "<?php echo $row["gabarito"] ?>";
				</script>
				<!--a div 'base' é onde fica o botão da dica, o temporizador e o botão próximo que verifica se o usuário acertou-->
				<div class="base">
					<!--a div resultado fica visível quando o usuário clica no botão próximo e mostrar se ele acertou ou errou, por enquanto está assim apenas para testar o funcionamento dos códigos, teremos melhorar isto -->
					<div id="resultado"></div>
					<div class="btn-dica">
						<div id="dica">
							<h1>Qualquer dica aqui</h1>
							Esta é uma dica teste...
						</div>
						<img id="lampada" src="img/lampada-off.png" onclick="onoff();">
					</div>
					<div id="tempo">3:00</div>
					<div><img id="seta" src="img/seta.png" onclick="proximo();"></div>
				</div>
		</div>
	</div>
</body>
</html>
