<?php 
	session_start();
	if(!session_status() == PHP_SESSION_ACTIVE){
		header('location:index.php');
	}
?>
<html>
<head>
	<title>Informações</title>
	<meta charset="utf-8" />
	<link href="css/principal.css" rel="stylesheet">
	<link href="css/lateral.css" rel="stylesheet">
	<link href="css/informacoes.css" rel="stylesheet">
</head>
<body>
	<?php 
		if(session_status() == PHP_SESSION_ACTIVE){
			$btnQuestoes ="btn";
			$btnSimulado ="btn";
			$btnEstatisticas ="btn";
			$btnSobre ="atual";
			$btnRanking ="btn";
			$btnOndeEstudar ="btn";
			include_once("lateral.php");
		}
	?>
	<div class="conteudo">
		<button class="caixa"> Quando será realizado o Exame do presente Processo Seletivo-Vestibulinho?</button>
			<div class="resposta">
				<div> O Exame será realizado no dia 16/06/2019 (domingo), às 13h30min. </div>
			</div>
			
		<button class="caixa"> Quando e como poderei confirmar o local onde realizarei o Exame do Processo Seletivo-Vestibulinho?</button>
			<div class="resposta">
				<div></div>
			</div>
		<button class="caixa"> Quantas horas terei para realizar a prova do presente Processo Seletivo-Vestibulinho?</button>
			<div class="resposta">
				<div>
				O portão da escola será aberto às 12h30min e fechado às 13h30min, impreterivelmente.
Após o fechamento do portão, não será permitida a entrada de nenhum candidato. Por esse motivo, o candidato deverá chegar com antecedência de 1 (uma) hora, para localizar sua sala e sua carteira, evitando-se, assim, possíveis imprevistos.
Após o início do Exame, o candidato deverá permanecer no mínimo até às 15h30min dentro da sala do Exame, podendo, ao deixar este local, levar consigo o caderno de questões.
				</div>
			</div>
		
		<button class="caixa"> O que devo levar para realizar o Exame do presente Processo Seletivo-Vestibulinho?</button>
			<div class="resposta">
				<div></div>
			</div>
		<button class="caixa"> Meu documento de identidade está com foto antiga e/ou em más condições de visibilidade. Neste caso como deverei proceder?</button>
			<div class="resposta">
				<div></div>
			</div>
		<button class="caixa"> Em caso de perda, roubo ou extravio de documento de identidade (RG), como poderei realizar o Exame do presente Processo Seletivo-Vestibulinho?</button>
			<div class="resposta">
				<div></div>
			</div>
		<button class="caixa"> Como serão as provas do presente Processo Seletivo-Vestibulinho?</button>
			<div class="resposta">
				<div></div>
			</div>
		<button class="caixa"> Quando e onde serão divulgados os gabaritos oficiais das provas do presente Processo Seletivo-Vestibulinho?</button>
			<div class="resposta">
				<div></div>
			</div>	
		
		<button class="caixa"> Como será obtida a nota final de classificação do Processo Seletivo-Vestibulinho?</button>
			<div class="resposta">
				<div></div>
			</div>
		<button class="caixa"> Quando e onde serão divulgadas as listas de convocação para a prova de aptidão e as listas de classificação geral do Processo Seletivo-Vestibulinho?</button>
			<div class="resposta">
				<div></div>
			</div>
		<button class="caixa">  Qual a diferença entre "lista de classificação geral" e "lista de convocação"?</button>
			<div class="resposta">
				<div></div>
			</div>
			
			
			
		<button class="caixa">  Qual a diferença entre "lista de classificação geral" e "lista de convocação"?</button>
			<div class="resposta">
				<div></div>
			</div>
		<button class="caixa">  Qual a diferença entre "lista de classificação geral" e "lista de convocação"?</button>
			<div class="resposta">
				<div></div>
			</div>
		<button class="caixa">  Qual a diferença entre "lista de classificação geral" e "lista de convocação"?</button>
			<div class="resposta">
				<div></div>
			</div>
		<button class="caixa">  Qual a diferença entre "lista de classificação geral" e "lista de convocação"?</button>
			<div class="resposta">
				<div></div>
			</div>			
		<button class="caixa">  Qual a diferença entre "lista de classificação geral" e "lista de convocação"?</button>
			<div class="resposta">
				<div></div>
			</div>
		<button class="caixa">  Qual a diferença entre "lista de classificação geral" e "lista de convocação"?</button>
			<div class="resposta">
				<div></div>
			</div>			  
										
										
										
	</div>
	<script>
		var coll = document.getElementsByClassName("caixa");
		var i;

		for (i = 0; i < coll.length; i++) {
			coll[i].addEventListener("click", function() {
				this.classList.toggle("aberto");
				var content = this.nextElementSibling;
				if (content.style.maxHeight) {
					content.style.maxHeight = null;
				} else {
					content.style.maxHeight = "100%";
				}
			});
		}
	</script>
</body>
</html>
