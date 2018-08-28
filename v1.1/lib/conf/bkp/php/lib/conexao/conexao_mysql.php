<?php


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

	
	/*	
	$server = "sql154.main-hosting.eu";
	$server = "mysql.hostinger.com.br";
	$usuario = "u816138972_pedro";
	$senha = "1772004516Ap.";
	$database = "u816138972_ecom";
	$conn = mysqli_connect($server, $usuario, $senha, $database);
	if (!$conn->set_charset("utf8")) {
	    printf("Error loading character set utf8: %s\n", $conn->error);
	    exit();
	}
*/

?>