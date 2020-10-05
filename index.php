<?php
	
	include_once("conexao.php");
	$loginIncorreto = false;
	if(isset($_POST["login"])){
		$email = $_POST["email_login"];
		$senha = md5($_POST["senha_login"]);
		$sql = "SELECT IDUsuario FROM TBUsuario WHERE Email = '$email' AND Senha = '$senha'";
		$resultado = $conexao->query($sql);
		$quantidadeLinhas = $resultado->num_rows;
		if($quantidadeLinhas > 0){
			session_start();
			$registro = $resultado->fetch_assoc();
			$_SESSION['id'] = $registro["IDUsuario"];
		}else{
			$loginIncorreto = true;
		}
	}
	
	$dadosInconpletos = False;
	$contaJaCadastrada = False;
	$senhasDiferem = False;
	$cadastroEfetuado = False;
	$erroCadastro = False;
	
	$formularioCadastro = False;
	if(isset($_POST["cadastrar"])){
		$formularioCadastro = True;
		$nome = $_POST["nome"];
		$sexo = $_POST["sexo"];
		$dataNascimento = $_POST["dataNascimento"];
		$usuario = $_POST["nomeUsuario"];
		$email = $_POST["emailCadastro"];
		$senha = md5($_POST["senhaCadastro"]);
		$senha2 = md5($_POST["senhaCadastro2"]);
		$curso = $_POST["curso"];
		$unidade = $_POST["unidade"];
		
		
		
		if(empty($nome) || empty($sexo) || empty($dataNascimento) || empty($usuario) || empty($email) || empty($senha) ){
			$dadosInconpletos = True;
		}else{
			$sql = "SELECT * FROM TBUsuario WHERE email = '$email'";
			$resultado = $conexao->query($sql);
			$quantidadeLinhas = $resultado->num_rows;
			if($quantidadeLinhas > 0){
				$contaJaCadastrada = True;
			}elseif($senha!=$senha2){
				$senhasDiferem = True;
			}else{
				$sqlCadastro = "INSERT INTO TBUsuario (";
				$sqlCadastro.="Nome,";
				$sqlCadastro.="Sexo,";
				$sqlCadastro.="DataNascimento,";
				$sqlCadastro.="Usuario,";
				$sqlCadastro.="Email,";
				$sqlCadastro.="Senha,";
				$sqlCadastro.="Curso,";
				$sqlCadastro.="Unidade)";
				$sqlCadastro.="VALUES ('$nome','$sexo','$dataNascimeto','$usuario','$email','$senha','$curso','$unidade')";
				if ($conexao->query($sqlCadastro) === TRUE) {
					$cadastroEfetuado = True;
					session_start();
					$sql = "SELECT IDUsuario FROM TBUsuario WHERE Email = '$email' AND Senha = '$senha'";
					$resultado = $conexao->query($sql);
					$registro = $resultado->fetch_assoc();
					$_SESSION['id'] = $registro["IDUsuario"];
				} else {
					$erroCadastro = True;
					echo "Erro ao cadastrar o aluno: " . $sqlCadastro . "<br>" . $conexao->error;
				}
			}
		}
	}
	
	
	
	$conexao->close();
?>


<html>
<head>
	<title>Pagina inicial</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/principal.css" rel="stylesheet">
	<link href="css/login-cadastro.css" rel="stylesheet">
	<link href="css/lateral.css" rel="stylesheet">
	<script src="js/login-cadastro.js"></script>
