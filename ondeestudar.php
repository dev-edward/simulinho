<?php 
	session_start();
	if(!session_status() == PHP_SESSION_ACTIVE){
		header('location:index.php');
	}

	include_once("conexao.php");
	
?>
<html>
<head>
	<title>Onde Estudar?</title>
	<meta charset="utf-8" />
	<link href="css/principal.css" rel="stylesheet">
	<link href="css/lateral.css" rel="stylesheet">
	<link href="css/ondeestudar.css" rel="stylesheet">
</head>
<body>
	<script type="text/javascript" src="js/questoes.js"></script>
	<?php 
		if(session_status() == PHP_SESSION_ACTIVE){
			$btnQuestoes ="btn";
			$btnSimulado ="btn";
			$btnEstatisticas ="btn";
			$btnSobre ="btn";
			$btnRanking ="btn";
			$btnOndeEstudar ="atual";
			include_once("lateral.php");
		}
	?>
	<div class="conteudo">
		<div class='balao'>Khan Academy<br/>
		A Khan Academy é uma ONG educacional criada e sustentada por Sal Khan. Com a missão de fornecer educação de alta qualidade para qualquer um, em qualquer lugar, oferece uma coleção grátis de vídeos de matemática, medicina e saúde, economia e finanças, física, química, biologia, ciência da computação, entre outras matérias.
		</div>
		<div class='balao'>Khan Academy<br/>
		A Khan Academy é uma ONG educacional criada e sustentada por Sal Khan. Com a missão de fornecer educação de alta qualidade para qualquer um, em qualquer lugar, oferece uma coleção grátis de vídeos de matemática, medicina e saúde, economia e finanças, física, química, biologia, ciência da computação, entre outras matérias.
		</div>
		<div class='balao'>Khan Academy<br/>
		A Khan Academy é uma ONG educacional criada e sustentada por Sal Khan. Com a missão de fornecer educação de alta qualidade para qualquer um, em qualquer lugar, oferece uma coleção grátis de vídeos de matemática, medicina e saúde, economia e finanças, física, química, biologia, ciência da computação, entre outras matérias.
		</div>
		<div class='balao'>Khan Academy<br/>
		A Khan Academy é uma ONG educacional criada e sustentada por Sal Khan. Com a missão de fornecer educação de alta qualidade para qualquer um, em qualquer lugar, oferece uma coleção grátis de vídeos de matemática, medicina e saúde, economia e finanças, física, química, biologia, ciência da computação, entre outras matérias.
		</div>
		<div class='balao'>Khan Academy<br/>
		A Khan Academy é uma ONG educacional criada e sustentada por Sal Khan. Com a missão de fornecer educação de alta qualidade para qualquer um, em qualquer lugar, oferece uma coleção grátis de vídeos de matemática, medicina e saúde, economia e finanças, física, química, biologia, ciência da computação, entre outras matérias.
		</div>
		
	</div>
</body>
</html>
