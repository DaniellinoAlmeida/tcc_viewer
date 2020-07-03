<?php 
    include_once('footer_s_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tcc_s_login.css">
    
    <title>TCC Viewer</title>
    <link rel="shortcut icon" href="icon/favicon.ico">
</head>
<body>

<!-- navbar -->
    <div class="nav">
        <h4 class="local_atual"><b>TCC VIEWER</b></h4>
        <div class="pesquisa">
            <div class="input-field">
                <i class="large material-icons prefix">search</i>
                <input id="icon_prefix" type="text" class="autocomplete white-text">
                <label for="icon_prefix">Pesquisa</label>
            </div>
        </div>
        <div class="conteudo">
            <a class="btn btn-large btn_login botao_login" href="login.php"><i class="material-icons left">account_circle</i><b class="letra_login">Login</b></a>
        </div>    
    </div>
<!-- fim da navbar -->
<script type="text/javascript" src="js/nav.js"></script>