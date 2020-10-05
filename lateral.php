<script src="js/lateral.js"></script>
<div class="lateral">
	<div class="usuario">
		<div id="personagem">
			<img src="img/personagem1.svg" alt="personagem">
		</div>
		<div id="info">
			<span class="nickname">Usuario.123</span><br>
			<span>Nivel: Iniciante</span><br>
			<span>Meta: Desenvolvimento de sistemas</span><br>
			<span>Unidade: Prof. Aprigio Gonzaga</span><br>
			<span class="n-icone"><img  class="iconeN" src="img/coin.png">390</span>
			<span class="n-icone"><img  class="iconeN" src="img/medalha.png">27</span><br/>
			<a class="btn-p" href="personagem.php">Personagem</a>
			<div id="config" class="btn-config" onclick="AbrirConf()" onblur="FecharConf()"><img src="img/config.png"><ul id="opcoesConf"><li>Alterar nome</li><li>Alterar email</li><li>Alterar senha</li><li class="sair">Sair</li></ul></div>
		</div>
	</div>
	<div class="botoes">
		<div class="<?php echo $btnQuestoes; ?>">
			<a href="questoes.php">Questões Aleatórias<span id="int1" onmouseover="MostrarFuncao(this,'fun1')" onmouseout="OcultarFuncao(this,'fun1')" class="interrogacao">?<span id="fun1" class="funcao">Esta página mostra as questões de forma aleatória.</span></span></a><div></div>
		</div>
		<div class="<?php echo $btnSimulado; ?>">
		<a href="simulado.php">Modo Simulado<span id="int2" onmouseover="MostrarFuncao(this,'fun2')" onmouseout="OcultarFuncao(this,'fun2')" class="interrogacao">?<span id="fun2" class="funcao">Nesta página você seleciona a quantidade de questões e as matérias que deseja responder.</span></span></a><div></div>
		</div>
		<div class="<?php echo $btnEstatisticas; ?>">
			<a href="estatisticas.php">Estatísticas<span id="int3" onmouseover="MostrarFuncao(this,'fun3')" onmouseout="OcultarFuncao(this,'fun3')" class="interrogacao">?<span id="fun3" class="funcao">Aqui você tem os gráficos do seu desempenho.</span></span></a><div></div>
		</div>
		<div class="<?php echo $btnRanking; ?>">
			<a href="ranking.php">Ranking<span id="int4" onmouseover="MostrarFuncao(this,'fun4')" onmouseout="OcultarFuncao(this,'fun4')" class="interrogacao">?<span id="fun4" class="funcao">Veja os usuários com mais medalhas e sua posição no ranking global.</span></span></a><div></div>
		</div>
		<div class="<?php echo $btnOndeEstudar; ?>">
			<a href="ondeestudar.php">Onde Estudar<span id="int5" onmouseover="MostrarFuncao(this,'fun5')" onmouseout="OcultarFuncao(this,'fun5')" class="interrogacao">?<span id="fun5" class="funcao">Aqui reunimos alguns sites, canais do youtube, e outros locais da internet onde você pode estudar os conteudos da prova.</span></span></a><div></div>
		</div>
		<div class="<?php echo $btnSobre; ?>">
			<a href="informacoes.php">Sobre o vestibulinho<span id="int6" onmouseover="MostrarFuncao(this,'fun6')" onmouseout="OcultarFuncao(this,'fun6')" class="interrogacao">?<span id="fun6" class="funcao">Se você tem dúvidas sobre a incrição, prova, matrícula, etc. Veja as respostas nesta página.</span></span></a><div></div>
		</div>
	</div>
</div>
