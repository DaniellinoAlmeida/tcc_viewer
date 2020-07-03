//Select de ano
$(document).ready(function(){
  $('select').formSelect();
})

//modal de baixar TCC
$(document).ready(function (){
  $(".modal").modal();
})

function login(){
	if(document.getElementById('nivel_de_acesso').value == "1") {
		window.location.href = "supervisor/tcc.php"; 
 	}
	if(document.getElementById('nivel_de_acesso').value == "2") {
		window.location.href = "professor/tcc.php"; 
	}
	if(document.getElementById('nivel_de_acesso').value == "3") {
		window.location.href = "aluno/tcc.php"; 
	}
}