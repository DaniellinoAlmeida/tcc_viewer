<?php 
    include_once('../include/aluno/nav_aluno.php');
    include_once('../include/aluno/footer_aluno.php');
?>

<!--  -->
    <div class="card menu">
        <div class="content">
            <form action="#">
                <span class=""><i class="material-icons right">search</i>Pesquisar por:</span>
                <div class="divider"></div>
                    <div class="input-field col s12">
                        <select class="multiple">
                            <option value="" selected disabled>Escolha o ano</option>
                            <option value="1">2015</option>
                            <option value="2">2014</option>
                            <option value="3">2015</option>
                            <option value="3">Nenhum</option>
                        </select>
                            <label>Seleção por Ano</label>
                    </div>
                    <div class="input-field col s12">
                        <select class="multiple">
                            <option value="" selected disabled>Escolha o curso</option>
                            <option value="1">Administração</option>
                            <option value="2">Desenvolvimento de Sistemas</option>
                            <option value="3">Enfermagem</option>
                            <option value="3">Turismox</option>
                        </select>
                            <label>Seleção por Curso</label>
                    </div>        
                    <p>
                    <div class="input-field col s12">
                        <select class="multiple">
                            <option value="" selected disabled>Escolha a equipe</option>
                            <option value="3">Nenhum</option>
                            <option value="1">Ada</option>
                            <option value="3">Boolean Dreams</option>
                            <option value="2">Butterfly Corporation</option>
                            <option value="3">Hórus System</option>
                            <option value="3">Hawk Eye</option>
                        </select>
                            <label>Seleção por Curso</label>
                    </div> 
                    </p>
            </form>
        </div>
    </div>


<div class="container">

