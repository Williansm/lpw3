<?php 

	class bd{		
	   private $host = "localhost" ;
	   private $usuario = "root" ;
	   private $senha = "thai" ;
	   private $bd = "lpw3" ;
	   public  $conexao;

	   // metodos
	 
	   public function conectar(){

	       $this->conexao = mysqli_connect($this->host, $this->usuario, $this->senha);
	       if ($this->conexao) {
	       	$banco = mysqli_select_db($this->conexao, $this->bd);
		       	if (!$banco) {
		       		die("Erro ao selecionar o banco!");
		       	}
	       }
	       else{
	       		die("Erro ao conectar com o banco!");
	       		// echo $this->host;
	       		// echo $this->usuario;
	       		// echo $this->senha;
	       }
	   }

	   public function query($query){
	   		return mysqli_query($this->conexao, $query);
	   }

	   public function desconectar(){
	   		mysqli_close($this->conexao);
	   }
	}


 ?>