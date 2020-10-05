function mostraraba(evt, nomeAba) {
		var i, conteudodaaba, aba;
		conteudodaaba = document.getElementsByClassName("conteudodaaba");
		for (i = 0; i < conteudodaaba.length; i++) {
		conteudodaaba[i].style.display = "none";
		}
		aba = document.getElementsByClassName("aba");
		for (i = 0; i < aba.length; i++) {
		aba[i].className = aba[i].className.replace(" active", "");
		}
		document.getElementById(nomeAba).style.display = "block";
		evt.currentTarget.className += " active";
		if (nomeAba == "acessar") {
			console.log("acessar");
			document.getElementById('abaacessar').style.borderColor = "#F58F29";
			document.getElementById('abacadastro').style.borderColor = "#5391cc";
		} else {
			document.getElementById('abaacessar').style.borderColor = "#5391cc";
			document.getElementById('abacadastro').style.borderColor = "#F58F29";
			console.log("cadastrar");
		}
}
