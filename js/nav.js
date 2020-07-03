//sidenav
$(document).ready(function(){
  $('.sidenav').sidenav();
});

//barra de pesquisa
$(document).ready(function(){
  $('input.autocomplete').autocomplete({
    data: {
      "TCC Viewer": "img/Logo.jpg",
      "Horus System": "img/horus.png",
      "Ada Project": "img/ada.png",
      "Daniel Lino de Almeida": "img/perfil.png",
    },
  });
});

//modal de baixar TCC
$(document).ready(function (){
  $(".modal").modal();
});