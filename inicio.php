<?php 
	include_once 'classes/usuario.class.php';
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"]) ){
		header("location: index.php");
		exit();
	}
	else{
		$usuario = new usuario($_SESSION['email'], $_SESSION['senha']);
			if ($usuario->getId()) {
				$nomeUsuario = $usuario->getNome();
				// echo '<a href="index.php?-acao=desconectar">Desconectar </a> </br></br>';
			}
	}
 ?>

<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="visual/css/style-user.css">
</head>
<body>	
	
	<div id="menu-lateral">
		<div id="menu-topo">
			<div id="img-usuario">
				<a href="#"><img src="visual/img/usuario-padrao.png"></a>
			</div>
			<p><?php echo $nomeUsuario; ?></p>
		</div>
		<!-- <h1>hue</h1> -->

		<ul>
			<li><a href="">Receitas</a></li>
			<li><a href="">Ingredientes</a></li>
			<li><a href="">configurações</a></li>
		</ul>
	</div>

	<a href="controles/validacoes.php?acao=desconectar"><img src="visual/img/icons/logoff2.png" class="sair"></a>

	<div class="container">
		
	</div>
</body>
</html>