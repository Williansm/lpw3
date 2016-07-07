<?php 
	
	include_once 'conexao_bd.class.php';

	class usuario{
		
		private $id, $nome, $email, $senha;
	
		public function getId(){
			return $this->id;
		}
		
		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getSenha(){
			return $this->nome;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}

		public function __construct($email = '', $senha = ''){
			if (!empty($email) && !empty($senha)) {
				$bd = new bd();
				$bd->conectar();
				$query = "SELECT * FROM Usuarios 
							WHERE Email = '".$email."' 
							AND Senha = '".$senha."'; ";
				$resultado = $bd->query($query);
				$linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
				$this->id = $linha['Codigo'];
				$this->nome = $linha['Nome'];
				$this->email = $linha['Email'];
				$this->senha = $linha['Senha'];
				$bd->desconectar();
			}
		}

		public function cadastrar(){
			$bd = new bd();
			$bd->conectar();
			$query = "INSERT INTO Usuarios
							(Nome, Email, Senha)
							VALUES
							('".addslashes($this->nome)."', '".addslashes($this->email)."', '".addslashes($this->senha)."') ";
			$bd->query($query);
			$bd->desconectar();
		}
	}

 ?>