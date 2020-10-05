<?php 
	session_start();
	if(!session_status() == PHP_SESSION_ACTIVE){
		header('location:index.php');
	}

	include_once("conexao.php");
	
?>
<html>
<head>
	<title>Questões</title>
	<meta charset="utf-8" />
	<link href="css/principal.css" rel="stylesheet">
	<link href="css/lateral.css" rel="stylesheet">
	<link href="css/questoes.css" rel="stylesheet">
</head>
<body>
	<script type="text/javascript" src="js/questoes.js"></script>
	<?php 
		if(session_status() == PHP_SESSION_ACTIVE){
			$btnQuestoes ="atual";
			$btnSimulado ="btn";
			$btnEstatisticas ="btn";
			$btnSobre ="btn";
			$btnRanking ="btn";
			$btnOndeEstudar ="btn";
			include_once("lateral.php");
		}
	?>
	<div class="conteudo">
		<?php
		$sql = "SELECT * FROM TBQuestao INNER JOIN TBTextoBase	ON TBQuestao.FKTextoBase = TBTextoBase.IDTextoBase ORDER BY RAND() LIMIT 1";	
		$resultado = $conexao->query($sql);
		if ($resultado->num_rows > 0) {
			$row = $resultado->fetch_assoc(); 
			
		} else {
			printf("Error message: %s\n", mysqli_error($conexao));
		}

			$conexao->close();
		?>
		<div class="questao">
			
			<div class="texto-base"><?php echo $row["Conteudo"]. "<br>"; ?></div>
				
				<div class="enunciado"><?php echo $row["Enunciado"]. "<br>"; ?></div>
				
				<div class="alternativas">
					<label>
						<div class="letra">
						<input type="radio" name="alternativa" id="altA" value="a" onclick="radiobutons();"/>
						<span>A</span>
						</div>
						<div>
							<?php 
							echo $row["AlternativaA"]. "<br>";
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
							echo $row["AlternativaB"]. "<br>";
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
							echo $row["AlternativaC"]. "<br>";
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
							echo $row["AlternativaD"]. "<br>";
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
							echo $row["AlternativaE"]. "<br>";
							?>
						</div>
					</label>
				</div>
			</div>
				
				<script type="text/javascript">
					var alternativacorreta = "<?php echo $row["Gabarito"] ?>";
				</script>
				
				<div class="base">
					
					<div id="resultado"></div>
					
					<div id="tempo">3:00</div>
					<div id="visto" onclick="proximo();">&#x2714;</div>
				</div>
		</div>
	</div>
</body>
</html>
