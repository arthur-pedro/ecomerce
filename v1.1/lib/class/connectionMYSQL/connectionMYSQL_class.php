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
			  } catch(PDOException $e) {
				  echo 'ERROR: ' . $e->getMessage();
			  }
			  return $conn;
		}

		public function disconnect($conn){
			$this->conn = $conn;
			return mysqli_close($this->conn);
		}
	}

?>