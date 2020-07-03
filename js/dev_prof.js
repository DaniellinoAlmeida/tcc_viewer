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
$(document).on("click", "#mod2", function(){
  $(".modulo").text("- 2º módulo")
});

$(document).on("click", "#mod3", function(){
  $(".modulo").text("- 3º módulo")
});

$(document).on("click", "#mod4", function(){
  $(".modulo").text("- 4º módulo")
});

$(document).on("click", "#mod2", function(){
  $("#conteudo_card").html('<ul class="collection"> <li class="collection-item avatar"> <img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" id="tcc1" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li><li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b><p class="subtitulo_tcc">Por Butterfly Co.</p><a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b><p class="subtitulo_tcc">Por Butterfly Co.</p><a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li></ul>')
});
$(document).on("click", "#mod3", function(){
  $("#conteudo_card").html('<ul class="collection"> <li class="collection-item avatar"> <img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li><li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b><p class="subtitulo_tcc">Por Butterfly Co.</p><a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b><p class="subtitulo_tcc">Por Butterfly Co.</p><a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li></ul>')
});
$(document).on("click", "#mod4", function(){
  $("#conteudo_card").html('<ul class="collection"> <li class="collection-item avatar"> <img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li><li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b><p class="subtitulo_tcc">Por Butterfly Co.</p><a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b><p class="subtitulo_tcc">Por Butterfly Co.</p><a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li></ul>')
});

$(document).on("click", "#tcc1", function(){
  $("#conteudo_card").html('<ul class="collection"> <li class="collection-item avatar"> <img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li><li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b> <p class="subtitulo_tcc">Por Butterfly Co.</p> <a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b><p class="subtitulo_tcc">Por Butterfly Co.</p><a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li> <li class="collection-item avatar"><img src="../img/logo.jpg" alt="" class="circle logo_tcc"><b class="titulo">TCC Viewer</b><p class="subtitulo_tcc">Por Butterfly Co.</p><a href="#!" class="secondary-content"><i class="material-icons small">arrow_drop_down</i></a></li></ul>'),
  $(".botoes_enviar_baixar_entra").html('<div class="col s6"><div class="card botao_enviar_dps" for="enviar"><div class="card-content"><center><p>Insira o arquivo de TCC(.docx) aqui para postá-lo no TCC Viewer!</p></center><form action="#" class="file"><div class="file-field input-field"><div class="btn btn-large btn_enviar_dps"><i class="large material-icons">file_upload</i><input type="file"></div><div class="file-path-wrapper"><input class="file-path validate" type="text"></div></div></form></div></div></div><div class="col s6"><div class="card botao_devolver_dps" for="enviar"><div class="card-content"><center><p>Insira o arquivo de TCC(.docx) aqui para devolver ao aluno</p></center><form action="#" class="file"><div class="file-field input-field"><div class="btn btn-large btn_enviar_dps"><i class="large material-icons">file_upload</i><input type="file"></div><div class="file-path-wrapper"><input class="file-path validate" type="text"></div></div></form></div></div></div><div class="col s6"><div class="card botao_baixar_dps"><div class="card-content"><center><p>O TCC do aluno aparecerá aqui para download</p></center><img src="../img/baixar.png"></div></div></div>')
  $(".botoes_enviar_baixar_sai").empty()
});

$(document).on("click", "#enviar_tcc", function(){
  $("input").val("")
});

$(document).on("click", "#baixar_tcc", function(){
  $("span").remove()
});