function enviar() {
	 var nome = document.getElementById("nomeid");
	 if (nome.value != "") {
	 alert("Obrigado sr(a) "+ nome.value + "os seus dados foram encaminhados com sucesso");
	 }
	 else {
		 (alert("Não há texto escrito em seu nome"));
	 }
}
