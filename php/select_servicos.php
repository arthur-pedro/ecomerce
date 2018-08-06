<?php

	require("conexao_mysql.php");


	$query = "SELECT * FROM servicos";

	$result = $conn->query($query);

	
?>