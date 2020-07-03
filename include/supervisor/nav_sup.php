<?php 
    include_once('footer_sup.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/supervisor/sup.css">
    <link rel="stylesheet" href="../css/style_input.css">
    
    <title>TCC Viewer</title>
    <link rel="shortcut icon" href="../icon/favicon.ico">
</head>
<body>

<!-- side nav -->
    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
            <a class="modal-trigger" href="#notifica"><img src="../img/notifica.png" class="notifica"></a>
                <div class="modal modal-fixed-header" id="notifica">
                    <div class="modal-header">
                        <h4 class="titulo_nav">Notificações</h4>
                        <a class="btn z-depth-0 botao_nav modal-close botao_x"><i class="large material-icons">close</i></a>
                    </div>
                    <div class="modal-content">
                        <ul class="collection lista_notificação">
                            <a href="../aluno/dev.php" class="collection-item red-text text-darken-2">Seu professor corrigiu seu TCC! <br><b>Correção de TCC</b></a>
                            <a href="../aluno/entrega.php" class="collection-item red-text text-darken-2">Seu TCC foi aprovado e postado na biblioteca! Parabens <br><b>Análise de TCC</b></a>
                            <a href="../aluno/tcc.php" class="collection-item red-text text-darken-2">Seu professor corrigiu seu TCC! <br><b>Correção de TCC</b></a>
                            <a href="../aluno/dev.php" class="collection-item red-text text-darken-2">Seu professor corrigiu seu TCC! <br><b>Correção de TCC</b></a>
                            <a href="../aluno/entrega.php" class="collection-item red-text text-darken-2">Seu TCC foi aprovado e postado na biblioteca! Parabens <br><b>Análise de TCC</b></a>
                            <a href="../aluno/tcc.php" class="collection-item red-text text-darken-2">Seu professor corrigiu seu TCC! <br><b>Correção de TCC</b></a>
                            <a href="../aluno/dev.php" class="collection-item red-text text-darken-2">Seu professor corrigiu seu TCC! <br><b>Correção de TCC</b></a>
                            <a href="../aluno/entrega.php" class="collection-item red-text text-darken-2">Seu TCC foi aprovado e postado na biblioteca! Parabens <br><b>Análise de TCC</b></a>
                            <a href="../aluno/tcc.php" class="collection-item red-text text-darken-2">Seu professor corrigiu seu TCC! <br><b>Correção de TCC</b></a>
                            <a href="../aluno/dev.php" class="collection-item red-text text-darken-2">Seu professor corrigiu seu TCC! <br><b>Correção de TCC</b></a>
                            <a href="../aluno/entrega.php" class="collection-item red-text text-darken-2">Seu TCC foi aprovado e postado na biblioteca! Parabens <br><b>Análise de TCC</b></a>
                            <a href="../aluno/tcc.php" class="collection-item red-text text-darken-2">Seu professor corrigiu seu TCC! <br><b>Correção de TCC</b></a>
                            <a href="../aluno/dev.php" class="collection-item red-text text-darken-2">Seu professor corrigiu seu TCC! <br><b>Correção de TCC</b></a>
                            <a href="../aluno/entrega.php" class="collection-item red-text text-darken-2">Seu TCC foi aprovado e postado na biblioteca! Parabens <br><b>Análise de TCC</b></a>
                            <a href="../aluno/tcc.php" class="collection-item red-text text-darken-2">Seu professor corrigiu seu TCC! <br><b>Correção de TCC</b></a>
                        </ul>
                    </div>
                </div>
                <div class="total_notifica">2</div>
                <div class="background">
                    <img src="../img/prof.png" class="fundoPerfil">
                </div>
                <section class="nomealuno">
                    <a href="../supervisor/perfil_sup.php"><img src="../img/sup.png" class="menuperfil"></a>
                    <a href="perfil_sup.php"><span class="white-text name">Beatriz Cristina</span></a>
                    <a href=""><span class="white-text email">Supervisor(a)</span></a> 
                </section>
            </div>
        </li>
        <li><a href="tcc.php"><i class="material-icons"><img src="../icon/book.png" class="icone">biblio</i>Biblioteca</a></li>
        <div class="divider"></div>
        <li><a href="cadastro.php"><i class="material-icons"><img src="../icon/cadastro.png" class="icone">cadastro</i>Cadastros</a></li>
        <div class="divider"></div>
        <li><a href="#sair" class="modal-trigger"><i class="material-icons"><img src="../icon/sair.png" class="icone">sair</i>Sair</a></li>
            <div class="modal modal_sair" id="sair">
                <div class="modal-header modal_header_sair">
                </div>
                <div class="modal-content modal_conteudo_sair">
                    <h5 class="titulo_sair">Você deseja mesmo sair?</h5>
                    <div class="row botões_sair">
                        <div class="col s6">
                            <a href="../tcc_s_login.php" class="btn btn-large btn_sair_s"><b>Sim</b></a>
                        </div>
                        <div class="col s6">
                            <a class="btn btn-large modal-close btn_sair_n"><b>Não</b></a>
                        </div>
                    </div>
                </div>
            </div>
    </ul>
<!-- fim da side nav -->

<!-- navbar -->
    <div class="nav">
        <section><a href="#" data-target="slide-out" class="sidenav-trigger"><img src="../img/menuB.png" class="imgmenu"></a></section>
        <h4 class="local_atual"><b>BIBLIOTECA</b></h4>
        <div class="pesquisa">
            <div class="input-field">
                <i class="large material-icons prefix">search</i>
                <input id="icon_prefix" type="text" class="autocomplete white-text">
                <label for="icon_prefix">Pesquisa</label>
            </div>
        </div>
        <div class="conteudo">
            <div class="linha"></div>
            <a href="../supervisor/perfil_sup.php" class="foto"></a>
            <div class="coluna">
                <div class="login"><b>Beatriz Cristina</b></div>
                <div class="mod">Supervisor(a)</div>
            </div>
        </div>    
    </div>
<!-- fim da navbar -->
<script type="text/javascript" src="../js/nav.js"></script>