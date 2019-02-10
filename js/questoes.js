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
function proximo(){
	if(alternativaescolhida == alternativacorreta){
		document.getElementById("resultado").style.color = "#0f0";
		texto = "Acertou";
	}else{
		document.getElementById("resultado").style.color = "#f00";
		texto = "Errou";
	}
	document.getElementById('resultado').innerHTML += texto;
	document.getElementById("resultado").style.display = "block";
}
