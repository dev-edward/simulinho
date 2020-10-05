/*
 *função para o botão dica 
 */	
ligado = "nao";
function onoff(){
  if(ligado == "sim"){
    document.getElementById("lampada").src="img/lampada-off.png";
    document.getElementById("dica").style.display = "none";
    ligado = "nao";
  }else{
    document.getElementById("lampada").src="img/lampada-on.png";
    document.getElementById("dica").style.display = "block";
    ligado = "sim";
  }
  
}
/*
 *função para obter o valor da alternativa selecionada
 */	
var alternativaescolhida;
function radiobutons(){
	if(document.getElementById("altA").checked){
		alternativaescolhida = document.getElementById("altA").value;
	}else if(document.getElementById("altB").checked){
		alternativaescolhida = document.getElementById("altB").value;
	}else if(document.getElementById("altC").checked){
		alternativaescolhida = document.getElementById("altC").value;
	}else if(document.getElementById("altD").checked){
		alternativaescolhida = document.getElementById("altD").value;
	}else if(document.getElementById("altE").checked){
		alternativaescolhida = document.getElementById("altE").value;
	}
}

/*
 *função para o botão proximo
 */	
var texto;
var btnProximo = "<br><a href='questoes.php'>Próxima questao &#x25B6;</a>"
function proximo(){
	if(alternativaescolhida == alternativacorreta){
		document.getElementById("resultado").style.backgroundColor = "#0F8B8D";
		texto = "Acertou<br> +20 <img  class='iconeN' src='img/coin.png'> <br> +3 <img  class='iconeN' src='img/medalha.png'>"+btnProximo;
	}else{
		document.getElementById("resultado").style.backgroundColor = "#D1462F";
		texto = "Errou <br> Alternativa correta: <br> "+alternativacorreta+btnProximo;
	}
	document.getElementById('resultado').innerHTML = texto;
	document.getElementById("resultado").style.display = "block";
}
