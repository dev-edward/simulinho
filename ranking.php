<?php 
	session_start();
	if(!session_status() == PHP_SESSION_ACTIVE){
		header('location:index.php');
	}
?>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/principal.css" rel="stylesheet">
	<link href="css/lateral.css" rel="stylesheet">
	<link href="css/ranking.css" rel="stylesheet">
	<title>Ranking</title>
</head>
</body>

	<?php 
		if(session_status() == PHP_SESSION_ACTIVE){
			$btnQuestoes ="btn";
			$btnSimulado ="btn";
			$btnEstatisticas ="btn";
			$btnSobre ="btn";
			$btnRanking ="atual";
			$btnOndeEstudar ="btn";
			include_once("lateral.php");
		}
	?>
	<div class="conteudo">
<div class="conteiner">
	<div class="titulo">
		RANKING
	</div>
	<div>
		<div>
			<img src="img/personagem1.svg">
		</div>
		<div>
			usuario.123
		</div>
	</div>
</div>


<div class="lista">

	<div class="usuario2">
		<img src="img/a4.png">
		<span>Usuario.120</span>
		<span>442</span>
	</div>
	<div class="usuario2">
		<img src="img/a6.png">
		<span>Usuario.121</span>
		<span>430</span>
	</div>
	
	<div class="usuario2">
		<img src="img/a1.png">
		<span>Usuario.122</span>
		<span>414</span>
	</div>
	<div class="usuario2">
		<img src="img/personagem1.svg">
		<span>Usuario.123</span>
		<span>396</span>
	</div>
	<div class="usuario2">
		<img src="img/a2.png">
		<span>Usuario.124</span>
		<span>378</span>
	</div>
	<div class="usuario2">
		<img src="img/a3.png">
		<span>Usuario.125</span>
		<span>341</span>
	</div>
	<div class="usuario2">
		<img src="img/a4.png">
		<span>Usuario.126</span>
		<span>319</span>
	</div>
	<div class="usuario2">
		<img src="img/a5.png">
		<span>Usuario.127</span>
		<span>298</span>
	</div>
	<div class="usuario2">
		<img src="img/a6.png">
		<span>Usuario.128</span>
		<span>279</span>
	</div>
	<div class="usuario2">
		<img src="img/a1.png">
		<span>Usuario.129</span>
		<span>268</span>
	</div>
	<div class="usuario2">
		<img src="img/a2.png">
		<span>Usuario.130</span>
		<span>240</span>
	</div>
	<div class="usuario2">
		<img src="img/a3.png">
		<span>Usuario.131</span>
		<span>231</span>
	</div>
	<div class="usuario2">
		<img src="img/a4.png">
		<span>Usuario.132</span>
		<span>224</span>
	</div>
	<div class="usuario2">
		<img src="img/a4.png">
		<span>Usuario.133</span>
		<span>217</span>
	</div>
	<div class="usuario2">
		<img src="img/a4.png">
		<span>Usuario.126</span>
		<span>201</span>
	</div>
	<div class="usuario2">
		<img src="img/a4.png">
		<span>Usuario.126</span>
		<span>198</span>
	</div>
	<div class="usuario2">
		<img src="img/a4.png">
		<span>Usuario.126</span>
		<span>167</span>
	</div>
	<div class="usuario2">
		<img src="img/a4.png">
		<span>Usuario.126</span>
		<span>150</span>
	</div>
	<div class="usuario2">
		<img src="img/a4.png">
		<span>Usuario.126</span>
		<span>127</span>
	</div>

</div>

<div class="mascote">

	<img src="img/robo-1.svg">
	<div class="balaodialogo">
		<h4>Sua pontuação:<br>396<br>Você esta na posição:<br> n° 4</h4>
	</div>
</div>
</div>


</body>

</html>
