<?php 
	include_once 'classes/conexao_bd.class.php';
  	include_once 'classes/usuario.class.php';

	$msg = "";
	$start = 0;
	if (isset($_GET['escolha'])) {
		$start = 1;
	}

	if ($start == 1) {
		
		switch ($_POST['acao']) {
			case 'acesso':
				$usuario = new usuario($_POST['email'], md5($_POST['senha']));
				if ($usuario->getId()) {
					$_SESSION['email'] = $usuario->getEmail();
					$_SESSION['senha'] = $usuario->getSenha();
					header('location: inicio.php');
				}
				else{
					$msg = "E-mail ou senha incorreta!";
				}
			break;
			
			case 'cadastro':
				// $bd-> new bd();
				// $bd->conectar();
				$query = "SELECT * FROM usuarios";
				$resultado = $bd->query($query);
				$cont = 0;
				while ( $linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
					if ($linha['email'] == $_POST['email']) {
						$cont = 1;
					}
				}
				if ($cont == 0) {
					$usuario = new usuario();
					$usuario->setNome($_POST['nome']);
					$usuario->setEmail($_POST['email']);
					$usuario->setSenha(md5($_POST['senha']));
					$usuario->cadastrar();	
					$msg = "Cadastro efetuado com sucesso!";			
				}
				else{
					$msg = "Email ja existente!";
				}
			
			break;

			case 'desconectar':
				$_SESSION['email'] = '';
				$_SESSION['senha'] = '';
				header('location: index.php');
			break;
		}	
	}
	
 ?>