</head>
<body <?php if($formularioCadastro){echo "onload=\"mostraraba(event, 'cadastro')\"";} ?>>
	
	<?php
		if(session_status() == PHP_SESSION_ACTIVE){
			$btnQuestoes ="btn";
			$btnSimulado ="btn";
			$btnEstatisticas ="btn";
			$btnSobre ="btn";
			$btnRanking ="btn";
			$btnOndeEstudar ="btn";
			include_once("lateral.php");
		}
	?>

	<div class="conteudo" <?php if(session_status() == PHP_SESSION_NONE){echo "style='margin-left:0;'";} ?>>
		
		<?php if(session_status() == PHP_SESSION_ACTIVE){ ?>
		
		
		<div class="boasvindas">
			<img src="img/robo-1.svg">
			
			<div class="mensagemRobo">
				<?php if($cadastroEfetuado){echo "<h3>Cadastro realizado com sucesso Usuário123 </h3>";}?>
				Bem vindo ao simulinho vestibulator, aqui você poderá realizar questões das provas anteriores do vestibulinho de acordo com sua necessidade.<br>
				Passe o mouse sobre o ícone <span class="interrogacao2">?</span> para descobrir para que serve cada página.
			</div>
			
		</div>
		
		<?php } ?>
		
		<?php if(session_status() == PHP_SESSION_NONE){	?>
		<div class="loginRegistro">
			<div class="mascote">
				<div class="svg">
					<img src="img/robo-2.svg">
				</div>
			</div>
			<div class="abas">
					<button id="abaacessar" class="aba" onclick="mostraraba(event, 'acessar')">Entrar na conta</button>
					<button id="abacadastro" class="aba" onclick="mostraraba(event, 'cadastro')">Cadastrar-se</button>
			</div>
			<div class="formularios">
				<div id="acessar" class="conteudodaaba">
					<h2>Entrar</h2>
						<!-- A seguinte div é para representar os botões de login com facebook e google -->
						<div>
							
							<img class="social" src="img/temp-facebook-login-button.png">
							<img class="social" src="img/temp-btn-google.png">
						</div>
					<form method="POST" action="index.php">

					<input class="input-texto" type="email" name="email_login" placeholder="Endereço de email" />
					<input class="input-texto" type="password" name="senha_login" placeholder="Senha" />
						<?php 
							if($loginIncorreto){echo "<h3>Dados de login incorretos!</h3>";}
						?>
					<input class="btn-submit" type="submit" name="login" value="Entrar" />
					
					
					</form>
				</div>
				<div id="cadastro" class="conteudodaaba">
					<h2>Cadastrar</h2>
					<!-- A seguinte div é para representar os botões de login com facebook e google -->
						<div>
							<img class="social" src="img/temp-facebook-login-button.png">
							<img class="social" src="img/temp-btn-google.png">
						</div>
					
					<form method="POST" action="index.php">	

					<input class="input-texto" type="text" name="nome" placeholder="Nome completo" />
					<div>
					<label class="radiobtn"><input type="radio" name="sexo" value="Masculino"> Masculino</input></label>
					<label class="radiobtn"><input type="radio" name="sexo" value="Feminino"> Feminino</input></label>
					</div>
					<input class="input-texto" type="date" name="dataNascimento" />
					<input class="input-texto" type="text" name="nomeUsuario" placeholder="Nome de usuário" />
					<input class="input-texto" type="email" name="emailCadastro" placeholder="Endereço de email" />
					<input class="input-texto" type="password" name="senhaCadastro" placeholder="Senha" />
					<input class="input-texto" type="password" name="senhaCadastro2" placeholder="Repetir senha" />
					
					<div class="select">
						<select name="curso">
							<option selected disabled hidden>Escolha o curso que pretende fazer</option>
							<option value="informática">Informática</option>
							<option value="Desenvolvimento De Sistemas">Desenvolvimento de Sistemas</option>
							<option value="Administração">Administração</option>
						</select>
					</div>
					
					<div class="select">
						<select name="unidade">
							<option selected disabled hidden>Escolha a unidade que pretende frequentar</option>
							<option value="Etec Prof Aprígio Gonzada">Etec Prof. Aprígio Gonzaga</option>
							<option value="Etec Martin Luther King">Etec Martin Luther King</option>
							<option value="Etec de São Paulo">Etec de São Paulo</option>
						</select>
					</div>
					
					<input class="btn-submit" type="submit" name="cadastrar" value="Cadastrar" />
					<?php if($dadosInconpletos){echo "Preencha todos os dados obrigatórios!";}?>
					<?php if($contaJaCadastrada){echo "Uma conta com este email já existe!";}?>
					<?php if($senhasDiferem){echo "As senhas não coincidem!";}?>
					<?php if($erroCadastro){echo "Um erro ocorreu durante o cadastro, tente novamente mais tarde!";}?>
					
					</form>
				</div>
			</div>
		</div>
		
		<?php } ?>
	</div>
</body>
</html>
