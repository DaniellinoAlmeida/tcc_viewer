<?php 
    include_once('../include/professor/nav_prof_entrega.php');
    include_once('../include/professor/footer_prof.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/professor/entrega.css">
    <link rel="stylesheet" href="../css/style_input.css">

    <title>TCC Viewer</title>
    <link rel="shortcut icon" href="../icon/favicon.ico">
</head>
<body>
    <div class="row">
      <div class="col s6">
        <div class="input-field col s6 push-s1 select_curso">
					<select id="select_curso" onchange="navegacao()">
						<option disabled selected>Selecione o curso desejado</option>
            <option value="1">Administração</option>
            <option value="2">Desenvolvimento de Sistemas</option>
            <option value="3">Edificações</option>
            <option value="4">Enfermagem</option>
            <option value="5">Turismo</option>
					</select>
				</div>
      </div>
      <div class="col s6">
        <a class="btn btn_mod1 hover_mod" id="mod2" value="2">2º módulo</a> 
        <a class="btn btn_mod2 hover_mod" id="mod3" value="3">3º módulo</a>
        <a class="btn btn_mod3 hover_mod" id="mod4" value="4">4º módulo</a>
      </div>
    </div>
    <div class="row">
      <div class="col s6">
        <div class="card card_desc_perfil" style="overflow-y: auto; overflow-x:hidden">
          <div class="card-content">
            <nav class="navegação">
              <div class="nav-wrapper">
                <div class="col s12">
                  <b><a href="" class="cursos breadcrumb"></a></b>
                  <b><a href="" class="modulo breadcrumb"></a></b>
                </div>
              </div>
            </nav>
            <div id="conteudo_card">

            </div>
          </div>
        </div>
      </div>
      <div class="botoes_enviar_baixar_entra">
      
      </div>
      <div class="botoes_enviar_baixar_sai">
        <div class="col s6">
          <div class="card botao_enviar" for="enviar">
            <div class="card-content">
              <center><p>Insira o arquivo de TCC(.docx) aqui para postá-lo no TCC Viewer!</p></center>
              <form action="#" class="file">
              <div class="file-field input-field">
                <div class="btn btn-large btn_enviar">
                  <i class="large material-icons">file_upload</i>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col s6">
          <div class="card botao_devolver" for="enviar">
            <div class="card-content">
              <center><p>Insira o arquivo de TCC(.docx) aqui para devolver ao aluno</p></center>
              <form action="#" class="file">
              <div class="file-field input-field">
                <div class="btn btn-large btn_enviar">
                  <i class="large material-icons">file_upload</i>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col s6">
          <div class="card botao_baixar">
            <div class="card-content">
              <center><p>O TCC do aluno aparecerá aqui para download</p></center>
              <img src="../img/baixar.png">
            </div>
          </div>
        </div>
      </div>
    
  <script src="../js/dev_prof.js"></script>
  
</body>
</html>
    