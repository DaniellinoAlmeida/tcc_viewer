//Select de ano
$(document).ready(function(){
  $('select').formSelect();
})

//modal de baixar TCC
$(document).ready(function (){
  $(".modal").modal();
});

//navegação do breadcrumb pela escolha de cursos
function navegacao(){
  if(document.getElementById('select_curso').value == "1") {
    $(".cursos").text("Administração")
  }
  if(document.getElementById('select_curso').value == "2") {
    $(".cursos").text("Desenvolvimento de Sistemas")
  }
  if(document.getElementById('select_curso').value == "3") {
    $(".cursos").text("Edificações")
  }
  if(document.getElementById('select_curso').value == "4") {
    $(".cursos").text("Enfermagem")
  }
  if(document.getElementById('select_curso').value == "5") {
    $(".cursos").text("Turismo")
  }
};

//navegação do breadcrumb pela escolha de módulos
$(document).on("click", "#enviar_tcc", function(){
  $("input").val("")
});

$(document).on("click", "#baixar_tcc", function(){
  $("span").remove()
});