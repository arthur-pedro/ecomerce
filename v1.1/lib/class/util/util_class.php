<?php

	/*require("../conexao/conexao_mysql.php");*/

	class MyDatabase{

		/*public $server = "sql154.main-hosting.eu";
		public $usuario = "u816138972_pedro";
		public $senha = "1772004516Ap.";
		public $database = "u816138972_ecom";
		public $link = "";*/

		public $server = "127.0.0.1";
		public $usuario = "root";
		public $senha = "root";
		public $database = "ecomerce";
		public $link = "";
		
		public $query = "SELECT * FROM servicos";

		public function myConnection(){
			
			$this->connect();
		}
 
		public function connect(){

			if(isset($this->server)){
				$conn = mysqli_connect($this->server, $this->usuario, $this->senha);
				$conn->set_charset("utf8");
			}else{

				echo "Erro";
			}
			
			if (!$conn){

	  			die("Problema na Conexão com o Banco de Dados");

	  		}elseif (!mysqli_select_db($conn,$this->database)){

	  			die("Problema na Conexão com o Banco de Dados");
			}else{
				return $conn;
			}
		}

		public function connectPDO(){
			try {
				$conn = new PDO('mysql:host=localhost;dbname=ecomerce','root', 'root');
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
				
			  } catch(PDOException $e) {
				  echo 'ERROR: ' . $e->getMessage();
			  }
		}

		public function disconnect($conn){
			$this->conn = $conn;
			return mysqli_close($this->conn);
		}

		public function exec_sql($query,$conn){
			

			$this->query = $query;
			$this->conn = $conn;

			if($result = mysqli_query($this->conn,$this->query)){
				return $result;
			}else{
				return 0;
			}
			
		}
	}

	class Util{

		/*retorna true se o usuario esta logadoUsiario*/
		public function isLogged($usuario){
			return true;
		}

		public function authenticationUser($email, $senha){

			$this->email = $email;
			$this->senha = $senha;

			if(!isset($email) || !isset($senha) || $this->email == '' || $this->senha == ''){
				echo "nullField";
			}
			else if($this->emailExist($email)){
				echo "logged";
			}else{
				echo "nullRegister";
			}

		}

		/*retorna true se o email é válido*/
		public function emailExist($email){
			
			if(isset($email))
				
				$query_emailExist = "SELECT email_usuario FROM usuarios WHERE email_usuario = '$email'";

				$conexao = new MyDatabase();
				$conn = $conexao->connectPDO();
				
				if($conn->query($query_emailExist)){
					$result = $conn->query($query_emailExist);
					if($result->rowCount() == 1){
						return true;
					}else{
						return false;
					}
				}
		}

		/*retorna true se o usuario for admin*/
		public function isAdm($email){
			return true;
		}
		/*cria usuario na base*/
		public function createUser($nome_usuario, $email_usuario, $senha_usuario){
			
			if(isset($email_usuario) && isset($email_usuario) && isset($senha_usuario))
				if($this->emailExist($email_usuario) == false){

					$query_insertUser = "INSERT INTO usuarios (`nome_usuario`, `email_usuario`, `senha_usuario`) VALUES ('$nome_usuario','$email_usuario', '$senha_usuario')";


					$conexao = new MyDatabase();
					$conn = $conexao->connectPDO();

					
					$result = $conn->query($query_insertUser);
					echo "userCreated";
					
				}
		}

		// deleta usuariod a base
		public function deleteUser($usurio){

		}
		/*adiciona item no carrinho*/
		public function addItem(){

		}
		/*remove item do carrinho*/
		public function removeItem(){
			
		}



	}

	/*$utilClass = new Util();
	$utilClass->authenticationUser('teste@gmail.com', '123');*/
	/*$usuario = new Usuario();
	$usuario->setNome("Arthur");

	echo $usuario->getNome();*/
?>