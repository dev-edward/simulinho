function MostrarFuncao(x,fun){
	x.style.backgroundColor = "#5391cc";
	x.style.paddingTop = "1px";
    document.getElementById(fun).style.display = "block";
}
function OcultarFuncao(x,fun){
	x.style.backgroundColor = "#2e466e";
	x.style.paddingTop = "0px";
	document.getElementById(fun).style.display = "none";
}

function AbrirConf(){
	document.getElementById('opcoesConf').style.display = 'block';
	document.getElementById('config').style.backgroundColor = '#00CECBcc';
}
function FecharConf(){
	document.getElementById('opcoesConf').style.display = 'none';
	document.getElementById('config').style.backgroundColor = 'transparent';
}


