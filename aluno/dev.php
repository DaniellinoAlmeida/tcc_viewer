<?php 
    include_once('../include/aluno/nav_aluno_dev.php');
    include_once('../include/aluno/footer_aluno.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="../css/aluno/dev.css">
    <link rel="stylesheet" href="../css/style_input.css">
    
    <title>TCC Viewer</title>
    <link rel="shortcut icon" href="../icon/favicon.ico">
</head>
<body>
	<div class="container">
        <img src="../img/logo_equipe.jpg" class="equipe_perfil" alt="">
        <h4 class="nome_equipe_perfil"><b>Butterfly Corporation</b></h4>
        <p class="logo_equipe">Logo da Equipe</p>
  <div class="row">
    <div class="col s6">
      <div class="card card_desc_perfil">
        <div class="card-content">
          <p>A Butterfly Corporation é constituída por 4 integrantes, sendo eles: Bryan Patucci, Daniel Lino, 
            João Gabriel e Leonardo Batista, temos como objetivo oferecer softwares de qualidade para dar 
            suporte as pessoas e empresas, assim serão mais eficientes e alcançarão resultados satisfatórios 
            conseguindo o que querem por meio dos softwares que desenvolvemos.</p>
        </div>
      </div>
    </div>
    <div class="col s6">
      <div class="card botao_enviar" for="enviar">
        <div class="card-content">
          <center><p>Insira o arquivo de TCC(.docx) aqui</p></center>
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
          <a class="btn-floating btn-large btn_enviar_tcc" id="enviar_tcc"><i class="material-icons">send</i></a>
        </div>
      </div>
    </div>
    <div class="col s6">
      <div class="card botao_baixar">
        <div class="card-content">
          <center><p>O TCC corrigido aparecerá aqui para download</p></center>
          <a href="../download/Butterfly_TCC_Viewer_CORRIGIDO.docx" download="Butterfly_TCC_Viewer_CORRIGIDO.docx" id="baixar_tcc"><img src="../img/baixar.png"><span class="new badge notify_tcc" data-badge-caption="Novos TCCs" style="background-color: rgb(169, 0, 0);">1</span></a>
        </div>
      </div>
    </div>
  </div>
    
  <script src="../js/dev_aluno.js"></script>