<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>TCC Viewer</title>
</head>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/login.css">

<body>
	<!--Imagem de fundo a esquerda com um texto por cima-->
	<img id="imgFundo" src="img/aluno.png">
	<div class="row">
		<div class="col s8">
			<h2 class="Titulo_TCC_Login">Estude TCC online!</h2>
			<h5 class="Subtitulo_TCC_Login">No TCC Viewer você pode acessar um TCC em qualquer lugar</h5>
		</div>
	<!--Parte da direita onde é feito o login com um card como base-->
		<div class="input-field col s4">
			<div class="card-panel">
				<img class="img_Logo_TCC" src="img/tccw.png" alt="">
				<h5 class="center" id="nomelogin">Login no TCC Viewer</h5>
				<div class="input-field col s12">
					<label>Nivel de Acesso</label>
				</div>
				<div class="input-field col s12">
					<select id="nivel_de_acesso">
						<option disabled selected>Selecione o nível de acesso</option>
						<option value="1">Supervisor</option>
						<option value="2">Professor</option>
						<option value="3">Aluno</option>
					</select>
				</div>
				<div class="input-field col s12">
					<input id="rm" type="number" class="validate rm">
					<label for="rm">Insira seu RM</label>
				</div>
				<div class="input-field col s12">
					<input id="senha" type="password" class="validate senha">
					<label for="senha">Coloque sua senha</label>
				</div>
				<p class="esqueceu_senha"><a href="#">Esqueceu sua senha?</a></p>
				<a class="btn-large Botao_Entrar" onclick="login()">Entrar</a>
				<p class="ou">ou</p>
				<p class="Texto_Login"><a href="tcc_s_login.php">Entrar sem login</a></p>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/tcc.js"></script>
</body>
</html>