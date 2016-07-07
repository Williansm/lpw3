	<?php 
		$usuario = new usuario($_SESSION['email'], $_SESSION['senha']);
		if ($usuario->getId()) {
			echo 'Ola,'. $usuario->getNome().'!'. '</br>';
			echo '<a href="index.php?-acao=desconectar">Desconectar </a> </br></br>';
		}
		else{
			echo '	
			<div class="form-login">
				<form  name="acesso" method="get">
					E-mail: <input type="text" name="email"> <br/>
					Senha: <input type="password" name="senha"> <br/>
							<input type="submit" value="Acessar">
							<input type="hidden" name="acao" value="acesso"/>
				</form>
			</div>

			<div class="form-cadastro">
				<form name="cadastro" method="get">
					Nome: <input type="text" name="nome"> <br/>
					E-mail: <input type="text" name="email"> <br/>
					Senha: <input type="password" name="senha"> <br/>
							<input type="submit" value="Cadastrar-se">
							<input type="hidden" name="acao" value="cadastro"/>
				</form>		
			</div> </br></br>';
		}
	 ?>