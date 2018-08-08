<?php
// session_start();


	
	// echo $_SESSION["teste"];

	/**
	 * 
	 */
	
	/**
	 * 
	 */
	// class db{

	// 	private $server = "127.0.0.1";
	// 	private $usuario = "root";
	// 	private $senha = "";
	// 	private $database = "node";

	// 	public function myConect(){
			
	// 		// Create connection
	// 		$conn = mysqli_connect($this->$server, $this->$usuario, $this->$senha, $this->$database);

	// 		if(!$conn){
	// 			die("Erro: ".$conn->error());
	// 		}

	// 		return $conn;
	// 	}

	// }

	// $query = "SELECT * FROM teste";

	// $myDb = new db();

	// $conn_1 = $myDb->myConect();
	
	// $result = $conn_1->query($query);


	// $row = mysqli_fetch_assoc($result);

	// print_r($row['nome']);

		

	$server = "127.0.0.1";
	$usuario = "root";
	$senha = "root";
	$database = "ecomerce";

	$conn = mysqli_connect($server, $usuario, $senha, $database);

	if (!$conn->set_charset("utf8")) {
	    printf("Error loading character set utf8: %s\n", $conn->error);
	    exit();
	}


	// $result = $conn->query("SELECT * FROM servicos");

	// $row = mysqli_fetch_assoc($result);
	
	// print_r($row['nome']);




	
	




	// EXIBI TABELA PRA DEBUG

	// echo "<table style = 'border: 1px solid black;'>

	// <th>id</th>
	// <th>nome</th>
	// <th>fone</th>

	// ";

	// foreach ($result as $var_1) {
	// 	echo "<tr style = 'border: 1px solid black;'>";
	// 	foreach ($var_1 as $var_2) {
			
		
	// 		echo "<td style = 'border: 1px solid black;'> ". $var_2 ."</td>";

	// 	}
		
	// }
	// echo "</table>";


?>