<div class="row">
        <div class="col s12 m6 l6">
            <div class="card large">
                <div class="card-image waves-effect waves-block waves-dark card_imagem_logo">
                    <img src="../img/Logo.jpg" class="activator img_logo_tcc responsive">
                </div>
                <div class="card-content">
                    <span class="card-title activator"><b>TCC viewer por Butterfly Corp.</b><i class="material-icons right">more_vert</i></span>
                    <p class="conteudo_tcc">O TCC Viewer é uma biblioteca de TCC’s que visa dar apoio 
                          aos alunos e professores da ETEC Adolpho Berezin. Nosso site é uma biblioteca online para 
                          tirar os TCC’s físicos do fundo da biblioteca da escola, pois estão esquecidos e só ocupam 
                          espaço de livros que poderiam estar lá, também...</p>
                </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">TCC viewer por Butterfly Corp.<i class="material-icons right">close</i></span>
                          <b><p>Integrantes:</b><br> -Bryan Patucci <br> -Daniel Lino <br> -João Gabriel <br> -Leonardo Macedo</p>
                          <b><p class="">Orientador(a):</b> <br> Graciete Henriques</p>
                          <b><p class="">Curso:</b> <br> Desenvolvimento de Sistemas</p>
                          <b><p class="">1ª semestre de 2020</b></p>
                          <b><p class="">Resumo:</b> <br> O TCC Viewer é uma biblioteca de TCC’s que visa dar apoio 
                          aos alunos e professores da ETEC Adolpho Berezin. Nosso site é uma biblioteca online para 
                          tirar os TCC’s físicos do fundo da biblioteca da escola, pois estão esquecidos e só ocupam 
                          espaço de livros que poderiam estar lá, também queremos fazer com que a correção de TCC’s 
                          do professor seja mais eficaz e poupe mais tempo de aula.</p>
                          <a class="btn-large waves-effect waves-darken modal-trigger" href="#baixarTCC" id="btnBaixar">Baixar TCC</a>
                    </div>
                </div>
            </div>
            <div id="baixarTCC" class="modal">
                <div class="modal-content">
                  <h4 class="red-text text-darken-2">ATENÇÃO:</h4>
                  <p class="red-text text-darken-2">Para obtermos um controle dos TCCs baixados pedimos que complete o formulário abaixo.</p>
                  <div class="row">
                    <div class="input-field col s4">
                        <input id="nome" type="text" class="validate rm">
                        <label for="nome" class="black-text">Nome completo</label>
                    </div>
                    <div class="input-field col s8">
                        <textarea id="textarea" class="materialize-textarea textarea_fixa" maxlength="342"></textarea>
                        <label for="textarea" class="black-text">Porque quer baixar este TCC
                        </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s4">
                        <input id="email" type="email" class="validate rm">
                        <label for="email" class="black-text">E-mail</label>
                    </div>
                  </div>
                  <label>
                      <input type="checkbox" name="termos">
                      <span>Eu li e concordo com os <a href="Termos_de_Uso.php">Termos de Uso</a>.</span>  
                  </label>
                </div>
                <div class="modal-footer">
                  <a class="modal-close btn btn_fechar_modal left">Voltar</a>
                  <a class="btn btn_baixar_TCC" href="download/Butterfly_TCC_Viewer.docx" download="Butterfly_TCC_Viewer.docx">Baixar TCC</a>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="card large">
                    <div class="card-image waves-effect waves-block waves-dark card_imagem_logo">
                        <img src="../img/horus.png" class="activator img_logo_tcc">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><b>Hórus System por Raven</b><i class="material-icons right">more_vert</i></span>
                        <p class="conteudo_tcc">
                            Um gereniador de estágios para o curso de enfermagem.
                        </p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">TCC viewer por Butterfly Corp.<i class="material-icons right">close</i></span>
                          <b><p>Integrantes:</b><br> -Bryan Patucci <br> -Daniel Lino <br> -João Gabriel <br> -Leonardo Macedo</p>
                          <b><p class="">Orientador(a):</b> <br> Graciete Henriques</p>
                          <b><p class="">Curso:</b> <br> Desenvolvimento de Sistemas</p>
                          <b><p class="">1ª semestre de 2020</b></p>
                          <b><p class="">Resumo:</b> <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                          Iure, explicabo. Aliquid, deserunt quis? Aperiam, quia blanditiis? Consequatur saepe 
                          voluptatum adipisci alias atque unde vero illum magni id! Omnis dolorem nobis, aut
                           voluptatem quaerat fugiat aliquam laborum sequi illo nam reprehenderit, nesciunt 
                           unde accusamus molestias, dignissimos architecto maxime qui ad minus id consectetur. 
                           Dicta magnam nihil delectus quo quae voluptas laboriosam quia, aliquam repudiandae hic 
                           obcaecati? Commodi, error est harum nobis iste aut eum nam dignissimos corrupti sapiente
                            nisi facilis repellendus quis obcaecati doloribus blanditiis quo ut voluptatem magnam? 
                            Dolorum dolore harum animi quod tenetur nisi optio culpa assumenda blanditiis error?</p>
                          <a class="btn-large waves-effect waves-darken modal-trigger" href="#baixarTCC" id="btnBaixar">Baixar TCC</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col s12 m6 l6">
            <div class="card large">
                <div class="card-image waves-effect waves-block waves-dark card_imagem_logo">
                    <img src="img/logoprojeto.png" class="activator img_logo_tcc">
                </div>
                <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><b>Projeto por Hawk Eye</b><i class="material-icons right">more_vert</i></span>
                    <p class="conteudo_tcc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">TCC viewer por Butterfly Corp.<i class="material-icons right">close</i></span>
                          <b><p>Integrantes:</b><br> -Bryan Patucci <br> -Daniel Lino <br> -João Gabriel <br> -Leonardo Macedo</p>
                          <b><p class="">Orientador(a):</b> <br> Graciete Henriques</p>
                          <b><p class="">Curso:</b> <br> Desenvolvimento de Sistemas</p>
                          <b><p class="">1ª semestre de 2020</b></p>
                          <b><p class="">Resumo:</b> <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                          Iure, explicabo. Aliquid, deserunt quis? Aperiam, quia blanditiis? Consequatur saepe 
                          voluptatum adipisci alias atque unde vero illum magni id! Omnis dolorem nobis, aut
                           voluptatem quaerat fugiat aliquam laborum sequi illo nam reprehenderit, nesciunt 
                           unde accusamus molestias, dignissimos architecto maxime qui ad minus id consectetur. 
                           Dicta magnam nihil delectus quo quae voluptas laboriosam quia, aliquam repudiandae hic 
                           obcaecati? Commodi, error est harum nobis iste aut eum nam dignissimos corrupti sapiente
                            nisi facilis repellendus quis obcaecati doloribus blanditiis quo ut voluptatem magnam? 
                            Dolorum dolore harum animi quod tenetur nisi optio culpa assumenda blanditiis error?</p>
                          <a class="btn-large waves-effect waves-darken modal-trigger" href="#baixarTCC" id="btnBaixar">Baixar TCC</a>
                    </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="card large">
                <div class="card-image waves-effect waves-block waves-dark card_imagem_logo">
                    <img src="img/ada.png" class="activator img_logo_tcc">
                </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><b>Serviços Gerais por Ada Project</b><i class="material-icons right">more_vert</i></span>
                        <p class="conteudo_tcc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                     <div class="card-reveal">
                        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <footer class="center-align">
        <span>Criado por: Butterfly Corp. &copy</span>
    </footer>
    <script type="text/javascript" src="../js/tcc.js"></script>
</body>
</html>