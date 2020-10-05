<?php 
	session_start();
	if(!session_status() == PHP_SESSION_ACTIVE){
		header('location:index.php');
	}

	include_once("conexao.php");
	
?>
<html>
<head>
	<title>Simulado</title>
	<meta charset="utf-8" />
	<link href="css/principal.css" rel="stylesheet">
	<link href="css/lateral.css" rel="stylesheet">
	<link href="css/simulado.css" rel="stylesheet">
</head>
<body>
	<?php 
		if(session_status() == PHP_SESSION_ACTIVE){
			$btnQuestoes ="btn";
			$btnSimulado ="atual";
			$btnEstatisticas ="btn";
			$btnSobre ="btn";
			$btnRanking ="btn";
			$btnOndeEstudar ="btn";
			include_once("lateral.php");
		} 
	?>
	
	<div class="conteudo">
		<div class="escolher">
			<p>Escolha as materias que deseja resolver:</p>
			<label><input type="checkbox" id="matematicaM" name="matematicaM">Matemática</label>
			<label><input type="checkbox" id="portuguesM" name="portuguesM">Português</label>
			<label><input type="checkbox" id="historiaM" name="historiaM">História</label>
			<label><input type="checkbox" id="geografiaM" name="geografiaM">Geografia</label>
			<label><input type="checkbox" id="cienciasM" name="cienciasM">Ciências</label>
			
			<p>Escolha a quantidade de questões por matéria que deseja responder:</p>
			<input type="range" min="1" max="10" value="5" class="slider" id="myRange">
			<p>Numero de questões: <span id="demo"></span></p>
			<div class="btnContinuar">Continuar</div>
		</div>
	</div>
	<script>
		var slider = document.getElementById("myRange");
		var output = document.getElementById("demo");
		output.innerHTML = slider.value;

		slider.oninput = function() {
		  output.innerHTML = this.value;
		}
	</script>
</body>
</html>
