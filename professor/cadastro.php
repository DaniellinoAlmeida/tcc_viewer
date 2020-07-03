<?php 
    include_once('../include/professor/nav_cadastro.php');
    include_once('../include/professor/footer_prof.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_input.css">
    <link rel="stylesheet" href="../css/professor/cadastros.css">
    
    <title>TCC Viewer</title>
    <link rel="shortcut icon" href="../icon/favicon.ico">
</head>
<body>
    <div class="container-cad">
        <div class="row">
            <div class="col s6 ">
                <figure>
                    <figcaption>Cadastrar</figcaption>
                    <!-- btn drop -->
                    <a class="dropdown-trigger" href="#" data-target="dropdown1"><img src="../img/cadastrar.png" class="btn_cadastrar"></a>

                    <!-- conteudo dropdown -->
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="#!" class="black-text" id="aluno">Aluno</a></li>
                        <div class="divider"></div>
                        <li><a href="#!" class="black-text" id="Professor">Professor</a></li>
                    </ul>
                </figure>
                <div class="campo_cadastrar">
                    <div class="body_aluno"></div>
                        <div class="dados">
                            
                        </div>
                    <p class="campo_cadastrar_aviso">Selecione algo para cadastrar<br>para aparecer algo aqui</p>
                </div>
            </div>
            <div class="col s6">
                <div class="campo_cadastro">
                    <p class="campo_cadastrado_aviso">Selecione algo para cadastrar<br>para aparecer algo aqui</p>
                </div>
            </div>
        </div>
    </div>