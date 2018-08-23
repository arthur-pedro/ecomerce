<?php

		
	$server = "127.0.0.1";
	$usuario = "root";
	$senha = "root";
	$database = "ecomerce";

	$conn = mysqli_connect($server, $usuario, $senha, $database);

	if (!$conn->set_charset("utf8")) {
	    printf("Error loading character set utf8: %s\n", $conn->error);
	    exit();
	}



?>